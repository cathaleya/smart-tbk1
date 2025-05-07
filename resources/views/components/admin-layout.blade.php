<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-full h-screen flex font-inter">
        <x-sidebar></x-sidebar>
        <div class="w-[80%] bg-gray-200">
            <nav class="w-full  h-[80px] flex justify-between items-center px-5 text-red-500">
             <div class="">
              <h1 class="font-bold text-[30px]">Dashboard</h1>
             </div>
            </nav>
            <main class="px-5">
              {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
