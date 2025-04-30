<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOMASI - Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white">
    <div class="flex min-h-screen">
        <!-- Left Side - Login Form -->
        <div class="w-full md:w-1/2 flex flex-col justify-center items-center px-6 md:px-16 lg:px-24">
            <div class="w-full max-w-md">
                <!-- Logo -->
                <div class="text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 mx-auto mb-8">

                    <!-- Welcome Text -->
                    <h1 class="text-3xl font-bold text-navy-900 mb-2">Selamat Datang!!</h1>
                    <p class="text-gray-600 mb-8">Masukkan data kamu untuk masuk</p>
                </div>

                <!-- Login Form -->


                <!-- NPM Field id="npm" type="text" name="npm" placeholder="NPM"-->
                <div class="mb-4">
                    <input placeholder="NPM"
                        class="w-full px-4 py-3 rounded-lg shadow-sm border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        required>
                </div>

                <!-- Password Field id="password" type="password" name="password"-->
                <div class="mb-2">
                    <input placeholder="Kata Sandi"
                        class="w-full px-4 py-3 rounded-lg shadow-sm border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        required>
                </div>

                <!-- Forgot Password Link -->
                <div class="mb-6">
                    <a href="{{ route('lupapass') }}" class="text-sm text-gray-600 hover:text-blue-700">
                    Lupa Kata Sandi?
                    </a>
                </div>

                <!-- Login Button -->
                <a href="/ketuaDashboard">
                    <button
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-200">
                        MASUK
                    </button>
                </a>
                </form>
            </div>
        </div>

        <!-- Right Side - Blue Background with Logo and Text -->
        <div
            class="hidden md:flex md:w-1/2 bg-gradient-to-b from-blue-600 to-white flex-col justify-center items-center text-white px-12">
            <div class="text-center">
                <!-- White Logo -->
                <img src="{{ asset('images/logo-putih.png') }}" alt="Logo" class="h-16 mx-auto mb-8">

                <!-- SOMASI Text -->
                <h2 class="text-5xl font-bold mb-6">SOMASI</h2>

                <!-- Tagline -->
                <p class="text-xl">
                    "Satu platform untuk seluruh aktivitas organisasi mahasiswa."
                </p>
            </div>
        </div>
    </div>
</body>

</html>