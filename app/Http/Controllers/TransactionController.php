<?php

namespace App\Http\Controllers;

use App\Models\CustomerType;
use App\Models\Incot;
use App\Models\ItemUnit;
use App\Models\JenisSuratJalan;
use App\Models\Material;
use App\Models\Sloc;
use App\Models\Transaction;
use App\Models\VehicleType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $query = Transaction::query();
        if ($request->keyword)
        {   
            $query->where('no_do','LIKE','%'.$request->keyword.'%');
        }

        
        $transactionData = $query->paginate(10);
        return view('sales.transaction', [
            'title' => 'Transaction Data',
            'transactiondata' => $transactionData
        ]);
    }

    public function viewAddTransaction()
    {
        $url = "http://api.geonames.org/postalCodeCountryInfoJSON?username=humamafif";
        $response = file_get_contents($url);
        $datas = json_decode($response);

        $semuaNegara = [];
        foreach ($datas->geonames as $data) {
            $dataNegara = [
                'id' => $data->countryCode,
                'name' => $data->countryName
            ];

            array_push($semuaNegara, $dataNegara);
        }
        $kodematerial = Material::all();
        $su = ItemUnit::all();
        $sloc = Sloc::all();
        $customertype = CustomerType::all();
        $negara = $semuaNegara;

        return view('sales.add-transaction', [
            'title' => 'Tambah Transaksi',
            'kodematerial' => $kodematerial,
            'sus' => $su,
            'slocs' => $sloc,
            'customertypes' => $customertype,
            'negaras' => $negara,

        ]);
    }

    public function AddTransaction(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required',
            'rdd' => 'required',
            'no_do' => 'required',
            'no_so' => 'required',
            'no_po' => 'required',
            'ref_doc' => 'required',
            'pelanggan' => 'required',
            'vessel_name' => 'required',
            'kode_material' => 'required',
            'qty' => 'required',
            'su' => 'required',
            'sloc' => 'required',
            'kode_negara' => 'required',
            'kota' => 'required',
            'no_count' => 'required',
            'type_customer' => 'required',
            'berat_kg' => 'required',
            'tt_kg' => 'required',
            'tonase' => 'required'
        ]);


        $check1 = Transaction::where('no_do', $validated['no_do'])->exists();
        if ($check1) {
            return redirect()->back()->with('notification', 'Nomor DO sudah tersedia dilaporan lain');
        }

        $validatedData = [
            'tanggal' => Carbon::parse($validated['tanggal'])->locale('id')->isoFormat('LL HH:mm'),
            'rdd' => $validated['rdd'],
            'no_do' => $validated['no_do'],
            'no_so' => $validated['no_so'],
            'no_po' => $validated['no_po'],
            'ref_doc' => $validated['ref_doc'],
            'pelanggan' => $validated['pelanggan'],
            'vessel_name' => $validated['vessel_name'],
            'kode_material' => $validated['kode_material'],
            'qty' => $validated['qty'],
            'su' => $validated['su'],
            'sloc' => $validated['sloc'],

            'kode_negara' => $validated['kode_negara'],
            'kota' => $validated['kota'],
            'no_count' => $validated['no_count'],
            'type_customer' => $validated['type_customer'],
            'berat_kg' => $validated['berat_kg'],
            'tt_kg' => $validated['tt_kg'],
            'tonase' => $validated['tonase'],
            'tanggal_transaksi_dibuat' => $validated['tanggal'],
            'created_at' => now()->timezone('Asia/Jakarta'),
            'updated_at' => now()->timezone('Asia/Jakarta'),
        ];
        Transaction::create($validatedData);

        return redirect('/transaction')->with('notification', 'Berhasil membuat laporan transaksi');
    }

    public function viewEditTransaction(int $id)
    {
        $transaction = Transaction::where('id', $id)->first();
        if ($transaction == null) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        $url = "http://api.geonames.org/postalCodeCountryInfoJSON?username=humamafif";
        $response = file_get_contents($url);
        $datas = json_decode($response);

        $urlKota = "https://secure.geonames.org/searchJSON?country=$transaction->kode_negara&featureClass=P&maxRows=1000&username=humamafif";
        $response2 = file_get_contents($urlKota);
        $datas2 = json_decode($response2);

        $semuaNegara = [];
        foreach ($datas->geonames as $data) {
            $dataNegara = [
                'id' => $data->countryCode,
                'name' => $data->countryName
            ];

            array_push($semuaNegara, $dataNegara);
        }
        $semuaKota = [];
        foreach ($datas2->geonames as $data) {
            $dataKota = [
                'name' => $data->toponymName
            ];

            array_push($semuaKota, $dataKota);
        }

        $kodematerial = Material::all();
        $su = ItemUnit::all();
        $sloc = Sloc::all();

        $customertype = CustomerType::all();
        $negara = $semuaNegara;

        return view('sales.edit-transaction', [
            'title' => 'Edit Transaksi',
            'data' => $transaction,
            'kodematerial' => $kodematerial,
            'sus' => $su,
            'slocs' => $sloc,

            'customertypes' => $customertype,
            'negaras' => $negara,

            'kotas' => $semuaKota
        ]);
    }

    public function editTransaction(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'tanggal' => 'required',
            'rdd' => 'required',
            'no_do' => 'required',
            'no_so' => 'required',
            'no_po' => 'required',
            'ref_doc' => 'required',
            'pelanggan' => 'required',
            'vessel_name' => 'required',
            'kode_material' => 'required',
            'qty' => 'required',
            'su' => 'required',
            'sloc' => 'required',

            'kode_negara' => 'required',
            'kota' => 'required',
            'no_count' => 'required',
            'type_customer' => 'required',
            'berat_kg' => 'required',
            'tt_kg' => 'required',
            'tonase' => 'required'
        ]);
        $transaction = Transaction::where('id', $request->id)->first();
        if ($transaction == null) {
            return redirect('/transaction')->with('notification', 'Data tidak ditemukan');
        }
        $validatedData = [
            'tanggal' => Carbon::parse($validated['tanggal'])->locale('id')->isoFormat('LL HH:mm'),
            'rdd' => $validated['rdd'],
            'no_do' => $validated['no_do'],
            'no_so' => $validated['no_so'],
            'no_po' => $validated['no_po'],
            'ref_doc' => $validated['ref_doc'],
            'pelanggan' => $validated['pelanggan'],
            'vessel_name' => $validated['vessel_name'],
            'kode_material' => $validated['kode_material'],
            'qty' => $validated['qty'],
            'su' => $validated['su'],
            'sloc' => $validated['sloc'],


            'kode_negara' => $validated['kode_negara'],
            'kota' => $validated['kota'],
            'no_count' => $validated['no_count'],
            'type_customer' => $validated['type_customer'],
            'berat_kg' => $validated['berat_kg'],
            'tt_kg' => $validated['tt_kg'],
            'tonase' => $validated['tonase'],
            'tanggal_transaksi_dibuat' => $validated['tanggal'],
            'updated_at' => now()->timezone('Asia/Jakarta'),
        ];

        $transaction->update($validatedData);
        return redirect('/transaction')->with('notification', 'Data berhasil diupdate');
    }

    public function deleteTransaction(int $id)
    {
        $transaction = Transaction::where('id', $id)->first();
        if ($transaction == null) {
            return redirect('/transaction')->with('notification', 'Data tidak ditemukan');
        }

        $transaction->delete();
        return redirect('/transaction')->with('notification', 'Data berhasil dihapus');
    }

    public function detailTransaction()
    {
        return view('sales.detail-transaction', [
            'title' => 'Transaction Detail'
        ]);
    }
}
