@extends('layouts.dashboard')

@section('title', 'Wakil Kurikulum Dashboard')
@section('role-name', 'Wakil Kurikulum')
@section('page-title', 'Wakil Kurikulum Dashboard')

@section('sidebar-menu')
    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Jadwal</a>
    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Kurikulum</a>
@endsection

@section('content')
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Selamat Datang di Dashboard Wakil Kurikulum</h2>
        <p>Ini adalah dashboard untuk Wakil Kurikulum</p>
    </div>
@endsection