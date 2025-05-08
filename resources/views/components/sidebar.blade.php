
<aside class="lg:w-[20%]   shadow-2xl font-bold text-gray-500 overflow-hidden">
    <aside id="sidebar"
        class="fixed lg:w-[20%] transition ease-out duration-700 translate-x-[-100%] lg:translate-x-0 w-[50%] h-full bg-white  overflow-hidden">
        <div class="flex h-[10%]  justify-start items-center pl-5">
            <img src="{{ asset('img/logo/smart-logo.svg') }}" alt="" class="w-[150px] bg-white rounded-lg">
        </div>
        <div class=" flex h-[50%] flex-col gap-2 px-5  my-5 overflow-y-scroll text-[10px] lg:text-[15px]">
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
            <a href="{{ route('user.index') }}"
                class="{{ Request::is('user') ? 'bg-red-500 text-white ' : 'text-gray-500 hover:bg-gray-100' }} flex py-3 px-5 justify-start pl-2 rounded-lg    ">
                <span class="flex gap-2 items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-round-icon lucide-users-round"><path d="M18 21a8 8 0 0 0-16 0"/><circle cx="10" cy="8" r="5"/><path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"/></svg>
                    <span>Semua Pengguna</span>
                </span>
            </a>
            <a href="{{ route('delivery-order') }}"
                class="{{ Request::is('delivery-order*') ? 'bg-red-500 text-white' : 'text-gray-500 hover:bg-gray-100' }} flex py-3 px-5 justify-start pl-2 rounded-lg  ">
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
                    <span>Delivery Order</span>
                </span>
            </a>
            <a href="{{ route('warehouse') }}"
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
            <a href="{{ route('transport') }}"
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
        </div>
        <div class="w-full h-[40%] border-t-2 border-gray-200 p-5 flex flex-col gap-2">
            <div class="w-full flex py-2 ">
                <div class="">
                    <img src="{{ asset('img/profile/default.jpeg') }}" alt="" class="w-[50px]">
                </div>
                <div class="flex flex-col justify-center ml-3">
                    <h1 class="text-[20px] pl-2">{{ Auth::user()->name }}</h1>
                    <span class="text-red-500 text-[10px] py-1 px-3 rounded-full border">Developer </span>
                </div>
            </div>
            <div class="w-full text-[10px] lg:text-[15px]">
                <a href="{{ route('user.edit', Auth::user()->id) }}"
                    class="{{ Request::is('user/*/edit') ? 'bg-red-500 text-white' : 'text-gray-500 hover:bg-gray-100' }}  flex py-3 px-5 justify-start pl-2 rounded-lg   ">
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
                <span class="flex py-3 px-5 justify-start pl-2 rounded-lg hover:bg-gray-100  cursor-pointer">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <span class="flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-log-out-icon lucide-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                <polyline points="16 17 21 12 16 7" />
                                <line x1="21" x2="9" y1="12" y2="12" />
                            </svg>
                            <button type="submit" class="">Logout</button>
                        </span>
                    </form>
                </span>
            </div>
        </div>
    </aside>
</aside>
