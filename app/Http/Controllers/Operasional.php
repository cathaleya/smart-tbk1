<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class Operasional extends Controller
{
    //


    public function index()
    {
        return view('admin.lainnya', [
            'title' => 'Data Lainnya',
        ]);
    }

    public function allMaterialView(Request $request)
    {
        $query = Material::query();

        if ($request->keyword) {
            $query->where('material_number', 'LIKE', '%' . $request->keyword . '%');
        }
        $materials = $query->paginate(20);

        return view('admin.lainnya.material.all-material', [
            'title' => 'Data Material',
            'materials' => $materials,
        ]);
    }
    public function viewTambahMaterial()
    {
        return view('admin.lainnya.material.add-material', [
            'title' => 'Data Material',
        ]);
    }
    public function viewEditMaterial(int $id)
    {
        $material = Material::where('id', $id)->first();

        if ($material == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        return view('admin.lainnya.material.edit-material', [
            'title' => 'Data Material',
            'material' => $material
        ]);
    }

    public function tambahMaterial(Request $request)
    {

        $validatedData = $request->validate([
            'material_number' => 'required|numeric',
            'description' => 'required',
        ]);

        Material::create($validatedData);

        return redirect()->route('all-material')->with('notification', 'Material berhasil ditambahkan.');
    }

    public function editMaterial(Request $request)
    {

       $request->validate([
            'id' => 'required',
            'material_number' => 'required|numeric',
            'description' => 'required',
        ]);

        $validatedData = [
            'material_number' => $request->material_number,
            'description' => $request->description
        ];

        $material = Material::where('id', $request->id)->first();

        if ($material == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }
        $material->update($validatedData);

        return redirect()->route('all-material')->with('notification', 'Material berhasil diubah.');
    }

    public function hapusMaterial(int $id)
    {
        $material = Material::where('id', $id)->first();

        if ($material == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        $material->delete();
        return redirect()->back()->with('notification', 'Data berhasil dihapus');
    }
}
