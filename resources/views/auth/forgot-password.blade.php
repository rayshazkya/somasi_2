<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOMASI - Lupa Kata Sandi</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white">
    <div class="flex min-h-screen">
        <!-- Left Side -->
        <div
            class="hidden md:flex md:w-1/2 bg-gradient-to-b from-blue-600 to-white flex-col justify-center items-center text-white px-12">
            <div class="text-center">
                <img src="{{ asset('images/logo-putih.png') }}" alt="Logo" class="h-16 mx-auto mb-8">
                <h2 class="text-5xl font-bold mb-6">SOMASI</h2>
                <p class="text-xl">"Satu platform untuk seluruh aktivitas organisasi mahasiswa."</p>
            </div>
        </div>

        <!-- Right Side - Form -->
        <div class="w-full md:w-1/2 flex flex-col justify-center items-center px-6 md:px-16 lg:px-24">
            <div class="w-full max-w-md">

                <div class="text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 mx-auto mb-8">
                    <h1 class="text-3xl font-bold text-navy-900 mb-2">Lupa Kata Sandi</h1>
                    <p class="text-gray-600 mb-6">Masukkan email kamu dan kami akan kirimkan link untuk atur ulang kata
                        sandi.</p>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Error Message -->
                @if ($errors->any())
                    <div class="mb-4 text-sm text-red-600">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form -->
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Field -->
                    <div class="mb-4">
                        <input name="email" type="email" value="{{ old('email') }}" required autofocus
                            placeholder="Email"
                            class="w-full px-4 py-3 rounded-lg shadow-sm border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-200">
                        KIRIM LINK RESET KATA SANDI
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
