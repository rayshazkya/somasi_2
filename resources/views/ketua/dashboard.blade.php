@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('content')
   <!-- Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
  <!-- Card 1 -->
  <div class="bg-white p-5 rounded-2xl shadow-md border border-gray-200">
    <p class="text-sm text-gray-500 mb-1">Total Anggota</p>
    <p class="text-2xl font-bold text-gray-800">560 
      <span class="text-green-500 text-sm ml-2">▲ 12%</span>
    </p>
    <p class="text-xs text-gray-400 mt-2">Update: 15 Juni 2024</p>
  </div>

  <!-- Card 2 -->
  <div class="bg-white p-5 rounded-2xl shadow-md border border-gray-200">
    <p class="text-sm text-gray-500 mb-1">Total Program Kerja yang Selesai</p>
    <p class="text-2xl font-bold text-gray-800">1050 
      <span class="text-green-500 text-sm ml-2">▲ 5%</span>
    </p>
    <p class="text-xs text-gray-400 mt-2">Update: 17 Mei 2025</p>
  </div>
</div>
      <!-- Financial Chart  -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow">
          <h3 class="font-semibold mb-2">Statistik Keuangan</h3>
          <p class="text-sm text-gray-500 mb-4">Saldo yang tersedia saat ini : Rp 15.000.000</p>
          <img src="barchart.png" alt="Chart" class="rounded"/>
        </div>
      
<!-- Bagian Kalender Kegiatan -->
<div class="bg-white p-6 rounded-2xl shadow-md border border-gray-200">
  <h3 class="font-semibold text-lg mb-4">Kalender Kegiatan</h3>

  <!-- Kalender -->
  <div class="bg-gray-50 p-4 rounded-xl mb-6">
    <div id="calendar" class="grid grid-cols-7 gap-2 text-center text-sm text-gray-700">
      <!-- Hari -->
      <div class="font-bold">Min</div>
      <div class="font-bold">Sen</div>
      <div class="font-bold">Sel</div>
      <div class="font-bold">Rab</div>
      <div class="font-bold">Kam</div>
      <div class="font-bold">Jum</div>
      <div class="font-bold">Sab</div>
    </div>
  </div>

  <!-- Jadwal Kegiatan -->
  <div class="space-y-6">

    <!-- Senin -->
    <div>
      <h4 class="font-semibold text-gray-700 mb-2">Senin</h4>
      <div class="space-y-2">
        <div class="flex items-start gap-3">
          <div class="w-3 h-3 mt-1 rounded-full bg-blue-500"></div>
          <div>
            <p class="text-sm font-medium text-gray-800">08:00 - Rapat Koordinasi Tim</p>
            <p class="text-xs text-gray-500">Ruang Rapat 1</p>
          </div>
        </div>
        <div class="flex items-start gap-3">
          <div class="w-3 h-3 mt-1 rounded-full bg-green-500"></div>
          <div>
            <p class="text-sm font-medium text-gray-800">13:00 - Cek Progress UI/UX</p>
            <p class="text-xs text-gray-500">Workspace A</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Selasa -->
    <div>
      <h4 class="font-semibold text-gray-700 mb-2">Selasa</h4>
      <div class="space-y-2">
        <div class="flex items-start gap-3">
          <div class="w-3 h-3 mt-1 rounded-full bg-yellow-500"></div>
          <div>
            <p class="text-sm font-medium text-gray-800">10:00 - Presentasi Proyek</p>
            <p class="text-xs text-gray-500">Zoom Meeting</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Rabu -->
    <div>
      <h4 class="font-semibold text-gray-700 mb-2">Rabu</h4>
      <div class="space-y-2">
        <div class="flex items-start gap-3">
          <div class="w-3 h-3 mt-1 rounded-full bg-purple-500"></div>
          <div>
            <p class="text-sm font-medium text-gray-800">09:30 - Workshop UI Design</p>
            <p class="text-xs text-gray-500">Creative Room</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Kamis -->
    <div>
      <h4 class="font-semibold text-gray-700 mb-2">Kamis</h4>
      <div class="space-y-2">
        <div class="flex items-start gap-3">
          <div class="w-3 h-3 mt-1 rounded-full bg-red-500"></div>
          <div>
            <p class="text-sm font-medium text-gray-800">14:00 - Evaluasi Proyek</p>
            <p class="text-xs text-gray-500">Ruang Meeting 2</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<script>
  const calendarEl = document.getElementById("calendar");
  const today = new Date();
  const year = today.getFullYear();
  const month = today.getMonth();
  const firstDay = new Date(year, month, 1).getDay();
  const daysInMonth = new Date(year, month + 1, 0).getDate();

  for (let i = 0; i < firstDay; i++) {
    const blank = document.createElement("div");
    calendarEl.appendChild(blank);
  }

  for (let i = 1; i <= daysInMonth; i++) {
    const dayEl = document.createElement("div");
    dayEl.textContent = i;
    dayEl.className =
      "p-2 rounded-md hover:bg-blue-100 cursor-pointer" +
      (i === today.getDate() ? " bg-blue-500 text-white font-semibold" : "");
    calendarEl.appendChild(dayEl);
  }
</script>



   <!-- Dokumen Terbaru -->
<div class="bg-white p-6 rounded-2xl shadow-md border border-gray-200 w-full relative">
  <h3 class="text-2xl font-semibold text-gray-900 mb-1">Dokumen Terbaru</h3>
  <p class="text-sm text-gray-400 mb-6">Temukan Dokumenmu!</p>

  <!-- List Dokumen -->
  <div class="space-y-4">
    @foreach (range(1, 4) as $i)
    <div class="flex justify-between items-center bg-gray-50 px-6 py-4 rounded-xl">
      <div>
        <p class="font-semibold text-sm text-gray-800">Proposal INFEST 2025</p>
        <p class="text-sm text-gray-400">di upload oleh Ahmad Syah Ramadhan</p>
      </div>
      <a href="#" class="bg-[#3D4EF5] hover:bg-[#2d3dd4] text-white text-sm font-semibold px-4 py-2 rounded-xl shadow">Lihat Detail</a>
    </div>
    @endforeach
  </div>

  <!-- Tombol tambah di kanan bawah -->
  <button class="absolute bottom-5 right-5 w-12 h-12 bg-[#3D4EF5] hover:bg-[#2d3dd4] text-white text-2xl rounded-full shadow-lg flex items-center justify-center">
    +
  </button>
</div>


    </main>
  </div>
@endsection