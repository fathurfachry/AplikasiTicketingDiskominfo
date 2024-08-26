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
            body {
                font-family: 'Nunito', sans-serif;
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
        <div class="flex w-full h-[100vh] mb-0 bg-white p-10">
            <div class="w-full h-full bg-white flex flex-col">
                <div class="h-[65px] bg-pink-100 shadow-lg rounded-xl flex items-center justify-start p-5 mb-5">
                    <h1 class="font-extrabold text-pink-600 text-2xl">Tambah User</h1>
                </div>
                <div class="flex-1 overflow-y-auto no-scrollbar bg-white shadow-lg rounded-xl p-16">
                    <div class="flex flex-col w-full h-auto px-10 gap-10">
                        <!-- Form Contents Here -->
                        <div class="flex w-full h-auto items-center">
                            <h3 class="w-full">Nama Layanan</h3>
                            <div class="relative w-full">
                                <button id="dropdownButton" class="flex px-4 w-full py-3 bg-white outline outline-1 outline-gray-400 text-black rounded-xl">
                                    Nama layanan
                                </button>
                                <div id="dropdownMenu" class="absolute w-full z-20 hidden mt-2 bg-white border rounded-md shadow-lg">
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Infrastruktur</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Aplikasi</a>
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Keamanan Informasi</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full h-auto items-center">
                            <h3 class="w-full">Perihal</h3>
                            <div class="relative w-full">
                                <input class="shadow rounded-xl w-full py-3 pl-10 pr-3 bg-gray-50 text-gray-700" id="perihal" type="text" placeholder="Perihal" />
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fa-solid fa-question"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full h-auto items-center">
                            <h3 class="w-full">Organisasi Perangkat Daerah</h3>
                            <div class="relative w-full">
                                <input class="shadow rounded-xl w-full py-3 pl-10 pr-3 bg-gray-50 text-gray-700 focus:outline-none" id="organisasi" type="text" placeholder="Organisasi Perangkat Daerah" />
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fa-solid fa-people-group"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full h-auto items-center">
                            <h3 class="w-full">Deskripsi</h3>
                            <div class="relative w-full">
                                <textarea class="shadow rounded-xl w-full h-36 py-2 pl-10 pr-3 bg-gray-50 text-gray-700 focus:outline-none" id="deskripsi" placeholder="Masukkan Deskripsi"></textarea>
                                <div class="absolute inset-y-0 left-0 pl-4 pt-3 flex items-start pointer-events-none">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full h-auto items-center">
                            <h3 class="w-full">Upload Berkas</h3>
                            <div class="block w-full">
                                <input class="block w-full text-sm mb-3 text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file">
                                <p class="text-md">Unggah formulir permohonan dan Berkas Persyaratan yang diminta dalam 1 (satu) file pdf.</p>
                            </div>
                        </div>
                        <div class="flex w-full h-auto justify-center gap-5 mt-9">
                            <button class="w-[170px] py-2 outline outline-pink-600 bg-pink-50 rounded-xl show-berkas-modal">Lihat Berkas</button>
                            <button class="w-[170px] outline text-white outline-pink-600 bg-pink-600 rounded-xl hover:shadow-xl">Daftar</button>
                        </div>
                    </div>
                </div>
                
                <div id="berkas-modal" tabindex="-1" aria-hidden="true" class="berkas-modal overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center flex hidden bg-black bg-opacity-50 h-[100%] w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="modal-content relative flex flex-col justify-between bg-white rounded-lg shadow w-full h-full max-w-[90&]">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                <h3 class="text-xl font-semibold text-gray-900">
                                    Berkas Persyaratan
                                </h3>
                                
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center close-berkas-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4 flex flex-col">
                                <div class="flex-1 h-full-w-32">
                                    <p class="mb-3 text-gray-500">1. Surat Permohonan dan Surat Pernyataan Pemohon bersedia melaksanakan Rekomendasi </p>
                                    <p class="mb-3 text-gray-500">2. Fotocopy Kartu Tanda Penduduk (KTP) pemohon.</p>
                                    <p class="mb-3 text-gray-500">3. Surat Kuasa Asli Bermaterai apabila dikuasakan  </p>
                                    <p class="mb-3 text-gray-500">4. Fotocopy Nomor Induk Berusaha (NIB)</p>
                                    <p class="mb-3 text-gray-500">5. Fotocopy Akta Pendirian/Dokumen Kepemilikan Perusahaan </p>
                                    <p class="mb-3 text-gray-500">6. Fotocopy Pertimbangan Teknis dari BPN.</p>
                                    <p class="mb-3 text-gray-500">7. Gambar Rencana Tapak (Siteplan) yang sudah disesuaikan dengan Bidang Tanah yang disahkan oleh BPN dalam Format AutoCAD (file.dwg) dan dilengkapi dengan koordinatnya</p>
                                    <p class="mb-3 text-gray-500">8. Peta Kontur Tanah Eksiting pada Lokasi yang Dimohonkan (Format CAD/SHP) </p>
                                    <p class="mb-3 text-gray-500">9. Rekomendasi kajian hidrologi jika luas tanah > 5 ha</p>

                                </div>
                            </div>
                    
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

            
            document.addEventListener('DOMContentLoaded', function() {
            const modal = document.querySelector('.berkas-modal');
            const showModal = document.querySelector('.show-berkas-modal');
            const closeModal = document.querySelectorAll('.close-berkas-modal');

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


        </script>
    </body>
    
</html>
