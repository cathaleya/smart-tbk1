<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\JenisSuratJalan;

class JenisSuratJalanController extends Controller
{
    public function index(Request $request)
    {
        $query = JenisSuratJalan::query();
        if ($request->keyword) {
            $query->where('name', 'LIKE', '%' . $request->keyword . '%');
        }

        $jenissuratjalans =  $query->paginate(20);
        return view('admin.lainnya.jenis-surat-jalan.all-jenis-surat-jalan', [
            'title' => 'Seluruh satuan unit',
            'jenissuratjalans' => $jenissuratjalans
        ]);
    }

    public function viewTambahsj()
    {
        return view('admin.lainnya.jenis-surat-jalan.add-jenis-surat-jalan', [
            'title' => 'Seluruh surat jalan',
        ]);
    }

    public function tambahsj(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'desc' => 'required'
        ]);

        $validatedData = [
            'name' => Str::upper($validated['name']),
            'desc' => $validated['desc']
        ];

        JenisSuratJalan::create($validatedData);

        return redirect('/lainnya/jenis-surat-jalan')->with('notification', 'Berhasil menambah data');
    }

    public function viewEditsj(int $id)
    {
        $sj = JenisSuratJalan::where('id', $id)->first();
        if ($sj == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        return view('admin.lainnya.jenis-surat-jalan.edit-jenis-surat-jalan', [
            'title' => 'Edit SJ',
            'jenissuratjalan' => $sj
        ]);
    }

    public function editsj(Request $request)
    {
 
        $validated = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'desc' => 'required'
        ]);

        $jenissuratjalan = JenisSuratJalan::where('id', $request->id)->first();
        if ($jenissuratjalan == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        $validatedData = [
            'name' => Str::upper($validated['name']),
            'desc' => $validated['desc']
        ];

        $jenissuratjalan->update($validatedData);
        return redirect('/lainnya/jenis-surat-jalan')->with('notification', 'Data Berhasil diubah');
    }

    public function hapussj(int $id)
    {
        $sj = JenisSuratJalan::where('id', $id)->first();
        if ($sj == null) {
            return redirect('/lainnya/jenis-surat-jalan')->with('notification', 'Data tidak ditemukan');
        }

        $sj->delete();
        return redirect('/lainnya/jenis-surat-jalan')->with('notification', 'Data berhasil dihapus');
    }
}
