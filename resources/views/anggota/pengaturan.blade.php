@extends('anggota.dashboard')
@section('header-title', 'Daftar Anggota')
@section('header-subtitle', 'Informasi Seluruh Anggota')

@section('content')
    <div class="flex-1 p-6 bg-gray-50">
        <div class="max-w-4xl mx-auto space-y-6">
            <!-- Profile Section -->
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/4">
                        <img src="{{ asset('images/profil.png') }}" alt="asd" class="w-40 h-40 object-cover rounded-lg">
                    </div>
                    <div class="w-full md:w-3/4">
                        <div class="space-y-3">
                            <div class="flex">
                                <div class="w-24 font-medium">Nama</div>
                                <div class="flex-1">: {{ Auth::user()->name }} </div>
                            </div>
                            <div class="flex">
                                <div class="w-24 font-medium">Email</div>
                                <div class="flex-1">: {{ Auth::user()->email }}</div>
                            </div>
                            <div class="flex">
                                <div class="w-24 font-medium">Role</div>
                                <div class="flex-1">: {{ Auth::user()->role }}</div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="" {{-- {{ route('pengaturan.edit') }} --}}
                                class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                                Edit Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Riwayat Kegiatan Section -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-semibold mb-4">Riwayat Kegiatan</h2>
                <ul class="list-disc pl-6 space-y-2">
                    {{-- @foreach ($kegiatan as $item)
                    <li>{{ $item->nama }} ({{ $item->peran }})</li>
                @endforeach --}}
                    <li>Ketua Infest</li>
                </ul>
            </div>

            <!-- Password Section -->
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold">Password</h2>
                    <a href="" {{-- {{ route('pengaturan.password') }} --}}
                        class="text-sm text-red-500 hover:text-red-600 transition-colors">Ganti</a>
                </div>
                <div class="text-gray-500">
                    ******************
                </div>
            </div>

            <!-- Keluar Section -->
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-semibold">Keluar</h2>
                        <p class="text-gray-500">SOMASI</p>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="text-sm text-red-500 hover:text-red-600 transition-colors">Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
