<!DOCTYPE html>
<html lang="en" class="!scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/logo.svg" type="image/x-icon">
    <title>{{ $title ?? 'E-commerce SMKN 2 Sumedang' }}</title>
    @vite(['resources/js/app.js'])
</head>

<body>

    {{-- Scroll to Top --}}
    <div id="progress"
        class="fixed bottom-5 right-5 sm:bottom-10 sm:right-10 z-50 h-12 w-12 justify-center items-center bg-neutral-40 rounded-full shadow-md hidden hover:block cursor-pointer">
        <span id="progress-value"
            class="h-10 w-10 bg-white rounded-full grid place-items-center text-primary-20 text-2xl">
            <i class="fa-solid fa-arrow-up"></i></span>
    </div>

    @include('partials.navbar')
<!-- Read modal -->
    <div class="justify-center items-center w-full max-h-full flex mt:10 lg:mt-20">
        <div class="p-4 w-full max-w-5xl max-h-full">
            <!-- Modal content -->
            <div class="relative p-4 bg-white sm:p-5">
                <!-- Modal header -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="sm:mb-4 sm:w-[300px]">
                        <img class="mb-4 w-full rounded-lg" src="{{ Storage::url($products->picture) }}" id="pre-pic"
                            alt="{{ $products->name }}">
                    </div>
                    <div class="sm:w-1/2">
                        <h3 class="mb-6 text-2xl text-black font-semibold" id="pre-name">{{ $products->name }}</h3>
                        <dl>
                            <dt class="mt-2 font-semibold leading-none text-black">Kategori</dt>
                            <dd class="mb-4 font-light text-base text-neutral-60 sm:mb-5" id="pre-category">
                                {{ $products->category->name }}
                            </dd>
                        </dl>
                        <dl>
                            <dt class="mt-2 font-semibold leading-none text-black">Harga</dt>
                            <dd class="mb-4 font-light text-base text-neutral-60 sm:mb-5">Rp. <span
                                    id="pre-price">{{ number_format($products->price, 0, ',', '.') }}</span>
                                /Pcs</dd>
                        </dl>
                        <dl>
                            <dt class="mt-2 font-semibold leading-none text-black">Deskripsi</dt>
                            <dd class="mb-4 font-light text-neutral-60 sm:mb-5" id="pre-desc">{{ $products->desc }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> --}}
    @include('partials.alert')
</body>

</html>