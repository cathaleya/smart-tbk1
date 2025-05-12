<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Orderan Dikirim</title>
</head>

<body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color:#e5e7eb;">

    <div style="width: 100%; display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div style="max-width: 600px; width: 100%; padding: 20px; border-radius: 8px; background-color: white;">

            <div style="display: flex; flex-direction: column; gap: 20px; margin-bottom: 20px;">
                <img src="{{ asset('img/logo/smart-logo.svg') }}" alt="Logo" style="width:150px; display:block;">
                <div>
                    <h1 style="font-size: 15px; font-weight: bold;">PT. SINAR MAS AGRO RESOURCES AND TECHNOLOGY TBK. (PT.
                        SMART TBK)</h1>
                    <h2 style="color: #6b7280;">Kompleks Pergudangan Marunda Center Blok D No. 1</h2>
                    <h2 style="color: #6b7280;">Bekasi 17211</h2>
                </div>
            </div>

            <div style="margin-bottom: 20px;">
                <h1 style="font-size: 20px; font-weight: bold;">Hi {{ $user->name }}</h1>
                <h2 style="font-size: 14px;">Ada pengiriman baru nih!</h2>
            </div>

            <table style="width: 100%; margin-bottom: 20px; border-collapse: collapse;">
                <tr style="border-top: 1px solid #e5e7eb; border-bottom: 1px solid #e5e7eb;">
                    <td style="padding: 10px;">Ekspedisi</td>
                    <td style="padding: 10px;">No-Kendaraan</td>
                    <td style="padding: 10px;">ETA</td>
                </tr>
                <tr style="border-bottom: 1px solid #e5e7eb;">
                    <td style="padding: 10px;">{{ $transport->transporter->name }}</td>
                    <td style="padding: 10px;">{{ $transport->vehicle_no }}</td>
                    <td style="padding: 10px;">
                        {{ \Carbon\Carbon::parse($transport->eta)->locale('id')->isoFormat('LL') }}
                    </td>
                </tr>
            </table>

            <table style="width: 100%; margin-bottom: 20px; border-collapse: collapse;">
                <tr style="border-top: 1px solid #e5e7eb; border-bottom: 1px solid #e5e7eb;">
                    <td style="padding: 10px;">No DO</td>
                    <td style="padding: 10px;">Material number</td>
                    <td style="padding: 10px;">Material desc</td>
                </tr>
                @if ($transport)
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 10px;">
                            <ul style="margin: 0; padding-left: 15px;">
                                @foreach ($transport->transaction as $ts)
                                    <li>{{ $ts->no_do }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td style="padding: 10px;">
                            <ul style="margin: 0; padding-left: 15px;">
                                @foreach ($transport->transaction as $ts)
                                    <li>{{ $ts->material->material_number }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td style="padding: 10px;">
                            <ul style="margin: 0; padding-left: 15px;">
                                @foreach ($transport->transaction as $ts)
                                    <li>{{ $ts->material->description }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endif
            </table>

            <div>
                <p>Sekian informasi yang kami sampaikan yaaa.</p>
            </div>
        </div>
    </div>
</body>

</html>
