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
                font-family: 'Poppins', sans-serif;
            }

            /* Untuk transisi dropdown */

            dropdown-content {
                display: none;
            }
            #dropdownToggle:checked + label + .dropdown-content {
                display: block;

            }
        </style>
    </head>
    <body class="antialiased">
      
        <div class="flex w-full h-[100vh] mb-0 overflow-y-hidden bg-white p-10">

            <div class="w-full h-[500px] bg-white">
                <div class="w-full h-[65px] bg-pink-100 shadow-lg rounded-xl flex items-center justify-start p-5 mb-5"> <!-- CHANGED: Added flex, items-center, and justify-center classes -->
                    <h1 class="font-extrabold text-pink-600 text-2xl">Tambah User</h1> <!-- CHANGED: Removed the incorrect "text-" class -->
                </div>
                <div class="w-full h-full overflow-y-hidden bg-white shadow-lg rounded-xl flex items-center justify-start p-16"> <!-- CHANGED: Added flex, items-center, and justify-center classes -->
                    <div class="flex  w-full h-full px-10">

                            <!-- Dropdown Component -->
                        <div class="flex flex-col w-full h-auto gap-6">
                            <div class="relative">
                                <button id="dropdownButton" class="flex px-4 w-full py-3 justify-start bg-white outline outline outline-gray-3000 outline-1 text-black rounded-xl">
                                    Role
                                </button>
    
                                <!-- Dropdown Menu -->
                                <div id="dropdownMenu" class="absolute w-full z-20 hidden mt-2 bg-white border rounded-md shadow-lg">
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Admn</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">User</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Tim</a>
                                </div>
                            </div>
    
                            <div class="relative">
                                <input
                                    class="shadow appearance-none border rounded-xl w-full py-3 pl-10 pr-3 bg-gray-50 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="username"
                                    type="text"
                                    placeholder="Masukkan nama lengkap"
                                />
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-500"></i>
                                </div>
                            </div>
    
                            <div class="relative">
                                <input
                                    class="shadow appearance-none border rounded-xl w-full py-3 pl-10 pr-3 bg-gray-50 text-gray-700 leading-tight focus:outline-none"
                                    id="username"
                                    type="text"
                                    placeholder="Masukkan Email"
                                />
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fa-regular fa-envelope text-gray-500"></i>
                                </div>
                            </div>
    
                            <div class="relative">
                                <input
                                    class="shadow appearance-none border rounded-xl w-full py-3 pl-10 pr-3 bg-gray-50 text-gray-700 leading-tight focus:outline-none"
                                    id="username"
                                    type="text"
                                    placeholder="Masukkan Password"
                                />
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fa-solid fa-lock text-gray-500"></i>
                                </div>
                            </div>
                        </div>



                        <div class="flex w-full h-auto justify-center gap-5 mt-16">

                            <button class="w-[170px] py-2 outline outline-pink-600 bg-pink-50 rounded rounded-xl">Kembali ke Beranda</button>

                            <button class="w-[170px] outline text-white outline-pink-600 bg-pink-600 rounded rounded-xl hover:shadow-xl">Daftar</button>

                        </div>
                          
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Toggle Dropdown Visibility
            document.getElementById('dropdownButton').addEventListener('click', function () {
                const dropdownMenu = document.getElementById('dropdownMenu');
                dropdownMenu.classList.toggle('hidden');
            });
    
            // Close dropdown if clicked outside
            window.addEventListener('click', function (e) {
                const dropdownMenu = document.getElementById('dropdownMenu');
                const dropdownButton = document.getElementById('dropdownButton');
                if (!dropdownButton.contains(e.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        </script>
    
        
    </body>
</html>
