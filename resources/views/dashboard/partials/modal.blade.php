    <!-- Create modal -->
    <div id="createProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5">
                    <h3 class="text-2xl font-semibold text-black">Tambah produk</h3>
                    <button type="button" class="text-neutral-60 bg-transparent hover:bg-neutral-20 hover:text-black duration-[400ms] rounded-lg text-sm py-4 px-2 ml-auto inline-flex items-center" data-modal-target="createProductModal" data-modal-toggle="createProductModal">
                        <i class="fa-solid fa-xmark fa-xl"></i>
                        <span class="sr-only">Tutup modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <form action="/dashboard/products" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="picture" class="block mb-2 text-sm font-medium text-black">Gambar</label>
                            <input type="file" id="picture" name="picture" class="form-control @error('Picture') is-invalid @enderror bg-neutral-10 border border-neutral-30 text-black text-sm rounded-lg focus:ring-primary-20 focus:border-primary-40 block w-full cursor-pointer">
                            @error('picture')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-black">Nama Produk</label>
                            <input type="text" name="name" id="name" class="bg-neutral-10 border border-neutral-30 text-black text-sm rounded-lg focus:ring-primary-20 focus:border-primary-40 block w-full p-2.5" placeholder="Product Name" required>
                        </div>
                        <div>
                            <label for="category" class="block mb-2 text-sm font-medium text-black">Kategori</label>
                            <select id="category" name="category_id" class="bg-neutral-10 border border-neutral-30 text-black text-sm rounded-lg focus:ring-primary-20 focus:border-primary-40 block w-full p-2.5">
                                <option>Pilih kategori</option>
                                @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="price" class="block mb-2 text-sm font-medium text-black">Harga</label>
                            <input type="text" name="price" id="price" class="bg-neutral-10 border border-neutral-30 text-black text-sm rounded-lg focus:ring-primary-20 focus:border-primary-40 block w-full p-2.5" placeholder="Rp. 250.000" required>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="desc" class="block mb-2 text-sm font-medium text-black">Deskripsi</label>
                            <textarea name="desc" id="desc" rows="4" class="block p-2.5 w-full text-sm text-black bg-neutral-10 rounded-lg border border-neutral-30 focus:ring-primary-20 focus:border-primary-40" placeholder="Tulis deskripsi disini"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end items-center">
                        <button type="submit" class="inline-flex items-center text-white bg-primary-40 hover:text-black hover:bg-secondary-40 duration-[400ms] focus:ring-4 focus:outline-none focus:ring-secondary-20 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update modal -->
    <div id="updateProductModal" tabindex="0" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5">
                    <h3 class="text-2xl font-semibold text-black">Ubah Data Produk</h3>
                    <button type="button" class="text-neutral-60 bg-transparent hover:bg-neutral-20 hover:text-black duration-[400ms] rounded-lg text-sm py-4 px-2 ml-auto inline-flex items-center" data-modal-target="updateProductModal" data-modal-toggle="updateProductModal">
                        <i class="fa-solid fa-xmark fa-xl"></i>
                        <span class="sr-only">Tutup Popup</span>
                    </button>
                </div>

                <!-- Modal body -->
                <form enctype="multipart/form-data" id="update_form" method="POST">
                    @csrf
                    @method('put')
                    <input type="hidden" class="hidden" id="oldPicture">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="update_picture" class="block mb-2 text-sm font-medium text-black">Picture</label>
                            <input type="file" id="update_picture" name="picture" value="{{ old('picture') }}" class="form-control @error('picture') is-invalid @enderror bg-neutral-10 border border-neutral-30 text-black text-sm rounded-lg focus:ring-primary-20 focus:border-primary-40 block w-full cursor-pointer">
                            @error('picture')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label for="update_name" class="block mb-2 text-sm font-medium text-black">
                                Nama produk</label>
                            <input type="text" name="name" id="update_name" value="{{ old('name') }}" class="bg-neutral-10 border border-neutral-30 text-black text-sm rounded-lg focus:ring-primary-20 focus:border-primary-40 block w-full p-2.5" placeholder="Nama Produk" required>
                        </div>
                        <div>
                            <label for="update_category" class="block mb-2 text-sm font-medium text-black">Kategori</label>
                            <select id="update_category" name="category_id" class="bg-neutral-10 border border-neutral-30 text-black text-sm rounded-lg focus:ring-primary-20 focus:border-primary-40 block w-full p-2.5">
                                <option>Pilih kategori</option>
                                @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="update_price" class="block mb-2 text-sm font-medium text-black">Harga</label>
                            <input type="text" name="price" id="update_price" class="bg-neutral-10 border border-neutral-30 text-black text-sm rounded-lg focus:ring-primary-20 focus:border-primary-40 block w-full p-2.5" placeholder="Rp. 250.000" required>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="desc" class="block mb-2 text-sm font-medium text-black">Deskripsi</label>
                            <textarea name="desc" id="update_desc" rows="4" class="block p-2.5 w-full text-sm text-black bg-neutral-10 rounded-lg border border-neutral-30 focus:ring-primary-20 focus:border-primary-40" placeholder="Write Product desc Here"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end items-center">
                        <button type="submit" class="text-white bg-primary-40 hover:text-black hover:bg-secondary-40 duration-[400ms] focus:ring-4 focus:outline-none focus:ring-secondary-20 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Ubah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Read modal -->
    <div id="readProductModal" tabindex="1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-5xl max-h-full">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">
                <!-- Modal header -->
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="md:mb-4 md:w-[600px]">
                        <img class="mb-4 w-full rounded-lg" id="pre-pic" alt="Picture">
                    </div>
                    <div class="md:w-3/4">
                        <h3 class="mb-6 text-2xl text-black font-semibold" id="pre-name"></h3>
                        <dl>
                            <dt class="mt-2 font-semibold leading-none text-black">Category</dt>
                            <dd class="mb-4 font-light text-base text-neutral-60 sm:mb-5" id="pre-category"></dd>
                        </dl>
                        <dl>
                            <dt class="mt-2 font-semibold leading-none text-black">Price</dt>
                            <dd class="mb-4 font-light text-base text-neutral-60 sm:mb-5">Rp. <span id="pre-price"></span>
                                /Pax</dd>
                        </dl>
                        <dl>
                            <dt class="mt-2 font-semibold leading-none text-black">Description</dt>
                            <dd class="mb-4 font-light text-neutral-60 sm:mb-5" id="pre-desc"></dd>
                        </dl>
                    </div>
                    <div>
                        <button type="button" class="text-neutral-60 bg-white hover:text-white hover:bg-neutral-60 md:bg-transparent md:hover:bg-neutral-20 md:hover:text-black duration-[400ms] rounded-lg text-sm py-4 px-2 inline-flex absolute top-6 right-6 md:relative md:top-0 md:right-0" data-modal-toggle="readProductModal">
                            <i class="fa-solid fa-xmark fa-xl"></i>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete modal -->
    <div id="deleteProductModal" tabindex="2" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative p-4 text-center bg-white rounded-lg shadow sm:p-5">
                <button type="button" class="text-neutral-60 absolute top-2.5 right-2.5 bg-transparent hover:bg-neutral-20 hover:text-black duration-[400ms] rounded-lg text-sm py-4 px-2 ml-auto inline-flex items-center" data-modal-toggle="deleteProductModal">
                    <i class="fa-solid fa-xmark fa-xl"></i>
                    <span class="sr-only">Tutup Popup</span>
                </button>
                <div class="text-neutral-60 w-11 h-11 my-3.5 mx-auto">
                    <i class="fa-solid fa-trash-can fa-2xl"></i>
                </div>
                <p class="mb-4 text-neutral-60">Kamu yakin ingin menghapus <span class="font-medium" id="delete_name"></span>?</p>
                <div class="flex justify-center items-center">
                    <form action="/dahboard/products" id="delete_form" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="reset" data-modal-toggle="deleteProductModal" type="button" class="py-2 px-3 mr-3 text-sm font-medium text-neutral-60 bg-white rounded-lg border border-neutral-30 hover:bg-neutral-20 duration-[400ms] focus:ring-4 focus:outline-none focus:ring-primary-10 hover:text-black focus:z-10">Batal</button>
                        <button type="submit" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 duration-[400ms] focus:ring-4 focus:outline-none focus:ring-red-300">Tentu!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
