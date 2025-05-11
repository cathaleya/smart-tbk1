<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mb-5">
        <h1 class="lg:text-3xl text-red-500 font-bold">Data Transaksi</h1>
        <h2 class="text-[10px] lg:text-sm" class="text-gray-500">Berikut adalah seluruh data transaksi.</h2>
    </div>
    <x-navbar>

    </x-navbar>


    <div class="w-full flex gap-5 text-[12px] mb-5 overflow-x-scroll">
        <a href="/transaction/tambah-data"
            class="py-1 px-4 rounded-lg hover:transform hover:scale-110 transition ease-out duration-200 hover:bg-white hover:text-red-500 bg-red-500 text-white flex items-center justify-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-file-spreadsheet-icon lucide-file-spreadsheet">
                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                <path d="M8 13h2" />
                <path d="M14 13h2" />
                <path d="M8 17h2" />
                <path d="M14 17h2" />
            </svg>
            Tambah Data
        </a>
    </div>

    {{-- content --}}
    <div class="w-full ">
        <div class="rounded-xl shadow overflow-auto border bg-white border-gray-200 ">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50 text-gray-600 text-sm font-semibold">
                    <tr>
                        <th class="px-6 py-3 text-left">Order Number</th>
                        <th class="px-6 py-3 text-left">Transport</th>
                        <th class="px-6 py-3 text-left">Warehouse</th>
                        <th class="px-6 py-3 text-left">Truck In</th>
                        <th class="px-6 py-3 text-left">Truck Out</th>
                        <th class="px-6 py-3 text-left">ETA</th>
                        <th class="px-6 py-3 text-left">Delivered</th>
                        <th class="px-6 py-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-[12px]">

                    @if (count($transactiondata) > 0)
                        @foreach ($transactiondata as $td)
                            <tr class="bg-white">
                                <td class="px-6 py-4 font-bold text-gray-700">{{ $td->no_do }}</td>

                                <td class="px-6 py-4 whitespace-nowrap truncate">
                                    @if ($td->transport_id == null)
                                        <span
                                            class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                            <span class="w-2 h-2    bg-red-400 rounded-full"></span>
                                            Pending
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                            <span class="w-2 h-2    bg-green-400 rounded-full"></span>
                                            Done
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap truncate">

                                    @if ($td->transport !== null)
                                        @if ($td->transport->izin == true)
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
                                    @else
                                        <span
                                            class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                            <span class="w-2 h-2    bg-red-400 rounded-full"></span>
                                            Pending
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap truncate">

                                    @if ($td->transport !== null)
                                        @if ($td->transport->truck_in)
                                            <span
                                                class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                                {{ \Carbon\Carbon::parse($td->transport->truck_in)->isoFormat('DD/MM/YYYY HH:mm') }}
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                                <span class="w-2 h-2    bg-red-400 rounded-full"></span>
                                                Pending
                                            </span>
                                        @endif
                                    @else
                                        <span
                                            class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">

                                            -
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap truncate">

                                    @if ($td->transport !== null)
                                        @if ($td->transport->truck_out)
                                            <span
                                                class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                                {{ \Carbon\Carbon::parse($td->transport->truck_out)->isoFormat('DD/MM/YYYY HH:mm') }}
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                                <span class="w-2 h-2    bg-red-400 rounded-full"></span>
                                                Pending
                                            </span>
                                        @endif
                                    @else
                                        <span
                                            class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">

                                            -
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap truncate">

                                    @if ($td->transport !== null)
                                        @if ($td->transport->eta)
                                            <span
                                                class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                                {{ \Carbon\Carbon::parse($td->transport->eta)->isoFormat('DD/MM/YYYY HH:mm') }}
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                                <span class="w-2 h-2    bg-red-400 rounded-full"></span>
                                                Pending
                                            </span>
                                        @endif
                                    @else
                                        <span
                                            class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">

                                            -
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap truncate">
                                    <span
                                        class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                        <span class="w-2 h-2    bg-yellow-400 rounded-full"></span>
                                        OnGoing
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="flex items-center gap-2">
                                        <a href="/transaction/{{ $td->id }}/edit-data">
                                            <span class="py-1 px-3 bg-blue-500 text-white rounded">
                                                Edit
                                            </span>
                                        </a>
                                        <a href="/information-about-transaction/{{ $td->id }}/detail">
                                            <span class="py-1 px-3 bg-green-500 text-white rounded ">
                                                Detail
                                            </span>
                                        </a>
                                        <a href="/transaction/{{ $td->id }}/hapus-data"
                                            onclick="return confirm('Apakah anda yakin menghapus data ini?')">
                                            <span class="py-1 px-3 bg-red-500 text-white rounded">
                                                Hapus
                                            </span>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
