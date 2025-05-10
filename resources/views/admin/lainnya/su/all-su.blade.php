<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full ">
        <x-navbar>
            <x-slot:createLink>/lainnya/su/tambah</x-slot:createLink>
            <x-slot:printLink></x-slot:printLink>
        </x-navbar>

        <div class="rounded-xl shadow overflow-hidden border bg-white border-gray-200 overflow-x-scroll">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50  text-gray-600 text-sm font-semibold">
                    <tr>
                        <th class="px-6 py-3 text-left">Inisial su</th>
                        <th class="px-6 py-3 text-left">Description</th>
                        <th class="px-6 py-3 text-left">ACTION</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    @if (count($itemunits) > 0)
                        @foreach ($itemunits as $itemunit)
                            <tr class="bg-white">
                                <td class="px-6 py-4 font-bold text-gray-700">{{ $itemunit->name }}</td>
                                <td class="px-6 py-4">{{ $itemunit->desc }}</td>
                                <td class="px-6 py-4 ">
                                    <div class="flex gap-2 items-center justify-start">
                                        <a href="/lainnya/su/{{ $itemunit->id }}/edit"
                                            class="bg-blue-500 hover:bg-blue-700 cursor-pointer text-white font-bold py-1 px-4 inline-block rounded">Edit</a>
                                        <a href="/lainnya/su/{{ $itemunit->id }}/hapus"
                                            onclick="return confirm('apakah anda yakin menghapus data ini?')"
                                            class="bg-red-500 hover:bg-red-700 cursor-pointer text-white font-bold py-1 px-4 inline-block rounded">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    @endif

                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
