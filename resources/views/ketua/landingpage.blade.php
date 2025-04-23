<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SOMASI - Sistem Organisasi Mahasiswa</title>
  @vite('resources/css/app.css')
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-gradient-to-b from-blue-50 to-white text-gray-800">

 <!-- Navbar -->
 <header class="bg-white shadow-md flex justify-between items-center p-6 max-w-7xl mx-auto">
    <h1 class="text-xl font-bold text-blue-900">SOMASI</h1>
    <nav class="space-x-6 text-sm">
      <a href="#" class="hover:text-blue-700">Beranda</a>
      <a href="#" class="hover:text-blue-700">SOMASI</a>
      <a href="#" class="hover:text-blue-700">Form Pendaftaran</a>
      <a href="#" class="hover:text-blue-700">FAQ</a>
      <a href="/ketuaDashboard" class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700 text-sm">Masuk</a>
    </nav>
  </header>

 <!-- Hero Section -->
 <section class="py-16 px-4 max-w-7xl mx-auto">
    <div class="flex flex-col-reverse md:flex-row items-center md:justify-between gap-10">
      <div class="md:w-1/2 text-center md:text-left">
        <p class="text-xs text-blue-500 mb-2">Selamat Datang Mahasiswa!</p>
        <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4 leading-snug">SOMASI<br>Sistem Organisasi Mahasiswa</h2>
        <a href="#" class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 text-sm">Pelajari Selengkapnya</a>
      </div>
      <div class="md:w-1/2 flex justify-center">
        <img src="header.png" alt="Ilustrasi Mahasiswa" class="w-80 md:w-full" />
      </div>
    </div>
  </section>

  <!-- Tentang SOMASI -->
  <section class="max-w-4xl mx-auto px-4 py-12 text-center">
    <h3 class="text-xl font-semibold mb-4">Sistem Organisasi Mahasiswa</h3>
    <p class="text-gray-600">SOMASI adalah platform web untuk organisasi mahasiswa yang mempermudah pengelolaan anggota, keuangan, kegiatan, dan dokumentasi secara efisien dan transparan.</p>
  </section>

  <!-- Fitur Section -->
  <section class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4 py-10 text-center">
    <div>
      <img src="icon1.png" alt="Login" class="mx-auto mb-4" />
      <h4 class="font-semibold text-blue-800 mb-2">Cukup Sekali Login</h4>
      <p class="text-sm text-gray-600">Masuk ke sistem menggunakan akun mahasiswa. Tidak perlu ulang login untuk tiap fitur.</p>
    </div>
    <div>
      <img src="icon2.png" alt="Organisasi" class="mx-auto mb-4" />
      <h4 class="font-semibold text-blue-800 mb-2">Kelola Organisasimu</h4>
      <p class="text-sm text-gray-600">Pengurus dapat mengelola keuangan, kegiatan, dan dokumen organisasi.</p>
    </div>
    <div>
      <img src="icon3.png" alt="Kolaborasi" class="mx-auto mb-4" />
      <h4 class="font-semibold text-blue-800 mb-2">Bebas Berkolaborasi</h4>
      <p class="text-sm text-gray-600">Koordinasikan tugas, pantau progres, dan susun laporan secara real-time.</p>
    </div>
  </section>

  <!-- Form Section -->
  <section class="bg-blue-100 py-12 px-4">
    <div class="max-w-xl mx-auto text-center">
      <h4 class="text-lg font-semibold mb-2">Kami sangat menghargai partisipasimu di sini!</h4>
      <p class="text-sm text-gray-600 mb-6">Silahkan isi formulir pendaftaran anggota dan tunggu informasi selanjutnya.</p>
      <form class="space-y-4">
        <input type="text" placeholder="Masukkan Nama" class="w-full p-2 border border-gray-300 rounded">
        <input type="text" placeholder="Masukkan NIM" class="w-full p-2 border border-gray-300 rounded">
        <input type="text" placeholder="Masukkan No HP" class="w-full p-2 border border-gray-300 rounded">
        <input type="email" placeholder="Masukkan Email" class="w-full p-2 border border-gray-300 rounded">
        <input type="text" placeholder="Alasan Ingin Bergabung" class="w-full p-2 border border-gray-300 rounded">
        <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Kirim</button>
      </form>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="max-w-5xl mx-auto py-12 px-4">
    <h4 class="text-center text-sm text-blue-500 mb-4">Frequently Ask Question</h4>
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-white shadow-md rounded p-6">
        <h5 class="font-semibold mb-2">Siapa yang bisa menggunakan SOMASI?</h5>
        <p class="text-sm text-gray-600">Ketua, bendahara, pengurus divisi, dan anggota biasa - masing-masing dengan akses yang disesuaikan.</p>
      </div>
      <div class="bg-white shadow-md rounded p-6">
        <h5 class="font-semibold mb-2">Fitur apa saja yang tersedia?</h5>
        <p class="text-sm text-gray-600">Manajemen anggota, keuangan, kalender kegiatan, presensi kegiatan, dan arsip dokumen.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-100 py-10 px-4 text-sm text-gray-600">
    <div class="max-w-6xl mx-auto grid md:grid-cols-4 gap-8">
      <div>
        <h5 class="font-bold text-gray-800 mb-2">SOMASI</h5>
        <p>somasi@gmail.com</p>
        <p>+62 234 5678 9101</p>
      </div>
      <div>
        <h5 class="font-semibold text-gray-800 mb-2">Beranda</h5>
        <p>Features</p>
        <p>Pricing</p>
        <p>Documentation</p>
      </div>
      <div>
        <h5 class="font-semibold text-gray-800 mb-2">Halaman</h5>
        <p>Blog</p>
        <p>Careers</p>
        <p>Communities</p>
      </div>
      <div>
        <h5 class="font-semibold text-gray-800 mb-2">Alamat Kami</h5>
        <p>Jl. Teuku Nyak Arief No.141 Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 23111</p>
      </div>
    </div>
  </footer>

</body>
</html>
