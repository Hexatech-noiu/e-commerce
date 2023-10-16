<div class="mt-6 relative rounded-3xl bg-purple-50">
    <div role="tabpanel" id="panel-1" class="flex justify-start tab-panel p-6 transition duration-300">
        <div class="grid grid-cols-1 gap-5 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($categories as $cat)
                @foreach ($cat->products as $prod)
                    <div
                        class="rounded-sm group relative h-72 items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                        <div class="h-full w-72">
                            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="{{ Storage::url($prod->picture) }}" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[50%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="font-dmserif text-2xl font-bold text-white">{{ $prod->name }}</h1>
                            <p
                                class="mb-3 text-lg text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                Rp. {{ number_format($prod->price, 0, ',', '.') }}</p>
                            <div class="flex justify-center items-center gap-2">
                                <a href="{{ route('produk_one_pesan', $prod->id) }}"
                                    class="rounded-sm bg-secondary-40 py-2 px-3.5 text-sm capitalize text-black hover:text-white hover:bg-primary-40 duration-[400ms] shadow shadow-black/60">Beli
                                    Produk</a>
                                <a href="{{ route('produk_one_show', $prod->id) }}"
                                    class="rounded-sm bg-transparent py-1.5 px-2.5 text-sm capitalize text-secondary-40 border-2 border-secondary-40 hover:text-black hover:bg-secondary-40 duration-[400ms] shadow shadow-black/60"><i
                                        class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
