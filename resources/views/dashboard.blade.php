<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Sekolah')</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 py-6 flex flex-col">
            <div class="px-6 mb-8">
                <h2 class="text-2xl font-semibold">Sekolah Apsp</h2>
                <p class="text-gray-400">@yield('role-name')</p>
            </div>
            <nav class="flex-1 px-4">
                <div class="space-y-2">
                    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Dashboard</a>
                    <!-- Menu items lainnya dapat ditambahkan sesuai role -->
                    @yield('sidebar-menu')
                </div>
            </nav>
            <div class="px-6 py-4 border-t border-gray-700">
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 rounded hover:bg-gray-700">
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Top Navigation -->
            <div class="bg-white shadow px-6 py-4 flex items-center justify-between">
                <h1 class="text-xl font-semibold">@yield('page-title', 'Dashboard')</h1>
                <div class="flex items-center space-x-4">
                    <span>{{ Auth::user()->name }}</span>
                </div>
            </div>

            <!-- Content -->
            <div class="container mx-auto px-6 py-8">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
