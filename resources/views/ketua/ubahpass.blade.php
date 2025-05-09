<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOMASI - Reset Password</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white">
    <div class="flex min-h-screen">
        <!-- Left Side - Blue Background with Logo and Text -->
        <div
            class="hidden md:flex md:w-1/2 bg-gradient-to-b from-blue-600 to-white flex-col justify-center items-center text-white px-12">
            <div class="text-center">
                <img src="{{ asset('images/logo-putih.png') }}" alt="Logo" class="h-16 mx-auto mb-8">
                <h2 class="text-5xl font-bold mb-6">SOMASI</h2>
                <p class="text-xl">
                    "Satu platform untuk seluruh aktivitas organisasi mahasiswa."
                </p>
            </div>
        </div>

        <!-- Right Side - Reset Password Form -->
        <div class="w-full md:w-1/2 flex flex-col justify-center items-center px-6 md:px-16 lg:px-24">
            <div class="w-full max-w-md">
                <div class="text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 mx-auto mb-8">
                    <h1 class="text-3xl font-bold text-navy-900 mb-2">Ubah Kata Sandi</h1>
                    <p class="text-gray-600 mb-8">Masukkan kata sandi baru kamu</p>
                </div>

                <!-- Reset Password Form -->
                <form id="resetPasswordForm">
                    <!-- Password Baru -->
                    <div class="mb-4">
                        <input type="password" id="newPassword" placeholder="Kata Sandi Baru"
                            class="w-full px-4 py-3 rounded-lg shadow-sm border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            required>
                    </div>

                    <!-- Konfirmasi Password Baru -->
                    <div class="mb-6">
                        <input type="password" id="confirmPassword" placeholder="Konfirmasi Kata Sandi Baru"
                            class="w-full px-4 py-3 rounded-lg shadow-sm border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            required>
                    </div>

                    <!-- Tombol Ubah Kata Sandi -->
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-200">
                        UBAH KATA SANDI
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Script: Validasi dan Redirect -->
    <script>
        document.getElementById('resetPasswordForm').addEventListener('submit', function (e) {
            e.preventDefault(); 

            const newPassword = document.getElementById('newPassword').value.trim();
            const confirmPassword = document.getElementById('confirmPassword').value.trim();

            if (newPassword === '' || confirmPassword === '') {
                alert('Kata sandi tidak boleh kosong.');
                return;
            }

            if (newPassword !== confirmPassword) {
                alert('Kata sandi tidak cocok.');
                return;
            }

            // Jika valid
            alert('Kata sandi berhasil diubah!');
            window.location.href = "{{ url('/login') }}"; // Ganti sesuai route login kamu
        });
    </script>
</body>

</html>