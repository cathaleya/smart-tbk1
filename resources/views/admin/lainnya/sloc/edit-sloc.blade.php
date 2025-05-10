<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full text-sm">
        <div class="mb-5">
            <h1 class="text-3xl font-bold">Edit Sloc</h1>
            <h2 class="text-gray-500">Silakan mengubah nomor dan deskripsi sloc dibawah ini</h2>
        </div>
        <div class="bg-white w-full rounded-lg p-5">
            <form action="/lainnya/sloc/edit" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $sloc->id }}">
                <div class="mb-5">
                    <label for="sloc_number" class="text-sm font-semibold">sloc Number</label>
                    <input type="text" name="name" id="sloc_number" value="{{ $sloc->name }}"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan sloc Number" required>
                </div>
                <div class="mb-5">

                    <label for="description" class="text-sm font-semibold">Description</label>
                    <textarea name="desc" id="description" rows="4"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan Deskripsi sloc" required>{{ $sloc->desc }}</textarea>
                </div>
                <button type="submit"
                    class="bg-blue-500 cursor-pointer hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ubah</button>
            </form>
        </div>
    </div>
</x-admin-layout>
