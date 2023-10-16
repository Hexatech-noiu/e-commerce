@extends('layouts.main')

@section('container')

    {{-- Hero Section --}}
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 md:h-96 overflow-hidden lg:h-[100vh]">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="{{ asset('img/carousel1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="{{ asset('img/dummy2.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="{{ asset('img/dummy3.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
              <span class="sr-only">Previous</span>
          </span>
      </button>
      <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="sr-only">Next</span>
          </span>
      </button>
    </div>

    {{-- Insight E-COMMERCE SMKN 2 Sumedang --}}
    <section class="bg-white px-12 mt-10">
        <div class="flex flex-col lg:flex-row gap-8 items-center mx-auto max-w-screen-xl xl:gap-16">
            <div class="flex rounded-sm cursor-pointer">
              <div class="mx-auto max-w-full">
                <div class="flex [&:hover>div]:w-4 lg:[&:hover>div]:w-16 [&>div:hover]:w-[64vw] lg:[&>div:hover]:w-[30rem]">
                  <div class="group relative h-96 lg:w-[30rem] cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                    <img class="h-full object-cover transition-all group-hover:rotate-12 group-hover:scale-125" src="https://cdn.pixabay.com/photo/2016/01/31/19/41/apple-1172060_960_720.jpg" alt="" />
                    <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
                      <div class="absolute inset-x-5 bottom-6">
                        <div class="flex gap-3 text-white">
                          <svg width="48" height="48" viewBox="0 0 32 32">
                            <path d="M11 2H2v9h2V4h7V2z" fill="currentColor" />
                            <path d="M2 21v9h9v-2H4v-7H2z" fill="currentColor" />
                            <path d="M30 11V2h-9v2h7v7h2z" fill="currentColor" />
                            <path d="M21 30h9v-9h-2v7h-7v2z" fill="currentColor" />
                            <path d="M25.49 10.13l-9-5a1 1 0 0 0-1 0l-9 5A1 1 0 0 0 6 11v10a1 1 0 0 0 .51.87l9 5a1 1 0 0 0 1 0l9-5A1 1 0 0 0 26 21V11a1 1 0 0 0-.51-.87zM16 7.14L22.94 11L16 14.86L9.06 11zM8 12.7l7 3.89v7.71l-7-3.89zm9 11.6v-7.71l7-3.89v7.71z" fill="currentColor" />
                          </svg>
                          <div>
                            <p class="font-sembold text-xl text-gray-100">Beyond Builder</p>
                            <p class="text-gray-300">Better Design</p>
                          </div>
                        </div>
                        <div class="flex justify-end gap-3 text-gray-200">
                          <svg width="22" height="22" viewBox="0 0 512 512">
                            <path d="M265 96c65.3 0 118.7 1.1 168.1 3.3h1.4c23.1 0 42 22 42 49.1v1.1l.1 1.1c2.3 34 3.4 69.3 3.4 104.9.1 35.6-1.1 70.9-3.4 104.9l-.1 1.1v1.1c0 13.8-4.7 26.6-13.4 36.1-7.8 8.6-18 13.4-28.6 13.4h-1.6c-52.9 2.5-108.8 3.8-166.4 3.8h-10.6.1-10.9c-57.8 0-113.7-1.3-166.2-3.7h-1.6c-10.6 0-20.7-4.8-28.5-13.4-8.6-9.5-13.4-22.3-13.4-36.1v-1.1l-.1-1.1c-2.4-34.1-3.5-69.4-3.3-104.7v-.2c-.1-35.3 1-70.5 3.3-104.6l.1-1.1v-1.1c0-27.2 18.8-49.3 41.9-49.3h1.4c49.5-2.3 102.9-3.3 168.2-3.3H265m0-32.2h-18c-57.6 0-114.2.8-169.6 3.3-40.8 0-73.9 36.3-73.9 81.3C1 184.4-.1 220 0 255.7c-.1 35.7.9 71.3 3.4 107 0 45 33.1 81.6 73.9 81.6 54.8 2.6 110.7 3.8 167.8 3.8h21.6c57.1 0 113-1.2 167.9-3.8 40.9 0 74-36.6 74-81.6 2.4-35.7 3.5-71.4 3.4-107.1.1-35.7-1-71.3-3.4-107.1 0-45-33.1-81.1-74-81.1C379.2 64.8 322.7 64 265 64z" fill="currentColor" />
                            <path d="M207 353.8V157.4l145 98.2-145 98.2z" fill="currentColor" />
                          </svg>
                          <svg width="20" height="20" viewBox="0 0 15 15"><path fill="currentColor" d="m14.478 1.5l.5-.033a.5.5 0 0 0-.871-.301l.371.334Zm-.498 2.959a.5.5 0 1 0-1 0h1Zm-6.49.082h-.5h.5Zm0 .959h.5h-.5Zm-6.99 7V12a.5.5 0 0 0-.278.916L.5 12.5Zm.998-11l.469-.175a.5.5 0 0 0-.916-.048l.447.223Zm3.994 9l.354.353a.5.5 0 0 0-.195-.827l-.159.474Zm7.224-8.027l-.37.336l.18.199l.265-.04l-.075-.495Zm1.264-.94c.051.778.003 1.25-.123 1.606c-.122.345-.336.629-.723 1l.692.722c.438-.42.776-.832.974-1.388c.193-.546.232-1.178.177-2.006l-.998.066Zm0 3.654V4.46h-1v.728h1Zm-6.99-.646V5.5h1v-.959h-1Zm0 .959V6h1v-.5h-1ZM10.525 1a3.539 3.539 0 0 0-3.537 3.541h1A2.539 2.539 0 0 1 10.526 2V1Zm2.454 4.187C12.98 9.503 9.487 13 5.18 13v1c4.86 0 8.8-3.946 8.8-8.813h-1ZM1.03 1.675C1.574 3.127 3.614 6 7.49 6V5C4.174 5 2.421 2.54 1.966 1.325l-.937.35Zm.021-.398C.004 3.373-.157 5.407.604 7.139c.759 1.727 2.392 3.055 4.73 3.835l.317-.948c-2.155-.72-3.518-1.892-4.132-3.29c-.612-1.393-.523-3.11.427-5.013l-.895-.446Zm4.087 8.87C4.536 10.75 2.726 12 .5 12v1c2.566 0 4.617-1.416 5.346-2.147l-.708-.706Zm7.949-8.009A3.445 3.445 0 0 0 10.526 1v1c.721 0 1.37.311 1.82.809l.74-.671Zm-.296.83a3.513 3.513 0 0 0 2.06-1.134l-.744-.668a2.514 2.514 0 0 1-1.466.813l.15.989ZM.222 12.916C1.863 14.01 3.583 14 5.18 14v-1c-1.63 0-3.048-.011-4.402-.916l-.556.832Z" /></svg>
                          <svg width="20" height="20" viewBox="0 0 15 15"><path fill="none" stroke="currentColor" d="M7.5 14.5a7 7 0 1 1 0-14a7 7 0 0 1 0 14Zm0 0v-8a2 2 0 0 1 2-2h.5m-5 4h5" /></svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="group relative h-96 w-16 cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                    <img class="h-full object-cover transition-all group-hover:rotate-12 group-hover:scale-125" src="https://cdn.pixabay.com/photo/2022/08/17/15/46/family-7392843_960_720.jpg" alt="" />
                    <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
                      <div class="absolute inset-x-5 bottom-6">
                        <div class="flex gap-3 text-white">
                          <svg width="48" height="48" viewBox="0 0 32 32">
                            <path fill="currentColor" d="M20 30h-3a2.002 2.002 0 0 1-2-2v-5h2v5h3v-5h2v-4a1.001 1.001 0 0 0-1-1h-8.72l-2-6H4a1.001 1.001 0 0 0-1 1v6h2v9h4v-7h2v7a2.002 2.002 0 0 1-2 2H5a2.002 2.002 0 0 1-2-2v-7a2.002 2.002 0 0 1-2-2v-6a3.003 3.003 0 0 1 3-3h6.28a1.998 1.998 0 0 1 1.897 1.367L13.72 16H21a3.003 3.003 0 0 1 3 3v4a2.002 2.002 0 0 1-2 2v3a2.002 2.002 0 0 1-2 2zm8 0h-2V19h3v-6a1.001 1.001 0 0 0-1-1h-4v-2h4a3.003 3.003 0 0 1 3 3v6a2.002 2.002 0 0 1-2 2h-1zM7 9a4 4 0 1 1 4-4a4.005 4.005 0 0 1-4 4zm0-6a2 2 0 1 0 2 2a2.002 2.002 0 0 0-2-2zm18 6a4 4 0 1 1 4-4a4.005 4.005 0 0 1-4 4zm0-6a2 2 0 1 0 2 2a2.002 2.002 0 0 0-2-2z" />
                            <path fill="currentColor" d="M18.5 15a3.5 3.5 0 1 1 3.5-3.5a3.504 3.504 0 0 1-3.5 3.5Zm0-5a1.5 1.5 0 1 0 1.5 1.5a1.502 1.502 0 0 0-1.5-1.5Z" />
                          </svg>
                          <div>
                            <p class="font-sembold text-xl text-gray-100">Familly and Sunset</p>
                            <p class="text-gray-300">Better Design</p>
                          </div>
                        </div>
                        <div class="flex justify-end gap-3 text-gray-200">
                          <svg width="22" height="22" viewBox="0 0 512 512">
                            <path d="M265 96c65.3 0 118.7 1.1 168.1 3.3h1.4c23.1 0 42 22 42 49.1v1.1l.1 1.1c2.3 34 3.4 69.3 3.4 104.9.1 35.6-1.1 70.9-3.4 104.9l-.1 1.1v1.1c0 13.8-4.7 26.6-13.4 36.1-7.8 8.6-18 13.4-28.6 13.4h-1.6c-52.9 2.5-108.8 3.8-166.4 3.8h-10.6.1-10.9c-57.8 0-113.7-1.3-166.2-3.7h-1.6c-10.6 0-20.7-4.8-28.5-13.4-8.6-9.5-13.4-22.3-13.4-36.1v-1.1l-.1-1.1c-2.4-34.1-3.5-69.4-3.3-104.7v-.2c-.1-35.3 1-70.5 3.3-104.6l.1-1.1v-1.1c0-27.2 18.8-49.3 41.9-49.3h1.4c49.5-2.3 102.9-3.3 168.2-3.3H265m0-32.2h-18c-57.6 0-114.2.8-169.6 3.3-40.8 0-73.9 36.3-73.9 81.3C1 184.4-.1 220 0 255.7c-.1 35.7.9 71.3 3.4 107 0 45 33.1 81.6 73.9 81.6 54.8 2.6 110.7 3.8 167.8 3.8h21.6c57.1 0 113-1.2 167.9-3.8 40.9 0 74-36.6 74-81.6 2.4-35.7 3.5-71.4 3.4-107.1.1-35.7-1-71.3-3.4-107.1 0-45-33.1-81.1-74-81.1C379.2 64.8 322.7 64 265 64z" fill="currentColor" />
                            <path d="M207 353.8V157.4l145 98.2-145 98.2z" fill="currentColor" />
                          </svg>
                          <svg width="20" height="20" viewBox="0 0 15 15"><path fill="currentColor" d="m14.478 1.5l.5-.033a.5.5 0 0 0-.871-.301l.371.334Zm-.498 2.959a.5.5 0 1 0-1 0h1Zm-6.49.082h-.5h.5Zm0 .959h.5h-.5Zm-6.99 7V12a.5.5 0 0 0-.278.916L.5 12.5Zm.998-11l.469-.175a.5.5 0 0 0-.916-.048l.447.223Zm3.994 9l.354.353a.5.5 0 0 0-.195-.827l-.159.474Zm7.224-8.027l-.37.336l.18.199l.265-.04l-.075-.495Zm1.264-.94c.051.778.003 1.25-.123 1.606c-.122.345-.336.629-.723 1l.692.722c.438-.42.776-.832.974-1.388c.193-.546.232-1.178.177-2.006l-.998.066Zm0 3.654V4.46h-1v.728h1Zm-6.99-.646V5.5h1v-.959h-1Zm0 .959V6h1v-.5h-1ZM10.525 1a3.539 3.539 0 0 0-3.537 3.541h1A2.539 2.539 0 0 1 10.526 2V1Zm2.454 4.187C12.98 9.503 9.487 13 5.18 13v1c4.86 0 8.8-3.946 8.8-8.813h-1ZM1.03 1.675C1.574 3.127 3.614 6 7.49 6V5C4.174 5 2.421 2.54 1.966 1.325l-.937.35Zm.021-.398C.004 3.373-.157 5.407.604 7.139c.759 1.727 2.392 3.055 4.73 3.835l.317-.948c-2.155-.72-3.518-1.892-4.132-3.29c-.612-1.393-.523-3.11.427-5.013l-.895-.446Zm4.087 8.87C4.536 10.75 2.726 12 .5 12v1c2.566 0 4.617-1.416 5.346-2.147l-.708-.706Zm7.949-8.009A3.445 3.445 0 0 0 10.526 1v1c.721 0 1.37.311 1.82.809l.74-.671Zm-.296.83a3.513 3.513 0 0 0 2.06-1.134l-.744-.668a2.514 2.514 0 0 1-1.466.813l.15.989ZM.222 12.916C1.863 14.01 3.583 14 5.18 14v-1c-1.63 0-3.048-.011-4.402-.916l-.556.832Z" /></svg>
                          <svg width="20" height="20" viewBox="0 0 15 15"><path fill="none" stroke="currentColor" d="M7.5 14.5a7 7 0 1 1 0-14a7 7 0 0 1 0 14Zm0 0v-8a2 2 0 0 1 2-2h.5m-5 4h5" /></svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="group relative h-96 w-16 cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                    <img class="h-full object-cover transition-all group-hover:rotate-12 group-hover:scale-125" src="https://cdn.pixabay.com/photo/2020/04/17/14/07/athlete-5055367_960_720.jpg" alt="" />
                    <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
                      <div class="absolute inset-x-5 bottom-6">
                        <div class="flex gap-3 text-white">
                          <svg width="48" height="48" viewBox="0 0 24 24"><path fill="currentColor" d="m11.74 13.36l2.4-5.65l-1.08-2.21H10.5V4H14l.73 1.5h7.02l-1 3.5h-4.31l.67 1.37A5.002 5.002 0 0 1 24 15c0 2.76-2.24 5-5 5s-5-2.24-5-5c0-1.55.71-2.94 1.82-3.85L15 9.5L12.25 16H9.9A5 5 0 1 1 5 10c2.59 0 4.72 1.97 5 4.5h.58L8.3 9h-.8c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h2.75c.41 0 .75.34.75.75s-.34.75-.75.75h-.28l1.77 4.36M5 11.5c-1.93 0-3.5 1.57-3.5 3.5a3.504 3.504 0 0 0 6.86 1H4v-1.5h4.47c-.25-1.7-1.71-3-3.47-3m14 0c-.43 0-.85.08-1.23.22l1.93 3.96l-1.35.66l-1.85-3.79c-.62.63-1 1.5-1 2.45c0 1.93 1.57 3.5 3.5 3.5s3.5-1.57 3.5-3.5s-1.57-3.5-3.5-3.5Z" /></svg>
                          <div>
                            <p class="font-sembold text-xl text-gray-100">Tailwind CSS</p>
                            <p class="text-gray-300">Better Design</p>
                          </div>
                        </div>
                        <div class="flex justify-end gap-3 text-gray-200">
                          <svg width="22" height="22" viewBox="0 0 512 512">
                            <path d="M265 96c65.3 0 118.7 1.1 168.1 3.3h1.4c23.1 0 42 22 42 49.1v1.1l.1 1.1c2.3 34 3.4 69.3 3.4 104.9.1 35.6-1.1 70.9-3.4 104.9l-.1 1.1v1.1c0 13.8-4.7 26.6-13.4 36.1-7.8 8.6-18 13.4-28.6 13.4h-1.6c-52.9 2.5-108.8 3.8-166.4 3.8h-10.6.1-10.9c-57.8 0-113.7-1.3-166.2-3.7h-1.6c-10.6 0-20.7-4.8-28.5-13.4-8.6-9.5-13.4-22.3-13.4-36.1v-1.1l-.1-1.1c-2.4-34.1-3.5-69.4-3.3-104.7v-.2c-.1-35.3 1-70.5 3.3-104.6l.1-1.1v-1.1c0-27.2 18.8-49.3 41.9-49.3h1.4c49.5-2.3 102.9-3.3 168.2-3.3H265m0-32.2h-18c-57.6 0-114.2.8-169.6 3.3-40.8 0-73.9 36.3-73.9 81.3C1 184.4-.1 220 0 255.7c-.1 35.7.9 71.3 3.4 107 0 45 33.1 81.6 73.9 81.6 54.8 2.6 110.7 3.8 167.8 3.8h21.6c57.1 0 113-1.2 167.9-3.8 40.9 0 74-36.6 74-81.6 2.4-35.7 3.5-71.4 3.4-107.1.1-35.7-1-71.3-3.4-107.1 0-45-33.1-81.1-74-81.1C379.2 64.8 322.7 64 265 64z" fill="currentColor" />
                            <path d="M207 353.8V157.4l145 98.2-145 98.2z" fill="currentColor" />
                          </svg>
                          <svg width="20" height="20" viewBox="0 0 15 15"><path fill="currentColor" d="m14.478 1.5l.5-.033a.5.5 0 0 0-.871-.301l.371.334Zm-.498 2.959a.5.5 0 1 0-1 0h1Zm-6.49.082h-.5h.5Zm0 .959h.5h-.5Zm-6.99 7V12a.5.5 0 0 0-.278.916L.5 12.5Zm.998-11l.469-.175a.5.5 0 0 0-.916-.048l.447.223Zm3.994 9l.354.353a.5.5 0 0 0-.195-.827l-.159.474Zm7.224-8.027l-.37.336l.18.199l.265-.04l-.075-.495Zm1.264-.94c.051.778.003 1.25-.123 1.606c-.122.345-.336.629-.723 1l.692.722c.438-.42.776-.832.974-1.388c.193-.546.232-1.178.177-2.006l-.998.066Zm0 3.654V4.46h-1v.728h1Zm-6.99-.646V5.5h1v-.959h-1Zm0 .959V6h1v-.5h-1ZM10.525 1a3.539 3.539 0 0 0-3.537 3.541h1A2.539 2.539 0 0 1 10.526 2V1Zm2.454 4.187C12.98 9.503 9.487 13 5.18 13v1c4.86 0 8.8-3.946 8.8-8.813h-1ZM1.03 1.675C1.574 3.127 3.614 6 7.49 6V5C4.174 5 2.421 2.54 1.966 1.325l-.937.35Zm.021-.398C.004 3.373-.157 5.407.604 7.139c.759 1.727 2.392 3.055 4.73 3.835l.317-.948c-2.155-.72-3.518-1.892-4.132-3.29c-.612-1.393-.523-3.11.427-5.013l-.895-.446Zm4.087 8.87C4.536 10.75 2.726 12 .5 12v1c2.566 0 4.617-1.416 5.346-2.147l-.708-.706Zm7.949-8.009A3.445 3.445 0 0 0 10.526 1v1c.721 0 1.37.311 1.82.809l.74-.671Zm-.296.83a3.513 3.513 0 0 0 2.06-1.134l-.744-.668a2.514 2.514 0 0 1-1.466.813l.15.989ZM.222 12.916C1.863 14.01 3.583 14 5.18 14v-1c-1.63 0-3.048-.011-4.402-.916l-.556.832Z" /></svg>
                          <svg width="20" height="20" viewBox="0 0 15 15"><path fill="none" stroke="currentColor" d="M7.5 14.5a7 7 0 1 1 0-14a7 7 0 0 1 0 14Zm0 0v-8a2 2 0 0 1 2-2h.5m-5 4h5" /></svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="group relative h-96 w-16 cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                    <img class="h-full object-cover transition-all group-hover:rotate-12 group-hover:scale-125" src="https://cdn.pixabay.com/photo/2021/09/17/15/17/fruit-6633086_960_720.jpg" alt="" />
                    <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
                      <div class="absolute inset-x-5 bottom-6">
                        <div class="flex gap-3 text-white">
                          <svg width="48" height="48" viewBox="0 0 24 24"><path fill="currentColor" d="m11.74 13.36l2.4-5.65l-1.08-2.21H10.5V4H14l.73 1.5h7.02l-1 3.5h-4.31l.67 1.37A5.002 5.002 0 0 1 24 15c0 2.76-2.24 5-5 5s-5-2.24-5-5c0-1.55.71-2.94 1.82-3.85L15 9.5L12.25 16H9.9A5 5 0 1 1 5 10c2.59 0 4.72 1.97 5 4.5h.58L8.3 9h-.8c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h2.75c.41 0 .75.34.75.75s-.34.75-.75.75h-.28l1.77 4.36M5 11.5c-1.93 0-3.5 1.57-3.5 3.5a3.504 3.504 0 0 0 6.86 1H4v-1.5h4.47c-.25-1.7-1.71-3-3.47-3m14 0c-.43 0-.85.08-1.23.22l1.93 3.96l-1.35.66l-1.85-3.79c-.62.63-1 1.5-1 2.45c0 1.93 1.57 3.5 3.5 3.5s3.5-1.57 3.5-3.5s-1.57-3.5-3.5-3.5Z" /></svg>
                          <div>
                            <p class="font-sembold text-xl text-gray-100">Tailwind CSS</p>
                            <p class="text-gray-300">Better Design</p>
                          </div>
                        </div>
                        <div class="flex justify-end gap-3 text-gray-200">
                          <svg width="22" height="22" viewBox="0 0 512 512">
                            <path d="M265 96c65.3 0 118.7 1.1 168.1 3.3h1.4c23.1 0 42 22 42 49.1v1.1l.1 1.1c2.3 34 3.4 69.3 3.4 104.9.1 35.6-1.1 70.9-3.4 104.9l-.1 1.1v1.1c0 13.8-4.7 26.6-13.4 36.1-7.8 8.6-18 13.4-28.6 13.4h-1.6c-52.9 2.5-108.8 3.8-166.4 3.8h-10.6.1-10.9c-57.8 0-113.7-1.3-166.2-3.7h-1.6c-10.6 0-20.7-4.8-28.5-13.4-8.6-9.5-13.4-22.3-13.4-36.1v-1.1l-.1-1.1c-2.4-34.1-3.5-69.4-3.3-104.7v-.2c-.1-35.3 1-70.5 3.3-104.6l.1-1.1v-1.1c0-27.2 18.8-49.3 41.9-49.3h1.4c49.5-2.3 102.9-3.3 168.2-3.3H265m0-32.2h-18c-57.6 0-114.2.8-169.6 3.3-40.8 0-73.9 36.3-73.9 81.3C1 184.4-.1 220 0 255.7c-.1 35.7.9 71.3 3.4 107 0 45 33.1 81.6 73.9 81.6 54.8 2.6 110.7 3.8 167.8 3.8h21.6c57.1 0 113-1.2 167.9-3.8 40.9 0 74-36.6 74-81.6 2.4-35.7 3.5-71.4 3.4-107.1.1-35.7-1-71.3-3.4-107.1 0-45-33.1-81.1-74-81.1C379.2 64.8 322.7 64 265 64z" fill="currentColor" />
                            <path d="M207 353.8V157.4l145 98.2-145 98.2z" fill="currentColor" />
                          </svg>
                          <svg width="20" height="20" viewBox="0 0 15 15"><path fill="currentColor" d="m14.478 1.5l.5-.033a.5.5 0 0 0-.871-.301l.371.334Zm-.498 2.959a.5.5 0 1 0-1 0h1Zm-6.49.082h-.5h.5Zm0 .959h.5h-.5Zm-6.99 7V12a.5.5 0 0 0-.278.916L.5 12.5Zm.998-11l.469-.175a.5.5 0 0 0-.916-.048l.447.223Zm3.994 9l.354.353a.5.5 0 0 0-.195-.827l-.159.474Zm7.224-8.027l-.37.336l.18.199l.265-.04l-.075-.495Zm1.264-.94c.051.778.003 1.25-.123 1.606c-.122.345-.336.629-.723 1l.692.722c.438-.42.776-.832.974-1.388c.193-.546.232-1.178.177-2.006l-.998.066Zm0 3.654V4.46h-1v.728h1Zm-6.99-.646V5.5h1v-.959h-1Zm0 .959V6h1v-.5h-1ZM10.525 1a3.539 3.539 0 0 0-3.537 3.541h1A2.539 2.539 0 0 1 10.526 2V1Zm2.454 4.187C12.98 9.503 9.487 13 5.18 13v1c4.86 0 8.8-3.946 8.8-8.813h-1ZM1.03 1.675C1.574 3.127 3.614 6 7.49 6V5C4.174 5 2.421 2.54 1.966 1.325l-.937.35Zm.021-.398C.004 3.373-.157 5.407.604 7.139c.759 1.727 2.392 3.055 4.73 3.835l.317-.948c-2.155-.72-3.518-1.892-4.132-3.29c-.612-1.393-.523-3.11.427-5.013l-.895-.446Zm4.087 8.87C4.536 10.75 2.726 12 .5 12v1c2.566 0 4.617-1.416 5.346-2.147l-.708-.706Zm7.949-8.009A3.445 3.445 0 0 0 10.526 1v1c.721 0 1.37.311 1.82.809l.74-.671Zm-.296.83a3.513 3.513 0 0 0 2.06-1.134l-.744-.668a2.514 2.514 0 0 1-1.466.813l.15.989ZM.222 12.916C1.863 14.01 3.583 14 5.18 14v-1c-1.63 0-3.048-.011-4.402-.916l-.556.832Z" /></svg>
                          <svg width="20" height="20" viewBox="0 0 15 15"><path fill="none" stroke="currentColor" d="M7.5 14.5a7 7 0 1 1 0-14a7 7 0 0 1 0 14Zm0 0v-8a2 2 0 0 1 2-2h.5m-5 4h5" /></svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="lg:w-1/2">
              <h2 class="mb-4 text-2xl sm:text-4xl tracking-tight font-extrabold text-black">E-COMMERCE
              <br>
              <span class="text-primary-40">SMKN 2 SUMEDANG</span></h2>
              <p class="mb-4 font-light text-neutral-60 md:text-lg">
                E-Commerce SMK Negeri 2 Sumedang adalah sebuah platform penjualan online yang dikelola oleh siswa dan siswi SMK Negeri 2 Sumedang. Platform ini bertujuan untuk memberikan wadah bagi siswa dan siswi untuk berwirausaha dan mengembangkan keterampilan mereka. E-commerce SMK Negeri 2 Sumedang menyediakan berbagai macam produk, mulai dari produk fashion hingga produk makanan dan minuman. Produk-produk yang dijual di platform ini merupakan hasil karya siswa dan siswi SMK Negeri 2 Sumedang.
              </p>
            </div>
        </div>
    </section>

    {{-- Beli sekarang --}}
    <section class="bg-primary-40 px-12 py-6 mt-10 lg:mt-20">
        <div class="flex flex-col md:flex-row mx-auto max-w-screen-xl py-6 gap-8 items-center xl:gap-16">
            <div class="lg:w-3/4">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-white sm:text-4xl">Siap untuk melihat karya unik gridas?</h2>
                <p class="max-w-2xl font-light text-white sm:text-xl">Unggul, Berakhlak Mulia, Kompetitif</p>
            </div>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4 w-full sm:w-auto">
                <a href="/produk" class="inline-flex w-full sm:w-auto justify-center items-center py-3 px-7 text-lg font-normal text-center rounded-sm text-black bg-secondary-40 border-[3px] border-secondary-40 hover:text-secondary-40 hover:bg-transparent focus:ring-4 focus:ring-secondary-50 duration-[400ms]">
                    Lihat Sekarang
                </a>
            </div>
        </div>
    </section>

    {{-- Google Maps --}}
    <section class="bg-white px-12 my-10 lg:mt-20">
        <div class="mx-auto max-w-screen-xl">
            <div class="w-full h-[400px] rounded-lg overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15845.826280495865!2d107.9283445!3d-6.8357345!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d3ffffffffff%3A0x64ed78d1e54e0ed8!2sSMK%20NEGERI%202%20SUMEDANG!5e0!3m2!1sid!2sid!4v1697381354549!5m2!1sid!2sid" class="w-full h-full" style="border:0;" allowfullscreen="" loading="eager" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

@endsection
