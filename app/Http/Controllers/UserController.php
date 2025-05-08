<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    //

    public function index(Request $request)
    {
        $query = User::query();
        if ($request->has('keyword')) {
            $keyword = $request->input('keyword');
            $query->where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%");
        }

        return view('admin.all-users', [
            'title' => 'Seluruh Pengguna',
            'users' => $query->latest()->paginate(10)->withQueryString(),
        ]);
    }

    public function login(Request $request)
    {
        // Validate the request data
        $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);




        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Redirect to the intended page or dashboard
            return redirect()->intended('/dashboard');
        }


        return redirect()->back()->with(['notification' => 'Email atau password salah'])->withInput();
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function create()
    {
        return view('admin.add-user', [
            'title' => 'Tambah Pengguna',
            'roles' => Role::all(),
        ]);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'gender' => 'required',
            'password1' => 'required|string',
            'password2' => 'required|string|same:password1',
            'role_id' => 'required|exists:roles,id',
        ]);


        $validatedData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'gender' => $validated['gender'],
            'password' => bcrypt($validated['password1']),
            'role_id' => $validated['role_id'],
            'created_at' => Carbon::parse(now()->setTimezone('Asia/Jakarta'))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::parse(now()->setTimezone('Asia/Jakarta'))->format('Y-m-d H:i:s'),
        ];

        if ($request->hasFile('picture')) {
            $path = 'img/profile/';
            $filename = $validated['user'] . '-' . time() . '.' . $request->file('picture')->getClientOriginalExtension();
            $request->file('picture')->move(public_path($path), $filename);
            $validatedData['picture'] = $path . $filename;
        }

        User::create($validatedData);

        return redirect()->route('user.index')->with('notification', 'Pengguna berhasil ditambahkan');
    }

    public function edit(User $user)
    {

        return view('admin.update-user', [
            'user' => $user,
            'title' => 'Profile ' . $user->name,
            'roles' => Role::all(),
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'gender' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'role_id' => 'required|exists:roles,id',
        ]);

        $validatedData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'gender' => $validated['gender'],
            'role_id' => $validated['role_id'],
        ];
 

        if ($request->hasFile('picture')) {
            $filePath = public_path($user->picture);

            if ($user->picture != 'img/profile/default.jpeg' && file_exists($filePath)) {
                unlink($filePath);
            }
            $path = 'img/profile/';
            $filename = $user->name . '-' . time() . '.' . $request->file('picture')->getClientOriginalExtension();
            $request->file('picture')->move(public_path($path), $filename);
            $validatedData['picture'] = $path . $filename;
        }


        $user->update($validatedData);
        return redirect()->route('user.index')->with('notification', 'Pengguna berhasil diperbarui');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('notification', 'Pengguna berhasil dihapus');
    }
}
