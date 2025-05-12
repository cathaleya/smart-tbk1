<?php

namespace App\Http\Controllers;

use App\Models\Ekspedisi;
use App\Models\User;
use App\Models\Transport;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //

    public function index()
    {
        $totalUser = User::all()->count();
        $totalTransaksi = Transaction::all()->count();
        $totalTransport = Transport::whereHas('ekspedisi', function ($query) {
            $query->where('ekspedisi_status_id', 6);
        })->count();
        $totalEkspedisi = Ekspedisi::where('ekspedisi_status_id', 6)->count();

        $startdate = Carbon::now()->subYear();

        $period = new \DatePeriod($startdate, new \DateInterval('P1M'), now()->timezone('Asia/Jakarta')->addDay());


        $diagramData = [
            'labels' => [],
            'data' => []
        ];
        foreach ($period as $pd) {

            $transaksiSelesaiPerbulan = Transaction::whereMonth('tanggal_transaksi_dibuat', $pd)->whereYear('tanggal_transaksi_dibuat', $pd)->whereHas('transport.ekspedisi', function ($query) use ($pd) {
                $query->where('ekspedisi_status_id', 6);
            })->count();

            array_push($diagramData['data'], $transaksiSelesaiPerbulan);
            array_push($diagramData['labels'], Carbon::parse($pd)->locale('id')->isoFormat('MMMM YYYY'));
        }

        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'totaluser' => $totalUser,
            'totaltransaksi' => $totalTransaksi,
            'totaltransport' => $totalTransport,
            'totalekspedisi' => $totalEkspedisi,
            'diagramdata' => $diagramData
        ]);
    }
}
