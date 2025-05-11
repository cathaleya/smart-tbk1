<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full text-[12px] bg-white p-5 rounded-md font-inter">
        <div class="flex justify-between pb-5 border-b mb-5">
            <div class="flex gap-5">
                <img src="{{ asset('img/logo/smart-logo.svg') }}" alt="" class="w-[150px]">
                <div class="">
                    <h1 class="text-[15px] font-bold">PT. SINAR MAS AGRO RESOURCES AND TECHNOLOGY TBK. (PT. SMART TBK)
                    </h1>
                    <h2 class="text-gray-500">Kompleks Pergudangan Marunda Center Blok D No. 1</h2>
                    <h2 class="text-gray-500">Bekasi 17211</h2>
                </div>
            </div>
            {!! DNS2D::getBarcodeHTML(
                url('/ekspedisi/update/' . base64_encode($transaction->transport->id)),
                'QRCODE',
                2,
                2,
            ) !!}

        </div>
        <div class="pb-5 flex ">
            <div class="">
                <h1>Kepada Yth:</h1>
                <h2>{{ $transaction->address }}</h2>
            </div>
        </div>
        <div class="pb-5">
            <table class="w-full">
                <tr class="border">
                    <td colspan="2" class="p-2">
                        <h1 class="font-bold text-[15px] uppercase">Surat jalan</h1>
                        <p class="text-gray-500">(DELIVERY NOTE)</p>
                    </td>
                </tr>
                <tr class="border">
                    <td class="p-2 border">Number Date</td>
                    <td class="p-2 border">
                        {{ $transaction->no_do . '/' . \Carbon\Carbon::parse($transaction->tanggal_transaksi_dibuat)->isoFormat('DD.MM.YYYY') }}
                    </td>
                </tr>
                <tr class="border">
                    <td class="p-2 border">Reference NO</td>
                    <td class="p-2 border">{{ $transaction->transport->reference_no }}</td>
                </tr>
                <tr class="border">
                    <td class="p-2 border">Reference Date</td>
                    <td class="p-2 border">
                        {{ \Carbon\Carbon::parse($transaction->transport->reference_date)->isoFormat('DD.MM.YYYY') }}
                    </td>
                </tr>
                <tr class="border">
                    <td class="p-2 border">Seal No</td>
                    <td class="p-2 border">{{ $transaction->transport->sheal }}</td>
                </tr>
                <tr class="border">
                    <td class="p-2 border">Customer No</td>
                    <td class="p-2 border">{{ $transaction->customer_no }}</td>
                </tr>
                <tr class="border">
                    <td class="p-2 border">Container No</td>
                    <td class="p-2 border">{{ $transaction->transport->no_container }}</td>
                </tr>
                <tr class="border">
                    <td class="p-2 border">Condition Delivery </td>
                    <td class="p-2 border">{{ $transaction->transport->incotrelation->name }}</td>
                </tr>
                <tr class="border">
                    <td class="p-2 border">Plant </td>
                    <td class="p-2 border">{{ $transaction->transport->plant }}</td>
                </tr>
                <tr class="border">
                    <td class="p-2 border">Plant </td>
                    <td class="p-2 border">
                        {{ $transaction->transport->vehicle_no . '/' . $transaction->transport->jam_kedatangan }}</td>
                </tr>
            </table>
        </div>
        <div class="pb-5">
            <table class="w-full">
                <tr class="border-b bg-gray-100">
                    <td colspan="2" class="capitalize p-2">Material Description</td>
                    <td class="capitalize p-2">quantity</td>
                    <td class="capitalize p-2">UoM</td>
                    <td class="capitalize p-2">SLoc</td>
                </tr>

                <tr class="border-b">
                    <td class="capitalize p-2">{{ $transaction->material->material_number }}</td>
                    <td class="capitalize p-2">{{ $transaction->material->description }}</td>
                    <td class="capitalize p-2">{{ $transaction->qty }}</td>
                    <td class="capitalize p-2">{{ $transaction->itemunit->name }}</td>
                    <td class="capitalize p-2">{{ $transaction->slocrelation->name }}</td>
                </tr>
                <tr>
                    <td colspan="5" class="capitalize p-2">Sales Order :{{ $transaction->no_so }}</td>
                </tr>
                <tr>
                    <td colspan="5" class="capitalize p-2">Shipment : {{ $transaction->transport->shipment }}</td>
                </tr>

            </table>
        </div>
    </div>
</x-admin-layout>
