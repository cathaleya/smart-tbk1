<x-admin-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-full font-inter">
        <div class="flex lg:flex-nowrap flex-wrap lg:justify-evenly justify-center gap-2 ">
            <div class="lg:p-5 p-2 lg:w-1/4 w-[45%]  flex justify-center items-center bg-gray-200 rounded-lg">
                <div class="flex gap-2">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] text-red-500" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-users-icon lucide-users">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <circle cx="9" cy="7" r="4" />
                        </svg>
                    </div>
                    <div class="">
                        <h1 class="font-bold text-lg">{{ $totaluser ? $totaluser : '0' }}</h1>
                        <h2 class="text-gray-500 text-[12px] ">Total user</h2>
                    </div>
                </div>
            </div>
            <div class="lg:p-5 p-2 lg:w-1/4 w-[45%] flex justify-center items-center bg-gray-200 rounded-lg">
                <div class="flex gap-2">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] text-red-500" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-handshake-icon lucide-handshake">
                            <path d="m11 17 2 2a1 1 0 1 0 3-3" />
                            <path
                                d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4" />
                            <path d="m21 3 1 11h-2" />
                            <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3" />
                            <path d="M3 4h8" />
                        </svg>
                    </div>
                    <div class="">
                        <h1 class="font-bold text-lg">{{ $totaltransaksi ? $totaltransaksi : '0' }}</h1>
                        <h2 class="text-gray-500 text-[12px] rounded-full">Total Transaksi</h2>
                    </div>
                </div>
            </div>

            <div class="lg:p-5 p-2 lg:w-1/4 w-[45%] flex justify-center items-center bg-gray-200 rounded-lg">
                <div class="flex gap-2">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] text-red-500" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-truck-icon lucide-truck">
                            <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
                            <path d="M15 18H9" />
                            <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
                            <circle cx="17" cy="18" r="2" />
                            <circle cx="7" cy="18" r="2" />
                        </svg>
                    </div>
                    <div class="">
                        <h1 class="font-bold text-lg">{{ $totaltransport ? $totaltransport : '0' }}</h1>
                        <h2 class="text-gray-500 text-[12px] ">Transport</h2>
                    </div>
                </div>
            </div>
            <div class="lg:p-5 p-2 lg:w-1/4 w-[45%] flex justify-center items-center bg-gray-200 rounded-lg">
                <div class="flex gap-2">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] text-red-500" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-container-icon lucide-container">
                            <path
                                d="M22 7.7c0-.6-.4-1.2-.8-1.5l-6.3-3.9a1.72 1.72 0 0 0-1.7 0l-10.3 6c-.5.2-.9.8-.9 1.4v6.6c0 .5.4 1.2.8 1.5l6.3 3.9a1.72 1.72 0 0 0 1.7 0l10.3-6c.5-.3.9-1 .9-1.5Z" />
                            <path d="M10 21.9V14L2.1 9.1" />
                            <path d="m10 14 11.9-6.9" />
                            <path d="M14 19.8v-8.1" />
                            <path d="M18 17.5V9.4" />
                        </svg>
                    </div>
                    <div class="">
                        <h1 class="font-bold text-lg">{{ $totalekspedisi ? $totalekspedisi : '0' }}</h1>
                        <h2 class="text-gray-500 text-[12px] ">Ekspedisi</h2>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <canvas id="myChart"></canvas>
        </div>
    </div>

</x-admin-layout>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('myChart');

        // Ganti Utils.months dengan array manual

        const data = {
            labels: {!! json_encode($diagramdata['labels']) !!},
            datasets: [{
                label: 'Transaksi',
                data: {!! json_encode($diagramdata['data']) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
        new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
