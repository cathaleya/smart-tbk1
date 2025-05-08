<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-navbar>
        <x-slot:createLink></x-slot:createLink>
        <x-slot:printLink></x-slot:printLink>
    </x-navbar>
    <div class="">
        @if (count($users) > 0)
            <div class="rounded-xl shadow overflow-hidden border bg-white border-gray-200 ">
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
                                <td class="px-6 py-4 ">Laki-Laki</td>
                                <td class="px-6 py-4 ">Developer</td>
                                <td class="px-6 py-4 ">
                                    <div class="">
                                        <a href="{{ route('user.edit', $user->id) }}"
                                            class="bg-blue-500 hover:bg-blue-700 cursor-pointer text-white font-bold py-1 px-4 inline-block rounded">Edit</a>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
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
