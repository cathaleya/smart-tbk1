<aside class="lg:w-[20%] md:hidden lg:block  shadow-2xl font-bold text-gray-500 overflow-hidden">
    <aside id="sidebar"
        class="fixed lg:w-[20%] z-[3] transition ease-out duration-700 translate-x-[-100%] lg:translate-x-0 w-[50%] h-full bg-white shadow-2xl  overflow-hidden">
        <div class="flex h-[10%]  justify-start items-center pl-5">
            <img src="{{ asset('img/logo/smart-logo.svg') }}" alt="" class="w-[150px] bg-white rounded-lg">
        </div>
        <div class=" flex h-[50%] flex-col gap-2 px-5  my-5 overflow-y-scroll text-[10px] lg:text-[13px]">
            <a href="{{ route('dashboard') }}"
                class="{{ Request::is('dashboard*') ? 'bg-red-500 text-white ' : 'text-gray-500 hover:bg-gray-100' }} flex py-3 px-5 justify-start pl-2 rounded-lg    ">
                <span class="flex gap-2 items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-chart-pie-icon lucide-chart-pie">
                        <path
                            d="M21 12c.552 0 1.005-.449.95-.998a10 10 0 0 0-8.953-8.951c-.55-.055-.998.398-.998.95v8a1 1 0 0 0 1 1z" />
                        <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                    </svg>
                    <span>Dashboard</span>
                </span>
            </a>
            @can('isAdmin')
                <a href="{{ route('user.index') }}"
                    class="{{ Request::is('user') ? 'bg-red-500 text-white ' : 'text-gray-500 hover:bg-gray-100' }} flex py-3 px-5 justify-start pl-2 rounded-lg    ">
                    <span class="flex gap-2 items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-users-round-icon lucide-users-round">
                            <path d="M18 21a8 8 0 0 0-16 0" />
                            <circle cx="10" cy="8" r="5" />
                            <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                        </svg>
                        <span>Semua Pengguna</span>
                    </span>
                </a>
                <a href="/ekspedisi"
                    class="{{ Request::is('ekspedisi*') ? 'bg-red-500 text-white ' : 'text-gray-500 hover:bg-gray-100' }} flex py-3 px-5 justify-start pl-2 rounded-lg    ">
                    <span class="flex gap-2 items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-container-icon lucide-container">
                            <path
                                d="M22 7.7c0-.6-.4-1.2-.8-1.5l-6.3-3.9a1.72 1.72 0 0 0-1.7 0l-10.3 6c-.5.2-.9.8-.9 1.4v6.6c0 .5.4 1.2.8 1.5l6.3 3.9a1.72 1.72 0 0 0 1.7 0l10.3-6c.5-.3.9-1 .9-1.5Z" />
                            <path d="M10 21.9V14L2.1 9.1" />
                            <path d="m10 14 11.9-6.9" />
                            <path d="M14 19.8v-8.1" />
                            <path d="M18 17.5V9.4" />
                        </svg>
                        <span>Ekspedisi</span>
                    </span>
                </a>
            @endcan
            @can('sales')
                <a href="/transaction"
                    class="{{ Request::is('transaction*') ? 'bg-red-500 text-white' : 'text-gray-500 hover:bg-gray-100' }} flex py-3 px-5 justify-start pl-2 rounded-lg  ">
                    <span class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-file-spreadsheet-icon lucide-file-spreadsheet">
                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                            <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                            <path d="M8 13h2" />
                            <path d="M14 13h2" />
                            <path d="M8 17h2" />
                            <path d="M14 17h2" />
                        </svg>
                        <span>Transaction</span>
                    </span>
                </a>
            @endcan
            @can('transport')
                <a href="/transport"
                    class="{{ Request::is('transport*') ? 'bg-red-500 text-white' : 'text-gray-500 hover:bg-gray-100' }} flex py-3 px-5  justify-start pl-2 rounded-lg  ">
                    <span class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-truck-icon lucide-truck">
                            <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
                            <path d="M15 18H9" />
                            <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
                            <circle cx="17" cy="18" r="2" />
                            <circle cx="7" cy="18" r="2" />
                        </svg>
                        <span>Transport</span>
                    </span>
                </a>
            @endcan
            @can('warehouse')
                <a href="/warehouse/pending"
                    class="{{ Request::is('warehouse*') ? 'bg-red-500 text-white' : 'text-gray-500 hover:bg-gray-100' }} flex py-3 px-5 justify-start pl-2 rounded-lg  ">
                    <span class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-warehouse-icon lucide-warehouse">
                            <path
                                d="M22 8.35V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.35A2 2 0 0 1 3.26 6.5l8-3.2a2 2 0 0 1 1.48 0l8 3.2A2 2 0 0 1 22 8.35Z" />
                            <path d="M6 18h12" />
                            <path d="M6 14h12" />
                            <rect width="12" height="12" x="6" y="10" />
                        </svg>
                        <span>Warehouse</span>
                    </span>
                </a>
            @endcan

            <a href="/lainnya"
                class="{{ Request::is('lainnya*') ? 'bg-red-500 text-white' : 'text-gray-500 hover:bg-gray-100' }} flex py-3 px-5  justify-start pl-2 rounded-lg  ">
                <span class="flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-gallery-vertical-end-icon lucide-gallery-vertical-end">
                        <path d="M7 2h10" />
                        <path d="M5 6h14" />
                        <rect width="18" height="12" x="3" y="10" rx="2" />
                    </svg>
                    <span>Lainnya</span>
                </span>
            </a>

        </div>
        <div class="w-full h-[40%] border-t-2 border-gray-200 p-5 flex flex-col gap-2">
            <div class="w-full flex py-2 gap-2 ">
                <div class="">
                    <img src="{{ asset(Auth::user()->picture) }}" alt=""
                        class="w-[80px] h-[80px] object-cover rounded-xl">
                </div>
                <div class="flex flex-col justify-center ">
                    <h1 class="text-[15px] pl-2">{{ Str::limit(Auth::user()->name, 15, '...') }}</h1>
                    <span
                        class="text-red-500 text-[10px] py-1 px-3 text-center rounded-full border">{{ Auth::user()->role->name }}
                    </span>
                </div>
            </div>
            <div class="w-full text-[10px] lg:text-[15px]">
                <a href="/update-profile/{{ Auth::user()->id }}"
                    class="{{ Request::is('update-profile/*') ? 'bg-red-500 text-white' : 'text-gray-500 hover:bg-gray-100' }}  flex py-3 px-5 justify-start pl-2 rounded-lg   ">
                    <span class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user-pen-icon lucide-user-pen">
                            <path d="M11.5 15H7a4 4 0 0 0-4 4v2" />
                            <path
                                d="M21.378 16.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                            <circle cx="10" cy="7" r="4" />
                        </svg>
                        <span>Profile</span>
                    </span>
                </a>
                <span class="flex py-3 px-5 justify-start pl-2 rounded-lg cursor-pointer hover:bg-gray-100 ">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <span class="flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-log-out-icon lucide-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                <polyline points="16 17 21 12 16 7" />
                                <line x1="21" x2="9" y1="12" y2="12" />
                            </svg>
                            <button type="submit" class="cursor-pointer">Logout</button>
                        </span>
                    </form>
                </span>
            </div>
        </div>
    </aside>
</aside>
