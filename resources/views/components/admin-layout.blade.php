<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



    @vite('resources/css/app.css')

</head>

<body>
    @if (session('notification'))
        <x-notification>{{ session('notification') }}</x-notification>
    @endif
    <x-loading-screen></x-loading-screen>
    <div class="w-full h-screen flex font-inter overflow-x-hidden">
        <x-sidebar></x-sidebar>
        <div class="w-full lg:w-[80%] bg-gray-100">
            <nav class="lg:hidden md:hidden h-[80px] flex justify-between items-center px-5">
                <img src="{{ asset('img/logo/smart-logo.svg') }}" alt="" class="w-[150px]">
                <span id="sidebar-toggle" class="text-red-500 hover:cursor-pointer">
                    <svg id="" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu">
                        <path d="M4 12h16" />
                        <path d="M4 18h16" />
                        <path d="M4 6h16" />
                    </svg>
                </span>

            </nav>
            <main class="p-2 lg:p-5  ">
                {{ $slot }}
            </main>
            <footer class=" p-5 text-[13px]">
                <div class="w-full bg-red-500 text-white shadow mb-5 p-5 rounded-full">
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
    {{-- select2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- chartjs --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"
        integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        AOS.init();
    </script>

</body>

</html>
