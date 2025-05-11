<x-pengunjung-layout>
    <div class="w-full min-h-screen flex justify-center items-center bg-gray-100 font-inter">
        <div class="lg:w-[80%] px-5 bg-white rounded-md ">
            <div class="flex lg:flex-row flex-col lg:justify-between items-center">
                <div class="order-2 lg:order-1 py-5 lg:py-0">
                    <h1 class="text-red-500 text-xl font-bold">Update Informasi Pengiriman barang</h1>
                    <h2 class="text-gray-500">silahkan klik tombol dibawah untuk mengupdate data perjalanan ekspedisi
                    </h2>
                </div>
                <img src="{{ asset('img/logo/smart-logo.svg') }}" class="w-[200px] order-1 lg:order-2" alt="">
            </div>
            <div class="">
                <table class="w-full">
                    <tr class="border">
                        <td class="p-2 border">Alamat</td>
                        <td class="p-2 border">
                            <div class="">
                                @foreach ($transport->transaction as $ts)
                                    <li class="list-none">{{ $ts->address }}</li>
                                @endforeach
                            </div>
                        </td>
                    </tr>
                    <tr class="border">
                        <td class="p-2 border">Material</td>
                        <td class="p-2 border">
                            <div class="">
                                @foreach ($transport->transaction as $ts)
                                    <li class="list-none">{{ $ts->material->description }}</li>
                                @endforeach
                            </div>
                        </td>
                    </tr>
                    <tr class="border">
                        <td class="p-2 border">Transporter</td>
                        <td class="p-2 border">
                            {{ $transport->transporter->name }}
                        </td>
                    </tr>
                    <tr class="border">
                        <td class="p-2 border">Nomor Kendaraan</td>
                        <td class="p-2 border">
                            {{ $transport->vehicle_no }}
                        </td>
                    </tr>
                    <tr class="border">
                        <td class="p-2 border">Destinasi Selanjutnya</td>
                        <td class="p-2 border">
                            {{ $tujuanselanjutnya }}
                        </td>
                    </tr>
                    <tr>
                      <td colspan="2" class="p-3 text-center">
                        <a href="/ekspedisi/update-status/{{ $transport->id }}"><Button class="py-2 px-3 bg-red-500 text-white rounded-md">Selesai</Button></a>
                      </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-pengunjung-layout>
