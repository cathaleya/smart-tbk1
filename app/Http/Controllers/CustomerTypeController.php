<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\CustomerType;
use Illuminate\Http\Request;

class CustomerTypeController extends Controller
{
    //

    public function index(Request $request)
    {
        $query = CustomerType::query();
        if ($request->keyword) {
            $query->where('name', 'LIKE', '%' . $request->keyword . '%');
        }

        $customertypes = $query->get();
        return view('admin.lainnya.customer-type.all-customer-type', [
            'title' => 'Seluruh Customer Type',
            'customertypes' => $customertypes
        ]);
    }
    public function viewTambahct()
    {
        return view('admin.lainnya.customer-type.add-customer-type', [
            'title' => 'Tambah Customer Type',
        ]);
    }
    public function tambahct(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'desc' => 'required'
        ]);

        $validatedData = [
            'name' => Str::title($validated['name']),
            'desc' => $validated['desc']
        ];

        CustomerType::create($validatedData);

        return redirect('/lainnya/customer-type')->with('notification', 'Berhasil menambah data');
    }
    public function viewEditct(int $id)
    {
        $customertype = CustomerType::where('id', $id)->first();
        if ($customertype == null) {
            return redirect('/lainnya/sloc')->with('notification', 'Data tidak ditemukan');
        }

        return view('admin.lainnya.customer-type.edit-customer-type', [
            'title' => 'Edit Tipe Pelanggan',
            'customertype' => $customertype
        ]);
    }
    public function editct(Request $request) {
          $validated = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'desc' => 'required'
        ]);

        $customertype = CustomerType::where('id', $request->id)->first();
        if ($customertype == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        $validatedData = [
            'name' => Str::title($validated['name']),
            'desc' => $validated['desc']
        ];

        $customertype->update($validatedData);
        return redirect('/lainnya/customer-type')->with('notification', 'Data Berhasil diubah');
    }
    public function hapusct(int $id) {
        $customertype = CustomerType::where('id', $id)->first();
        if ($customertype == null) {
            return redirect('/lainnya/customer-type')->with('notification', 'Data tidak ditemukan');
        }

        $customertype->delete();
        return redirect('/lainnya/customer-type')->with('notification', 'Data berhasil dihapus');
    }
}
