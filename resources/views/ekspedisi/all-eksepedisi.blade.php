<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mb-5">
        <h1 class="lg:text-3xl text-red-500 font-bold">Data Ekspedisi</h1>
        <h2 class="text-[10px] lg:text-sm" class="text-gray-500">Berikut adalah seluruh data ekspedisi.</h2>
    </div>
    <x-navbar></x-navbar>

    <div class="">
        @if (count($ekspedisis) > 0)
            @foreach ($ekspedisis as $ekspedisi)
                <div class="rounded-xl shadow overflow-hidden border bg-white border-gray-200 ">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 text-gray-600 text-sm font-semibold">
                            <tr>
                                <th class="px-6 py-3 text-left">Order Number</th>
                                <th class="px-6 py-3 text-left">Material Number</th>
                                <th class="px-6 py-3 text-left">Alamat</th>
                                <th class="px-6 py-3 text-left">Type Kend</th>
                                <th class="px-6 py-3 text-left">No Kend</th>
                                <th class="px-6 py-3 text-left">transporter</th>
                                <th class="px-6 py-3 text-left">Kota</th>
                                <th class="px-6 py-3 text-left">Status Pengiriman</th>
                                <th class="px-6 py-3 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-sm">
                            <tr class="bg-white">
                                <td class="px-6 py-4 font-bold text-gray-700">
                                    <div class="">
                                        @foreach ($ekspedisi->transport->transaction as $ts)
                                            <li class="list-none">{{ $ts->no_do }}</li>
                                        @endforeach
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="">
                                        @foreach ($ekspedisi->transport->transaction as $ts)
                                            <li class="list-none">{{ $ts->kode_material }}</li>
                                        @endforeach
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="">
                                        @foreach ($ekspedisi->transport->transaction as $ts)
                                            <li class="list-none">{{ $ts->address }}</li>
                                        @endforeach
                                    </div>
                                </td>
                                <td class="px-6 py-4">{{ $ekspedisi->transport->tipekendaraan->name }}</td>
                                <td class="px-6 py-4">{{ $ekspedisi->transport->vehicle_no }}</td>
                                <td class="px-6 py-4">{{ $ekspedisi->transport->transporter->name }}</td>
                                <td class="px-6 py-4">
                                    <div class="">
                                        @foreach ($ekspedisi->transport->transaction as $ts)
                                            <li class="list-none">{{ $ts->kota }}</li>
                                        @endforeach
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">

                                    <span
                                        class="inline-flex items-center gap-1 px-3 py-1 {{ $ekspedisi->ekspedisi_status_id == 6 ? 'bg-green-100 text-green-500' : 'bg-gray-200 text-gray-600' }} rounded-full ">
                                        <span
                                            class="w-2 h-2 {{ $ekspedisi->ekspedisi_status_id == 6 ? ' bg-green-500' : ' bg-gray-600' }} rounded-full"></span>
                                        {{ $ekspedisi->status->desc }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">

                                    <a href="">
                                        <button class="py-2 px-3 bg-blue-500 text-white rounded-md">Edit</button>
                                    </a>
                                    <a href="">
                                        <button class="py-2 px-3 bg-red-500 text-white rounded-md">Hapus</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
        @endif
    </div>
</x-admin-layout>
