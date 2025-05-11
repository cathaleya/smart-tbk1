<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="w-full">
        <div class="w-full bg-white  rounded-lg shadow-md  border  p-5">
            <div class="w-full ">
                <div class="w-full flex justify-between">
                    <div class="w-full mb-5 border-b pb-5">
                        <h1 class="text-xl font-bold uppercase">Input Data Transport</h1>
                        <h2 class=" text-gray-500 text-[12px]">Anda dapat memasukan banyak data delivery order kedalam satu data transport.</h2>
                    </div>

                </div>

                <div class="w-full flex flex-col lg:flex-row py-5 text-[12px] border-b">
                    <div class="w-full lg:w-[20%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        <h1 class="text-xl font-bold ">Data Transport</h1>
                        <h2 class=" text-gray-500">Silahkan pilih beberapa do untuk memasukkanya kedalam data transport,data transport mewakili satu pengiriman</h2>
                    </div>
                    <div class="w-full lg:w-[80%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        <form action="/transport/tambah-data" class="w-full" method="post">
                            @csrf
                            <table class="w-full border">
                                <tr class="border p-2">
                                    <td class="border  p-2">Tanggal</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <input type="date" name="tanggal"
                                                class="w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                            @error('tanggal')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Jam Kedatangan</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <input type="time" name="jam_kedatangan"
                                                class="w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                            @error('jam_kedatangan')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Pilih beberapa do yang akan dikirim</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <select name="do_id[]" multiple id=""
                                                class="js-example-basic-multiple w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                                @if (count($dooptions) > 0)
                                                    @foreach ($dooptions as $dooption)
                                                        <option value="{{ $dooption->id }}">{{ $dooption->no_do }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('do_id')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Transporter </td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <select name="transporter_id" id=""
                                                class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                                <option value="" disabled selected>Pilih Transporter</option>
                                                @if (count($transporters) > 0)
                                                    @foreach ($transporters as $transporter)
                                                        <option value="{{ $transporter->id }}">{{ $transporter->name }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('transporter_id')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Type SJ</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <select name="type_sj" id=""
                                                class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                                <option value="" disabled selected>Pilih Tipe surat jalan</option>
                                                @if (count($typesjs) > 0)
                                                    @foreach ($typesjs as $typesj)
                                                        <option value="{{ $typesj->id }}">{{ $typesj->name }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('type_sj')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Type Kendaraan</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <select name="type_kend" id=""
                                                class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                                <option value="" disabled selected>Pilih Tipe kendaraan</option>
                                                @if (count($typekends) > 0)
                                                    @foreach ($typekends as $typekend)
                                                        <option value="{{ $typekend->id }}">{{ $typekend->name }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('type_kend')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2"> Incot</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <select name="incot" id=""
                                                class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                                <option value="" disabled selected>Pilih Jenis IncoT</option>
                                                @if (count($incots) > 0)
                                                    @foreach ($incots as $incot)
                                                        <option value="{{ $incot->id }}">{{ $incot->name }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('incot')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Vehicle No</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <input type="text" name="vehicle_no"
                                                class="w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                            @error('vehicle_no')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">No Container</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <input type="text" name="no_container"
                                                class="w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                            @error('no_container')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">No Sheal</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <input type="text" name="no_sheal"
                                                class="w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                            @error('no_sheal')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Reference No</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <input type="text" name="reference_no"
                                                class="w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                            @error('reference_no')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Reference Date</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <input type="datetime-local" name="reference_date"
                                                class="w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                            @error('reference_date')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Plant</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <input type="text" name="plant"
                                                class="w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                            @error('plant')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Shipment</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <input type="number" name="shipment"
                                                class="w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                            @error('shipment')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="w-full flex justify-end p-5">
                                            <button type="submit"
                                                class="py-2 px-3 hover:cursor-pointer rounded-md bg-red-500 hover:bg-red-700 text-white">Simpan
                                                Data</button>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


</x-admin-layout>
