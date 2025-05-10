<?php

namespace App\Http\Controllers;

use App\Models\Sloc;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SlocController extends Controller
{
    public function sloc(Request $request)
    {

        $query = Sloc::query();
        if ($request->keyword) {
            $query->where('name', 'LIKE', '%' . $request->keyword . '%');
        }

        $slocs = $query->get();
        return view('admin.lainnya.sloc.all-sloc', [
            'title' => 'Seluruh Sloc',
            'slocs' => $slocs
        ]);
    }

    public function viewTambahSloc()
    {
        return view('admin.lainnya.sloc.add-sloc', [
            'title' => 'Tambah Sloc',
        ]);
    }

    public function tambahSloc(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'desc' => 'required'
        ]);

        $validatedData = [
            'name' => Str::upper($validated['name']),
            'desc' => $validated['desc']
        ];

        Sloc::create($validatedData);

        return redirect('/lainnya/sloc')->with('notification', 'Berhasil menambah data');
    }

    public function viewEditSloc(int $id)
    {
        $sloc = Sloc::where('id', $id)->first();
        if ($sloc == null) {
            return redirect('/lainnya/sloc')->with('notification', 'Data tidak ditemukan');
        }

        return view('admin.lainnya.sloc.edit-sloc', [
            'title' => 'Edit Sloc',
            'sloc' => $sloc
        ]);
    }

    public function editSloc(Request $request)
    {

        $validated = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'desc' => 'required'
        ]);

        $sloc = Sloc::where('id', $request->id)->first();
        if ($sloc == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        $validatedData = [
            'name' => Str::upper($validated['name']),
            'desc' => $validated['desc']
        ];

        $sloc->update($validatedData);
        return redirect('/lainnya/sloc')->with('notification', 'Data Berhasil diubah');
    }

    public function hapusSloc(int $id)
    {
        $sloc = Sloc::where('id', $id)->first();
        if ($sloc == null) {
            return redirect('/lainnya/sloc')->with('notification', 'Data tidak ditemukan');
        }

        $sloc->delete();
        return redirect('/lainnya/sloc')->with('notification', 'Data berhasil dihapus');
    }
}
