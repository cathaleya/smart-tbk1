<x-pengunjung-layout>
    <div class="w-full h-screen flex justify-center items-center font-inter overflow-hidden">
        <div class="bg-white p-10 flex lg:flex-row flex-col   rounded-lg lg:shadow-2xl lg:border lg:border-gray-100 "  data-aos="fade-up">
            <div class="flex justify-center  items-center lg:border-r-2 lg:border-gray-100 pr-5">
                <img src="{{ asset('img/logo/smart-logo.svg') }}" alt="" class="w-[200px]">
            </div>
            <div class="pl-5">
                <div class="my-2">
                    <h1 class="text-center text-[30px] font-bold text-red-500">LOGIN</h1>
                    <p class="text-center text-gray-500 text-[12px]">Silahkan isi form dibawah ini untuk melakukan login
                    </p>
                </div>
                <form action="">
                    <table class="text-[12px]">
                        <tr>
                            <td class="p-2"><label for="" class="capitalize">email</label></td>
                            <td class="p-2"><input type="text"
                                    class="py-1 px-5 focus:outline-none border-2  rounded-xl focus:ring ring-red-500 focus:border-red-500"
                                    placeholder="user@gmail.com"></td>
                        </tr>
                        <tr>
                            <td class="p-2"><label for="" class="capitalize">password</label></td>
                            <td class="p-2"><input type="text"
                                    class="py-1 px-5 focus:outline-none border-2  rounded-xl focus:ring ring-red-500 focus:border-red-500"
                                    placeholder="*******"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="p-2 text-center">
                                <button type="submit"
                                    class="py-1 px-5 bg-red-500 text-white rounded-lg cursor-pointer">Login</button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p class="text-center text-gray-500 text-[12px]">Belum punya akun? <a href="{{ route('register') }}"
                                        class="text-red-500">Daftar</a></p>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</x-pengunjung-layout>
