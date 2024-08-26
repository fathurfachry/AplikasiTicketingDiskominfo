<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
      <header class="mb-2">
        <div class="relative flex max-w-screen-xl flex-col overflow-hidden px-4 py-4 md:mx-auto md:flex-row md:items-center">
          <a href="#" class="flex items-center whitespace-nowrap text-2xl font-black">
            <span class="mr-2 text-4xl text-blue-600">
              <img src="../img/kabkrw.png" class="w-48 mx-8h-auto"" alt="Kab. Karawang">
            </span>
          </a>
          <input type="checkbox" class="peer hidden" id="navbar-open" />
          <label class="absolute top-5 right-7 cursor-pointer md:hidden" for="navbar-open">
            <span class="sr-only">Toggle Navigation</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </label>
          <nav aria-label="Header Navigation" class="peer-checked:mt-8 peer-checked:max-h-56 flex max-h-0 w-full flex-col items-center justify-between overflow-hidden transition-all md:ml-24 md:max-h-full md:flex-row md:items-start">
            <ul class="flex flex-col items-center space-y-1 md:ml-auto md:flex-row md:space-y-0">
              <li class="text-gray-600 md:mr-12 hover:text-blue-600"><a href="#">Beranda</a></li>
              <li class="text-gray-600 md:mr-12 hover:text-blue-600"><a href="#">Layanan</a></li>
              {{-- <li class="text-gray-600 md:mr-12 hover:text-blue-600">
                <button class="rounded-md border-2 border-blue-600 px-6 py-1 font-medium text-blue-600 transition-colors hover:bg-blue-600 hover:text-white">Login</button>
              </li> --}}
            </ul>
          </nav>
        </div>
      </header>
      <div class="w-full h-[100vh] px-10 relative">
        <div class="rounded-xl absolute top-0 left-0 ml-10 w-[1183px] bg-gradient-to-r from-neutral-900 h-[550px] px-10">
          <div class="mt-[90px] flex mx-10 my-auto items-center justify-between">
            <div class="rounded-xl">
              <h1 class="text-white font-bold text-6xl">
                Aplikasi Ticketing <br />
                Layanan Publik
              </h1>
              <p class="text-white mt-10 text-lg">
                Kabupatan Karawang yang berfungsi sebagai <br />
                Sebuah aplikasi yang dibuat oleh Pemerintah <br />
                media untuk mengajukan berbagai keperluan <br />
                masyarakat
              </p>
              <a href="{{ url('/beranda/masuk') }}" class="bg-pink-500 py-2 px-5 rounded-md text-white mt-10 inline-block">
                Masuk
              </a>
            
            </div>
            <div>
              <img
                src="../img/bupatikarawang.png"
                width="400px"
                alt=""
              />
            </div>
          </div>
        </div>
        <img
          src="../img/kotakrw.png"
          class="rounded-xl h-[550px] w-[1223px]"
        />
      </div>
      

      <div class="w-full h-[100vh]">

        <div class=" width-full h-[100vh] p-10">
          <div class=" w-full h-full px-36">
            <h1 class="text-3xl font-bold text-center py-5">
              Jenis - Jenis Pelayanan
            </h1>
            <p class="text-center text-gray-400">
              Jenis - jenis layanan yang disediakan
            </p>
              <div class="gap-3 grid grid-cols-2 mt-[50px] mx-5">
                <div class="w-full h-[100px] bg-white border-solid border-2 flex px-5 rounded-xl">
                  <div class="w-[50px] h-[50px] rounded-full bg-pink-500 my-auto flex items-center justify-center">
                    <i class="w-auto fa-regular fa-building text-white"></i>
                  </div>
                  <div class="my-auto mx-5">
                    <h1 class="font-bold text-lg">Layanan Infrastruktur</h1>
                    <p class="text-[13px]">Layanan Infrastruktur Kabupaten Karawang</p>
                  </div>
                  <div class="h-full flex items-center justify-center w-5">
                    <i class="fa-solid fa-angle-right text-xl"></i>
                  </div>
                </div>
                <div class="w-full h-[100px] bg-white border-solid border-2 flex px-5 rounded-xl">
                  <div class="w-[50px] h-[50px] rounded-full bg-pink-500 my-auto flex items-center justify-center">
                    <i class="w-auto fa-regular fa-building text-white"></i>
                  </div>
                  <div class="my-auto mx-5">
                    <h1 class="font-bold text-lg">Layanan Infrastruktur</h1>
                    <p class="text-[13px]">Layanan Infrastruktur Kabupaten Karawang</p>
                  </div>
                  <div class="h-full flex items-center justify-center w-5">
                    <i class="fa-solid fa-angle-right text-xl"></i>
                  </div>
                </div>
                <div class="w-full h-[100px] bg-white border-solid border-2 flex px-5 rounded-xl">
                  <div class="w-[50px] h-[50px] rounded-full bg-pink-500 my-auto flex items-center justify-center">
                    <i class="w-auto fa-regular fa-building text-white"></i>
                  </div>
                  <div class="my-auto mx-5">
                    <h1 class="font-bold text-lg">Layanan Aplikasi</h1>
                    <p class="text-[13px]">Layanan Aplikasi Kabupaten Karawang</p>
                  </div>
                  <div class="h-full flex items-center justify-center w-5">
                    <i class="fa-solid fa-angle-right text-xl"></i>
                  </div>
                </div>
                <button data-modal-target="detail-modal" class="w-full h-[100px] bg-white border-solid border-2 flex px-5 rounded-xl show-info-keamananinformasi-modal">
                  <div class="w-[50px] h-[50px] rounded-full bg-pink-500 my-auto flex items-center justify-center">
                    <i class="w-auto fa-regular fa-building text-white"></i>
                  </div>
                  <div class="my-auto mx-5 flex-grow">
                    <h1 class="font-bold text-lg w-full text-left">Keamanan Informasi</h1>
                    <p class="text-[13px] text-left">Layanan Keamanan Informasi Kabupaten Karawang</p>
                  </div>
                  <div class="h-full flex items-center justify-center w-5">
                    <i class="fa-solid fa-angle-right text-xl"></i>
                  </div>
                </button>

              </div>
            <div>
    
            </div>
          </div>
        </div>
      </div>

      <div id="info-keamananinformasi-modal" tabindex="-1" aria-hidden="true" class="info-keamananinformasi-modal overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center flex hidden bg-black bg-opacity-50 h-[100%] w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="modal-content relative flex flex-col justify-between bg-white rounded-lg shadow w-full h-full max-w-[90&]">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Layanan Keamanan Informasi
                    </h3>
                    
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center close-info-keamananinformasi-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4 flex flex-col">
                    <div class="h-full-w-32">
                      <p class="flex font-semibold text-lg mb-3">Apa itu Layanan Keamanan Informasi ?</p>
                      <p class="flex">Lorem ipsum dolor sit amet consectetur. Donec fames viverra amet venenatis nulla faucibus nisi. Ut nisl amet non euismod tincidunt neque phasellus morbi. Eu et a proin sapien id facilisi lacinia sollicitudin. Aliquet libero sed tristique commodo in sem leo pellentesque. Pellentesque molestie adipiscing tellus molestie blandit duis id quis purus. Ultrices tempor eleifend justo nibh. Cras pulvinar nunc turpis mattis massa cras. Tortor sit cursus ipsum pellentesque aenean quam.</p>

                    </div>
                </div>
        
            </div>
        </div>
    </div>

      <footer class="relative bg-pink-600 text-white px-10">

        <div class="w-full h-[120px] bg-pink-600">
          <div class="grid grid-cols-3">

            <div class="w-full h-[100px] flex">
              <img src="img/copyright.png" class="my-auto ml-5" alt="">
            </div>

            <div class="w-full h-[100px] flex">
              <div class="mx-auto mt-4">
                <h1 class="text-white font-bold text-sm mb-2">Kontak Kami</h1>
                  <div class="flex items-center mb-2">
                    <i class="fa-regular fa-envelope"></i>
                    <p class="ml-2 text-xs text-white">sda.puprkrw@gmail.com</p>
                  </div>
                  <div class="flex items-center">
                    <i class="fa-solid fa-phone"></i>
                    <p class="ml-2 text-xs text-white">(0267) 413085</p>
                  </div>
              </div>
            </div>

            <div class="w-full h-[100px] flex">
              <div class="mx-auto mt-4">
                <h1 class="text-white m-auto font-bold text-sm mb-2"> Alamat </h1>
                <div class="flex justify-center">
                  <i class="fa-solid fa-location-dot"></i>
                  <p class="my-auto ml-2 text-xs text-white">Jl. Tanjungmekar, Karawang Barat, Karawang, Jawa Barat 41316</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </footer>

      <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.querySelector('.info-keamananinformasi-modal');
            const showModal = document.querySelector('.show-info-keamananinformasi-modal');
            const closeModal = document.querySelectorAll('.close-info-keamananinformasi-modal');

                // Show modal
                if (showModal) {
                    showModal.addEventListener('click', function () {
                        modal.classList.remove('hidden');
                    });
                }

                // Close modal
                closeModal.forEach(button => {
                    button.addEventListener('click', function () {
                        modal.classList.add('hidden');
                    });
                 });
            });
      </script>

    </body>
</html>
