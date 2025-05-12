<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mb-5">
        <h1 class="lg:text-3xl text-red-500 font-bold">Data Warehouse</h1>
        <h2 class="text-[10px] lg:text-sm" class="text-gray-500">Berikut adalah seluruh data transport,silahkan kelola
            barang untuk dimasukan kedalam truck ekspedisi</h2>
    </div>
    <x-navbar></x-navbar>

    <div class="">


        <div class="rounded-xl shadow overflow-x-scroll border bg-white border-gray-200 ">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50 text-gray-600 text-sm font-semibold">
                    <tr>
                        <th class="px-6 py-3 text-left">Tanggal</th>
                        <th class="px-6 py-3 text-left">No DO</th>
                        <th class="px-6 py-3 text-left">Jam Kedatangan</th>
                        <th class="px-6 py-3 text-left">Transporter</th>
                        <th class="px-6 py-3 text-left">Status Loaded</th>
                        <th class="px-6 py-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    @if (count($transports) > 0)
                        @foreach ($transports as $transport)
                            <tr class="bg-white">
                                <td class="px-6 py-4 font-bold text-gray-700">{{ $transport->tanggal }}</td>
                                <td class="px-6 py-4 font-bold text-gray-700">
                                    <div class="">
                                        @foreach ($transport->transaction as $tr)
                                            <li class="list-none">- {{ $tr->no_do }}</li>
                                        @endforeach
                                    </div>
                                </td>

                                <td class="px-6 py-4">{{ $transport->jam_kedatangan }}</td>
                                <td class="px-6 py-4">{{ $transport->transporter->name }}</td>
                                <td class="px-6 py-4">
                                    @if ($transport->eta !== null)
                                        <span
                                            class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                            <span class="w-2 h-2    bg-green-400 rounded-full"></span>
                                            Done
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                            <span class="w-2 h-2    bg-red-400 rounded-full"></span>
                                            Pending
                                        </span>
                                    @endif
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <a href="/warehouse/kelola-laporan/{{ $transport->id }}"
                                            class="py-1 px-3 bg-blue-500 text-white rounded-md">kelola</a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                    @endif

                </tbody>
            </table>
            <div class="px-5 py-2">
                {{ $transports->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
