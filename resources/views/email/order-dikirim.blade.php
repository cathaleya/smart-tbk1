<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orderan Dikirim</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-full flex justify-center h-screen items-center bg-gray-200 font-inter lg:text-sm text-[10px]">
        <div class="lg:min-w-[50%] min-w-full p-5 rounded-md  bg-white">
            <div class="flex lg:flex-row flex-col  mb-5 gap-5">
                <img src="{{ asset('img/logo/smart-logo.svg') }}" alt="" class="w-[150px] lg:block hidden">
                <div class="">
                    <h1 class="text-[15px] font-bold">PT. SINAR MAS AGRO RESOURCES AND TECHNOLOGY TBK. (PT. SMART TBK)
                    </h1>
                    <h2 class="text-gray-500">Kompleks Pergudangan Marunda Center Blok D No. 1</h2>
                    <h2 class="text-gray-500">Bekasi 17211</h2>
                </div>
            </div>
            <div class="mb-5">
                <h1 class="text-xl font-bold">Hi {{ $user->name }}</h1>
                <h2 class="text-sm">ada pengiriman baru ni</h2>
            </div>

            <table class="w-full mb-5">
                <tr class="border-y border-gray-200">
                    <td class="whitespace-nowrap lg:p-5">Ekspedisi</td>
                    <td class="whitespace-nowrap lg:p-5">No-Kendaraan</td>
                    <td class="whitespace-nowrap lg:p-5">ETA</td>
                </tr>
                <tr class="border-y border-gray-200">
                    <td class="whitespace-nowrap lg:p-5">{{ $transport->transporter->name }}</td>
                    <td class="whitespace-nowrap lg:p-5">{{ $transport->vehicle_no }}</td>
                    <td class="whitespace-nowrap lg:p-5">
                        {{ \Carbon\Carbon::parse($transport->eta)->locale('id')->isoFormat('LL') }}</td>
                </tr>
            </table>

            <table class="w-full mb-5">
                <tr class="border-y border-gray-200">
                    <td class=" whitespace-nowrap lg:p-5">No DO</td>
                    <td class=" whitespace-nowrap lg:p-5">Material number</td>
                    <td class=" whitespace-nowrap lg:p-5">Material desc</td>
                </tr>
                @if ($transport)
                    <tr>
                        <td class=" whitespace-nowrap lg:p-5">
                            <div class="">
                                @foreach ($transport->transaction as $ts)
                                    <li class="list-none ">{{ $ts->no_do }}</li>
                                @endforeach
                            </div>
                        </td>
                        <td class=" whitespace-nowrap lg:p-5">
                            <div class="">
                                @foreach ($transport->transaction as $ts)
                                    <li class="list-none ">{{ $ts->material->material_number }}</li>
                                @endforeach
                            </div>
                        </td>
                        <td class=" whitespace-nowrap lg:p-5">
                            <div class="">
                                @foreach ($transport->transaction as $ts)
                                    <li class="list-none ">{{ $ts->material->description }}</li>
                                @endforeach
                            </div>
                        </td>
                    </tr>
                @endif
            </table>


            <div class="">
                <h1>Sekian informasi yang kami sampaikan yaaa</h1>
            </div>
        </div>
    </div>
</body>

</html>
