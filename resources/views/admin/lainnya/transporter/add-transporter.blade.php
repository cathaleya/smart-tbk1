<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full text-sm">
        <div class="mb-5">
            <h1 class="text-3xl font-bold">Tambah Transporter</h1>
            <h2 class="text-gray-500">Silakan menambahkan nomor dan deskripsi material dibawah ini</h2>
        </div>
        <div class="bg-white w-full rounded-lg p-5">
            <form action="/lainnya/transporter/tambah" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="transporter" class="text-sm font-semibold">id Transporter</label>
                    <input type="text" name="transporter_id" id="transporter"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan ID Transporter" required>
                </div>
                <div class="mb-5">
                    <label for="transporter" class="text-sm font-semibold">Nama Transporter</label>
                    <input type="text" name="name" id="transporter"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan Nama Transporter" required>
                </div>
                <button type="submit"
                    class="bg-blue-500 cursor-pointer hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
            </form>
        </div>
    </div>
</x-admin-layout>
