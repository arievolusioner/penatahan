<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-black leading-tight">
                {{ __('Galeri Foto') }}
            </h2>
            <div class="text-xs text-gray-500">
                <a href="{{ url('/') }}" class="hover:underline text-[#0288D1]">Beranda</a> /
                <span class="text-gray-600">Galeri Foto</span>
            </div>
        </div>
    </x-slot>

    <div class="py-8 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Kategori Filter Buttons -->
        <div class="mb-8 overflow-x-auto">
            <div class="flex space-x-4 pb-2">
                @foreach($categories as $category)
                    <button class="album-filter px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap 
                            {{ $loop->first ? 'bg-[#0288D1] text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}"
                        data-filter="{{ $loop->first ? '*' : '.' . $category['slug'] }}">
                        {{ $category['name'] }}
                    </button>
                @endforeach
            </div>
        </div>

        <!-- Foto Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="gallery">
            @foreach ($fotos as $foto)
                @php
                    // Buat slug kategori dari nama kategori foto (pastikan konsisten)
                    $slug = str_replace([' ', '/', '&'], ['-', '-', 'dan'], strtolower($foto->kategori));
                @endphp
                <div class="gallery-item" data-category="{{ $slug }}">
                    <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <img src="{{ asset('storage/' . $foto->path_foto) }}" alt="{{ $foto->judul }}"
                            class="w-full h-48 object-cover transition-transform duration-500 hover:scale-105">
                        <div class="p-4">
                            <h3 class="font-medium text-gray-800">{{ $foto->judul }}</h3>
                            @if ($foto->deskripsi)
                                <p class="text-sm text-gray-600 mt-1">{{ $foto->deskripsi }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const filterButtons = document.querySelectorAll('.album-filter');
                const galleryItems = document.querySelectorAll('.gallery-item');

                filterButtons.forEach(button => {
                    button.addEventListener('click', function () {
                        const filterValue = this.getAttribute('data-filter');

                        // Update styling tombol
                        filterButtons.forEach(btn => {
                            btn.classList.remove('bg-[#0288D1]', 'text-white');
                            btn.classList.add('bg-gray-200', 'text-gray-700');
                        });
                        this.classList.remove('bg-gray-200', 'text-gray-700');
                        this.classList.add('bg-[#0288D1]', 'text-white');

                        // Filter gallery items
                        galleryItems.forEach(item => {
                            const itemCategory = item.getAttribute('data-category');
                            if (filterValue === 'all' || itemCategory === filterValue) {
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