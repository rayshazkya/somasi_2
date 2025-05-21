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
        <div class="bg-gray-50 text-black w-64 py-6 flex flex-col">
            <div class="px-6 mb-4">
                <h2 class="text-[44.47px] leading-[54px] font-bold text-[#090F4E] text-center"
                    style="font-family: 'Montserrat', sans-serif;">
                    SOMASI
                </h2>
                {{-- <p class="text-gray-400">@yield('role-name')</p> --}}
            </div>
            <nav class="flex-1 px-4">
                <div class="space-y-2">
                    @yield('sidebar-menu')
                </div>
            </nav>
            <div class="px-6 py-4 border-t color: rgba(162, 161, 168, 0.05);">
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
            <div class="bg-white  px-6 py-4 flex items-center justify-between">
                <div>
                    <h1 class="text-xl font-semibold">Hello {{ Auth::user()->name }}!</h1>
                    <h2 class="text-sm text-gray-600">Good Morning</h2>
                    {{-- @yield('page-title', 'Dashboard') --}}
                </div>
                {{-- <div class="flex items-center space-x-4">
                    <span>Hello{{ Auth::user()->name }}!</span>
                </div>
                 --}}
                <div class="flex items-center gap-4">
                    {{-- Notification --}}
                    <div class="flex-shrink-0">
                        <button class="bg-gray-100 p-2 rounded">
                            <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                </path>
                            </svg>
                        </button>
                    </div>

                    {{-- Profile Button --}}
                    <div class="flex items-center bg-white shadow rounded-xl px-4 py-2 space-x-3">
                        <img class="w-10 h-10 rounded-full border" src="https://i.pravatar.cc/100" alt="Profile" />
                        <div>
                            <a href="/ketuaProfile" class="text-gray-900 font-semibold leading-tight block">
                                <span>{{ Auth::user()->name }}</span>
                            </a>
                            <span class="text-sm text-gray-500">{{ Auth::user()->role }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div class="bg-white container mx-auto px-6 py-8 h-screen">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
