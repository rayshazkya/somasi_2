@extends('bendahara.dashboard')
@section('header-title', 'Daftar Anggota')
@section('header-subtitle', 'Informasi Seluruh Anggota')

@section('content')
    <div class="p-6 bg-white">


        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Left Column - Calendar -->
            <div class="w-full lg:w-2/5">
                <!-- Add Activity Button -->
                <div class="mb-4">
                    <button
                        class="flex items-center gap-2 bg-white border border-gray-300 rounded-full px-4 py-2 text-gray-800 hover:bg-gray-50 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        <span>Tambah Kegiatan</span>
                    </button>
                </div>

                <!-- Month Selector -->
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium">April 2024</h3>
                    <div class="flex gap-2">
                        <button class="p-1 hover:bg-gray-100 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                            </svg>
                        </button>
                        <button class="p-1 hover:bg-gray-100 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Calendar Grid -->
                <div class="mb-6">
                    <div class="grid grid-cols-7 text-center mb-2">
                        <div class="text-gray-500 text-sm font-medium">S</div>
                        <div class="text-gray-500 text-sm font-medium">M</div>
                        <div class="text-gray-500 text-sm font-medium">T</div>
                        <div class="text-gray-500 text-sm font-medium">W</div>
                        <div class="text-gray-500 text-sm font-medium">T</div>
                        <div class="text-gray-500 text-sm font-medium">F</div>
                        <div class="text-gray-500 text-sm font-medium">S</div>
                    </div>
                    <div class="grid grid-cols-7 gap-1 text-center">
                        <div class="py-2 text-gray-400">31</div>
                        <div class="py-2">1</div>
                        <div class="py-2">2</div>
                        <div class="py-2">3</div>
                        <div class="py-2">4</div>
                        <div class="py-2">5</div>
                        <div class="py-2">6</div>

                        <div class="py-2">7</div>
                        <div class="py-2">8</div>
                        <div class="py-2">9</div>
                        <div class="py-2 bg-blue-100 rounded-full text-blue-600">10</div>
                        <div class="py-2">11</div>
                        <div class="py-2">12</div>
                        <div class="py-2">13</div>

                        <div class="py-2">14</div>
                        <div class="py-2">15</div>
                        <div class="py-2">16</div>
                        <div class="py-2">17</div>
                        <div class="py-2">18</div>
                        <div class="py-2 bg-blue-100 rounded-full text-blue-600">19</div>
                        <div class="py-2">20</div>

                        <div class="py-2">21</div>
                        <div class="py-2">22</div>
                        <div class="py-2">23</div>
                        <div class="py-2">24</div>
                        <div class="py-2">25</div>
                        <div class="py-2">26</div>
                        <div class="py-2">27</div>

                        <div class="py-2">28</div>
                        <div class="py-2">29</div>
                        <div class="py-2">30</div>
                        <div class="py-2 text-gray-400">1</div>
                        <div class="py-2 text-gray-400">2</div>
                        <div class="py-2 text-gray-400">3</div>
                        <div class="py-2 text-gray-400">4</div>

                        <div class="py-2 text-gray-400">5</div>
                        <div class="py-2 text-gray-400">6</div>
                        <div class="py-2 text-gray-400">7</div>
                        <div class="py-2 text-gray-400">8</div>
                        <div class="py-2 text-gray-400">9</div>
                        <div class="py-2 text-gray-400">10</div>
                        <div class="py-2 text-gray-400">11</div>
                    </div>
                </div>

                <!-- Schedule -->
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <div class="text-sm font-medium">Wednesday, 06 July 2023</div>
                        <button class="p-1 hover:bg-gray-100 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Event 1 -->
                    <div class="flex mb-4">
                        <div class="text-gray-700 font-medium w-16">09:30</div>
                        <div class="border-l-4 border-indigo-500 pl-3 ml-2">
                            <div class="text-xs text-gray-500">UI/UX Designer</div>
                            <div class="font-medium">Practical Task Review</div>
                        </div>
                    </div>

                    <!-- Event 2 -->
                    <div class="flex mb-4">
                        <div class="text-gray-700 font-medium w-16">12:00</div>
                        <div class="border-l-4 border-indigo-500 pl-3 ml-2">
                            <div class="text-xs text-gray-500">Magento Developer</div>
                            <div class="font-medium">Resume Review</div>
                        </div>
                    </div>

                    <!-- Event 3 -->
                    <div class="flex mb-6">
                        <div class="text-gray-700 font-medium w-16">01:30</div>
                        <div class="border-l-4 border-indigo-500 pl-3 ml-2">
                            <div class="text-xs text-gray-500">Sales Manager</div>
                            <div class="font-medium">Final HR Round</div>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <div class="text-sm font-medium">Thursday, 07 July 2023</div>
                        <button class="p-1 hover:bg-gray-100 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Event 4 -->
                    <div class="flex mb-4">
                        <div class="text-gray-700 font-medium w-16">09:30</div>
                        <div class="border-l-4 border-indigo-500 pl-3 ml-2">
                            <div class="text-xs text-gray-500">Front-end Developer</div>
                            <div class="font-medium">Practical Task Review</div>
                        </div>
                    </div>

                    <!-- Event 5 -->
                    <div class="flex">
                        <div class="text-gray-700 font-medium w-16">11:00</div>
                        <div class="border-l-4 border-indigo-500 pl-3 ml-2">
                            <div class="text-xs text-gray-500">React JS</div>
                            <div class="font-medium">TL Meeting</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Events List -->
            <div class="w-full lg:w-3/5">
                <!-- Header -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold">April - Sep, 2024</h2>
                    <div class="flex gap-2">
                        <button class="p-1 hover:bg-gray-100 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button class="p-1 hover:bg-gray-100 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- View Options -->
                <div class="flex justify-end gap-2 mb-4">
                    <div class="flex items-center border rounded-full overflow-hidden">
                        <button class="flex items-center gap-1 px-3 py-1.5 bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <span>Kegiatan</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="flex items-center gap-1 px-3 py-1.5 bg-blue-50 text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <button class="flex items-center px-3 py-1.5 bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Selected Date -->
                <div class="bg-blue-50 border border-blue-100 rounded-lg p-4 mb-6">
                    <div class="flex items-center">
                        <div class="text-3xl font-bold text-gray-800 mr-3">19</div>
                        <div class="text-gray-600">APR, FRI</div>
                    </div>
                </div>

                <!-- Events List -->
                <div class="space-y-4">
                    <!-- Event 1 -->
                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-indigo-500"></div>
                            <div class="text-gray-600">Minggu</div>
                        </div>
                        <div class="font-medium">INFEST</div>
                        <button class="text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>

                    <!-- Event 2 -->
                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-indigo-500"></div>
                            <div class="text-gray-600">Jum'at</div>
                        </div>
                        <div class="font-medium">DETIK</div>
                        <button class="text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>

                    <!-- Event 3 -->
                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-indigo-500"></div>
                            <div class="text-gray-600">3PM to 5PM</div>
                        </div>
                        <div class="font-medium">POM MIPA</div>
                        <button class="text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>

                    <!-- Event 4 -->
                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-indigo-500"></div>
                            <div class="text-gray-600">Senin</div>
                        </div>
                        <div class="font-medium">INFORMATIKA PEDULI</div>
                        <button class="text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>

                    <!-- Event 5 -->
                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-indigo-500"></div>
                            <div class="text-gray-600">Selasa</div>
                        </div>
                        <div class="font-medium">PIL MIPA</div>
                        <button class="text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>

                    <!-- Event 6 -->
                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-indigo-500"></div>
                            <div class="text-gray-600">Rabu</div>
                        </div>
                        <div class="font-medium">Kunjungan Panti</div>
                        <button class="text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>

                    <!-- Event 7 -->
                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-indigo-500"></div>
                            <div class="text-gray-600">Sabtu</div>
                        </div>
                        <div class="font-medium">POINT</div>
                        <button class="text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>

                    <!-- Event 8 -->
                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-indigo-500"></div>
                            <div class="text-gray-600">Rabu</div>
                        </div>
                        <div class="font-medium">NGOBAR</div>
                        <button class="text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
