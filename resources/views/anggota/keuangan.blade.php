@extends('anggota.dashboard')
@section('header-title', 'Daftar Anggota')
@section('header-subtitle', 'Informasi Seluruh Anggota')

@section('content')

    <div class="p-6 bg-white">
        <!-- Current Balance and Add Button -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <div>
                <h2 class="text-gray-600 mb-1">Saldo yang tersedia saat ini</h2>
                <div class="text-4xl font-bold">15.000.000</div>
            </div>

        </div>

        <!-- Search Bar -->
        <div class="relative w-full md:w-80 mb-6">
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

        <!-- Transactions List -->
        <div class="border rounded-lg overflow-hidden">
            <div class="p-5 border-b">
                <h3 class="text-xl font-bold">Transaksi terbaru</h3>
                <p class="text-gray-500 text-sm mt-1">Bulan ini</p>
            </div>

            <!-- Transaction 1 -->
            <div class="p-5 border-b hover:bg-gray-50">
                <div class="flex justify-between items-start">
                    <div>
                        <h4 class="font-medium text-gray-800">Transportasi IGTS</h4>
                        <p class="text-gray-500 text-sm">Departemen HUAL</p>
                    </div>
                    <div class="flex items-center">
                        <span class="px-3 py-1 bg-red-100 text-red-600 rounded-md text-sm mr-3">Pengeluaran</span>
                        <span class="text-red-500 font-medium">-IDR 100,000.00</span>
                    </div>
                </div>
            </div>

            <!-- Transaction 2 -->
            <div class="p-5 border-b hover:bg-gray-50">
                <div class="flex justify-between items-start">
                    <div>
                        <h4 class="font-medium text-gray-800">Dana Donasi Informatika Menyapa Panti</h4>
                        <p class="text-gray-500 text-sm">Departemen SOSMAS</p>
                    </div>
                    <div class="flex items-center">
                        <span class="px-3 py-1 bg-green-100 text-green-600 rounded-md text-sm mr-3">Pemasukan</span>
                        <span class="text-green-500 font-medium">+IDR 4,300,000</span>
                    </div>
                </div>
            </div>

            <!-- Transaction 3 -->
            <div class="p-5 border-b hover:bg-gray-50">
                <div class="flex justify-between items-start">
                    <div>
                        <h4 class="font-medium text-gray-800">Komsumsi Ngobar x Informatics Club</h4>
                        <p class="text-gray-500 text-sm">Departemen PPM</p>
                    </div>
                    <div class="flex items-center">
                        <span class="px-3 py-1 bg-red-100 text-red-600 rounded-md text-sm mr-3">Pengeluaran</span>
                        <span class="text-red-500 font-medium">-IDR 1,200,000</span>
                    </div>
                </div>
            </div>

            <!-- Transaction 4 -->
            <div class="p-5 border-b hover:bg-gray-50">
                <div class="flex justify-between items-start">
                    <div>
                        <h4 class="font-medium text-gray-800">Pembicara IGT</h4>
                        <p class="text-gray-500 text-sm">Departemen PKM</p>
                    </div>
                    <div class="flex items-center">
                        <span class="px-3 py-1 bg-red-100 text-red-600 rounded-md text-sm mr-3">Pengeluaran</span>
                        <span class="text-red-500 font-medium">-IDR 350,000</span>
                    </div>
                </div>
            </div>

            <!-- Transaction 5 -->
            <div class="p-5 hover:bg-gray-50">
                <div class="flex justify-between items-start">
                    <div>
                        <h4 class="font-medium text-gray-800">Dana Jasa Print di Ruang Sekret</h4>
                        <p class="text-gray-500 text-sm">Departemen ADM & Inventaris</p>
                    </div>
                    <div class="flex items-center">
                        <span class="px-3 py-1 bg-green-100 text-green-600 rounded-md text-sm mr-3">Pemasukan</span>
                        <span class="text-green-500 font-medium">+IDR 142,000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
