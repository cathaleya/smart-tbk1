<?php

namespace App\Http\Controllers;

use App\Models\User;
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


        return redirect()->back()->with(['notification' => 'Email atau password tidak di temukan'])->withInput();
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function edit(User $user)
    {
        return view('admin.update-user', [
            'user' => $user,
            'title' => 'Profile ' . $user->name,
        ]);
    }
}
