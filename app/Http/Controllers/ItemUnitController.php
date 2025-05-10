<?php

namespace App\Http\Controllers;

use App\Models\ItemUnit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ItemUnitController extends Controller
{
    //

    public function index(Request $request)
    {
        $query = ItemUnit::query();
        if ($request->keyword) {
            $query->where('name', 'LIKE', '%' . $request->keyword . '%');
        }

        $ItemUnits =  $query->get();
        return view('admin.lainnya.su.all-su', [
            'title' => 'Seluruh satuan unit',
            'itemunits' => $ItemUnits
        ]);
    }

    public function viewTambahsu()
    {
        return view('admin.lainnya.su.add-su', [
            'title' => 'Tambah satuan unit',
        ]);
    }

    public function tambahsu(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'desc' => 'required'
        ]);

        $validatedData = [
            'name' => Str::upper($validated['name']),
            'desc' => $validated['desc']
        ];

        itemunit::create($validatedData);

        return redirect('/lainnya/su')->with('notification', 'Berhasil menambah data');
    }

    public function viewEditsu(int $id)
    {
        $itemunit = ItemUnit::where('id', $id)->first();
        if ($itemunit == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        return view('admin.lainnya.su.edit-su', [
            'title' => 'Seluruh Satuan Unit',
            'su' => $itemunit
        ]);
    }

    public function editsu(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'desc' => 'required'
        ]);

        $itemunit = ItemUnit::where('id', $request->id)->first();
        if ($itemunit == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        $validatedData = [
            'name' => Str::upper($validated['name']),
            'desc' => $validated['desc']
        ];

        $itemunit->update($validatedData);
        return redirect('/lainnya/su')->with('notification', 'Data Berhasil diubah');
    }

    public function hapussu(int $id)
    {
        $itemunit = ItemUnit::where('id', $id)->first();
        if ($itemunit == null) {
            return redirect('/lainnya/su')->with('notification', 'Data tidak ditemukan');
        }

        $itemunit->delete();
        return redirect('/lainnya/su')->with('notification', 'Data berhasil dihapus');
    }
}
