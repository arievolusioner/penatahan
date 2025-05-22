<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-black leading-tight">
                {{ __('Galeri Video') }}
            </h2>
            <div class="text-xs text-gray-500">
                <a href="{{ url('/') }}" class="hover:underline text-[#0288D1]">Beranda</a> / <span class="text-gray-600">Galeri Video</span>
            </div>
        </div>
    </x-slot>

    <div class="py-8 px-4 mx-auto max-w-4xl sm:px-6 lg:px-8">
        <!-- Video Grid -->
        <div class="grid grid-cols-1 gap-8">
            <!-- Video Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <!-- Video Embed -->
                <div class="aspect-w-16 aspect-h-9">
                    <iframe class="w-full h-96" 
                            src="https://www.youtube.com/embed/54wB3-9T7Qk?si=AZpSa9ruUuIRsmzs" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                
                <!-- Video Info -->
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Yeh Panes Penatahan</h3>
                    <div class="flex justify-between items-center">
                        <a href="https://youtu.be/54wB3-9T7Qk?si=AZpSa9ruUuIRsmzs" 
                           target="_blank" 
                           class="text-[#FF0000] hover:underline flex items-center">
                            Tonton selengkapnya di YouTube
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>