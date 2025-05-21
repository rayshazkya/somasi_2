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
                <div class="mb-8 text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 mx-auto">
                </div>

                <!-- Welcome Text -->
                <h1 class="text-3xl font-bold text-navy-900 mb-2 text-center">Selamat Datang!!</h1>
                <p class="text-gray-600 mb-8 text-center">Masukkan data kamu untuk masuk</p>

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- NPM Field -->
                    <div class="mb-4">
                        <input id="email" name="email" type="text" placeholder="Email"
                            class="w-full px-4 py-3 rounded-lg shadow-sm border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="mb-2">
                        <input id="password" name="password" type="password" placeholder="Kata Sandi"
                            class="w-full px-4 py-3 rounded-lg shadow-sm border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            required>
                        @error('password')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Forgot Password -->
                    <div class="mb-6 text-right">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-blue-700">
                                Lupa Kata Sandi?
                            </a>
                        @endif
                    </div>

                    <!-- Login Button -->
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-200">
                        MASUK
                    </button>
                </form>

                <!-- Role Buttons (Optional Dummy Links) -->

            </div>
        </div>

        <!-- Right Side -->
        <div
            class="rounded-tl-4xl hidden md:flex md:w-1/2 bg-gradient-to-b from-blue-600 to-white flex-col justify-center items-center text-white px-12">
            <div class="text-center">
                <img src="{{ asset('images/logo-putih.png') }}" alt="Logo" class="h-16 mx-auto mb-8">
                <h2 class="text-5xl font-bold mb-6">SOMASI</h2>
                <p class="text-xl">"Satu platform untuk seluruh aktivitas organisasi mahasiswa."</p>
            </div>
        </div>
    </div>
</body>

</html>
