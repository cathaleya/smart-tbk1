<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-full h-screen flex font-inter ">
        <x-sidebar></x-sidebar>
        <div class="w-full lg:w-[80%] bg-gray-100">
            <nav class="lg:hidden h-[80px] flex justify-end items-center px-5">
                <span id="sidebar-toggle" class="text-red-500 hover:cursor-pointer">
                    <svg id="" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu"><path d="M4 12h16"/><path d="M4 18h16"/><path d="M4 6h16"/></svg>
                </span>
                
            </nav>
            <main class="p-2 lg:p-5 ">
                {{ $slot }}
            </main>
            <footer class=" p-5 text-[13px]">
                <div class="w-full bg-white shadow mb-5 p-5 rounded-full">
                    <span class="flex gap-1 justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-copyright-icon lucide-copyright">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M14.83 14.83a4 4 0 1 1 0-5.66" />
                        </svg>
                        <span>Nenden Amelia</span>
                        <span>{{ now()->isoFormat('YYYY') }}</span>
                    </span>
                </div>

            </footer>
        </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
