<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOMASI - Sistem Organisasi Mahasiswa</title>
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-b from-blue-50 to-white text-gray-800">

    <!-- Navbar -->
    <header class="flex justify-between items-center p-6 max-w-7xl mx-auto">
        <h1 class="text-4xl font-extrabold text-blue-900">SOMASI</h1>
        <nav class="space-x-6 text-sm">
            <a href="#beranda" class="hover:text-blue-700">Beranda</a>
            <a href="#about" class="hover:text-blue-700">SOMASI</a>
            <a href="#daftar" class="hover:text-blue-700">Form Pendaftaran</a>
            <a href="#faq" class="hover:text-blue-700">FAQ</a>
            <a href="{{ route('login') }}"
                class="bg-[#2a4de8] text-white px-8 py-2.5 rounded-md font-semibold hover:bg-[#1f3dbf] transition">
                Masuk
            </a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="py-16 px-4 max-w-7xl mx-auto h-screen">
        <div class="flex flex-col-reverse md:flex-row items-center md:justify-between gap-10">
            <div class="md:w-1/2 text-center md:text-left py-40">
                <p class="mb-2 font-bold text-indigo-500">Selamat Datang Mahasiswa!</p>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4 leading-snug">SOMASI<br>Sistem Organisasi
                    Mahasiswa</h2>
                <a href="{{ route('login') }}"
                    class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 text-sm">Masuk</a>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="images/header.png" alt="Ilustrasi Mahasiswa" class="w-80 md:w-full" />
            </div>
        </div>
    </section>

    <!-- Tentang SOMASI -->
    <section id="about" class="max-w-3xl mx-auto px-4 py-12 text-center">
        <h3 class="text-3xl font-semibold mb-4">Sistem Organisasi Mahasiswa</h3>
        <p class="text-gray-600">SOMASI (Sistem Organisasi Mahasiswa) adalah platform web untuk organisasi mahasiswa,
            yang mempermudah pengelolaan anggota, keuangan, kegiatan, dan dokumentasi secara efisien dan transparan.
            Dengan sistem ini, seluruh pengurus dan anggota dapat saling terhubung dalam satu platform yang modern dan
            mudah digunakan.</p>
    </section>

    <!-- Fitur Section -->
    <section class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4 py-10 text-center">
        <div>
            <img src="images/icon1.png" alt="Login" class="mx-auto mb-4" />
            <h4 class="font-semibold text-blue-800 mb-2">Cukup Sekali Login</h4>
            <p class="text-sm text-gray-600">Masuk ke sistem menggunakan akun mahasiswa. Tidak perlu ulang login untuk
                tiap fitur.</p>
        </div>
        <div>
            <img src="images/icon2.png" alt="Organisasi" class="mx-auto mb-4" />
            <h4 class="font-semibold text-blue-800 mb-2">Kelola Organisasimu</h4>
            <p class="text-sm text-gray-600">Pengurus dapat mengelola keuangan, kegiatan, dan dokumen organisasi.</p>
        </div>
        <div>
            <img src="images/icon3.png" alt="Kolaborasi" class="mx-auto mb-4" />
            <h4 class="font-semibold text-blue-800 mb-2">Bebas Berkolaborasi</h4>
            <p class="text-sm text-gray-600">Koordinasikan tugas, pantau progres, dan susun laporan secara real-time.
            </p>
        </div>
    </section>

    <!-- Form Section -->
    <section id="daftar" class="py-10 md:py-20 bg-blue-50 relative overflow-hidden h-screen">
        <div class="container mx-auto px-4">
            <div class="max-w-8xl mx-auto rounded-xl overflow-hidden py-10"
                style="background-image: url('{{ asset('images/bgpattern.png') }}'); background-size: cover; background-position: center; background-color: #ebf2ff;">
                <div class="flex flex-col md:flex-row items-center md:items-start">
                    <!-- Bagian teks di sebelah kiri -->
                    <div class="md:w-1/2 px-8 md:px-16 flex flex-col justify-center text-center py-40">
                        <h2 class="text-blue-900 font-bold text-3xl md:text-3xl mb-4">Kami sangat menghargai
                            partisipasimu disini!</h2>
                        <p class="text-gray-600 text-lg">
                            Silahkan isi formulir pendaftaran anggota <br> dan tunggu informasi selanjutnya
                        </p>
                    </div>

                    <!-- Bagian form di sebelah kanan -->
                    <div class="md:w-1/2 p-8 md:p-16 md:p-10">
                        @if (session('success'))
                            <div class="mb-4 p-4 text-green-700 bg-green-100 rounded">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('pendaftaran.store') }}" method="POST" class="space-y-4 max-w-md">
                            @csrf
                            <div>
                                <input type="text" name="nama" placeholder="Masukkan Nama"
                                    class="w-full px-4 py-3 rounded-md bg-white border-0 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required>
                            </div>
                            <div>
                                <input type="text" name="npm" placeholder="Masukkan NPM"
                                    class="w-full px-4 py-3 rounded-md bg-white border-0 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required>
                            </div>
                            <div>
                                <input type="text" name="telepon" placeholder="Masukkan Nomor HP"
                                    class="w-full px-4 py-3 rounded-md bg-white border-0 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required>
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Masukkan Email"
                                    class="w-full px-4 py-3 rounded-md bg-white border-0 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required>
                            </div>
                            <div>
                                <select name="divisi"
                                    class="w-full px-4 py-3 rounded-md bg-white border-0 focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-400"
                                    required>
                                    <option value="" selected disabled>Pilihan Divisi Yang Diminati</option>
                                    <option value="ppm">Penelitian dan Pengembangan Mahasiswa (PPM)</option>
                                    <option value="kominkraf">Komunikasi, Informasi dan Perencanaan Kreativitas
                                        (KOMINKRAF)</option>
                                    <option value="mba">Minat Bakat dan Apresiasi (MBA)</option>
                                    <option value="hual">Hubungan Antar Lembaga (HUAL)</option>
                                    <option value="pkm">Pengelolaan Kesejahteraan Mahasiswa (PKM)</option>
                                    <option value="adm">ADM dan Inventaris</option>
                                    <option value="agama">Keagamaan</option>
                                    <option value="sosmas">Sosial Masyarakat (SOSMAS)</option>
                                </select>
                            </div>
                            <div>
                                <textarea name="alasan" placeholder="Alasan Ingin Bergabung" rows="3"
                                    class="w-full px-4 py-3 rounded-md bg-white border-0 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                            </div>
                            <div class="pt-2">
                                <button type="submit"
                                    class="px-10 py-0.5 bg-blue-600 text-white text-s font-medium rounded-lg hover:bg-blue-700 transition-colors shadow-md">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 md:py-24 h-screen">
        <div class="container mx-auto px-4">
            <!-- Judul FAQ -->
            <div class="text-center mb-4">
                <div class="inline-block bg-blue-50 rounded-lg px-6 py-2">
                    <p class="text-blue-600 font-medium">Frequently Ask Question</p>
                </div>
            </div>

            <!-- Subtitle -->
            <h2 class="text-center text-blue-900 font-bold text-3xl md:text-4xl mb-16">Silahkan Cek
                Pertanyaan-Pertanyaan Yang Dapat Membantu Kamu</h2>

            <!-- FAQ Cards -->
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <!-- FAQ Card 1 -->
                <div class="border border-gray-200 rounded-lg p-8">
                    <h3 class="text-blue-900 font-bold text-2xl mb-4">Siapa yang bisa menggunakan SOMASI?</h3>
                    <p class="text-gray-600 mb-6">
                        Ketua, bendahara, pengurus divisi, dan anggota biasa – masing-masing dengan akses yang
                        disesuaikan.
                    </p>
                    <a href="#" class="text-indigo-400 font-medium">
                        Learn More »
                    </a>
                </div>

                <!-- FAQ Card 2 -->
                <div class="border border-gray-200 rounded-lg p-8">
                    <h3 class="text-blue-900 font-bold text-2xl mb-4">Fitur apa saja yang tersedia?</h3>
                    <p class="text-gray-600 mb-6">
                        Manajemen anggota, keuangan, kalender kegiatan, presensi kegiatan, dan arsip dokumen.
                    </p>
                    <a href="#" class="text-indigo-400 font-medium">
                        Learn More »
                    </a>
                </div>
            </div>

            <!-- Lihat Pertanyaan Lainnya -->
            <div class="text-center">
                <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition-colors">Lihat
                    Pertanyaan Lainnya</a>
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
