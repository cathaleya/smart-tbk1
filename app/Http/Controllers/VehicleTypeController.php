<?php

namespace App\Http\Controllers;

use App\Models\VehicleType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{
  public function index(Request $request)
  {
    $query = VehicleType::query();

    if ($request->keyword) {
      $query->where('name', $request->keyword);
    }

    $vehicletypes = $query->get();
    return view('admin.lainnya.vehicle-type.all-vehicle-type', [
      'title' => 'Seluruh Tipe Kendaraan',
      'vehicletypes' => $vehicletypes
    ]);
  }

  public function viewTambahvt()
  {
    return view('admin.lainnya.vehicle-type.add-vehicle-type', [
      'title' => 'Tambah tipe kendaraan',
    ]);
  }

  public function tambahvt(Request $request)
  {
    $validated = $request->validate([
      'name' => 'required',
      'desc' => 'required'
    ]);

    $validatedData = [
      'name' => Str::upper($validated['name']),
      'desc' => $validated['desc']
    ];

    VehicleType::create($validatedData);

    return redirect('/lainnya/vehicle-type')->with('notification', 'Berhasil menambah data');
  }
  public function viewEditvt(int $id)
  {
    $vehicletype = VehicleType::where('id', $id)->first();
    if ($vehicletype == null) {
      return redirect()->back()->with('notification', 'Data tidak ditemukan');
    }

    return view('admin.lainnya.vehicle-type.edit-vehicle-type', [
      'title' => 'Seluruh Satuan Unit',
      'vehicletype' => $vehicletype
    ]);
  }

  public function editvt(Request $request)
  {
    $validated = $request->validate([
      'id' => 'required',
      'name' => 'required',
      'desc' => 'required'
    ]);

    $vehicletype = VehicleType::where('id', $request->id)->first();
    if ($vehicletype == null) {
      return redirect()->back()->with('notification', 'Data tidak ditemukan');
    }

    $validatedData = [
      'name' => Str::upper($validated['name']),
      'desc' => $validated['desc']
    ];

    $vehicletype->update($validatedData);
    return redirect('/lainnya/vehicle-type')->with('notification', 'Data Berhasil diubah');
  }

  public function hapusvt(int $id) {
        $itemunit = VehicleType::where('id', $id)->first();
        if ($itemunit == null) {
            return redirect('/lainnya/vehicle-type')->with('notification', 'Data tidak ditemukan');
        }

        $itemunit->delete();
        return redirect('/lainnya/vehicle-type')->with('notification', 'Data berhasil dihapus');
  }
}
