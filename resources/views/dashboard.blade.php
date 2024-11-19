<x-layout>
    {{-- Section Halo --}}
    <section class="mb-8 text-center">
        <h1 class="text-3xl font-bold text-gray-700">Halo, X!</h1>
        <p class="text-gray-500">Selamat datang di dashboard Anda. Berikut adalah ringkasan statistik saat ini.</p>
    </section>

    {{-- Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        {{-- Grafik Total Listingan Per Bulan --}}
        {{-- <div class="col-span-1 md:col-span-3 bg-white shadow-md rounded-lg p-10">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Total Listingan Per Bulan</h2>
            <div class="relative h-48"> --}}
                {{-- Garis Referensi di Latar Belakang --}}
                {{-- <div class="absolute inset-0 z-0">
                    <div class="border-t border-gray-300" style="top: 20%; position: absolute;">
                        <span class="absolute -left-6 text-sm text-gray-500">80</span>
                    </div>
                    <div class="border-t border-gray-300" style="top: 40%; position: absolute;">
                        <span class="absolute -left-6 text-sm text-gray-500">60</span>
                    </div>
                    <div class="border-t border-gray-300" style="top: 60%; position: absolute;">
                        <span class="absolute -left-6 text-sm text-gray-500">40</span>
                    </div>
                    <div class="border-t border-gray-300" style="top: 80%; position: absolute;">
                        <span class="absolute -left-6 text-sm text-gray-500">20</span>
                    </div>
                    <div class="border-t border-gray-300" style="top: 100%; position: absolute;">
                        <span class="absolute -left-6 text-sm text-gray-500">0</span>
                    </div>
                </div> --}}

                {{-- Grafik Batang --}}
                {{-- <div class="flex items-end justify-around h-full space-x-2 z-10 relative"> --}}
                    <!-- Bar for each month -->
                    {{-- <div class="text-center">
                        <div class="bg-blue-500 w-10 h-16 rounded-t-md"></div>
                        <span class="text-sm text-gray-600 mt-2 block">Jan</span>
                    </div>
                    <div class="text-center">
                        <div class="bg-blue-500 w-10 h-20 rounded-t-md"></div>
                        <span class="text-sm text-gray-600 mt-2 block">Feb</span>
                    </div>
                    <div class="text-center">
                        <div class="bg-blue-500 w-10 h-24 rounded-t-md"></div>
                        <span class="text-sm text-gray-600 mt-2 block">Mar</span>
                    </div>
                    <div class="text-center">
                        <div class="bg-blue-500 w-10 h-32 rounded-t-md"></div>
                        <span class="text-sm text-gray-600 mt-2 block">Apr</span>
                    </div>
                    <div class="text-center">
                        <div class="bg-blue-500 w-10 h-28 rounded-t-md"></div>
                        <span class="text-sm text-gray-600 mt-2 block">May</span>
                    </div>
                    <div class="text-center">
                        <div class="bg-blue-500 w-10 h-24 rounded-t-md"></div>
                        <span class="text-sm text-gray-600 mt-2 block">Jun</span>
                    </div>
                    <div class="text-center">
                        <div class="bg-blue-500 w-10 h-20 rounded-t-md"></div>
                        <span class="text-sm text-gray-600 mt-2 block">Jul</span>
                    </div>
                    <div class="text-center">
                        <div class="bg-blue-500 w-10 h-32 rounded-t-md"></div>
                        <span class="text-sm text-gray-600 mt-2 block">Aug</span>
                    </div>
                    <div class="text-center">
                        <div class="bg-blue-500 w-10 h-24 rounded-t-md"></div>
                        <span class="text-sm text-gray-600 mt-2 block">Sep</span>
                    </div>
                    <div class="text-center">
                        <div class="bg-blue-500 w-10 h-20 rounded-t-md"></div>
                        <span class="text-sm text-gray-600 mt-2 block">Oct</span>
                    </div>
                    <div class="text-center">
                        <div class="bg-blue-500 w-10 h-16 rounded-t-md"></div>
                        <span class="text-sm text-gray-600 mt-2 block">Nov</span>
                    </div>
                    <div class="text-center">
                        <div class="bg-blue-500 w-10 h-12 rounded-t-md"></div>
                        <span class="text-sm text-gray-600 mt-2 block">Dec</span>
                    </div> --}}
                {{-- </div>
            </div>
        </div> --}}
    </div>


</x-layout>
