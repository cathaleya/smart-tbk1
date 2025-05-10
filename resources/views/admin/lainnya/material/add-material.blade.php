<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full text-sm">
        <div class="mb-5">
            <h1 class="text-3xl font-bold">Tambah Material</h1>
            <h2 class="text-gray-500">Silakan menambahkan nomor dan deskripsi material dibawah ini</h2>
        </div>
        <div class="bg-white w-full rounded-lg p-5">
            <form action="" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="material_number" class="text-sm font-semibold">Material Number</label>
                    <input type="number" name="material_number" id="material_number"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan Material Number" required>
                </div>
                <div class="mb-5">
                    <label for="description" class="text-sm font-semibold">Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan Deskripsi Material" required></textarea>
                </div>
                <button type="submit"
                    class="bg-blue-500 cursor-pointer hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
            </form>
        </div>
    </div>
</x-admin-layout>
