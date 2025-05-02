<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOMASI - Verifikasi OTP</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white">
    <div class="flex min-h-screen">
        <!-- Left Side - OTP Form -->
        <div class="w-full md:w-1/2 flex flex-col justify-center items-center px-6 md:px-16 lg:px-24">
            <div class="w-full max-w-md">
                <!-- Logo -->
                <div class="text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 mx-auto mb-8">

                    <!-- OTP Heading -->
                    <h1 class="text-3xl font-bold text-navy-900 mb-2">Verifikasi OTP</h1>
                    <p class="text-gray-600 mb-8">Masukkan kode 6 digit yang dikirim ke email kamu.</p>
                </div>

                <!-- OTP Input Field -->
                <div class="mb-6">
                    <input id="otpInput" placeholder="Kode OTP"
                        class="w-full px-4 py-3 text-center text-lg tracking-widest rounded-lg shadow-sm border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        maxlength="6" inputmode="numeric" required>
                </div>

                <!-- Verify Button -->
                <button id="verifyBtn" type="button"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-200">
                    VERIFIKASI
                </button>
            </div>
        </div>

        <!-- Right Side - Blue Background with Logo and Text -->
        <div
            class="hidden md:flex md:w-1/2 bg-gradient-to-b from-blue-600 to-white flex-col justify-center items-center text-white px-12">
            <div class="text-center">
                <!-- White Logo -->
                <img src="{{ asset('images/logo-putih.png') }}" alt="Logo" class="h-16 mx-auto mb-8">
                <h2 class="text-5xl font-bold mb-6">SOMASI</h2>
                <p class="text-xl">
                    "Satu platform untuk seluruh aktivitas organisasi mahasiswa."
                </p>
            </div>
        </div>
    </div>

    <!-- Simple JS Alert Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const verifyBtn = document.getElementById('verifyBtn');
            const otpInput = document.getElementById('otpInput');

            verifyBtn.addEventListener('click', function () {
                const otpValue = otpInput.value.trim();

                if (otpValue.length === 6 && /^\d{6}$/.test(otpValue)) {
                    alert('Kode OTP berhasil diverifikasi!');
                    // Arahkan ke halaman reset password
                    window.location.href = "{{ url('/ubahPassword') }}";
                } else {
                    alert('Silakan masukkan kode OTP yang valid (6 digit angka).');
                }
            });
        });
    </script>
</body>

</html>