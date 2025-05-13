<?php

namespace App\Http\Controllers;

use App\Models\Ekspedisi;
use App\Models\EkspedisiLogs;
use Carbon\Carbon;
use App\Models\Incot;
use App\Models\Transport;
use App\Models\Transaction;
use App\Models\Transporter;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use App\Models\JenisSuratJalan;
use Exception;
use Illuminate\Support\Facades\Log;

class TransportController extends Controller
{
    //

    public function index(Request $request)
    {

        $query = Transaction::query();

        if ($request->keyword) {
            $query->where('no_do', 'LIKE', '%' . $request->keyword . '%');
        }

        $transactions =  $query->where('transport_id', null)->paginate(20);
        return view('transport.all-transaction-pending', [
            'title' => 'Seluruh Transport',
            'transactions' => $transactions
        ]);
    }
    public function addTransportView()
    {

        $do = Transaction::whereDoesntHave('transport')->get();
        $transporter = Transporter::all();
        $typesj = JenisSuratJalan::all();
        $typekend = VehicleType::all();
        $incot = Incot::all();
        return view('transport.add-transport', [
            'title' => 'Tambah Transport',
            'dooptions' => $do,
            'transporters' => $transporter,
            'typesjs' => $typesj,
            'typekends' => $typekend,
            'incots' => $incot
        ]);
    }

