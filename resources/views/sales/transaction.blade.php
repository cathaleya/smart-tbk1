<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <x-navbar>
        <x-slot:createLink>/transaction/tambah-data</x-slot:createLink>
        <x-slot:printLink></x-slot:printLink>
    </x-navbar>




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
                <tbody class="divide-y divide-gray-100 text-sm">
                    @if (count($transactiondata) > 0)
                        @foreach ($transactiondata as $td)
                            <tr class="bg-white">
                                <td class="px-6 py-4 font-bold text-gray-700">{{ $td->no_do }}</td>
                                <td class="px-6 py-4"> <span
                                        class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                        <span class="w-2 h-2    bg-green-400 rounded-full"></span>
                                        Done
                                    </span></td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1 px-3 py-1  bg-gray-100 rounded-full text-gray-600">
                                        <span class="w-2 h-2    bg-green-400 rounded-full"></span>
                                        Done
                                    </span>
                                </td>
                                <td class="px-6 py-4">—</td>
                                <td class="px-6 py-4">—</td>
                                <td class="px-6 py-4">08/05/2025 04:56</td>
                                <td class="px-6 py-4">
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
                                        <a href="/transaction/{{ $td->id }}/detail">
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
