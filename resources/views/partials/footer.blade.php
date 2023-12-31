<footer class="bg-primary-40">
    <div id="FAQModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Frequently Asked Questions
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="FAQModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="space-x-3 p-3 leading-relaxed">
                    <h1 class="text-2xl font-semibold mb-4">FAQ - NOIU Tour & Travel</h1>

                    <!-- Pertanyaan Umum -->
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Pertanyaan Umum</h2>
                        <ol class="list-decimal pl-4 space-y-2">
                            <li>
                                <p><strong>Apa itu NOIU Tour & Travel?</strong></p>
                                <p>NOIU Tour & Travel adalah perusahaan tour & travel yang berlisensi resmi, berlokasi
                                    di Bandung, yang menyediakan layanan perjalanan wisata, kegiatan Meeting, Gathering,
                                    Outbound, dan Minat Khusus.</p>
                            </li>
                            <!-- Tambahkan pertanyaan dan jawaban lainnya di sini -->
                        </ol>
                    </div>

                    <!-- Paket Wisata -->
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Paket Wisata</h2>
                        <ol class="list-decimal pl-4 space-y-2">
                            <li>
                                <p><strong>Apa saja destinasi wisata yang tersedia dalam paket wisata NOIU?</strong></p>
                                <p>Kami menawarkan berbagai destinasi wisata domestik dan mancanegara. Untuk informasi
                                    lebih lanjut, silakan hubungi kami untuk konsultasi personal.</p>
                            </li>
                            <!-- Tambahkan pertanyaan dan jawaban lainnya di sini -->
                        </ol>
                    </div>

                    <!-- Paket Outbound, Offroad, dan Rafting -->
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Paket Outbound, Offroad, dan Rafting</h2>
                        <ol class="list-decimal pl-4 space-y-2">
                            <li>
                                <p><strong>Apa yang termasuk dalam paket Outbound/Offroad/Rafting NOIU?</strong></p>
                                <p>Paket-paket ini mencakup berbagai aktivitas seru di daerah Sumedang/Bandung. Untuk
                                    detail aktivitas dan harga, silakan hubungi kami.</p>
                            </li>
                            <!-- Tambahkan pertanyaan dan jawaban lainnya di sini -->
                        </ol>
                    </div>

                    <!-- Klien Kami -->
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Klien Kami</h2>
                        <ol class="list-disc pl-5 leading-tight">
                            <li>Diskominfosanditik Kab. Sumedang</li>
                            <li>Polres Jawa Barat</li>
                            <li>Tahu Ngoding</li>
                            <li>IM Creative Studio</li>
                            <li>SMKN 1 Sumedang</li>
                            <li>SMKN 2 Sumedang</li>
                            <li>STIE Ekuitas</li>
                            <li>Pemerintah Kab. Sumedang</li>
                            <li>Mimik</li>
                            <li>Refresh: segarkan kembali harimu</li>
                        </ol>
                    </div>

                </div>
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="FAQModal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="pt-10 px-12 mt-10 lg:mt-20">
        <div class="flex flex-col lg:flex-row gap-16 mx-auto max-w-screen-xl xl:gap-16">
            <div class="lg:w-[35%]">
                <img src="{{ asset('img/logo-es.svg') }}" class="h-16 mb-6" alt="SMKN 2 Sumedang" />
                <p class="max-w-2xl mb-5 font-light text-white text-lg">E-Commerce SMK Negeri 2 Sumedang adalah sebuah
                    platform penjualan online yang dikelola oleh siswa dan siswi SMK Negeri 2 Sumedang.</p>
                <div class="flex flex-row gap-4">
                    <a href="https://wa.me/{{ env('PHONE_NUMBER') }}/" target="blank"
                        class="flex justify-center items-center w-10 h-10 rounded-full text-white hover:text-primary-40 bg-primary-40 hover:bg-white hover:scale-125 hover:rotate-[720deg] transition-all duration-[400ms]">
                        <i class="fa-brands fa-whatsapp fa-xl text-center"></i>
                    </a>
                    <a href="https://www.instagram.com/smkn2sumedang.official" target="blank"
                        class="flex justify-center items-center w-10 h-10 text-xl rounded-full text-white hover:text-primary-40 bg-primary-40 hover:bg-white hover:scale-125 hover:rotate-[720deg] transition-all duration-[400ms]">
                        <i class="fa-brands fa-instagram fa-lg text-center"></i>
                    </a>
                    <a href="https://www.facebook.com/officialsmkn2sumedang.sch.id" target="blank"
                        class="flex justify-center items-center w-10 h-10 rounded-full text-white hover:text-primary-40 bg-primary-40 hover:bg-white hover:scale-125 hover:rotate-[720deg] transition-all duration-[400ms]">
                        <i class="fa-brands fa-facebook-f fa-lg text-center"></i>
                    </a>
                    <a href="https://www.youtube.com/@smkn2sumedang703" target="blank"
                        class="flex justify-center items-center w-10 h-10 rounded-full text-white hover:text-primary-40 bg-primary-40 hover:bg-white hover:scale-125 hover:rotate-[720deg] transition-all duration-[400ms]">
                        <i class="fa-brands fa-youtube fa-lg text-center"></i>
                    </a>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row lg:w-[600px] gap-10 lg:ml-32 max-w-screen-xl">
                <div>
                    <h2 class="mb-6 text-lg font-semibold text-white uppercase">Navigation</h2>
                    <ul class="text-white font-light">
                        <li class="mb-4">
                            <a href="/" class="hover:text-secondary-40 duration-[400ms]">Beranda</a>
                        </li>
                        <li class="mb-4">
                            <a href="/produk" class="hover:text-secondary-40 duration-[400ms]">Produk</a>
                        </li>
                        <li class="mb-4">
                            <a href="/tentangkami" class="hover:text-secondary-40 duration-[400ms]">Tentang Kami</a>
                        </li>
                        <li class="mb-4">
                            <a href="/kontak" class="hover:text-secondary-40 duration-[400ms]">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-lg font-semibold text-white uppercase">Legal</h2>
                    <ul class="text-white font-light">
                        <li class="mb-4">
                            <a href="#" class="hover:text-secondary-40 duration-[400ms]">Privacy Policy</a>
                        </li>
                        <li class="mb-4">
                            <a class="hover:text-secondary-40 duration-[400ms]">Terms &amp; Conditions</a>
                        </li>
                        <li class="mb-4">
                            <a data-modal-toggle="FAQModal"
                                class="hover:text-secondary-40 duration-[400ms] cursor-pointer">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-lg font-semibold text-white uppercase">Contact Us</h2>
                    <div class="flex flex-wrap text-white font-light">
                        <span class="mb-4 hover:text-secondary-40 duration-[400ms]"><i
                                class="fa-solid fa-phone mr-2"></i>(0261) 201531</span>
                        <span class="mb-4 hover:text-secondary-40 duration-[400ms]"><i
                                class="fa-solid fa-envelope mr-2"></i>smkn2sumedang@yahoo.com</span>
                        <span class="mb-4 hover:text-secondary-40 duration-[400ms]"><i
                                class="fa-solid fa-map-location-dot mr-2"></i>Jl. Arief Rahman Hakim No. 59, Kotakaler,
                            Sumedang Utara, Kabupaten Sumedang, Jawa Barat, 45355</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center py-6 mt-7 border-t border-white">
        <span class="text-xs sm:text-base font-light text-white text-center">
            @guest<a href="{{ route('login') }}">© {{ date('Y') }}</a>@endguest 
            @auth
            <div class="flex">
            <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button>© {{ date('Y') }}</button>
            </form>
            <span class="ml-1">SMKN 2 Sumedang™. All Rights Reserved</span>
            </div>
            @endauth
            @guest
            SMKN 2 Sumedang™. All Rights Reserved</span>                
            @endguest
    </div>
</footer>
