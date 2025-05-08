<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full flex  gap-5  font-inter text-[13px] shadow rounded-lg ">
        <div class=" bg-white shadow  text-gray-500 rounded-lg p-5">
            <div class="mb-5">
                <h1 class="text-[20px] font-bold text-black ">Data diri pengguna</h1>
                <h2 class="text-gray-500">Lakukan perubahan pada form dibawah ini untuk mengubah data pengguna</h2>
            </div>
            <div class="w-full">
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data"
                    class="flex lg:flex-row flex-col flex-wrap justify-between  gap-2">
                    {{-- <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data"> --}}
                    @csrf
                    <div class="lg:w-[48%] w-full mb-2">
                        <h1 class="mb-2  text-gray-600">Nama Pengguna</h1>
                        <input type="text" name="name"
                            class="w-full py-2 px-3 border focus:ring-red-500 focus:border-red-500 focus:outline-none border-gray-600   text-gray"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="lg:w-[48%] w-full  mb-2">
                        <h1 class="mb-2  text-gray-600">Email</h1>
                        <input type="email" name="email"
                            class="w-full py-2 px-3 border focus:ring-red-500 focus:border-red-500 focus:outline-none border-gray-600   text-gray"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="lg:w-[48%] w-full  mb-2">
                        <h1 class="mb-2  text-gray-600">No Hp</h1>
                        <input type="text" name="phone"
                            class="w-full py-2 px-3 border focus:ring-red-500 focus:border-red-500 focus:outline-none border-gray-600   text-gray"
                            value="{{ old('phone  ') }}">
                        @error('phone ')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="lg:w-[48%] w-full  mb-2">
                        <h1 class="mb-2  text-gray-600">Password</h1>
                        <input type="password" name="password1"
                            class="w-full py-2 px-3 border focus:ring-red-500 focus:border-red-500focus:outline-none border-gray-600   text-gray"
                            value="{{ old('password1') }}">
                        @error('password1')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="lg:w-[48%] w-full  mb-2">
                        <h1 class="mb-2  text-gray-600">Masukkan Ulang Password</h1>
                        <input type="password" name="password2"
                            class="w-full py-2 px-3 border focus:ring-red-500 focus:border-red-500  focus:outline-none border-gray-600   text-gray"
                            value="{{ old('password2') }}">
                        @error('password2')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="lg:w-[48%] w-full  mb-2">
                        <h1 class="mb-2  text-gray-600">Masukkan foto profile</h1>
                        <input type="file" name="picture"
                            class="w-full py-2 px-3 border focus:ring-red-500 focus:border-red-500  focus:outline-none cursor-pointer  bg-red-500 text-white text-gray"
                            value="{{ old('picture') }}">
                        @error('picsture')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="lg:w-[48%] w-full  mb-2">
                        <h1 class="mb-2  text-gray-600">Jenis Kelamin</h1>
                        <select type="text" name="gender"
                            class="w-full appearance-none py-2 px-3 border border-gray-600   text-gray"
                            value="{{ old('gender') }}">
                            <option selected disabled>Silahkan Pilih gender</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        @error('gender')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="lg:w-[48%] w-full  mb-2">
                        <h1 class="mb-2  text-gray-600">Jabatan</h1>
                        <select type="text" name="role_id"
                            class="w-full appearance-none py-2 px-3 border border-gray-600   text-gray"
                            value="{{ old('role_id') }}">
                            <option selected disabled>Silahkan Pilih Jabatan</option>
                            @if ($roles->count() > 0)
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach

                            @endif
                        </select>
                        @error('role_id')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full flex justify-end ">

                        <button
                            class="flex gap-2 items-center mb-2 py-2 px-3 bg-red-500 hover:bg-red-600 text-white rounded-lg cursor-pointer">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-save-icon lucide-save">
                                    <path
                                        d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                                    <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                                    <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                                </svg></span>
                            <span>Tambah Data</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
