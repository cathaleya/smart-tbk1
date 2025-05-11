<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="">
        <div class="w-full bg-white  rounded-lg shadow-md  border  p-5">
            <div class="w-full ">
                <div class="w-full flex justify-between">
                    <div class="w-full mb-5 border-b pb-5">
                        <h1 class="text-xl font-bold">Detail Transaksi {{ $transaction->no_do }} -
                            {{ \Carbon\Carbon::parse($transaction->tanggal_transaksi_dibuat)->locale('id')->isoFormat('LL') }}
                        </h1>
                        <h2 class=" text-gray-500 text-[12px]">Berikut adalah detail transaksi terbaru.</h2>
                    </div>

                </div>

                <div class="w-full flex flex-col lg:flex-row py-5 text-[12px] border-b">
                    <div class="w-full lg:w-[20%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        <h1 class="text-md font-bold">Data Transaksi</h1>
                        <h2 class="text-[10px] text-gray-500">Berikut adalah detail dari data do</h2>
                    </div>
                    <div class="w-full lg:w-[80%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        <table class="w-full border">
                            <tr class="border p-2">
                                <td class="border  p-2">Tanggal</td>
                                <td class="border  p-2">
                                    {{ \Carbon\Carbon::parse($transaction->tanggal_transaksi_dibuat)->locale('id')->isoFormat('LL') }}
                                </td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">RDD</td>
                                <td class="border  p-2">
                                    {{ \Carbon\Carbon::parse($transaction->tanggal_transaksi_dibuat)->locale('id')->isoFormat('LL HH:mm') }}
                                </td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Alamat (Address)</td>
                                <td class="border  p-2">
                                    {{ $transaction->address }}
                                </td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">NO DO</td>
                                <td class="border  p-2">{{ $transaction->no_do }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">REF DOC</td>
                                <td class="border  p-2">{{ $transaction->ref_doc }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Pelanggan</td>
                                <td class="border  p-2">{{ $transaction->pelanggan }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Vessel name</td>
                                <td class="border  p-2">{{ $transaction->vessel_name }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Kode Material</td>
                                <td class="border  p-2">{{ $transaction->material->material_number }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Material Description</td>
                                <td class="border  p-2">{{ $transaction->material->description }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Qty</td>
                                <td class="border  p-2">{{ number_format($transaction->qty, 0, '', '.') }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">SU</td>
                                <td class="border  p-2">{{ $transaction->itemunit->name }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">SLOC</td>
                                <td class="border  p-2">{{ $transaction->slocrelation->name }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Kode Negara</td>
                                <td class="border  p-2">{{ $transaction->kode_negara }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Kota</td>
                                <td class="border  p-2">{{ $transaction->kota }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">No Count</td>
                                <td class="border  p-2">{{ $transaction->no_count }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Type Customer</td>
                                <td class="border  p-2">{{ $transaction->tipecustomer->name }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Berat/Kg</td>
                                <td class="border  p-2">{{ number_format($transaction->berat_kg, 0, '', '.') }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">TT/Kg</td>
                                <td class="border  p-2">{{ number_format($transaction->tt_kg, 0, '', '.') }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Tonase</td>
                                <td class="border  p-2">{{ number_format($transaction->tonase, 0, '', '.') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="w-full flex flex-col lg:flex-row py-5 text-[12px] border-b">
                    <div class="w-full lg:w-[20%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        <h1 class="text-md font-bold">Data Transport</h1>
                        <h2 class="text-[10px] text-gray-500">Berikut adalah detail dari data transport</h2>
                    </div>
                    <div class="w-full lg:w-[80%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        @if ($transaction->transport !== null)
                            <table class="w-full border">
                                <tr class="border p-2">
                                    <td class="border  p-2">Tanggal</td>
                                    <td class="border  p-2">{{ $transaction->transport->tanggal }}</td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Jam Kedatangan</td>
                                    <td class="border  p-2">{{ $transaction->transport->jam_kedatangan }}</td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">NO Kendaraan (vehicle no)</td>
                                    <td class="border  p-2">{{ $transaction->transport->vehicle_no }}</td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Transporter</td>
                                    <td class="border  p-2">{{ $transaction->transport->transporter->name }}</td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Tipe kendaraan (Vehicle Type)</td>
                                    <td class="border  p-2">{{ $transaction->transport->tipekendaraan->name }}</td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Jenis surat jalan (SJ Type)</td>
                                    <td class="border  p-2">{{ $transaction->transport->jenissuratjalan->name }}</td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">IncoT</td>
                                    <td class="border  p-2">{{ $transaction->transport->incotrelation->name }}</td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Reference No</td>
                                    <td class="border  p-2">{{ $transaction->transport->reference_no }}</td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Reference Date</td>
                                    <td class="border  p-2">{{ $transaction->transport->reference_date }}</td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">No Container</td>
                                    <td class="border  p-2">{{ $transaction->transport->no_container }}</td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Sheal</td>
                                    <td class="border  p-2">{{ $transaction->transport->sheal }}</td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Plant</td>
                                    <td class="border  p-2">{{ $transaction->transport->plant }}</td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Plant</td>
                                    <td class="border  p-2">{{ $transaction->transport->shipment }}</td>
                                </tr>

                            </table>
                        @else
                            <div class="w-full flex justify-center items-center p-5 bg-gray-100 text-red-500">
                                <h1>Data belum tersedia</h1>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="w-full flex flex-col lg:flex-row py-5 text-[12px] border-b">
                    <div class="w-full lg:w-[20%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        <h1 class="text-md font-bold">Data Warehouse</h1>
                        <h2 class="text-[10px] text-gray-500">Berikut adalah detail dari data transport</h2>
                    </div>
                    <div class="w-full lg:w-[80%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        @if ($transaction->transport !== null)
                            <table class="w-full border">
                                <tr class="border p-2">
                                    <td class="border  p-2 uppercase font-bold">Truck IN</td>
                                    <td class="border  p-2 uppercase font-bold">
                                        @if ($transaction->transport->truck_in)
                                            {{ \Carbon\Carbon::parse($transaction->transport->truck_in)->locale('id')->translatedFormat('l, d/m/Y H:i') . ' WIB' }}
                                        @else
                                            -
                                        @endif
                                    </td>

                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2 uppercase font-bold">start loading</td>
                                    <td class="border  p-2 uppercase font-bold">
                                        @if ($transaction->transport->start_loading)
                                            {{ \Carbon\Carbon::parse($transaction->transport->start_loading)->locale('id')->translatedFormat('l, d/m/Y H:i') . ' WIB' }}
                                        @else
                                            -
                                        @endif
                                    </td>

                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2 uppercase font-bold">finish loading</td>
                                    <td class="border  p-2 uppercase font-bold">
                                        @if ($transaction->transport->finish_loading)
                                            {{ \Carbon\Carbon::parse($transaction->transport->finish_loading)->locale('id')->translatedFormat('l, d/m/Y H:i') . ' WIB' }}
                                        @else
                                            -
                                        @endif
                                    </td>

                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2 uppercase font-bold">truck out</td>
                                    <td class="border  p-2 uppercase font-bold">
                                        @if ($transaction->transport->truck_out)
                                            {{ \Carbon\Carbon::parse($transaction->transport->truck_out)->locale('id')->translatedFormat('l, d/m/Y H:i') . ' WIB' }}
                                        @else
                                            -
                                        @endif
                                    </td>

                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2 uppercase font-bold">ETA (Estimation To Arrival)</td>
                                    <td class="border  p-2 uppercase font-bold">
                                        @if ($transaction->transport->eta)
                                            {{ \Carbon\Carbon::parse($transaction->transport->eta)->locale('id')->translatedFormat('l, d/m/Y H:i') . ' WIB' }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        @else
                            <div class="w-full flex justify-center items-center p-5 bg-gray-100 text-red-500">
                                <h1>Data belum tersedia</h1>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="w-full flex flex-col lg:flex-row py-5 text-[12px] border-b">
                    <div class="w-full lg:w-[20%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        <h1 class="text-md font-bold">Data Ekspedisi</h1>
                        <h2 class="text-[10px] text-gray-500">Berikut adalah detail dari data transport</h2>
                    </div>
                    <div class="w-full lg:w-[80%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        @if ($transaction->transport->ekspedisi->logs !== null)
                            <div class="w-full flex justify-center items-center">
                                <div class="border-l-4 border-gray-300">
                                    @foreach ($transaction->transport->ekspedisi->logs as $log)
                                        @if ($log->status == 'Diterima oleh Penerima')
                                            <div class="flex items-center pl-2 gap-2 mb-10">
                                                <div class="">
                                                    <div class="w-3 h-3 rounded-full {{ $log->status == 'Gagal dikirim' ? 'bg-red-500' : 'bg-green-500' }}"></div>
                                                </div>
                                                <div class="">
                                                    <h3 class="text-gray-500 text-[12px]">
                                                        {{ \Carbon\Carbon::parse($log->tanggal) }} </h3>
                                                    <h1 class="font-bold ">{{ $log->status }} </h1>
                                                </div>
                                            </div>
                                            <div class="flex items-center pl-2 gap-2 mb-10">
                                                <div class="">
                                                    <div class="w-3 h-3 rounded-full {{ $log->status == 'Gagal dikirim' ? 'bg-red-500' : 'bg-green-500' }}"></div>
                                                </div>
                                                <div class="">
                                                    <h3 class="text-gray-500 text-[12px]">
                                                        {{ \Carbon\Carbon::parse($log->tanggal) }} </h3>
                                                    <h1 class="font-bold ">Selesai </h1>
                                                </div>
                                            </div>
                                        @else
                                            <div class="flex items-center pl-2 gap-2 mb-10">
                                                <div class="">
                                                    <div class="w-3 h-3 rounded-full {{ $log->status == 'Gagal dikirim' ? 'bg-red-500' : 'bg-green-500' }}"></div>
                                                </div>
                                                <div class="">
                                                    <h3 class="text-gray-500 text-[12px]">
                                                        {{ \Carbon\Carbon::parse($log->tanggal) }} </h3>
                                                    <h1 class="font-bold ">{{ $log->status }} </h1>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="w-full flex justify-center items-center p-5 bg-gray-100 text-red-500">
                                <h1>Data belum tersedia</h1>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
