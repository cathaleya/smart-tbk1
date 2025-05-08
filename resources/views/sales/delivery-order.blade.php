<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar>
        <x-slot:createLink></x-slot:createLink>
        <x-slot:printLink></x-slot:printLink>
    </x-navbar>

    {{-- content --}}
    <div class="w-full ">
        <div class="rounded-xl shadow overflow-auto border bg-white border-gray-200 ">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50 text-gray-600 text-sm font-semibold">
                    <tr>
                        <th class="px-6 py-3 text-left">Order Number</th>
                        <th class="px-6 py-3 text-left">Truck In</th>
                        <th class="px-6 py-3 text-left">Start Load</th>
                        <th class="px-6 py-3 text-left">Finish Load</th>
                        <th class="px-6 py-3 text-left">Truck Out</th>
                        <th class="px-6 py-3 text-left">ETA</th>
                        <th class="px-6 py-3 text-left">Delivered</th>
                        <th class="px-6 py-3 text-left">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    <tr class="bg-white">
                        <td class="px-6 py-4 font-bold text-gray-700">DO-1000</td>
                        <td class="px-6 py-4">07/05/2025 18:56</td>
                        <td class="px-6 py-4">07/05/2025 19:56</td>
                        <td class="px-6 py-4">—</td>
                        <td class="px-6 py-4">—</td>
                        <td class="px-6 py-4">08/05/2025 04:56</td>
                        <td class="px-6 py-4">—</td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center gap-1 px-3 py-1 bg-gray-100 rounded-full text-gray-600">
                                <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                                Loading
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
