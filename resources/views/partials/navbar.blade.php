<nav class="bg-primary-40 dark:bg-gray-900 sticky lg:fixed w-full z-50 top-0 left-0">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center">
    <img src="{{ asset('img/logo.svg') }}" class="h-12" alt="SMKN 2 Sumedang" />
  </a>
  <div class="flex md:order-2">
      <button type="button" class="text-black bg-secondary-40 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign In</button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:text-primary-40 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 border rounded-sm md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="/" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-secondary-40 duration-[400ms] md:p-0">Home</a>
      </li>
      <li class="flex text-white cursor-pointer">
        <div>
          <a href="/produk" class="flex items-center justify-between w-full py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-secondary-40 duration-[400ms] md:border-0 md:p-0 md:w-auto">Produk</a>
        </div>
        <div>
          <i id="dropdownNavbarLink" class="fas fa-chevron-down fa-sm ml-2 md:hover:text-secondary-40 duration-[400ms]" aria-controls="dropdownNavbar" data-dropdown-toggle="dropdownNavbar"></i>
        </div>
        <!-- Dropdown menu -->
        <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Design and Printing</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Pemasaran</a></li>
            </ul>
        </div>
      </li>
      <li><a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-secondary-40 duration-[400ms] md:p-0">Tentang Kami</a></li>
      <li><a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-secondary-40 duration-[400ms] md:p-0">Kontak</a></li>
    </ul>
  </div>
  </div>
</nav>


