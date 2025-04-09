@extends('layouts.dashboard')

@section('title', 'Admin Dashboard')
@section('role-name', 'Administrator')
@section('page-title', 'Admin Dashboard')

@section('sidebar-menu')
    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Kelola Pengguna</a>
    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Pengaturan</a>
@endsection

@section('content')
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Selamat Datang di Dashboard Admin</h2>
        <p>Ini adalah dashboard untuk Admin</p>
    </div>
@endsection