<nav class="navbar bg-primary-40 sticky lg:fixed w-full z-50 top-0 left-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <img src="{{ asset('img/logo.svg') }}" class="h-8 lg:h-12" alt="SMKN 2 Sumedang" />
        </a>
        <div class="flex lg:order-2">
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="lg:hidden text-white hover:text-primary-40 hover:bg-white rounded-sm text-sm p-2.5 mr-1" >
            <i class="fa-solid fa-magnifying-glass fa-xl"></i>
              <span class="sr-only">Search</span>
            </button>
            <div class="relative hidden lg:block">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <i class="fa-solid fa-magnifying-glass"></i>
                <span class="sr-only">Search icon</span>
              </div>
              <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-black border border-gray-300 rounded-sm bg-white focus:ring-blue-500 focus:border-blue-500" placeholder="Search...">
            </div>
            <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white hover:text-primary-40 rounded-sm lg:hidden hover:bg-white" aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <i class="fa-solid fa-bars fa-xl"></i>
            </button>
          </div>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-search">
              <div class="relative mt-3 lg:hidden">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-black border border-gray-300 rounded-sm bg-white focus:ring-blue-500 focus:border-blue-500" placeholder="Search...">
              </div>

            <ul class="flex flex-col p-4 lg:p-0 mt-4 border rounded-sm lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0 lg:ml-20">
            <li><a href="/" class="nav block py-2 pl-3 text-white lg:hover:text-secondary-40 duration-[400ms] lg:p-0">Beranda</a></li>
            <li class="nav text-white cursor-pointer">
                <div class="flex items-center justify-between w-full text-base font-normal rounded-lg transition cursor-pointer">
                    <a href="/produk">
                        <span class="block py-2 pl-3 text-white lg:hover:text-secondary-40 duration-[400ms] lg:p-0">Produk</span>
                    </a>
                    <div id="dropdown-button-produk">
                        <i class="fas fa-chevron-down ml-3" aria-controls="dropdown-produk" data-collapse-toggle="dropdown-produk"></i>
                    </div>
                </div>
            </li>
            <!-- Dropdown menu -->
            <ul id="dropdown-produk" class="lg:absolute text-white lg:bg-white lg:rounded-sm hidden lg:top-16">
                <li><a href="/produk#" class="block lg:w-48 py-2 pl-3 pr-4 rounded-sm hover:text-black hover:bg-secondary-40 lg:text-black lg:hover:bg-gray-200 duration-[400ms] lg:py-3 lg:px-3 lg:space-y-4">Design and Printing</a></li>
                <li><a href="/produk#" class="block lg:w-48 py-2 pl-3 pr-4 rounded-sm hover:text-black hover:bg-secondary-40 lg:text-black lg:hover:bg-gray-200 duration-[400ms] lg:py-3 lg:px-3 lg:space-y-4">Pemasaran</a></li>
            </ul>
            <li><a href="#" class="nav block py-2 pl-3 text-white lg:hover:text-secondary-40 duration-[400ms] lg:p-0">Tentang Kami</a></li>
            <li><a href="/kontak" class="nav block py-2 pl-3 text-white lg:hover:text-secondary-40 duration-[400ms] lg:p-0">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
    var dropdownButton = document.getElementById("dropdown-button-produk");
    var dropdownMenu = document.getElementById("dropdown-produk");

    dropdownButton.addEventListener("click", function () {
        if (dropdownMenu.classList.contains("hidden")) {
            dropdownMenu.classList.remove("hidden");
            // Ubah tampilan dropdown-button-produk ketika ditampilkan.
            dropdownButton.querySelector("i").classList.remove("fa-chevron-down");
            dropdownButton.querySelector("i").classList.add("fa-chevron-up");
        } else {
            dropdownMenu.classList.add("hidden");
            // Ubah tampilan dropdown-button-produk ketika disembunyikan.
            dropdownButton.querySelector("i").classList.remove("fa-chevron-up");
            dropdownButton.querySelector("i").classList.add("fa-chevron-down");
        }
    });

    dropdownMenu.addEventListener("click", function (event) {
        // Menghentikan penyebaran klik ke elemen dokumen, sehingga tidak akan menyembunyikan dropdown.
        event.stopPropagation();
    });

    document.addEventListener("click", function (event) {
        if (event.target !== dropdownButton && !dropdownButton.contains(event.target)) {
            dropdownMenu.classList.add("hidden");
            // Setel kembali tampilan dropdown-button-produk ke keadaan semula.
            dropdownButton.querySelector("i").classList.remove("fa-chevron-up");
            dropdownButton.querySelector("i").classList.add("fa-chevron-down");
        }
    });
</script>
