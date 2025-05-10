<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="flex lg:flex-row flex-col gap-5  font-inter text-[13px]">
        <div class="lg:grow-2 order-2 lg:order-1 bg-white shadow  text-gray-500 rounded-lg p-5">
            <div class="mb-5">
                <h1 class="text-[20px] font-bold text-black ">Data diri pengguna</h1>
                <h2 class="text-gray-500">Lakukan perubahan pada form dibawah ini untuk mengubah data pengguna</h2>
            </div>
            <div class="w-full">
                <form action="/update-profile" method="POST" enctype="multipart/form-data"
                    class="flex lg:flex-row flex-col flex-wrap justify-between  gap-2">
                    @csrf
                    <input type="hidden" value="{{ $user->id }}" name="id">
                    <div class="lg:w-[48%] w-full mb-2">
                        <h1 class="mb-2  text-gray-600">Nama Pengguna</h1>
                        <input type="text" name="name"
                            class="w-full py-2 px-3 border border-gray-600 bg-gray-100  " value="{{ $user->name }}">
                        @error('name')
                            <div class="text-red-500 text-[12px] mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="lg:w-[48%] w-full  mb-2">
                        <h1 class="mb-2  text-gray-600">Email</h1>
                        <input type="text" name="email"
                            class="w-full py-2 px-3 border border-gray-600 bg-gray-100  " value="{{ $user->email }}">
                        @error('email')
                            <div class="text-red-500 text-[12px] mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="lg:w-[48%] w-full  mb-2">
                        <h1 class="mb-2  text-gray-600">No Hp</h1>
                        <input type="text" name="phone"
                            class="w-full py-2 px-3 border border-gray-600 bg-gray-100  " value="{{ $user->phone }}">
                        @error('phone')
                            <div class="text-red-500 text-[12px] mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="lg:w-[48%] w-full  mb-2">
                        <h1 class="mb-2  text-gray-600">Jenis Kelamin</h1>
                        <select type="text" name="gender"
                            class="w-full appearance-none py-2 px-3 border b bg-red-500  text-white"
                            value="{{ $user->gender }}">
                            <option value="L" {{ $user->gender == 'L' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="P" {{ $user->gender == 'P' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                        @error('gender')
                            <div class="text-red-500 text-[12px] mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="lg:w-[48%] w-full  mb-2">
                        <h1 class="mb-2  text-gray-600">Foto Profil</h1>
                        <input type="file" id="input-file-update-profile" name="picture" class="w-full py-2 px-3 border bg-red-500 text-white">
                        @error('picture')
                            <div class="text-red-500 text-[12px] mt-1">{{ $message }}</div>
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
                            <span>Ubah Data</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="lg:grow-1 order-1 lg:order-2 bg-white rounded-lg p-5 shadow">
            <div class="flex justify-center items-center   overflow-hidden">
                <img src="{{ asset($user->picture) }}" alt=""
                    class="w-[200px] h-[200px] rounded-full object-cover ">
            </div>
            <div class="text-center mt-5">
                <h1 class="text-[20px] font-bold">{{ $user->name }}</h1>
                <h2 class="text-[13px] text-gray-600">{{ $user->role->name }}</h2>
            </div>
        </div>
    </div>
</x-admin-layout>
