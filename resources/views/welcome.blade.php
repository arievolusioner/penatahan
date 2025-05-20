<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Beranda') }}
        </h2>
    </x-slot> --}}

    <!-- Hero Image Section -->
    <div class="w-full relative">
        <img src="{{ asset('img/main-3.png') }}" alt="Hero Image" class="w-full h-auto object-cover">
    </div>

   <div class="text-center mt-12 px-5">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-black">
        Temukan ketenangan alami bersama <span class="text-blue-600 dark:text-blue-500">suasana terbaik</span> untuk hari Anda.
    </h1>
    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
        Nikmati kenyamanan, kehangatan, dan kedamaian yang menyatu dalam setiap momen.
    </p>
    <div class="mx-auto mt-4 w-32 h-1 bg-blue-500 rounded"></div>
</div>



</x-app-layout>