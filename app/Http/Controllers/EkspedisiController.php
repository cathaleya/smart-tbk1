<?php

namespace App\Http\Controllers;

use App\Models\Ekspedisi;
use App\Models\EkspedisiLogs;
use App\Models\EkspedisiStatus;
use App\Models\Transport;
use Illuminate\Http\Request;

class EkspedisiController extends Controller
{
    //

    public function index(Request $request)
    {
        $query = Ekspedisi::with(['status', 'transport', 'transport.transaction', 'transport.tipekendaraan', 'transport.transporter']);
        if ($request->keyword) {
            $keyword = $request->keyword;
            $query->whereHas('transport.transaction', function ($query) use ($keyword) {
                $query->where('no_do', 'LIKE', '%' . $keyword . '%');
            });
        }

        $ekspedisis = $query->paginate(20);
        return view('ekspedisi.all-eksepedisi', [
            'title' => 'Seluruh Ekspedisi',
            'ekspedisis' => $ekspedisis
        ]);
    }

    public function updateEkspedisi(string $string)
    {
        $id = (int) base64_decode($string);
        $transport = Transport::with(['ekspedisi', 'transaction'])->find($id);
        if (!$transport) {
            return redirect('/')->with('notification', 'data tidak ditemukan');
        }

        $tujuanSelanjutnya = 'Pengiriman selesai';
        if ($transport->ekspedisi->ekspedisi_status_id !== 6) {
            $ekspedisiStatus = EkspedisiStatus::where('id', $transport->ekspedisi->ekspedisi_status_id + 1)->first();
            $tujuanSelanjutnya  = $ekspedisiStatus->desc;
        }



        return view('ekspedisi.update-ekspedisi', [
            'title' => 'Update Ekspedisi',
            'transport' => $transport,
            'tujuanselanjutnya' => $tujuanSelanjutnya
        ]);
    }

    public function updateStatusEksepedisi(int $id)
    {
        $transport = Transport::with(['ekspedisi', 'transaction'])->find($id);
        if (!$transport) {
            return redirect('/')->with('notification', 'data tidak ditemukan');
        }

        $ekspedisi = Ekspedisi::find($transport->ekspedisi->id);
        if (!$ekspedisi) {
            return redirect('/')->with('notification', 'data tidak ditemukan');
        }

        if ($ekspedisi->ekspedisi_status_id == 6) {


            return redirect('/')->with('notification', 'Pengiriman telah selesai');
        }


        $status = $ekspedisi->ekspedisi_status_id + 1;

        $ekspedisi->update([
            'ekspedisi_status_id' => $status
        ]);

        $statusekspedisi = EkspedisiStatus::find($status);

        EkspedisiLogs::create([
            'ekspedisi_id' => $ekspedisi->id,
            'status' => $statusekspedisi->desc,
            'tanggal' => now()->timezone('Asia/Jakarta')
        ]);

        return redirect()->back()->with('notification', 'Berhasil mengupdate status menjadi ' . $ekspedisi->status->desc);
    }

    public function viewEditEkspedisi(int $id)
    {
        $ekspedisi = Ekspedisi::find($id);
        if (!$ekspedisi) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }
        $ekspedisiStatus = EkspedisiStatus::all();
        return view('ekspedisi.edit-ekspedisi', [
            'title' => 'Edit Ekspedisi',
            'ekspedisi' => $ekspedisi,
            'ekspedisistatus' => $ekspedisiStatus
        ]);
    }
    public function hapusEkspedisi(int $id)
    {
        $ekspedisi = Ekspedisi::find($id);
        if (!$ekspedisi) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        $ekspedisilog = EkspedisiLogs::where('id', $ekspedisi->id)->get();
        if (count($ekspedisilog) > 0) {

            foreach ($ekspedisilog as $log) {
                $log->delete();
            }
        }

        $ekspedisi->delete();
        return redirect()->back()->with('notification', 'Data berhasil dihapus');
    }

    public function editEkspedisi(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'ekspedisi_status_id' => 'required'
        ]);


        $ekspedisi = Ekspedisi::find($request->id);
        if (!$ekspedisi) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }

        $status = EkspedisiStatus::find($request->ekspedisi_status_id);

        EkspedisiLogs::create([
            'ekspedisi_id' => $ekspedisi->id,
            'status' => $status->desc,
            'tanggal' => now()->timezone('Asia/Jakarta')
        ]);

        $ekspedisi->update([
            'ekspedisi_status_id' => $status->id
        ]);

        return redirect()->back()->with('notification', 'Berhasil mengubah data');
    }
}
