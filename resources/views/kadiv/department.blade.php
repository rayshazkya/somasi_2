@extends('kadiv.dashboard')
@section('header-title', 'Daftar Anggota')
@section('header-subtitle', 'Informasi Seluruh Anggota')

@section('content')
    <div class="p-6 bg-white">


        <!-- Search Bar -->
        <div class="relative w-80 mb-6">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <input type="text"
                class="pl-10 w-full h-10 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                placeholder="Cari">
        </div>

        <!-- Department Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- KOMINKRAF Department -->
            <div class="border rounded-lg overflow-hidden">
                <div class="flex justify-between items-center p-4 border-b">
                    <div>
                        <h2 class="text-lg font-semibold">Departemen KOMINKRAF</h2>
                        <p class="text-sm text-gray-500">17 Anggota</p>
                    </div>
                    <a href="#" class="text-indigo-500 hover:text-indigo-600 text-sm">Lihat Semua</a>
                </div>
                <div class="divide-y">
                    <!-- Ketua -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Alfi Zamriza"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Alfi Zamriza</p>
                                <p class="text-sm text-gray-500">Ketua</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Wakil Ketua -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Raysha Tazkiya Rahim"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Raysha Tazkiya Rahim</p>
                                <p class="text-sm text-gray-500">Wakil Ketua</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Sekretaris -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="Athar Rayyan Muhammad"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Athar Rayyan Muhammad</p>
                                <p class="text-sm text-gray-500">Sekretaris</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Anggota 1 -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/men/34.jpg" alt="Muhammad Khalid Al Ghifari"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Muhammad Khalid Al Ghifari</p>
                                <p class="text-sm text-gray-500">Anggota</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Anggota 2 -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/women/34.jpg" alt="Iwani Khairina"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Iwani Khairina</p>
                                <p class="text-sm text-gray-500">Anggota</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- HUAL Department -->
            <div class="border rounded-lg overflow-hidden">
                <div class="flex justify-between items-center p-4 border-b">
                    <div>
                        <h2 class="text-lg font-semibold">Departemen HUAL</h2>
                        <p class="text-sm text-gray-500">10 Anggota</p>
                    </div>
                    <a href="#" class="text-indigo-500 hover:text-indigo-600 text-sm">Lihat Semua</a>
                </div>
                <div class="divide-y">
                    <!-- Ketua -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/men/36.jpg" alt="Farhanul Khair"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Farhanul Khair</p>
                                <p class="text-sm text-gray-500">Ketua</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Wakil Ketua -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/men/37.jpg" alt="Dwi Hamdan Sukran"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Dwi Hamdan Sukran</p>
                                <p class="text-sm text-gray-500">Wakil Ketua</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Sekretaris -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/women/37.jpg" alt="Widya Nurul Sukma"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Widya Nurul Sukma</p>
                                <p class="text-sm text-gray-500">Sekretaris</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Anggota 1 -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/women/38.jpg" alt="Jihan Nabilah"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Jihan Nabilah</p>
                                <p class="text-sm text-gray-500">Anggota</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Anggota 2 -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/women/39.jpg" alt="Pryta Rosela"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Pryta Rosela</p>
                                <p class="text-sm text-gray-500">Anggota</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- PKM Department -->
            <div class="border rounded-lg overflow-hidden">
                <div class="flex justify-between items-center p-4 border-b">
                    <div>
                        <h2 class="text-lg font-semibold">Departemen PKM</h2>
                        <p class="text-sm text-gray-500">17 Anggota</p>
                    </div>
                    <a href="#" class="text-indigo-500 hover:text-indigo-600 text-sm">Lihat Semua</a>
                </div>
                <div class="divide-y">
                    <!-- Ketua -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/men/38.jpg" alt="Hidayat Nur Hakim"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Hidayat Nur Hakim</p>
                                <p class="text-sm text-gray-500">Ketua</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Wakil Ketua -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/men/39.jpg" alt="Dian Islami"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Dian Islami</p>
                                <p class="text-sm text-gray-500">Wakil Ketua</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Sekretaris -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/women/40.jpg" alt="Della Rahmatika"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Della Rahmatika</p>
                                <p class="text-sm text-gray-500">Sekretaris</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Anggota 1 -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/men/40.jpg" alt="Nashed Bayazid Ali"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Nashed Bayazid Ali</p>
                                <p class="text-sm text-gray-500">Anggota</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Anggota 2 -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/women/41.jpg" alt="Andika Pebriansyah"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Andika Pebriansyah</p>
                                <p class="text-sm text-gray-500">Anggota</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Keagamaan Department -->
            <div class="border rounded-lg overflow-hidden">
                <div class="flex justify-between items-center p-4 border-b">
                    <div>
                        <h2 class="text-lg font-semibold">Departemen Keagamaan</h2>
                        <p class="text-sm text-gray-500">13 Anggota</p>
                    </div>
                    <a href="#" class="text-indigo-500 hover:text-indigo-600 text-sm">Lihat Semua</a>
                </div>
                <div class="divide-y">
                    <!-- Ketua -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="M. Syahidal Akbar Zas"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">M. Syahidal Akbar Zas</p>
                                <p class="text-sm text-gray-500">Ketua</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Wakil Ketua -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Achmad Atha Zayyan"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Achmad Atha Zayyan</p>
                                <p class="text-sm text-gray-500">Wakil Ketua</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Sekretaris -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/women/42.jpg" alt="Zahra Zafira"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Zahra Zafira</p>
                                <p class="text-sm text-gray-500">Sekretaris</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Anggota 1 -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/men/43.jpg" alt="Muadz Fauzi"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Muadz Fauzi</p>
                                <p class="text-sm text-gray-500">Anggota</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <!-- Anggota 2 -->
                    <div class="flex items-center justify-between p-4 hover:bg-gray-50">
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="Muhammad Sidqi Alfareza"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Muhammad Sidqi Alfareza</p>
                                <p class="text-sm text-gray-500">Anggota</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
