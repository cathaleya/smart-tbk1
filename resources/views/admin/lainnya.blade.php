<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full">
        <div class="mb-5">
            <h1 class="text-3xl font-bold text-red-500">Data Lainnya</h1>
            <h2 class="text-sm text-gray-500">Disini kalian dapat mengatur data material,jenis laporan dan data-data
                lainnya</h2>
        </div>
        <div class="flex flex-col lg:flex-row flex-wrap justify-center  gap-5 text-sm">
            <div class="w-full lg:w-[48%] bg-white     p-5 rounded-xl shadow-lg ">
                <h1 class="text-xl font-bold text-red-500">Material</h1>
                <h2 class="text-sm text-gray-500">klik tombol dibawah untuk mengelola</h2>
                <table class="w-full">
                    <thead class="divide-y divide-gray-200">
                        <tr>
                            <td>
                                <div class="flex w-full py-5  justify-between ">

                                    <a href="/lainnya/material"
                                        class=" gap-1 flex items-center py-1 px-3 bg-red-500 rounded text-white ">
                                        <span class="  ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[15px]" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-pen-icon lucide-file-pen">
                                                <path d="M12.5 22H18a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v9.5" />
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                                <path
                                                    d="M13.378 15.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                            </svg>
                                        </span>
                                        <span class=" ">Kelola</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 uppercase">

                            <td class="py-2 bg-gray-50 px-3" colspan="2">Deskripsi Material</td>

                        </tr>
                    </thead>
                    <tbody class="text-[12px]">
                        <tr>

                            <td class="py-2 px-3" colspan="2">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Exercitationem quaerat voluptatem eveniet rerum porro officiis, ipsam dolorum
                                voluptates amet ducimus!</td>

                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="w-full lg:w-[48%] bg-white p-5 rounded-xl shadow-lg ">
                <h1 class="text-xl font-bold text-red-500">Transporter</h1>
                <h2 class="text-sm text-gray-500">klik tombol dibawah untuk mengelola</h2>
                <table class="w-full">
                    <thead class="divide-y divide-gray-200">
                        <tr>
                            <td>
                                <div class="flex w-full py-5  justify-between ">

                                    <a href="/lainnya/transporter"
                                        class=" gap-1 flex items-center py-1 px-3 bg-red-500 rounded text-white ">
                                        <span class="  ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[15px]" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-pen-icon lucide-file-pen">
                                                <path d="M12.5 22H18a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v9.5" />
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                                <path
                                                    d="M13.378 15.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                            </svg>
                                        </span>
                                        <span class=" ">Kelola</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 uppercase">

                            <td class="py-2 bg-gray-50 px-3 ">Deskripsi Transporter</td>
                        </tr>
                    </thead>
                    <tbody class="text-[12px]">
                        <tr>
                            <td class="py-2 px-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque neque
                                ex omnis quod iusto quibusdam voluptatum ullam porro, quasi libero.</td>

                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="w-full lg:w-[48%] bg-white p-5 rounded-xl shadow-lg ">
                <h1 class="text-xl font-bold text-red-500">SLOC(Lokasi penyimpanan barang sebelum dikirim.)</h1>
                <h2 class="text-sm text-gray-500">klik tombol dibawah untuk mengelola</h2>
                <table class="w-full">
                    <thead class="divide-y divide-gray-200">
                        <tr>
                            <td>
                                <div class="flex w-full py-5  justify-between ">

                                    <a href="/lainnya/sloc"
                                        class=" gap-1 flex items-center py-1 px-3 bg-red-500 rounded text-white ">
                                        <span class="  ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[15px]" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-pen-icon lucide-file-pen">
                                                <path d="M12.5 22H18a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v9.5" />
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                                <path
                                                    d="M13.378 15.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                            </svg>
                                        </span>
                                        <span class=" ">Kelola</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 uppercase">
                            <td class="py-2 bg-gray-50 px-3" colspan="2">Deskripsi SLOC</td>

                        </tr>
                    </thead>
                    <tbody class="text-[12px]">
                        <tr>
                            <td class="py-2 px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Exercitationem quaerat voluptatem eveniet rerum porro officiis, ipsam dolorum
                                voluptates amet ducimus!</td>

                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="w-full lg:w-[48%] bg-white p-5 rounded-xl shadow-lg ">
                <h1 class="text-xl font-bold text-red-500">IncoT(Incoterms yang digunakan dalam pengiriman ekspor.)
                </h1>
                <h2 class="text-sm text-gray-500">klik tombol dibawah untuk mengelola</h2>
                <table class="w-full">
                    <thead class="divide-y divide-gray-200">
                        <tr>
                            <td>
                                <div class="flex w-full py-5  justify-between ">

                                    <a href="/lainnya/incot"
                                        class=" gap-1 flex items-center py-1 px-3 bg-red-500 rounded text-white ">
                                        <span class="  ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[15px]" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-pen-icon lucide-file-pen">
                                                <path d="M12.5 22H18a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v9.5" />
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                                <path
                                                    d="M13.378 15.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                            </svg>
                                        </span>
                                        <span class=" ">Kelola</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 uppercase">
                            <td class="py-2 bg-gray-50 px-3">Deskripsi ncoT</td>

                        </tr>
                    </thead>
                    <tbody class="text-[12px]">
                        <tr>
                            <td class="py-2 px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Exercitationem quaerat voluptatem eveniet rerum porro officiis, ipsam dolorum
                                voluptates amet ducimus!</td>

                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="w-full lg:w-[48%] bg-white p-5 rounded-xl shadow-lg ">
                <h1 class="text-xl font-bold text-red-500">SU(Satuan Unit barang (BOX, LTR, KG, dll).)</h1>
                <h2 class="text-sm text-gray-500">klik tombol dibawah untuk mengelola</h2>
                <table class="w-full">
                    <thead class="divide-y divide-gray-200">
                        <tr>
                            <td>
                                <div class="flex w-full py-5  justify-between ">

                                    <a href="/lainnya/su"
                                        class=" gap-1 flex items-center py-1 px-3 bg-red-500 rounded text-white ">
                                        <span class="  ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[15px]"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-pen-icon lucide-file-pen">
                                                <path d="M12.5 22H18a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v9.5" />
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                                <path
                                                    d="M13.378 15.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                            </svg>
                                        </span>
                                        <span class=" ">Kelola</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 uppercase">
                            <td class="py-2 bg-gray-50 px-3" colspan="2">Deskripsi SU</td>

                        </tr>
                    </thead>
                    <tbody class="text-[12px]">
                        <tr>
                            <td class="py-2 px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Exercitationem quaerat voluptatem eveniet rerum porro officiis, ipsam dolorum
                                voluptates amet ducimus!</td>

                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="w-full lg:w-[48%] bg-white p-5 rounded-xl shadow-lg ">
                <h1 class="text-xl font-bold text-red-500">SJ(Jenis surat jalan yang digunakan.)</h1>
                <h2 class="text-sm text-gray-500">klik tombol dibawah untuk mengelola</h2>
                <table class="w-full">
                    <thead class="divide-y divide-gray-200">
                        <tr>
                            <td>
                                <div class="flex w-full py-5  justify-between ">

                                    <a href="/lainnya/jenis-surat-jalan"
                                        class=" gap-1 flex items-center py-1 px-3 bg-red-500 rounded text-white ">
                                        <span class="  ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[15px]"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-pen-icon lucide-file-pen">
                                                <path d="M12.5 22H18a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v9.5" />
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                                <path
                                                    d="M13.378 15.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                            </svg>
                                        </span>
                                        <span class=" ">Kelola</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 uppercase">
                            <td class="py-2 bg-gray-50 px-3" colspan="2">Deskripsi SJ</td>

                        </tr>
                    </thead>
                    <tbody class="text-[12px]">
                        <tr>
                            <td class="py-2 px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Exercitationem quaerat voluptatem eveniet rerum porro officiis, ipsam dolorum
                                voluptates amet ducimus!</td>

                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="w-full lg:w-[48%] bg-white p-5 rounded-xl shadow-lg ">
                <h1 class="text-xl font-bold text-red-500">Type Kend(Jenis kendaraan pengangkut.)</h1>
                <h2 class="text-sm text-gray-500">klik tombol dibawah untuk mengelola</h2>
                <table class="w-full">
                    <thead class="divide-y divide-gray-200">
                        <tr>
                            <td>
                                <div class="flex w-full py-5  justify-between ">

                                    <a href="/lainnya/vehicle-type"
                                        class=" gap-1 flex items-center py-1 px-3 bg-red-500 rounded text-white ">
                                        <span class="  ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[15px]"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-pen-icon lucide-file-pen">
                                                <path d="M12.5 22H18a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v9.5" />
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                                <path
                                                    d="M13.378 15.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                            </svg>
                                        </span>
                                        <span class=" ">Kelola</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 uppercase">
                            <td class="py-2 bg-gray-50 px-3" colspan="2">Deskripsi Type kendaraan</td>

                        </tr>
                    </thead>
                    <tbody class="text-[12px]">
                        <tr>
                            <td class="py-2 px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Exercitationem quaerat voluptatem eveniet rerum porro officiis, ipsam dolorum
                                voluptates amet ducimus!</td>

                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="w-full lg:w-[48%] bg-white p-5 rounded-xl shadow-lg ">
                <h1 class="text-xl font-bold text-red-500">Type Cust(Tipe pelanggan (distributor, toko, dll).)</h1>
                <h2 class="text-sm text-gray-500">klik tombol dibawah untuk mengelola</h2>
                <table class="w-full">
                    <thead class="divide-y divide-gray-200">
                        <tr>
                            <td>
                                <div class="flex w-full py-5  justify-between ">

                                    <a href="/lainnya/customer-type"
                                        class=" gap-1 flex items-center py-1 px-3 bg-red-500 rounded text-white ">
                                        <span class="  ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[15px]"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-pen-icon lucide-file-pen">
                                                <path d="M12.5 22H18a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v9.5" />
                                                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                                <path
                                                    d="M13.378 15.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                            </svg>
                                        </span>
                                        <span class=" ">Kelola</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 uppercase">
                            <td class="py-2 bg-gray-50 px-3" colspan="2">Deskripsi Type Cust</td>

                        </tr>
                    </thead>
                    <tbody class="text-[12px]">
                        <tr>
                            <td class="py-2 px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Exercitationem quaerat voluptatem eveniet rerum porro officiis, ipsam dolorum
                                voluptates amet ducimus!</td>

                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
