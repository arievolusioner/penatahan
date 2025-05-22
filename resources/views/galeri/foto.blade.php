<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-black leading-tight">
                {{ __('Galeri Foto') }}
            </h2>
            <div class="text-xs text-gray-500">
                <a href="{{ url('/') }}" class="hover:underline text-[#0288D1]">Beranda</a> / <span class="text-gray-600">Galeri Foto</span>
            </div>
        </div>
    </x-slot>

    <div class="py-8 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Album Navigation -->
        <div class="mb-8 overflow-x-auto">
            <div class="flex space-x-4 pb-2">
                @foreach(['Semua', 'Kolam Air Panas', 'Jacuzzi', 'Ho River', 'Restaurant', 'Penginapan'] as $album)
                <button class="album-filter px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap 
                    {{ $loop->first ? 'bg-[#0288D1] text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}"
                    data-filter="{{ $loop->first ? '*' : '.' . str_replace(' ', '-', strtolower($album)) }}">
                    {{ $album }}
                </button>
                @endforeach
            </div>
        </div>

        <!-- Photo Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Kolam Air Panas Photos -->
            <div class="gallery-item kolam-air-panas">
                <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <img src="img/main2.png" alt="Kolam Air Panas" 
                         class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                    <div class="p-4">
                        <h3 class="font-medium text-gray-800">Kolam Air Panas</h3>
                    </div>
                </div>
            </div>

            <div class="gallery-item jacuzzi">
                <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <img src="img/main2.png" alt="Jacuzzi" 
                         class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                    <div class="p-4">
                        <h3 class="font-medium text-gray-800">Jacuzzi Private Pool</h3>
                    </div>
                </div>
            </div>

            <div class="gallery-item jacuzzi">
                <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <img src="img/main2.png" alt="Jacuzzi" 
                         class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                    <div class="p-4">
                        <h3 class="font-medium text-gray-800">Ho River</h3>
                    </div>
                </div>
            </div>

            <div class="gallery-item jacuzzi">
                <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <img src="img/main2.png" alt="Jacuzzi" 
                         class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                    <div class="p-4">
                        <h3 class="font-medium text-gray-800">Restoran</h3>
                    </div>
                </div>
            </div>

            <div class="gallery-item jacuzzi">
                <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <img src="img/main2.png" alt="Jacuzzi" 
                         class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                    <div class="p-4">
                        <h3 class="font-medium text-gray-800">Penginapan</h3>
                    </div>
                </div>
            </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.album-filter');
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('bg-[#0288D1]', 'text-white'));
                    filterButtons.forEach(btn => btn.classList.add('bg-gray-200', 'text-gray-700'));
                    this.classList.remove('bg-gray-200', 'text-gray-700');
                    this.classList.add('bg-[#0288D1]', 'text-white');
                    
                    // Filter items
                    const filterValue = this.getAttribute('data-filter');
                    
                    galleryItems.forEach(item => {
                        if (filterValue === '*' || item.classList.contains(filterValue.substring(1))) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
    @endpush

    <style>
        .gallery-item {
            transition: all 0.3s ease;
        }
    </style>
</x-app-layout>