@extends('layouts.main')

@section('container')
<script>
    window.crsf_token = "{{ csrf_token() }}"

</script>

<section class="bg-center bg-no-repeat bg-white bg-blend-multiply mt-10 md:mt-32">
    <div class="px-4 mx-auto max-w-screen-xl text-center">
        <h1 class="mb-10 text-2xl font-extrabold tracking-tight leading-none text-black sm:text-4xl md:text-5xl lg:text-5xl">
            Suvenir
        </h1>
    </div>

    {{-- Tab Section --}}
    <div class="max-w-3xl mx-auto px-8 sm:px-0">
        <div class="flex justify-center sm:mx-auto">
            <div role="tablist" aria-label="tabs" class="relative w-max mx-auto h-12 grid grid-cols-6 items-center px-[3px] rounded-sm bg-gray-900/20 overflow-hidden shadow-2xl shadow-900/20 transition">
                <div class="absolute indicator h-10 my-auto top-0 bottom-0 left-0 rounded-sm bg-white shadow-md"></div>
                @foreach ($categories as $cat)
                <button role="tab" aria-selected="true" onclick="getData({{ $cat->id }}, '#panel-1')" aria-controls="panel-1" id="tab-1" tabindex="0" class="relative block h-10 px-6 tab rounded-sm">
                    <span class="text-gray-800">{{ $cat->name }}</span>
                </button>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Produk --}}
    <div class="mt-6 relative rounded-3xl" id="panel-1">
        <div class="flex justify-start tab-panel p-6 transition duration-300">
            <div class="grid grid-cols-1 gap-5 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($categories as $cat)
                @foreach ($cat->products as $prod)
                <div class="rounded-sm group relative h-72 items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                    <div class="h-full w-72">
                        <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="{{ Storage::url($prod->picture)}}" alt="{{$prod->desc}}" />
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div class="absolute inset-0 flex translate-y-[50%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-2xl font-bold text-white">{{$prod->name}}</h1>
                        <p class="mb-3 text-lg text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            Rp. {{number_format($prod->price, 0, ',', '.')}}</p>

                        <div class="flex justify-center items-center gap-2" id="actionWrapper{{$prod->id}}" data-picture="{{$prod->picture}}" data-name="{{$prod->name}}" data-desc="{{$prod->desc}}" data-price="{{$prod->price}}" data-fixed-price="{{number_format($prod->price, 0, ',', '.')}}" data-category-id="{{$prod->category->id}}" data-category-name="{{$prod->category->name}}">

                            <a href="{{route('produk_one_pesan', $prod->id)}}" class="rounded-sm bg-secondary-40 py-2 px-3.5 text-sm capitalize text-black hover:text-white hover:bg-primary-40 duration-[400ms] shadow shadow-black/60">Beli
                                Produk</a>
                            <button data-modal-toggle="readProductModal" onclick="copyProp({{$prod->id}}, 'read')" class="rounded-sm bg-transparent py-1.5 px-2.5 text-sm capitalize text-secondary-40 border-2 border-secondary-40 hover:text-black hover:bg-secondary-40 duration-[400ms] shadow shadow-black/60"><i class="fa fa-eye"></i></button>


                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Read modal -->
<div id="readProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-5xl max-h-full">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">
            <!-- Modal header -->
            <div class="flex flex-col md:flex-row gap-4">
                <div class="md:mb-4 md:w-[600px]">
                    <img class="mb-4 w-full rounded-lg" id="pre-pic" alt="Picture">
                </div>
                <div class="md:w-3/4">
                    <h3 class="mb-6 text-2xl text-black font-semibold" id="pre-name">Nama produk</h3>
                    <dl>
                        <dt class="mt-2 font-semibold leading-none text-black">Kategori</dt>
                        <dd class="mb-4 font-light text-base text-neutral-60 sm:mb-5" id="pre-category">Nama Kategori</dd>
                    </dl>
                    <dl>
                        <dt class="mt-2 font-semibold leading-none text-black">Harga</dt>
                        <dd class="mb-4 font-light text-base text-neutral-60 sm:mb-5">Rp. <span id="pre-price"></span>
                            /Pax</dd>
                    </dl>
                    <dl>
                        <dt class="mt-2 font-semibold leading-none text-black">Deskripsi</dt>
                        <dd class="mb-4 font-light text-neutral-60 sm:mb-5" id="pre-desc"></dd>
                    </dl>
                </div>
                <div>
                    <button type="button" class="text-neutral-60 bg-white hover:text-white hover:bg-neutral-60 md:bg-transparent md:hover:bg-neutral-20 md:hover:text-black duration-[400ms] rounded-lg text-sm py-4 px-2 inline-flex absolute top-6 right-6 md:relative md:top-0 md:right-0" data-modal-toggle="readProductModal">
                        <i class="fa-solid fa-xmark fa-xl"></i>
                        <span class="sr-only">Tutup Popup</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
