<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full text-sm">
        <div class="mb-5">
            <h1 class="text-3xl font-bold">Edit transporter</h1>
            <h2 class="text-gray-500">Silakan mengubah nomor dan deskripsi transporter dibawah ini</h2>
        </div>
        <div class="bg-white w-full rounded-lg p-5">
            <form action="/lainnya/transporter/edit" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $transporter->id }}">
                <div class="mb-5">
                    <label for="transporter" class="text-sm font-semibold">id Transporter</label>
                    <input type="text" name="transporter_id" id="transporter" value="{{ $transporter->transporter_id }}"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan ID Transporter" required>
                </div>
                <div class="mb-5">
                    <label for="transporter" class="text-sm font-semibold">Nama transporter</label>
                    <input type="text" name="name" id="transporter" value="{{ $transporter->name }}"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan transporter Number" required>
                </div>

                <button type="submit"
                    class="bg-blue-500 cursor-pointer hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ubah</button>
            </form>
        </div>
    </div>
</x-admin-layout>
