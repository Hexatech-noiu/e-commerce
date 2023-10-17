@extends('layouts.main')

@section('container')

    {{-- Hero Section --}}
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative overflow-hidden h-[200px] sm:h-[400px] lg:h-[100vh]">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="{{ asset('img/carousel1.jpeg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="{{ asset('img/carousel2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="{{ asset('img/carousel3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
              <span class="sr-only">Previous</span>
          </span>
      </button>
      <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="sr-only">Next</span>
          </span>
      </button>
    </div>

    {{-- Insight E-COMMERCE SMKN 2 Sumedang --}}
    <section class="bg-white px-12 mt-10">
        <div class="flex flex-col lg:flex-row gap-8 items-center mx-auto max-w-screen-xl xl:gap-16">
            <div class="flex rounded-sm cursor-pointer">
              <div class="mx-auto max-w-full">
                <div class="flex [&:hover>div]:w-[60px] md:[&:hover>div]:w-14 lg:[&:hover>div]:w-16 [&>div:hover]:w-[478px] md:[&>div:hover]:w-[500px] lg:[&>div:hover]:w-[480px]">
                  <div class="group relative h-72 lg:h-96 lg:w-[30rem] cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                    <img class="h-full object-cover transition-all group-hover:rotate-12 group-hover:scale-125" src="{{ asset('img/slide1.jpg') }}" alt="" />
                  </div>
                  <div class="group relative h-72 lg:h-96 w-16 cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                    <img class="h-full object-cover transition-all group-hover:rotate-12 group-hover:scale-125" src="{{ asset('img/slide2.jpg') }}" alt="" />
                  </div>
                  <div class="group relative h-72 lg:h-96 w-16 cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                    <img class="h-full object-cover transition-all group-hover:rotate-12 group-hover:scale-125" src="{{ asset('img/slide3.jpg') }}" alt="" />
                  </div>
                  <div class="group relative h-72 lg:h-96 w-16 cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                    <img class="h-full object-cover transition-all group-hover:rotate-12 group-hover:scale-125" src="{{ asset('img/slide4.jpg') }}" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="lg:w-1/2">
              <h2 class="mb-4 text-2xl sm:text-4xl tracking-tight font-extrabold text-black">E-COMMERCE
              <br>
              <span class="text-primary-40">SMKN 2 SUMEDANG</span></h2>
              <p class="mb-4 font-light text-neutral-60 md:text-lg">
                E-Commerce SMK Negeri 2 Sumedang adalah sebuah platform penjualan online yang dikelola oleh siswa dan siswi SMK Negeri 2 Sumedang. Platform ini bertujuan untuk memberikan wadah bagi siswa dan siswi untuk berwirausaha dan mengembangkan keterampilan mereka. E-commerce SMK Negeri 2 Sumedang menyediakan berbagai macam produk, mulai dari produk fashion hingga produk makanan dan minuman. Produk-produk yang dijual di platform ini merupakan hasil karya siswa dan siswi SMK Negeri 2 Sumedang.
              </p>
            </div>
        </div>
    </section>

    {{-- Lihat sekarang --}}
    <section class="bg-primary-40 px-12 py-6 mt-10 lg:mt-20">
        <div class="flex flex-col justify-between md:flex-row mx-auto max-w-screen-xl py-6 gap-8 items-start xl:gap-16">
            <div class="lg:w-3/4">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-white sm:text-4xl">Siap untuk melihat produk kami?</h2>
                <p class="max-w-2xl font-light text-white sm:text-xl">Unggul, Berakhlak Mulia, Kompetitif</p>
            </div>
            <div class="flex flex-col space-y-4 md:flex-row md:justify-center md:space-y-0 md:space-x-4 w-full md:w-auto">
                <a href="/produk" class="inline-flex w-full md:w-auto justify-center items-center py-3 px-7 text-lg font-normal text-center rounded-sm text-black bg-secondary-40 border-[3px] border-secondary-40 hover:text-secondary-40 hover:bg-transparent focus:ring-4 focus:ring-secondary-50 duration-[400ms]">
                    Lihat Sekarang
                </a>
            </div>
        </div>
    </section>

    {{-- Google Maps --}}
    <section class="bg-white px-12 my-10 lg:mt-20">
        <div class="mx-auto max-w-screen-xl">
            <div class="w-full h-[400px] rounded-sm overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15845.826280495865!2d107.9283445!3d-6.8357345!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d3ffffffffff%3A0x64ed78d1e54e0ed8!2sSMK%20NEGERI%202%20SUMEDANG!5e0!3m2!1sid!2sid!4v1697381354549!5m2!1sid!2sid" class="w-full h-full" style="border:0;" allowfullscreen="" loading="eager" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

@endsection
