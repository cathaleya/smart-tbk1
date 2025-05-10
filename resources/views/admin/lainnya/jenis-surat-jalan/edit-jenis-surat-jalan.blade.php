<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full text-sm">
        <div class="mb-5">
            <h1 class="text-3xl font-bold">Edit jenis surat jalan</h1>
            <h2 class="text-gray-500">Silakan mengubah nomor dan deskripsi jenissuratjalan dibawah ini</h2>
        </div>
        <div class="bg-white w-full rounded-lg p-5">
            <form action="/lainnya/jenis-surat-jalan/edit" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $jenissuratjalan->id }}">
                <div class="mb-5">
                    <label for="jenis surat jalan_number" class="text-sm font-semibold">inisial SJ</label>
                    <input type="text" name="name" id="jenissuratjalan_number" value="{{ $jenissuratjalan->name }}"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan jenis surat jalan Number" required>
                </div>
                <div class="mb-5">

                    <label for="description" class="text-sm font-semibold">Description</label>
                    <textarea name="desc" id="description" rows="4"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan Deskripsi jenissuratjalan" required>{{ $jenissuratjalan->desc }}</textarea>
                </div>
                <button type="submit"
                    class="bg-blue-500 cursor-pointer hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ubah</button>
            </form>
        </div>
    </div>
</x-admin-layout>
