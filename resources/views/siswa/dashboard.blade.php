@extends('layouts.dashboard')

@section('title', 'Siswa Dashboard')
@section('role-name', 'Siswa')
@section('page-title', 'Siswa Dashboard')

@section('sidebar-menu')
    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Nilai</a>
    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Jadwal</a>
@endsection

@section('content')
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Selamat Datang di Dashboard Siswa</h2>
        <p>Ini adalah dashboard untuk Siswa</p>
    </div>
@endsection