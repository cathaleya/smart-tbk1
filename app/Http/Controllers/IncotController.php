<?php

namespace App\Http\Controllers;

use App\Models\Incot;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class IncotController extends Controller
{
    //

    public function incot(Request $request)
    {
        $query = Incot::query();

        if ($request->keyword) {
            $query->where('name', 'LIKE', '%' . $request->keyword . '%');
        }

        $incots = $query->get();
        return view('admin.lainnya.incot.all-incot', [
            'title' => 'Seluruh Incot',
            'incots' => $incots
        ]);
    }

    public function viewTambahincot()
    {
        return view('admin.lainnya.incot.add-incot', [
            'title' => 'Seluruh Incot',
        ]);
    }



    public function tambahincot(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'desc' => 'required'
        ]);

        $validatedData = [
            'name' => Str::upper($validated['name']),
            'desc' => $validated['desc']
        ];

        Incot::create($validatedData);

        return redirect('/lainnya/incot')->with('notification', 'Berhasil menambah data');
    }

    public function viewEditincot(int $id)
    {
        $incot = Incot::where('id', $id)->first();
        if ($incot == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        return view('admin.lainnya.incot.edit-incot', [
            'title' => 'Seluruh Incot',
            'incot' => $incot
        ]);
    }

    public function editincot(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'desc' => 'required'
        ]);

        $incot = Incot::where('id', $request->id)->first();
        if ($incot == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        $validatedData = [
            'name' => Str::upper($validated['name']),
            'desc' => $validated['desc']
        ];

        $incot->update($validatedData);
        return redirect('/lainnya/incot')->with('notification', 'Data Berhasil diubah');
    }

    public function hapusincot(int $id)
    {
        $incot = Incot::where('id', $id)->first();
        if ($incot == null) {
            return redirect('/lainnya/incot')->with('notification', 'Data tidak ditemukan');
        }

        $incot->delete();
        return redirect('/lainnya/incot')->with('notification', 'Data berhasil dihapus');
    }
}
