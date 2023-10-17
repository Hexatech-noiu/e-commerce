@extends('layouts.main')

@section('container')
<script>
    window.crsf_token = "{{ csrf_token() }}"

</script>

<section class="bg-center bg-no-repeat bg-white bg-blend-multiply mt-10 md:mt-32">

    {{-- Tab Section --}}
    <div class="max-w-3xl mx-auto sm:px-0 flex flex-row gap-1">
        <form method="GET" class="flex justify-center sm:mx-auto w-full">
            <input type="text" name="q" placeholder="Search" class="w-full relative mx-auto h-12 px-3 py-2 items-center rounded-sm bg-gray-900/20 overflow-hidden shadow-2xl shadow-900/20 transition" value="{{request('q')}}">
        </form>
        <button type="reset" data-modal-toggle="createProductModal" class="relative mx-auto h-12 px-3 py-2 items-center rounded-sm bg-gray-900/20 overflow-hidden shadow-2xl shadow-900/20 transition" value="{{request('q')}}">
        <i class="fa fa-lg fa-plus-circle"></i>
        </button>
    </div>

    {{-- Produk --}}
    <div class="mt-6 relative rounded-3xl">
        <div class="flex justify-center tab-panel p-6 transition duration-300">
            <div class="grid grid-cols-1 gap-5 md:grid-cols-3 lg:grid-cols-4">
                @forelse ($category as $cat)
                @foreach ($cat->products as $prod)
                <div class="rounded-sm group relative h-72 items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                    <div class="h-full w-72">
                        <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="{{ Storage::url($prod->picture)}}" alt="{{$prod->name}}" />
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div class="absolute inset-0 flex translate-y-[50%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="text-2xl font-bold text-white">{{$prod->name}}</h1>
                        <p class="mb-1 text-lg text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            Rp. {{number_format($prod->price, 0, ',', '.')}}</p>
                        <p class="text-sm text-white mb-1 hidden transition-all duration-300 group-hover:block">{{substr($prod->desc, 0 ,65)}}...</p>
                        <div class="flex justify-center items-center gap-2" id="actionWrapper{{$prod->id}}" data-picture="{{$prod->picture}}" data-name="{{$prod->name}}" data-desc="{{$prod->desc}}" data-price="{{$prod->price}}" data-fixed-price="{{number_format($prod->price, 0, ',', '.')}}" data-category-id="{{$prod->category->id}}" data-category-name="{{$prod->category->name}}">
                            <button onclick="copyProp({{$prod->id}}, 'read')" data-modal-toggle="readProductModal" class="rounded-sm bg-transparent py-1.5 px-2.5 text-sm capitalize text-secondary-40 border-2 border-secondary-40 hover:text-black hover:bg-secondary-40 duration-[400ms] shadow shadow-black/60"><i class="fa fa-eye"></i></button>
                            <button onclick="copyProp({{$prod->id}}, 'update')" data-modal-toggle="updateProductModal" class="rounded-sm bg-transparent py-1.5 px-2.5 text-sm capitalize text-secondary-40 border-2 border-secondary-40 hover:text-black hover:bg-secondary-40 duration-[400ms] shadow shadow-black/60"><i class="fa fa-pencil"></i></button>
                            <button onclick="copyProp({{$prod->id}}, 'delete')" data-modal-toggle="deleteProductModal" class="rounded-sm bg-transparent py-1.5 px-2.5 text-sm capitalize text-secondary-40 border-2 border-secondary-40 hover:text-black hover:bg-secondary-40 duration-[400ms] shadow shadow-black/60"><i class="fa fa-trash"></i></button>
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

@endsection

@include('dashboard.partials.modal')
