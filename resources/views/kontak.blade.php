@extends('layouts.main')

@section('container')

    {{-- Get In Touch --}}
    <section class="bg-center bg-no-repeat bg-white bg-blend-multiply px-12 mt-10 md:mt-32">
        <div class="md:grid md:grid-cols-2 lg:flex-row gap-16 mx-auto max-w-screen-xl justify-center">
            <div class="">
                <h2 class="text-3xl tracking-tight font-extrabold text-black sm:text-4xl">Hubungi Kami</h2>
                <p class="max-w-2xl mt-1 mb-8 text-neutral-60 text-md">Unggul, Berakhlak Mulia, Kompetitif</p>
                <div class="flex items-center p-3 my-4 text-sm text-primary-40 border border-primary-10 rounded-sm bg-blue-50" role="alert">
                    <i class="fa-solid fa-circle-info mr-3"></i>
                    <span class="leading-tight text-xs">Silakan hubungi kami jika Anda memiliki masalah dengan situs web atau layanan kami.</span>
                </div>
                <form method="POST" action="/send">
                    @csrf
                    <div class="grid gap-6 my-6 md:grid-cols-2">
                        <div class="relative">
                            <input name="name" type="text" id="name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-sm border-1 border-gray-300 appearance-none peer" placeholder=" " required/>
                            <label for="name" class="absolute text-sm text-black duration-[400ms] transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Nama Lengkap</label>
                        </div>
                        <div class="relative">
                            <input name="email" type="text" id="email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-sm border-1 border-gray-300 appearance-none peer" placeholder=" " required/>
                            <label for="email" class="absolute text-sm text-black duration-[400ms] transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email</label>
                        </div>
                    </div>
                    <div class="relative">
                        <textarea name="message" id="message" class="block mb-4 px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-sm border-1 border-gray-300 appearance-none peer" placeholder=" " required></textarea>
                        <label for="message" class="absolute text-sm text-black duration-[400ms] transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Pesan</label>
                    </div>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-start sm:space-y-0 sm:space-x-4">
                        <button type="submit" href="#" class="inline-flex justify-center items-center py-2 px-5 text-base font-normal text-center text-white rounded-sm bg-primary-40 hover:text-black hover:bg-secondary-40 focus:ring-4 focus:ring-secondary-20 duration-[400ms]">
                            Kirim
                        </button>
                    </div>
                </form>
            </div>
            <section class="bg-white my-10 lg:mt-20">
                <div class="mx-auto max-w-screen-xl">
                    <div class="w-full h-[400px] lg:h-[250px] mb-6 rounded-sm overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15845.826280495865!2d107.9283445!3d-6.8357345!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d3ffffffffff%3A0x64ed78d1e54e0ed8!2sSMK%20NEGERI%202%20SUMEDANG!5e0!3m2!1sid!2sid!4v1697381354549!5m2!1sid!2sid" class="w-full h-full" style="border:0;" allowfullscreen="" loading="eager" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="flex flex-col text-black font-light w-full">
                    <span class="mb-4 text-primary-40 hover:text-secondary-40 duration-[400ms]"><i class="fa-solid fa-phone mr-2"></i>Telepon : (0261) 201531</span>
                    <span class="mb-4 text-primary-40 hover:text-secondary-40 duration-[400ms]"><i class="fa-solid fa-envelope mr-2"></i>Email : smkn2sumedang@yahoo.com</span>
                    <span class="mb-4 text-primary-40 hover:text-secondary-40 duration-[400ms]"><i class="fa-solid fa-map-location-dot mr-2"></i>Alamat : Jl. Arief Rahman Hakim No. 59, Kotakaler, Sumedang Utara, Kabupaten Sumedang, Jawa Barat, 45355</span>
                </div>
            </div>
        </div>
    </section>

@endsection
