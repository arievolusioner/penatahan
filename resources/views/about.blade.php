<x-app-layout>
    <x-slot name="header">
    <div class="flex justify-between items-center">
        <h2 class="font-semibold text-2xl text-black leading-tight">
            {{ __('Tentang Kami') }}
        </h2>
        <div class="text-xs text-gray-500">
            <a href="{{ url('/') }}" class="hover:underline text-[#0288D1]">Beranda</a> / <span class="text-gray-600">Tentang Kami</span>
        </div>
    </div>
</x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Gambar -->
            <div class="mb-8">
                <img src="{{ asset('img/main2.png') }}" alt="Tentang Kami" class="w-full h-auto rounded-lg shadow-md object-cover">
            </div>

            <!-- Teks -->
            <div class="text-gray-700 text-justify text-sm sm:text-base leading-relaxed space-y-4">
                <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nisi eget ultricies tincidunt, nisl nisl aliquam nisi, eget ultricies nisl nisi eget nisl. Nullam auctor, nisi eget ultricies tincidunt, nisl nisl aliquam nisi, eget ultricies nisl nisi eget nisl. Suspendisse potenti. Sed euismod, mauris nec aliquet varius, justo tortor pharetra nulla, nec feugiat libero nisl non sapien.
                </p>
                <p>
                    Quisque facilisis orci sit amet felis pulvinar, a varius enim iaculis. Vivamus vitae dolor nec metus sagittis vulputate at eget felis. Aenean tincidunt, lacus at lacinia finibus, nulla orci efficitur magna, sit amet condimentum nulla risus in justo. Sed quis eros est. Nullam vitae laoreet nisl. Pellentesque vestibulum enim vitae lorem iaculis, vel dictum diam porttitor. Nullam egestas lacus a velit fermentum, non dictum risus sollicitudin
                </p>
                <p>
                   Etiam suscipit sem at ante tristique dapibus. Vestibulum a rhoncus lorem, id vulputate elit. Curabitur lacinia malesuada finibus. Quisque a lorem vel tellus facilisis ultrices. Nullam fringilla nibh nec justo placerat, vel iaculis risus accumsan.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
