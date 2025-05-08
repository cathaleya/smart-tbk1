<div class="">
    <div
        class="lg:p-2 p-5 lg:rounded-full rounded-xl bg-white mb-5 text-[12px] flex lg:flex-row flex-col items-center lg:justify-between gap-2 ">
        <div class="">
            <form action="">
                @csrf
                <input type="text" name="keyword"
                    class="py-1 px-5 rounded-full focus:outline-none border-2  focus:ring ring-red-500 focus:border-red-500"
                    placeholder="Search...">
                <button type="submit" class="py-1 px-3 bg-black text-white rounded-full cursor-pointer">Cari</button>
            </form>
        </div>
        <div class="flex gap-2 items-center">
            <a href="{{ $createLink }}"
                class="show-modal-button py-1 px-3 bg-green-500 hover:bg-green-700 text-white rounded-full cursor-pointer flex justify-center items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[15px]" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-plus-icon lucide-plus">
                    <path d="M5 12h14" />
                    <path d="M12 5v14" />
                </svg>
                <span>Tambah data</span>
            </a>
            <a href="{{ $printLink }}"
                class="py-1 px-3 bg-red-500 hover:bg-red-700 text-white rounded-full cursor-pointer flex justify-center items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[15px]" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-plus-icon lucide-plus">
                    <path d="M5 12h14" />
                    <path d="M12 5v14" />
                </svg>
                <span>Print Laporan</span>
            </a>
        </div>
    </div>
</div>
