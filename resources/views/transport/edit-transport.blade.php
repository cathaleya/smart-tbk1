<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="w-full">
        <div class="w-full bg-white  rounded-lg shadow-md  border  p-5">
            <div class="w-full ">
                <div class="w-full flex justify-between">
                    <div class="w-full mb-5 border-b pb-5">
                        <h1 class="text-xl font-bold uppercase">Ubah Data Transport</h1>
                        <h2 class=" text-gray-500 text-[12px]">Anda dapat memasukan banyak data delivery order kedalam
                            satu data transport.</h2>
                    </div>

                </div>

                <div class="w-full flex flex-col lg:flex-row py-5 text-[12px] border-b">
                    <div class="w-full lg:w-[20%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        <h1 class="text-xl font-bold ">Data Transport</h1>
                        <h2 class=" text-gray-500">Silahkan pilih beberapa do untuk memasukkanya kedalam data
                            transport,data transport mewakili satu pengiriman</h2>
                    </div>
                    <div class="w-full lg:w-[80%] mb-5 lg:mb-0 lg:pr-5 text-balance">
                        <form action="/transport/edit" class="w-full" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $transport->id }}">
                            <table class="w-full border">
                                <tr class="border p-2">
                                    <td class="border  p-2">Tanggal</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <input type="datetime-local" required name="tanggal"
                                                value="{{ $transport->created_at }}"
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
                                            <input type="time" required name="jam_kedatangan"
                                                value="{{ $transport->jam_kedatangan }}"
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
                                            <select name="do_id[]" multiple id="" required
                                                class="js-example-basic-multiple w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                                @if (count($dooptions) > 0)
                                                    @foreach ($dooptions as $dooption)
                                                        <option value="{{ $dooption->id }}"
                                                            {{ in_array($dooption->id, $selectedId) ? 'selected' : '' }}>
                                                            {{ $dooption->no_do }}
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
                                            <select name="transporter_id" id="" required
                                                value="{{ $transport->transporter_id }}"
                                                class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                                <option value="" disabled selected>Pilih Transporter</option>
                                                @if (count($transporters) > 0)
                                                    @foreach ($transporters as $transporter)
                                                        @if ($transporter->id == $transport->transporter_id)
                                                            <option value="{{ $transporter->id }}" selected>
                                                                {{ $transporter->name }}
                                                            </option>
                                                        @endif
                                                        <option value="{{ $transporter->id }}">
                                                            {{ $transporter->name }}
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
                                            <select name="type_sj" id="" required
                                                class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                                <option value="" disabled selected>Pilih Tipe surat jalan</option>
                                                @if (count($typesjs) > 0)
                                                    @foreach ($typesjs as $typesj)
                                                        @if ($typesj->id == $transport->type_sj)
                                                            <option value="{{ $typesj->id }}" selected>
                                                                {{ $typesj->name }}
                                                            </option>
                                                        @endif
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
                                            <select name="type_kend" id="" required
                                                class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                                <option value="" disabled selected>Pilih Tipe kendaraan</option>
                                                @if (count($typekends) > 0)
                                                    @foreach ($typekends as $typekend)
                                                        @if ($typekend->id == $transport->type_kend)
                                                            <option value="{{ $typekend->id }}" selected>
                                                                {{ $typekend->name }}
                                                            </option>
                                                        @endif
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
                                            <select name="incot" id="" required
                                                class="js-example-basic-single w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                                <option value="" disabled selected>Pilih Jenis IncoT</option>
                                                @if (count($incots) > 0)
                                                    @foreach ($incots as $incot)
                                                        @if ($incot->id == $transport->incot)
                                                            <option value="{{ $incot->id }}" selected>
                                                                {{ $incot->name }}
                                                            </option>
                                                        @endif
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
                                    <td class="border  p-2">Reference No</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <input type="text" name="reference_no" value="{{ $transport->reference_no }}"
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
                                            <input type="datetime-local" name="reference_date" value="{{ $transport->reference_date }}"
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
                                            <input type="text" name="plant" value="{{ $transport->plant }}"
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
                                            <input type="number" name="shipment" value="{{ $transport->shipment }}"
                                                class="w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                            @error('shipment')
                                                <div class="text-[12px] text-red-500 ">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border p-2">
                                    <td class="border  p-2">Vessel Name</td>
                                    <td class="border  p-2">
                                        <div class="w-full">
                                            <input type="text" name="vessel_name" value="{{ $transport->vessel_name }}"
                                                class="w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                            @error('vessel_name')
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
                                            <input type="text" name="vehicle_no" required
                                                value="{{ $transport->vehicle_no }}"
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
                                            <input type="text" name="no_container" required
                                                value="{{ $transport->no_container }}"
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
                                            <input type="text" name="no_sheal" value="{{ $transport->sheal }}"
                                                required
                                                class="w-full py-1 px-3 border border-gray-500 rounded-md focus:outline-none">
                                            @error('no_sheal')
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
