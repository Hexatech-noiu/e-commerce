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
    {{-- @include('partials.alert') --}}
    @include('partials.navbar')

    <div>
        @yield('container')
    </div>

    @if (!isset($hideFooter) || !$hideFooter)
        @include('partials.footer')
    @endif

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> --}}
    @include('partials.alert')
</body>

</html>