    public function addTransport(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'jam_kedatangan' => 'required',
            'vessel_name' => 'required',
            'do_id' => 'required|array',
            'do_id.*' => 'required|distinct|exists:transactions,id',
            'transporter_id' => "required",
            'type_sj' => "required",
            'reference_no' => "required",
            'reference_date' => "required",
            'plant' => "required",
            'shipment' => "required",
            'type_kend' => "required",
            'incot' => "required",
            'no_container' => "required",
            'no_sheal' => "required",
            'vehicle_no' => "required",
        ]);

        $transactions = $request->do_id;
        $validated = [
            'tanggal' => Carbon::parse($request->tanggal)->locale('id')->isoFormat('LL'),
            'jam_kedatangan' => $request->jam_kedatangan,
            'transporter_id' => $request->transporter_id,
            'vehicle_no' => $request->vehicle_no,
            'vessel_name' => $request->vessel_name,
            'type_sj' => $request->type_sj,
            'type_kend' => $request->type_kend,
            'incot' => $request->incot,
            'reference_no' => $request->reference_no,
            'reference_date' => $request->reference_date,
            'plant' => $request->plant,
            'shipment' => $request->shipment,
            'no_container' => $request->no_container,
            'sheal' => $request->no_sheal,
            'created_at' => $request->tanggal

        ];

        $transport = Transport::create($validated);

        try {
            foreach ($transactions as $tr) {
                $transaction = Transaction::findOrFail($tr);
                $transaction->update([
                    'transport_id' => $transport->id,
                ]);
            }
        } catch (\Exception $e) {
            // Tangani error, misal log atau kembalikan pesan error
            Log::error('Gagal mengupdate transaction: ' . $e->getMessage());
            return back()->with('error', 'Terjadi kesalahan saat menyimpan data transportasi.');
        }
        return redirect('/transport/data')->with('notification', 'Berhasil menambah data transport');
    }

    public function allTransport(Request $request)
    {

        $query = Transport::with('transaction');
        if ($request->keyword) {
            $keyword = $request->keyword;
            $query->whereHas('transaction', function ($query) use ($keyword) {
                $query->where('no_do', 'LIKE', '%' . $keyword . '%');
            });
        }
        $transports = $query->paginate(20);
        return view('transport.all-transports  ', [
            'title' => 'Seluruh Transport',
            'transports' => $transports
        ]);
    }

    public function viewEditTransport(int $id)
    {
        $transport = Transport::with(['transaction'])->where('id', $id)->first();
        if ($transport == null) {
            return redirect('/transport/data')->with('notification', 'Data tidak ditemukan');
        }

        $selectedId = $transport->transaction->pluck('id')->toArray();


        $do = Transaction::where(function ($query) use ($transport) {
            $query->whereNull('transport_id')
                ->orWhere('transport_id', $transport->id);
        })->get();
        $transporter = Transporter::all();
        $typesj = JenisSuratJalan::all();
        $typekend = VehicleType::all();
        $incot = Incot::all();
        return view('transport.edit-transport', [
            'title' => 'Tambah Transport',
            'dooptions' => $do,
            'transporters' => $transporter,
            'typesjs' => $typesj,
            'typekends' => $typekend,
            'incots' => $incot,
            'selectedId' => $selectedId,
            'transport' => $transport
        ]);
    }

    public function EditTransport(Request $request)
    {


        $request->validate([
            'id' => 'required',
            'tanggal' => 'required',
            'jam_kedatangan' => 'required',
            'vessel_name' => 'required',
            'do_id' => 'required|array',
            'do_id.*' => 'required|distinct|exists:transactions,id',
            'reference_no' => "required",
            'reference_date' => "required",
            'plant' => "required",
            'shipment' => "required",
            'transporter_id' => "required",
            'type_sj' => "required",
            'type_kend' => "required",
            'incot' => "required",
            'no_container' => "required",
            'no_sheal' => "required",
            'vehicle_no' => "required",
        ]);

        $transport = Transport::where('id', $request->id)->first();

        if ($transport == null) {
            return redirect('/transport/data')->with('data tidak ditemukan');
        }

        try {
            $transaksiSebelumnya = $transport->transaction->pluck('id');
            if ($transaksiSebelumnya !== null) {
                foreach ($transaksiSebelumnya as $id) {
                    $transaksilama = Transaction::where('id', $id)->first();
                    $transaksilama->update([
                        'transport_id' => null
                    ]);
                }
            }

            $doBaru = $request->do_id;

            foreach ($doBaru as $id) {
                $transaksibaru = Transaction::where('id', $id)->first();
                $transaksibaru->update([
                    'transport_id' => $transport->id
                ]);
            }
        } catch (Exception $e) {
            // Tangani error, misal log atau kembalikan pesan error
            Log::error('Gagal mengupdate transaction: ' . $e->getMessage());
            return back()->with('notification', 'Terjadi kesalahan saat mengupdate data transportasi.');
        }

        $validated = [
            'tanggal' => Carbon::parse($request->tanggal)->locale('id')->isoFormat('LL'),
            'jam_kedatangan' => $request->jam_kedatangan,
            'transporter_id' => $request->transporter_id,
            'vehicle_no' => $request->vehicle_no,
            'vessel_name' => $request->vessel_name,
            'type_sj' => $request->type_sj,
            'reference_no' => $request->reference_no,
            'reference_date' => $request->reference_date,
            'plant' => $request->plant,
            'shipment' => $request->shipment,
            'type_kend' => $request->type_kend,
            'incot' => $request->incot,
            'no_container' => $request->no_container,
            'sheal' => $request->no_sheal,
            'created_at' => $request->tanggal,
            'updated_at' => $request->tanggal
        ];

        $transport->update($validated);
        return redirect('/transport/data')->with('notification', 'berhasil mengupdate data transport.');
    }


    public function deleteTransport(int $id)
    {
        $transport = Transport::where('id', $id)->first();

        if ($transport == null) {
            return redirect('/transport/data')->with('notification', 'Data tidak ditemukan');
        }

        // melepaskan seluruh transaksi
        $alltransaction =  $transport->transaction->pluck('id')->toArray();

        if (count($alltransaction) > 0) {
            foreach ($alltransaction as $id) {
                $transaction = Transaction::where('id', $id)->first();
                if ($transaction != null) {
                    $transaction->update([
                        'transport_id' => null
                    ]);
                }
            }
        }

        $transport->delete();
        return redirect('/transport/data')->with('notification', 'Data berhasil dihapus,data transaksi terkait dilepaskan');
    }

    public function detailTransport(int $id)
    {
        $transport = Transport::with(['transaction.material', 'transaction.su', 'transaction.slocrelation', 'transaction.tipecustomer', 'transaction.itemunit', 'tipekendaraan', 'jenissuratjalan', 'incotrelation', 'transporter'])->where('id', $id)->first();
        if (!$transport) {
            return redirect()->back()->with('notification', 'Data tidak ditemukan');
        }
        return view('transport.detail-transport', [
            'title' => 'Transport Detail',
            'transport' => $transport
        ]);
    }

    public function updateIzin(Request $request)
    {
        $id = $request->input('id');
        $check = filter_var($request->input('check'), FILTER_VALIDATE_BOOLEAN);

        $transport = Transport::find($id);

        if (!$transport) {
            return response()->json(['status' => 'gagal'], 404);
        }

        $ekspedisi = Ekspedisi::where('transport_id', $transport->id)->first();
        if ($ekspedisi) {
            $ekspedisiLog = EkspedisiLogs::where('ekspedisi_id', $ekspedisi->id)->get();
            if ($ekspedisiLog) {
                foreach ($ekspedisiLog as $el) {
                    $el->delete();
                }
            }
            $ekspedisi->delete();
        }

        $transport->update([
            'izin' => $check,
            'truck_in' => null,
            'start_loading' =>  null,
            'finish_loading' =>  null,
            'truck_out' =>  null,
            'eta' =>  null,
        ]);

        $message = $check ? 'berhasil memberikan izin' : 'berhasil menghapus izin';

        return response()->json(['status' => $message], 200);
    }
}
