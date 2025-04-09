@extends('layouts.dashboard')

@section('title', 'Kepala Sekolah Dashboard')
@section('role-name', 'Kepala Sekolah')
@section('page-title', 'Kepala Sekolah Dashboard')

@section('sidebar-menu')
    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Laporan</a>
    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Monitoring</a>
@endsection

@section('content')
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Selamat Datang di Dashboard Kepala Sekolah</h2>
        <p>Ini adalah dashboard untuk Kepala Sekolah</p>
    </div>
@endsection