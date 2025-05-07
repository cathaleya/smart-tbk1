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
        <div class="w-full lg:w-[80%] bg-gray-200">
            <nav class="w-full  h-[80px] flex justify-between items-center px-5 text-red-500">
             <div class="">
              <h1 class="font-bold text-[30px]">Dashboard</h1>
             </div>
             <span id="sidebar-toggle" class="lg:hidden cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu"><path d="M4 12h16"/><path d="M4 18h16"/><path d="M4 6h16"/></svg>
             </span>
            </nav>
            <main class="px-5">
              {{ $slot }}
            </main>
        </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
