<nav class="navbar bg-primary-40 sticky lg:fixed w-full z-50 top-0 left-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <img src="{{ asset('img/logo.svg') }}" class="h-8 lg:h-12" alt="SMKN 2 Sumedang" />
        </a>
        <div class="flex lg:order-2">
            <button data-collapse-toggle="navbar-search" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white hover:text-primary-40 rounded-sm lg:hidden hover:bg-white"
                aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <i class="fa-solid fa-bars fa-xl"></i>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-search">
            <ul
                class="flex flex-col p-4 lg:p-0 mt-4 border rounded-sm lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0 lg:ml-20">
                <li><a href="/"
                        class="nav {{ $active === 'beranda' ? 'nav-active text-secondary-40' : 'text-white' }} block py-2 pl-3 lg:hover:text-secondary-40 duration-[400ms] lg:p-0">Beranda</a>
                </li>
                <li><a href="/produk"
                        class="nav {{ $active === 'produk' ? 'nav-active text-secondary-40' : 'text-white' }} block py-2 pl-3 lg:hover:text-secondary-40 duration-[400ms] lg:p-0">Produk</a>
                </li>
                <li><a href="/tentang"
                        class="nav {{ $active === 'tentang' ? 'nav-active text-secondary-40' : 'text-white' }} block py-2 pl-3 lg:hover:text-secondary-40 duration-[400ms] lg:p-0">Tentang
                        Kami</a></li>
                <li><a href="/kontak"
                        class="nav {{ $active === 'kontak' ? 'nav-active text-secondary-40' : 'text-white' }} block py-2 pl-3 lg:hover:text-secondary-40 duration-[400ms] lg:p-0">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    var dropdownButton = document.getElementById("dropdown-button-produk");
    var dropdownMenu = document.getElementById("dropdown-produk");

    dropdownButton.addEventListener("click", function() {
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

    dropdownMenu.addEventListener("click", function(event) {
        // Menghentikan penyebaran klik ke elemen dokumen, sehingga tidak akan menyembunyikan dropdown.
        event.stopPropagation();
    });

    document.addEventListener("click", function(event) {
        if (event.target !== dropdownButton && !dropdownButton.contains(event.target)) {
            dropdownMenu.classList.add("hidden");
            // Setel kembali tampilan dropdown-button-produk ke keadaan semula.
            dropdownButton.querySelector("i").classList.remove("fa-chevron-up");
            dropdownButton.querySelector("i").classList.add("fa-chevron-down");
        }
    });
</script>
