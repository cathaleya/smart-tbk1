<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mb-5">
        <h1 class="lg:text-3xl text-red-500 font-bold">Data Pengguna</h1>
        <h2 class="text-[10px] lg:text-sm" class="text-gray-500">Berikut adalah seluruh data pengguna.</h2>
    </div>
    <x-navbar>

    </x-navbar>
    <div class="w-full flex gap-5 text-[12px] mb-5 overflow-x-scroll">
        <a href="{{ route('user.create') }}"
            class="py-1 px-4 rounded-lg hover:transform hover:scale-110 transition ease-out duration-200 hover:bg-white hover:text-red-500 bg-red-500 text-white flex items-center justify-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-file-spreadsheet-icon lucide-file-spreadsheet">
                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                <path d="M8 13h2" />
                <path d="M14 13h2" />
                <path d="M8 17h2" />
                <path d="M14 17h2" />
            </svg>
            Tambah Data
        </a>
    </div>
    <div class="">
        @if (count($users) > 0)
            <div class="rounded-xl shadow overflow-auto border bg-white border-gray-200 ">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 text-gray-600 text-sm font-semibold">
                        <tr>
                            <th class="px-6 py-3 text-left">No</th>
                            <th class="px-6 py-3 text-left">Nama</th>
                            <th class="px-6 py-3 text-left">email</th>
                            <th class="px-6 py-3 text-left">jenis kelamin</th>
                            <th class="px-6 py-3 text-left">Jabatan</th>
                            <th class="px-6 py-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-sm">
                        @foreach ($users as $index => $user)
                            <tr class="bg-white">
                                <td class="px-6 py-4 font-bold text-gray-700">{{ ++$index }}</td>
                                <td class="px-6 py-4 ">{{ $user->name }}</td>
                                <td class="px-6 py-4 ">{{ $user->email }}</td>
                                <td class="px-6 py-4 ">{{ $user->gender == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                <td class="px-6 py-4 ">{{ $user->role->name }}</td>
                                <td class="px-6 py-4 ">
                                    <div class="flex gap-2 items-center justify-start">
                                        <a href="{{ route('user.edit', $user->id) }}"
                                            class="bg-blue-500 hover:bg-blue-700 cursor-pointer text-white font-bold py-1 px-4 inline-block rounded">Edit</a>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Kamu yakin akan menghapus pengguna ini?')"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded cursor-pointer">Delete</button>
                                        </form>
                                    </div>
                                </td>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-admin-layout>
