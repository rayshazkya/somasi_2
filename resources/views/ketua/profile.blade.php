@extends('layouts.app')

@section('page-title', 'ProfileKetua')

@section('content')
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

 <!-- Profile Info -->
<div class="bg-white rounded-xl shadow p-6">
  <div class="flex items-start gap-6">
    <!-- Foto dan Tombol Edit -->
    <div class="flex flex-col items-center">
      <img src="profile1.jpeg" alt="Foto Profil" class="w-24 h-24 rounded-lg object-cover" />
      <button class="mt-4 bg-indigo-500 text-white px-4 py-2 rounded-lg hover:bg-indigo-600 text-sm">Edit Profile</button>
    </div>

    <!-- Info Detail -->
    <div class="text-sm space-y-1">
      <p><span class="font-semibold">Nama :</span> Glenn Hakim</p>
      <p><span class="font-semibold">Email :</span> glennhakim@himpunan.com</p>
      <p><span class="font-semibold">NPM :</span> 220810</p>
      <p><span class="font-semibold">Role :</span> Ketua Umum</p>
    </div>
  </div>
</div>

<!-- Riwayat Kegiatan -->
<div class="mt-6 bg-white rounded-xl shadow p-6">
  <!-- Header: Title + Buttons -->
  <div class="flex items-center justify-between mb-4">
    <h3 class="font-semibold text-lg">Riwayat Kegiatan</h3>
    <div class="space-x-2">
      <button class="mt-4 bg-indigo-500 text-white px-3 py-1.5 rounded-lg hover:bg-indigo-600 text-sm transition">
        Tambah
      </button>
      <button class="bg-indigo-500 text-white px-3 py-1.5 rounded-lg text-sm hover:bg-indigo-600 transition">
        Edit
      </button>
    </div>
  </div>

  <!-- List Kegiatan -->
  <ul class="list-disc list-inside text-sm text-gray-700">
    <li>
      <a href="#" class="block hover:bg-gray-100 rounded px-2 py-1 transition">
        Pentas Seni telah disetujui.
      </a>
    </li>
    <li>
      <a href="#" class="block hover:bg-gray-100 rounded px-2 py-1 transition">
        Rapat umum dijadwalkan ulang.
      </a>
    </li>
    <li>
      <a href="#" class="block hover:bg-gray-100 rounded px-2 py-1 transition">
        Proposal kegiatan telah diunggah.
      </a>
    </li>
  </ul>
</div>

<!-- Password & Logout -->
<div class="mt-6 bg-white rounded-xl shadow p-6">
  <div class="flex items-center justify-between mb-4">
    <p class="text-sm font-semibold">Password</p>
    <button class="text-pink-500 text-sm hover:underline">Ganti</button>
  </div>
  <div class="flex items-center justify-between">
    <p class="text-sm font-semibold text-gray-400">SOMASI</p>
    <a href="/LandingPage" class="text-pink-500 text-sm hover:underline">
      Keluar
    </a>
  </div>
</div>


 @endsection
