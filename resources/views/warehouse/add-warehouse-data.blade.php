<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="">
        <div class="w-full bg-white  rounded-lg shadow-md  border  p-5">
            <div class="w-full ">
                <div class="w-full flex justify-between">
                    <div class="w-full mb-5 border-b pb-5">
                        <h1 class="text-xl font-bold">Detail Transport - {{ $transport->tanggal }} -
                            {{ $transport->vehicle_no }} - {{ $transport->transporter->name }}
                        </h1>
                        <h2 class=" text-gray-500 text-[12px]">Berikut adalah detail transport.</h2>
                    </div>

                </div>


                <div class="w-full flex flex-col lg:flex-row py-5 text-[12px] border-b">
                    <div class="w-full lg:w-[20%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        <h1 class="text-md font-bold">Data Transport</h1>
                        <h2 class="text-[10px] text-gray-500">Berikut adalah detail dari data transport</h2>
                    </div>
                    <div class="w-full lg:w-[80%] mb-5 lg:mb-0 lg:pr-5 text-balance">

                        <table class="w-full border">
                            <tr class="border p-2">
                                <td class="border  p-2">Tanggal</td>
                                <td class="border  p-2">{{ $transport->tanggal }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Jam Kedatangan</td>
                                <td class="border  p-2">{{ $transport->jam_kedatangan }}</td>
                            </tr>

                            <tr class="border p-2">
                                <td class="border  p-2">NO Kendaraan (vehicle no)</td>
                                <td class="border  p-2">{{ $transport->vehicle_no }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Transporter</td>
                                <td class="border  p-2">{{ $transport->transporter->name }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Tipe kendaraan (Vehicle Type)</td>
                                <td class="border  p-2">{{ $transport->tipekendaraan->name }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Jenis surat jalan (SJ Type)</td>
                                <td class="border  p-2">{{ $transport->jenissuratjalan->name }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">IncoT</td>
                                <td class="border  p-2">{{ $transport->incotrelation->name }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Reference No</td>
                                <td class="border  p-2">{{ $transport->reference_no }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Reference Date</td>
                                <td class="border  p-2">{{ $transport->reference_date }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">No Container</td>
                                <td class="border  p-2">{{ $transport->no_container }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Sheal</td>
                                <td class="border  p-2">{{ $transport->sheal }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Plant</td>
                                <td class="border  p-2">{{ $transport->plant }}</td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2">Plant</td>
                                <td class="border  p-2">{{ $transport->shipment }}</td>
                            </tr>

                        </table>



                    </div>
                </div>
                <div class="w-full flex flex-col lg:flex-row py-5 text-[12px] border-b">
                    <div class="w-full lg:w-[20%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        <h1 class="text-md font-bold">Data Loading Gudang</h1>
                        <h2 class="text-[10px] text-gray-500">Lakukan kelola progres loading brang dengan mengisi data
                            disamping</h2>
                    </div>
                    <div class="w-full lg:w-[80%] mb-5 lg:mb-0 lg:pr-5 text-balance">

                        <table class="w-full border">
                            <tr class="border p-2">
                                <td class="border  p-2 uppercase font-bold">Truck IN</td>
                                <td class="border  p-2 uppercase font-bold">
                                    @if ($transport->truck_in)
                                        {{ \Carbon\Carbon::parse($transport->truck_in)->locale('id')->translatedFormat('l, d/m/Y H:i') . ' WIB' }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="border  p-2">
                                    <div class="w-full">
                                        <a href="/warehouse/update-data/{{ $transport->id }}/truck-in">
                                            <button {{ $transport->truck_in !== null ? 'disabled' : '' }}
                                                class="py-1 px-5 {{ $transport->truck_in !== null ? 'bg-gray-200 text-gray-500' : 'bg-blue-500 text-white' }}   rounded-md">Finish</button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2 uppercase font-bold">start loading</td>
                                <td class="border  p-2 uppercase font-bold">
                                    @if ($transport->start_loading)
                                        {{ \Carbon\Carbon::parse($transport->start_loading)->locale('id')->translatedFormat('l, d/m/Y H:i') . ' WIB' }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="border  p-2">
                                    <div class="w-full">
                                        <a href="/warehouse/update-data/{{ $transport->id }}/start-loading">
                                            <button {{ $transport->start_loading !== null ? 'disabled' : '' }}
                                                class="py-1 px-5 {{ $transport->truck_in == null ? 'hidden' : '' }}   {{ $transport->start_loading !== null ? 'bg-gray-200 text-gray-500' : 'bg-blue-500 text-white' }}   rounded-md">Finish</button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2 uppercase font-bold">finish loading</td>
                                <td class="border  p-2 uppercase font-bold">
                                    @if ($transport->finish_loading)
                                        {{ \Carbon\Carbon::parse($transport->finish_loading)->locale('id')->translatedFormat('l, d/m/Y H:i') . ' WIB' }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="border  p-2">
                                    <div class="w-full">
                                        <a href="/warehouse/update-data/{{ $transport->id }}/finish-loading">
                                            <button {{ $transport->finish_loading !== null ? 'disabled' : '' }}
                                                class="py-1 px-5 {{ $transport->start_loading == null ? 'hidden' : '' }}  {{ $transport->finish_loading !== null ? 'bg-gray-200 text-gray-500' : 'bg-blue-500 text-white' }}   rounded-md">Finish</button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2 uppercase font-bold">truck out</td>
                                <td class="border  p-2 uppercase font-bold">
                                    @if ($transport->truck_out)
                                        {{ \Carbon\Carbon::parse($transport->truck_out)->locale('id')->translatedFormat('l, d/m/Y H:i') . ' WIB' }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="border  p-2">
                                    <div class="w-full">
                                        <a href="/warehouse/update-data/{{ $transport->id }}/truck-out">
                                            <button {{ $transport->truck_out !== null ? 'disabled' : '' }}
                                                class="py-1 px-5 {{ $transport->finish_loading == null ? 'hidden' : '' }}  {{ $transport->truck_out !== null ? 'bg-gray-200 text-gray-500' : 'bg-blue-500 text-white' }}   rounded-md">Finish</button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border p-2">
                                <td class="border  p-2 uppercase font-bold">ETA (Estimation To Arrival)</td>
                                <td class="border  p-2 uppercase font-bold">
                                    @if ($transport->eta)
                                        {{ \Carbon\Carbon::parse($transport->eta)->locale('id')->translatedFormat('l, d/m/Y H:i') . ' WIB' }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="border  p-2">
                                    <div class="w-full">
                                        <a href="/warehouse/update-data/{{ $transport->id }}/eta">
                                            <button {{ $transport->eta !== null ? 'disabled' : '' }}
                                                class="py-1 px-5 {{ $transport->truck_out == null ? 'hidden' : '' }}  {{ $transport->eta !== null ? 'bg-gray-200 text-gray-500' : 'bg-blue-500 text-white' }}   rounded-md">Finish</button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>



                    </div>
                </div>

                <div class="w-full my-5 border-b pb-5">
                    <h1 class="text-xl font-bold text-red-500">Seluruh Barang
                    </h1>
                    <h2 class=" text-gray-500 text-[12px]">Berikut adalah data barang yang akan diangkut</h2>
                </div>
                @if ($transport->transaction !== null)
                    @foreach ($transport->transaction as $transaction)
                        <div class="text-[12px]">
                            @if ($transport->ekspedisi !== null)
                                <a href="/cetak-surat-jalan/{{ $transaction->id }}" class=" ">

                                    <button
                                        class="py-1 px-3 text-white bg-blue-500 hover:bg-blue-700 rounded-md flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[15px]" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-printer-check-icon lucide-printer-check">
                                            <path d="M13.5 22H7a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v.5" />
                                            <path d="m16 19 2 2 4-4" />
                                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v2" />
                                            <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6" />
                                        </svg>
                                        <span>Cetak surat jalan - {{ $transaction->no_do }}</span></button>
                                </a>
                            @endif
                        </div>
                        <div class="w-full flex flex-col lg:flex-row py-5 text-[12px] border-b">

                            <div class="w-full lg:w-[20%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                                <h1 class="text-md font-bold">Data {{ $transaction->no_do }}</h1>
                                <h2 class="text-[10px] text-gray-500">Berikut adalah detail dari data
                                    {{ $transaction->no_do }}
                                </h2>
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
                                        <td class="border  p-2">{{ number_format($transaction->qty, 0, '', '.') }}
                                        </td>
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
                                        <td class="border  p-2">
                                            {{ number_format($transaction->berat_kg, 0, '', '.') }}</td>
                                    </tr>
                                    <tr class="border p-2">
                                        <td class="border  p-2">TT/Kg</td>
                                        <td class="border  p-2">{{ number_format($transaction->tt_kg, 0, '', '.') }}
                                        </td>
                                    </tr>
                                    <tr class="border p-2">
                                        <td class="border  p-2">Tonase</td>
                                        <td class="border  p-2">{{ number_format($transaction->tonase, 0, '', '.') }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>
