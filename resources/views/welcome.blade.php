<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Beranda') }}
        </h2>
    </x-slot> --}}

    {{-- Hero Image--}}
    <div class="w-full relative">
        <img src="{{ asset('img/main-3.png') }}" alt="Hero Image" class="w-full h-auto object-cover">
    </div>

    {{-- Teks --}}
   <div class="text-center mt-12 px-5">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-black">
            Temukan ketenangan alami bersama <span class="text-blue-600 dark:text-blue-500">suasana terbaik</span> untuk hari Anda.
        </h1>
        <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
            Nikmati kenyamanan, kehangatan, dan kedamaian yang menyatu dalam setiap momen.
        </p>
        <div class="mx-auto mt-4 w-32 h-1 bg-blue-500 rounded"></div>
    </div>

    {{-- Cards --}}
        <div class="mt-12 max-w-7xl mx-auto px-5 grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        {{-- Card 1 --}}
        <div class="bg-white border border-gray-300 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <a href="#">
                <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('img/cards-img.png') }}" alt="Card Image 1" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Kolam Air Panas</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">
                    Rasakan ketenangan dan suasana alami yang mendalam dalam setiap kunjungan Anda.
                </p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Lihat selengkapnya
                </a>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="bg-white border border-gray-300 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <a href="#">
                <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('img/cards-img.png') }}" alt="Card Image 2" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Jacuzzi (Private Pool)</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">
                    Nikmati panorama yang memanjakan mata dan menyegarkan jiwa Anda setiap hari.
                </p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Lihat selengkapnya
                </a>
            </div>
        </div>

        {{-- Card 3 --}}
        <div class="bg-white border border-gray-300 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <a href="#">
                <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('img/cards-img.png') }}" alt="Card Image 3" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ho River</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">
                    Ciptakan momen-momen penuh kedamaian dalam suasana yang menenangkan hati.
                </p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Lihat selengkapnya
                </a>
            </div>
        </div>
    </div>



</x-app-layout>