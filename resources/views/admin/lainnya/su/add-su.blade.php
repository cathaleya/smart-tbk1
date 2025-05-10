<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full text-sm">
        <div class="mb-5">
            <h1 class="text-3xl font-bold">Tambah Satuan Unit (SU)</h1>
            <h2 class="text-gray-500">Silakan menambahkan nomor dan deskripsi su dibawah ini</h2>
        </div>
        <div class="bg-white w-full rounded-lg p-5">
            <form action="/lainnya/su/tambah" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="su" class="text-sm font-semibold">Inisial su</label>
                    <input type="text" name="name" id="su"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan inisial su" required>
                        @error('name')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                </div>
                <div class="mb-5">
                    <label for="description" class="text-sm font-semibold">Description</label>
                    <textarea name="desc" id="description" rows="4"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan Deskripsi su" required></textarea>
                </div>
                <button type="submit"
                    class="bg-blue-500 cursor-pointer hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
            </form>
        </div>
    </div>
</x-admin-layout>
