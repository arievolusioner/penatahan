<footer class="bg-[#003366] text-white mt-10">
    <div class="container mx-auto px-4 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-8">
            {{-- Logo --}}
            <div class="flex md:items-start justify-center md:justify-start">
                <img src="{{ asset('img/logo-penatahan_putih.png') }}" class="h-24" alt="Logo Yeh Panes Penatahan">
            </div>

            {{-- Tentang Kami --}}
            <div>
                <h2 class="text-lg font-semibold mb-3">Tentang Kami</h2>
                <p class="text-sm text-gray-300 mb-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl vel tincidunt faucibus.
                </p>
                <a href="#" class="text-sm underline hover:text-gray-100">Lihat selengkapnya...</a>
            </div>

            {{-- Kontak Kami --}}
            <div>
                <h2 class="text-lg font-semibold mb-3">Kontak Kami</h2>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-white">WhatsApp</a></li>
                    <li><a href="#" class="hover:text-white">Facebook</a></li>
                    <li><a href="#" class="hover:text-white">Instagram</a></li>
                </ul>
            </div>

            {{-- Jam Operasional --}}
            <div>
                <h2 class="text-lg font-semibold mb-3">Jam Operasional</h2>
                <p class="text-sm text-gray-300">Setiap hari 07.00 - 19.00 WITA</p>
            </div>

            {{-- Temukan Kami --}}
            <div>
                <h2 class="text-lg font-semibold mb-3">Temukan Kami</h2>
                <div class="w-full h-48 rounded shadow overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126284.92073595693!2d114.9782597141653!3d-8.424274772991452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2276d20da6dd9%3A0x5fc11427f00bb4ce!2sYeh%20Panes%20Hot%20Spring%2C%20Penatahan!5e0!3m2!1sid!2sid!4v1716195577773!5m2!1sid!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Lokasi Yeh Panes Penatahan">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    {{-- Copyright --}}
    <div class="bg-[#002244] py-4 mt-6">
        <div class="text-center text-sm text-gray-400">
            © 2025 Yeh Panes Penatahan. All Rights Reserved.
        </div>
    </div>
</footer>
