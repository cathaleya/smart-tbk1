<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="p-5 bg-white rounded-md mb-5">
        <h1 class="text-[20px] text-red-500 font-bold">Edit Ekspedisi</h1>
        <h1 class="text-gray-500">Silahkan lakukan perubahan pada ekspedisi</h1>
    </div>
    <div class="w-full p-5 rounded-md bg-white text-[12px]">
        <form action="/ekspedisi/ubah-data" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $ekspedisi->id }}">

            <div class="flex gap-5">
                <div class="w-[50%] border">
                    <h1 class="text-center font-bold eb">Silahkan pilih status ekspedisi</h1>
                    <select name="ekspedisi_status_id" id=""
                        class="w-full py-1 px-3 focus:outline-none border">
                        @foreach ($ekspedisistatus as $es)
                            @if ($ekspedisi->ekspedisi_status_id == $es->id)
                                <option value="{{ $es->id }}" selected>{{ $es->desc }}</option>
                            @else
                                <option value="{{ $es->id }}">{{ $es->desc }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="w-[50%] mb-5 lg:mb-0">
                    <div class="mb-5">
                        <h1 class="text-lg font-bold">Ekspedisi Logs</h1>
                        <h2 class="text-sm">Silahkan untuk melakukan perubahan ekspedisi log</h2>
                    </div>
                    <div class="w-full">
                        <table>
                            <tr class="border-y font-bold uppercase">
                                <td class="p-2">Log</td>
                                <td class="p-2">Action</td>
                            </tr>
                            @foreach ($ekspedisilogs as $log)
                                <tr>
                                    <td class="p-2">{{ $log->status }}</td>
                                    <td class="p-2"><a href="/ekspedisi/hapus-data-log/{{ $log->id }}"
                                            class="py-1 px-3 bg-red-500 text-white rounded-md">
                                            Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="my-2">
                <button type="submit" class="py-1 px-3 bg-green-500 text-white rounded-md">Ubah data</button>
            </div>
        </form>
    </div>
</x-admin-layout>
