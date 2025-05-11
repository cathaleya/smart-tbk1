<div class="text-[12px]">
    <div
        class="lg:p-3 p-3 lg:rounded-full bg-white mb-5  flex lg:flex-row flex-col items-center lg:justify-between gap-2 ">
        <div class="w-full lg:w-auto">
            <form action="" class="w-full flex justify-between gap-2">
                @csrf
                <input type="text" name="keyword"
                    class="w-full py-1 px-5 rounded-full focus:outline-none border-2  focus:ring ring-red-500 focus:border-red-500"
                    placeholder="Search..." autocomplete="off">
                <button type="submit" class="py-1 px-3 bg-black text-white rounded-full cursor-pointer">Cari</button>
            </form>
        </div>
    </div>
</div>
