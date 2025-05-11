<?php

namespace App\Http\Controllers;

use App\Models\Ekspedisi;
use App\Models\Transport;
use App\Models\Warehouse;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\EkspedisiLogs;
use App\Models\EkspedisiStatus;

class WarehouseController extends Controller
{
    //

    public function index(Request $request)
    {
        $query = Transport::where('izin', true);
        if ($request->keyword) {
            $keyword = $request->keyword;
            $query->whereHas('transaction', function ($query) use ($keyword) {
                $query->where('no_do', 'LIKE', '%' . $keyword . '%');
            });
        }
        $transports = $query->paginate(10);
        return view('warehouse.warehouse-pending-data', [
            'title' => 'Seluruh data transport pending',
            'transports' => $transports
        ]);
    }



    public function viewTambahDataWarhouse(int $id)
    {

        $transport = Transport::with(['transaction.material', 'transaction.su', 'transaction.slocrelation', 'transaction.tipecustomer', 'transaction.itemunit', 'tipekendaraan', 'jenissuratjalan', 'incotrelation', 'transporter'])->where('id', $id)->first();
        if (!$transport) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }
        return view('warehouse.add-warehouse-data', [
            'title' => 'Tambah data warehouse',
            'transport' => $transport
        ]);
    }

    public function updateTruckIn(int $id)
    {
        $transport = Transport::find($id);
        if (!$transport) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        if ($transport->truck_in) {
            return redirect()->back()->with('notification', 'Data sudah tersedia');
        }

        $transport->update([
            'truck_in' => now()->timezone('Asia/Jakarta')
        ]);

        return redirect()->back()->with('notification', 'Berhasil update data truck in');
    }
    public function updateStartLoading(int $id)
    {
        $transport = Transport::find($id);
        if (!$transport) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        if ($transport->start_loading) {
            return redirect()->back()->with('notification', 'Data sudah tersedia');
        }

        $transport->update([
            'start_loading' => now()->timezone('Asia/Jakarta')
        ]);

        return redirect()->back()->with('notification', 'Berhasil update data start loading');
    }
    public function updateFinishLoading(int $id)
    {
        $transport = Transport::find($id);
        if (!$transport) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        if ($transport->finish_loading) {
            return redirect()->back()->with('notification', 'Data sudah tersedia');
        }

        $transport->update([
            'finish_loading' => now()->timezone('Asia/Jakarta')
        ]);

        return redirect()->back()->with('notification', 'Berhasil update data finish loading ');
    }
    public function updateTruckOut(int $id)
    {
        $transport = Transport::find($id);
        if (!$transport) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        if ($transport->truck_out) {
            return redirect()->back()->with('notification', 'Data sudah tersedia');
        }

        $transport->update([
            'truck_out' => now()->timezone('Asia/Jakarta')
        ]);

        return redirect()->back()->with('notification', 'Berhasil update data truck out ');
    }
    public function updateETA(int $id)
    {
        $transport = Transport::find($id);
        if (!$transport) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }


        if ($transport->eta) {
            return redirect()->back()->with('notification', 'Data sudah tersedia');
        }


        $transport->update([
            'eta' => now()->timezone('Asia/Jakarta')
        ]);


        $ekspedisi = Ekspedisi::create([
            'transport_id' => $transport->id,
            'ekspedisi_status_id' => 1
        ]);

        $statusekspedisi = EkspedisiStatus::find($ekspedisi->ekspedisi_status_id);

        EkspedisiLogs::create([
            'ekspedisi_id' => $ekspedisi->id,
            'status' => $statusekspedisi->desc,
            'tanggal' => now()->timezone('Asia/Jakarta')
        ]);

        return redirect()->back()->with('notification', 'Berhasil update data  ETA ');
    }

    public function cetakSuratJalan(int $id)
    {

        $transaction = Transaction::with(['material', 'su', 'slocrelation', 'tipecustomer', 'itemunit', 'transport.tipekendaraan', 'transport.jenissuratjalan', 'transport.incotrelation'])->find($id);
        if (!$transaction) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }
        return view('warehouse.cetak-surat-jalan', [
            'title' => 'Cetak surat jalan',
            'transaction' => $transaction
        ]);
    }
}
