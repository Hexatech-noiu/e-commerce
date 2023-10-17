@extends('layouts.main')

@section('container')

    <section class="bg-white px-12 mt-10 lg:mt-32">
        <div class="flex flex-col lg:flex-row gap-8 items-center mx-auto max-w-screen-xl xl:gap-16">
            <div class="lg:w-[600px] lg:h-[380px] sm:h-[400px] w-full rounded-sm overflow-hidden cursor-pointer">
                <img class="z-20 object-cover w-full h-full transform origin-center hover:scale-125 transition-transform duration-500" src="{{ asset('img/tentang.jpg') }}" alt="SMKN 2 Sumedang" loading="eager">
            </div>
            <div class="lg:w-1/2">
                <h4 class="text-lg tracking-tight font-normal text-black italic">Tentang
                <h2 class="mb-4 text-2xl sm:text-4xl tracking-tight font-extrabold text-black">E-COMMERCE
                <br>
                <span class="text-primary-40">SMKN 2 SUMEDANG</span></h2>
                <p class="mb-4 font-light text-neutral-60 md:text-lg">
                  E-Commerce SMK Negeri 2 Sumedang adalah sebuah platform penjualan online yang dikelola oleh siswa dan siswi SMK Negeri 2 Sumedang. Platform ini bertujuan untuk memberikan wadah bagi siswa dan siswi untuk berwirausaha dan mengembangkan keterampilan mereka. E-commerce SMK Negeri 2 Sumedang menyediakan berbagai macam produk, mulai dari produk fashion hingga produk makanan dan minuman. Produk-produk yang dijual di platform ini merupakan hasil karya siswa dan siswi SMK Negeri 2 Sumedang.
                </p>
              </div>
        </div>
    </section>

    <section class="bg-center bg-no-repeat bg-white bg-blend-multiply mt-10 lg:mt-32">
        <div class="px-4 mx-auto max-w-screen-xl text-center">
            <h1 class="mb-10 text-2xl font-extrabold tracking-tight leading-none text-black sm:text-4xl md:text-5xl lg:text-5xl">
                PRODUK KAMI
            </h1>
        </div>
        <div class="px-12 mx-auto max-w-screen-xl flex justify-center">
            <div id="accordion-open" data-accordion="open" class="h-full w-full lg:w-1/2">
                <h2 id="accordion-open-heading-2">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
                    <span class="flex items-center text-lg">Souvenir</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200">
                        <p class="mb-2 text-gray-500">E-Commerce SMK Negeri 2 Sumedang menyediakan berbagai macam produk suvenir yang dapat menjadi pilihan Anda. Produk-produk souvenir ini didesain dengan menarik dan unik, sehingga cocok untuk dijadikan sebagai hadiah atau koleksi.</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-3">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
                    <span class="flex items-center text-lg">Gifts</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200">
                        <p class="mb-2 text-gray-500">E-Commerce SMK Negeri 2 Sumedang menyediakan berbagai macam produk gifts yang dapat menjadi pilihan Anda. Produk-produk gifts ini didesain dengan menarik dan unik, sehingga cocok untuk dijadikan sebagai hadiah untuk teman, keluarga, atau orang tersayang.</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-4">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100" data-accordion-target="#accordion-open-body-4" aria-expanded="false" aria-controls="accordion-open-body-4">
                        <span class="flex items-center text-lg">Foods</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                    </h2>
                    <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
                        <div class="p-5 border border-t-0 border-gray-200">
                            <p class="mb-2 text-gray-500">E-Commerce SMK Negeri 2 Sumedang menyediakan berbagai macam produk foods yang dapat menjadi pilihan Anda. Produk-produk foods ini diolah dengan bahan-bahan berkualitas dan diproses dengan higienis.</p>
                        </div>
                    </div>
            </div>
        </div>
    </section>

@endsection
