<?php

namespace App\Http\Controllers;

use App\Models\Transporter;
use Illuminate\Http\Request;

class TransporterController extends Controller
{
    //F

    public function transporter(Request $request)
    {
        $query =  Transporter::query();

        if ($request->keyword) {
            $query->where('name', 'LIKE', '%' . $request->keyword . '%');
        }

        $transporters = $query->get();

        return view('admin.lainnya.transporter.all-transporter', [
            'title' => 'Transporter',
            'transporters' => $transporters
        ]);
    }

    public function viewTambahTransporter()
    {
        return view('admin.lainnya.transporter.add-transporter', [
            'title' => 'Tambah Transporter',
        ]);
    }

    public function tambahTransporter(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'transporter_id' => 'required'
        ]);

        Transporter::create($validated);

        return redirect('/lainnya/transporter')->with('notification', 'Transporter berhasil ditambahkan.');
    }

    public function viewEditTransporter(int $id)
    {


        $transporter = Transporter::where('id', $id)->first();

        if ($transporter == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }
        return view('admin.lainnya.transporter.edit-transporter', [
            'title' => 'Edit Transporter',
            'transporter' => $transporter
        ]);
    }

    public function editTransporter(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'transporter_id' => 'required',
            'id' => 'required'
        ]);
        $transporter = Transporter::where('id', $request->id)->first();
        if ($transporter == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }
        $transporter->update([
            'name' => $request->name,
            'transporter_id' => $request->transporter_id,
        ]);
        return redirect('/lainnya/transporter')->with('notification', 'Data berhasil diubah');
    }

    public function hapusTransporter(int $id)
    {
        $transporter = Transporter::where('id', $id)->first();
        if ($transporter == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        $transporter->delete();

        return redirect()->back()->with('notification', 'Data Berhasil dihapus');
    }
}
