<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full text-sm">
        <div class="mb-5">
            <h1 class="text-3xl font-bold">Edit incot</h1>
            <h2 class="text-gray-500">Silakan mengubah nomor dan deskripsi incot dibawah ini</h2>
        </div>
        <div class="bg-white w-full rounded-lg p-5">
            <form action="/lainnya/incot/edit" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $incot->id }}">
                <div class="mb-5">
                    <label for="incot_number" class="text-sm font-semibold">incot Number</label>
                    <input type="text" name="name" id="incot_number" value="{{ $incot->name }}"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan incot Number" required>
                </div>
                <div class="mb-5">

                    <label for="description" class="text-sm font-semibold">Description</label>
                    <textarea name="desc" id="description" rows="4"
                        class="w-full border border-gray-300 rounded-lg p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan Deskripsi incot" required>{{ $incot->desc }}</textarea>
                </div>
                <button type="submit"
                    class="bg-blue-500 cursor-pointer hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ubah</button>
            </form>
        </div>
    </div>
</x-admin-layout>
