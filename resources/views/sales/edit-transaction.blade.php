<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full  p-5 bg-white rounded-xl shadow-lg font-inter text-[12px]">
        <div class="w-full mb-5 border-b pb-5">
            <h1 class="text-xl font-bold">Tambah Data Transaksi</h1>
            <h2 class=" text-gray-500">Data dibawah ini akan menjadi acuan untuk transaksi yang terjadi dan akan
                dikirimkan ke tim transport,warehouse,dan ekspedisi.</h2>
        </div>

        <div class="w-full flex flex-col lg:flex-row py-5">
            <div class="w-full lg:w-[20%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                <h1 class="text-md font-bold">General Information</h1>
                <h2 class="text-[10px] text-gray-500">Setelah data ini dikirimkan,kami akan menginformasikan ke tim
                    transport
                    untuk menyiapkan data
                    transportasi untuk laporan ini,setelah tim transport mengisi,maka akan diserahkan ke tim gudang dan
                    setelah proses loading selesai data ini juga akan dikirimkan ke ekspedisi untuk mengupdate status
                    pengiriman barang realtime</h2>
            </div>
            <form action="/transaction/edit-data" method="POST" class="w-full lg:w-[80%]">
                <div class=" w-full flex lg:flex-row flex-col flex-wrap gap-5 justify-end">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}" id="">
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">Tanggal</h1>
                        <input required required type="datetime-local" name="tanggal"
                            value="{{ $data->tanggal_transaksi_dibuat }}"
                            class="w-full focus:outline-none py-1 px-3 border border-gray-500 rounded-md">
                        @error('tanggal')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">RDD</h1>
                        <input required required type="datetime-local" name="rdd" value="{{ $data->rdd }}"
                            class="w-full py-1 px-3 border border-gray-500 rounded-md">
                        @error('rdd')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">No DO</h1>
                        <input required required type="number" name="no_do" value="{{ $data->no_do }}"
                            class=" w-full focus:outline-none focus:border-2 focus:border-red-500 py-1 px-3 border border-gray-500 rounded-md"
                            placeholder="Masukkan nomor delivery order">

                        @error('no_do')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">No SO</h1>
                        <input required required type="number" name="no_so" value="{{ $data->no_so }}"
                            class=" w-full focus:outline-none focus:border-2 focus:border-red-500 py-1 px-3 border border-gray-500 rounded-md"
                            placeholder="Masukkan nomor so">

                        @error('no_so')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">No PO</h1>
                        <input required required type="number" name="no_po" value="{{ $data->no_po }}"
                            class=" w-full focus:outline-none focus:border-2 focus:border-red-500 py-1 px-3 border border-gray-500 rounded-md"
                            placeholder="Masukkan nomor po">

                        @error('no_po')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">Ref Doc</h1>
                        <input required required type="number" name="ref_doc" value="{{ $data->ref_doc }}"
                            class=" w-full focus:outline-none focus:border-2 focus:border-red-500 py-1 px-3 border border-gray-500 rounded-md"
                            placeholder="Masukkan referensi dokumen">

                        @error('ref_Doc')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">Pelanggan</h1>
                        <input required required type="text" name="pelanggan" value="{{ $data->pelanggan }}"
                            class=" w-full focus:outline-none focus:border-2 focus:border-red-500 py-1 px-3 border border-gray-500 rounded-md"
                            placeholder="Masukkan nama pelanggan">
                        @error('pelanggan')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">Customer No</h1>
                        <input required required type="number" name="customer_no" value="{{ $data->customer_no }}"
                            class=" w-full focus:outline-none focus:border-2 focus:border-red-500 py-1 px-3 border border-gray-500 rounded-md"
                            placeholder="Masukkan nama customer_no">
                        @error('customer_no')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">Address</h1>
                        <input required required type="text" name="address" value="{{ $data->address }}"
                            class=" w-full focus:outline-none focus:border-2 focus:border-red-500 py-1 px-3 border border-gray-500 rounded-md"
                            placeholder="Masukkan nama address">
                        @error('address')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
               
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">Kode material </h1>
                        <select required name="kode_material"
                            class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md">
                            <option disabled>Kode material </option>
                            @if (count($kodematerial) > 0)
                                {
                                @foreach ($kodematerial as $km)
                                    @if ($km->id == $data->kode_material)
                                        <option value="{{ $km->id }}" selected> {{ $km->material_number }}
                                        </option>
                                    @endif
                                    <option value="{{ $km->id }}" selected> {{ $km->material_number }}</option>
                                @endforeach
                                }
                            @endif
                        </select>

                        @error('kode_material')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">Quantity (Qty) </h1>
                        <input required required type="number" name="qty" value="{{ $data->qty }}"
                            class=" w-full focus:outline-none focus:border-2 focus:border-red-500 py-1 px-3 border border-gray-500 rounded-md"
                            placeholder="Masukkan quantity">

                        @error('qty')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">SU (Satuan unit) </h1>
                        <select required name="su"
                            class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md">
                            <option disabled selected>silahkan pilih </option>
                            @if (count($sus) > 0)
                                {
                                @foreach ($sus as $su)
                                    @if ($su->id == $data->su)
                                        <option value="{{ $su->id }}" selected> {{ $su->name }}</option>
                                    @endif
                                    <option value="{{ $su->id }}"> {{ $su->name }}</option>
                                @endforeach
                                }
                            @endif
                        </select>

                        @error('su')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">Sloc </h1>
                        <select required name="sloc"
                            class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md">
                            <option disabled selected>silahkan pilih </option>
                            @if (count($slocs) > 0)
                                {
                                @foreach ($slocs as $sloc)
                                    @if ($sloc->id == $data->sloc)
                                        <option value="{{ $sloc->id }}" selected> {{ $sloc->name }}</option>
                                    @endif
                                    <option value="{{ $sloc->id }}" selected> {{ $sloc->name }}</option>
                                @endforeach
                                }
                            @endif
                        </select>
                        @error('sloc')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>



                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">Pilih Negara </h1>
                        <select required name="kode_negara" id="select-negara-edit"
                            class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md">
                            <option disabled selected>silahkan pilih </option>
                            @if (count($negaras) > 0)
                                {

                                @foreach ($negaras as $negara)
                                    @if ($negara['id'] == $data->kode_negara)
                                        <option value="{{ $negara['id'] }}" selected>
                                            {{ $negara['name'] }}</option>
                                    @endif
                                    <option value="{{ $negara['id'] }}">
                                        {{ $negara['name'] }}</option>
                                @endforeach
                                }
                            @endif
                        </select>
                        @error('kode_negara')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">Pilih Kota </h1>
                        <select required name="kota" id="select-kota-edit"
                            class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md">
                            <option disabled selected>silahkan pilih </option>
                            @if (count($kotas) > 0)
                                {

                                @foreach ($kotas as $kota)
                                    @if ($kota['name'] == $data->kota)
                                        <option value="{{ $kota['name'] }}" selected>
                                            {{ $kota['name'] }}</option>
                                    @endif
                                    <option value="{{ $kota['name'] }}">
                                        {{ $kota['name'] }}</option>
                                @endforeach
                                }
                            @endif
                        </select>
                        @error('kota')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">No Count</h1>
                        <input required name="no_count" required type="text" value="{{ $data->no_count }}"
                            class=" w-full focus:outline-none    focus:border-2 focus:border-red-50b0 py-1 px-3 border border-gray-500 rounded-md"
                            placeholder="Masukkan nama pelanggan">
                        @error('no_count')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">Type Customer </h1>
                        <select required
                            name="type_customer"class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md">
                            <option disabled selected>silahkan pilih </option>
                            @if (count($customertypes) > 0)
                                {
                                @foreach ($customertypes as $customertype)
                                    @if ($customertype->id == $data->type_customer)
                                        <option value="{{ $customertype->id }}" selected>
                                            {{ $customertype->name }}</option>
                                    @endif
                                    <option value="{{ $customertype->id }}">
                                        {{ $customertype->name }}</option>
                                @endforeach
                                }
                            @endif
                        </select>
                        @error('type_customer')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">Berat/KG</h1>
                        <input required name="berat_kg" required type="number" value="{{ $data->berat_kg }}"
                            class=" w-full focus:outline-none focus:border-2 focus:border-red-500 py-1 px-3 border border-gray-500 rounded-md"
                            placeholder="Masukkan nama pelanggan">
                        @error('berat_kg')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">TT/KG</h1>
                        <input required name="tt_kg" required type="number" value="{{ $data->tt_kg }}"
                            class=" w-full focus:outline-none focus:border-2 focus:border-red-500 py-1 px-3 border border-gray-500 rounded-md"
                            placeholder="Masukkan nama pelanggan">
                        @error('tt_kg')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class=" w-full lg:w-[30%]">
                        <h1 class="font-bold">Tonase</h1>
                        <input required name="tonase" required type="number" value="{{ $data->tonase }}"
                            class=" w-full focus:outline-none focus:border-2 focus:border-red-500 py-1 px-3 border border-gray-500 rounded-md"
                            placeholder="Masukkan nama pelanggan">
                        @error('tonase')
                            <div class="text-[12px] text-red-500 ">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                </div>
                <div class="my-5 text-end ">
                    <button
                        class="py-2 px-3 bg-red-500 text-white rounded-lg hover:cursor-pointer hover:bg-red-600">Kirim
                        data</button>
                </div>
            </form>
        </div>

    </div>
</x-admin-layout>
