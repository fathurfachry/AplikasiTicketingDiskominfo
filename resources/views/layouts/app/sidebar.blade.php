@extends('layouts.app')

@section('sidebar')
    
        <div class="flex h-screen"> <!-- CHANGED: Added flex and height full for vertical layout -->
            <aside class="flex flex-col justify-between h-full w-64 bg-white p-6 text-white shadow-xl"> <!-- CHANGED: Added flex-col and justify-between for vertical spacing -->
                <!-- Header Sidebar -->
                <div class="flex h-auto w-full mb-8">
                    <img src="/img/logodashboard.png" alt="Dashboard Logo"> <!-- CHANGED: Confirmed image path and alt text -->
                </div>
        
                <div class="h-[500px]"> <!-- CHANGED: Wrapped menu items in a div to apply spacing -->

                    <div class="flex w-full justify-between items-center py-4">
                        <div class="flex gap-2">
                            <div class="flex items-center gap-2 rounded-full bg-slate-200 h-10 w-10 p-2">
                                <img src="" alt="">  
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="font-bold text-gray-900">Fachry</p>
                                <p class="text-xs font-semibold text-gray-400">Admin</p>
                            </div>
                        </div>
                        <i class="fa-solid fa-gear text-gray-900 text-xl"></i>
                    </div>

                    <a href="#" class="mt-2 block rounded-xl bg-pink-600 p-3 py-3 hover:bg-pink-500 text-white">
                        <span><i class="fa-solid fa-gauge text-white mr-2"></i></span> Tambah User
                    </a>
        
                    <a href="#" class="mt-2 block rounded-xl bg-pink-100 border-2 border-pink-600 p-3 py-3 hover:bg-white text-pink-600 mb-5">
                        <span><i class="fa-solid fa-gauge text-pink-600 mr-2"></i></span> Dashboard
                    </a>
        
                    <!-- Dropdown Menu -->
                    <input type="checkbox" id="dropdownToggle" class="hidden" />
                    <label for="dropdownToggle" class="flex cursor-pointer items-center rounded-md bg-white text-gray-900 p-2 transition duration-300 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"></path>
                        </svg>
                        <span class="ml-2 font-semibold">Pengajuan</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-auto h-4 w-4 transform transition-transform duration-300">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 9l-7.5 7.5-7.5-7.5"></path>
                        </svg>
                    </label>
                    <div class="dropdown-content mt-2">
                        <a href="#" class="block rounded-md bg-white p-2 text-gray-900 hover:bg-gray-100 ml-7">Daftar Pengajuan</a>
                    </div>
                </div>

                <a href="#" class="mt-2 block rounded-xl text-pink-600">
                    <span><i class="fa-solid fa-right-from-bracket text-pink-600 pr-3"></i></span>Keluar
                </a>

            </aside>
        </div>
        
@endsection


