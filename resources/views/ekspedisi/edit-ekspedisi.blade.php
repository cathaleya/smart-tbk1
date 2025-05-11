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
            <div class="w-full">
                <h1 class="mb-5">Silahkan pilih status ekspedisi</h1>
                <select name="ekspedisi_status_id" id="" class="w-full py-1 px-3 focus:outline-none border">
                    @foreach ($ekspedisistatus as $es)
                        @if ($ekspedisi->ekspedisi_status_id == $es->id)
                            <option value="{{ $es->id }}" selected>{{ $es->desc }}</option>
                        @else
                            <option value="{{ $es->id }}">{{ $es->desc }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="my-2">
                <button type="submit" class="py-1 px-3 bg-green-500 text-white rounded-md">Ubah data</button>
            </div>
        </form>
    </div>
</x-admin-layout>
