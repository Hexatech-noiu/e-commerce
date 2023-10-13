@extends('layouts.main')

@section('container')
@foreach ($categories as $category)

    <section class="bg-center bg-no-repeat bg-white bg-blend-multiply mt-28">
      <div class="px-4 mx-auto max-w-screen-xl text-center">
          <h1 class="mb-10 text-3xl font-extrabold tracking-tight leading-none text-black sm:text-4xl md:text-5xl lg:text-6xl">
              {{$category->name}}
          </h1>
      </div>

      {{-- Produk --}}
      <div class="flex items-center justify-center">
        <div class="grid grid-cols-1 gap-5 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($category->products as $product)

          <div class="rounded-sm group relative h-72 items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
            <div class="h-full w-72">
              <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="{{ Storage::url($product->picture) }}" alt="" />
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
            <div class="absolute inset-0 flex translate-y-[50%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
              <h1 class="font-dmserif text-3xl font-bold text-white">{{$product->name}}</h1>
              <p class="mb-3 text-lg text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Rp. {{number_format($product->price, 0, ',', '.')}}</p>
              <a href="{{route('produk_one_pesan', $product->id)}}" class="rounded-sm bg-primary-40 py-2 px-3.5 text-sm capitalize text-white hover:text-black hover:bg-secondary-40 duration-[400ms] shadow shadow-black/60">Beli Produk</a>
            </div>
          </div>
            @endforeach

        </div>
      </div>
    </section>
            @endforeach

    {{-- @foreach ($data as $pc)
        @foreach ($pc->package_types as $tpkg)
            <section id="{{ strtolower($tpkg->name) }}" class="bg-center bg-no-repeat bg-white bg-blend-multiply pt-20 pb-5">
                <div class="px-4 mx-auto max-w-screen-xl text-center">
                    <h1
                        class="mb-2 text-3xl font-extrabold tracking-tight leading-none text-black sm:text-4xl md:text-5xl lg:text-6xl">
                        {{ $tpkg->name }} Package
                    </h1>
                    <p class="mb-8 text-lg font-normal text-neutral-40 lg:text-xl sm:px-16 lg:px-48">
                        Paket {{ $tpkg->name }}
                    </p>
                </div>
                <div class="flex flex-wrap justify-start right-0 lg:mx-0">
                    @foreach ($tpkg->packages as $pkg)
                        <div
                            class="max-w-xs bg-white border border-neutral-20 rounded-lg shadow mx-auto md:mx-0 mb-5 md:ml-9">
                            <div class="rounded-t-lg w-[318px] h-[229px] overflow-hidden">
                                <img class="object-cover w-full h-full transform origin-center hover:scale-125 transition-transform duration-500 cursor-pointer"
                                    src="{{ Storage::url($pkg->picture) }}" loading="eager" />
                            </div>
                            <div class="p-5">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-black">{{ $pkg->name }}</h5>
                                <p class="mb-2 text-lg font-semibold tracking-tight text-primary-40">Rp.
                                    {{ number_format($pkg->price, 0, ',', '.') }}<span
                                        class="text-sm font-medium text-neutral-60"> /Pax</span></p>
                                <button type="button" id="btnSeeDetail{{ $pkg->id }}"
                                    onclick="ViewModal({{ $pkg->id }})" data-category="{{ $tpkg->name }}"
                                    data-name="{{ $pkg->name }}" data-picture="{{ Storage::url($pkg->picture) }}"
                                    data-price="{{ number_format($pkg->price, 0, ',', '.') }}"
                                    data-desc="{!! $pkg->desc !!}"
                                    data-modal-target="seeDetailModal"
                                    data-modal-toggle="seeDetailModal"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-40 rounded-lg hover:text-black hover:bg-secondary-40 focus:ring-4 focus:outline-none focus:ring-secondary-20 duration-[400ms]">
                                    See Detail
                                    <i class="fa-solid fa-arrow-right fa-sm ml-2"></i>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endforeach
    @endforeach

    @include('partials.detail_modal')

    @auth
        @include('partials.booking_modal')
    @endauth --}}

@endsection
