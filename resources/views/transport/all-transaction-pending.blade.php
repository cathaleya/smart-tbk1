<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-navbar>
        <x-slot:createLink>/transport/tambah-data</x-slot:createLink>
        <x-slot:printLink></x-slot:printLink>
    </x-navbar>
    <div class="">
        <div class="mb-5">
            <h1 class="lg:text-3xl text-red-500 font-bold">Data Transaksi Pending</h1>
            <h2 class="text-[10px] lg:text-sm" class="text-gray-500">Berikut adalah seluruh data transaksi yang pending (belum diatur
                jadwal pengirimannya)</h2>
        </div>
        <div class="w-full flex gap-5 text-[12px] mb-5">
            <a href="/transport"
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
                Transaction
            </a>
            <a href="/transport/data"
                class="py-1 px-4 rounded-lg hover:transform hover:scale-110 transition ease-out duration-200 hover:bg-white hover:text-red-500 bg-red-500 text-white flex items-center justify-center gap-2    ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-truck-icon lucide-truck">
                    <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
                    <path d="M15 18H9" />
                    <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
                    <circle cx="17" cy="18" r="2" />
                    <circle cx="7" cy="18" r="2" />
                </svg>
                Transport
            </a>
        </div>
        <div class="rounded-xl shadow overflow-x-scroll border bg-white border-gray-200 ">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50 text-gray-600 text-sm font-semibold">
                    <tr>
                        <th class="px-6 py-3 text-left">Tanggal</th>
                        <th class="px-6 py-3 text-left">Order Number</th>
                        <th class="px-6 py-3 text-left">Pelanggan</th>
                        <th class="px-6 py-3 text-left">Kota</th>
                        <th class="px-6 py-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    @if (count($transactions) > 0)
                        @foreach ($transactions as $transaction)
                            <tr class="bg-white">
                                <td class="px-6 py-4 font-bold text-gray-700">{{ $transaction->tanggal }}</td>
                                <td class="px-6 py-4">{{ $transaction->no_do }}</td>
                                <td class="px-6 py-4">{{ $transaction->pelanggan }}</td>
                                <td class="px-6 py-4">{{ $transaction->kota }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <a href=""
                                            class="py-1 px-3 bg-green-500 text-white rounded-md">Detail</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                    @endif

                </tbody>
            </table>
        </div>
    </div>

</x-admin-layout>
