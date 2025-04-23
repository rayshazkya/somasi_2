@extends('layouts.app')

@section('page-title', 'DaftarAnggota')

@section('content')
<div class="flex-1 p-6" x-data="anggotaApp()" x-init="init()">
  <!-- Navbar -->
  <div class="flex justify-between items-center mb-6">
    <div>
      <h2 class="text-2xl font-semibold">Daftar Anggota</h2>
      <p class="text-sm text-gray-500">Informasi Seluruh Anggota</p>
    </div>
    <div class="flex items-center space-x-4">
      <div class="relative">
        <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z"/>
        </svg>
      </div>
      <button @click="showTambah = true" class="flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-lg hover:bg-green-700">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 4v16m8-8H4"/>
        </svg>
        Tambahkan Anggota
      </button>
    </div>
  </div>

  <!-- Tabel Daftar Anggota -->
  <div class="bg-white rounded-xl shadow p-6">
    <div class="overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead>
          <tr class="text-left text-gray-600 border-b">
            <th class="py-3">Nama Anggota Himpunan</th>
            <th class="py-3">NPM</th>
            <th class="py-3">Divisi</th>
            <th class="py-3">Jabatan</th>
            <th class="py-3">Type</th>
            <th class="py-3">Status</th>
            <th class="py-3">Action</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <template x-for="anggota in anggotaList" :key="anggota.id">
            <tr class="border-b hover:bg-gray-50">
              <td class="py-3 flex items-center gap-2">
                <img :src="anggota.avatar || 'https://i.pravatar.cc/40?u=' + anggota.id" class="w-8 h-8 rounded-full" />
                <span x-text="anggota.nama"></span>
              </td>
              <td class="py-3" x-text="anggota.npm"></td>
              <td class="py-3" x-text="anggota.divisi"></td>
              <td class="py-3" x-text="anggota.jabatan"></td>
              <td class="py-3" x-text="anggota.type"></td>
              <td class="py-3">
                <span :class="anggota.status === 'Aktif' ? 'bg-purple-100 text-purple-600' : 'bg-gray-100 text-gray-600'" class="px-2 py-1 rounded text-xs font-medium" x-text="anggota.status"></span>
              </td>
              <td class="py-3 space-x-2">
                <button @click="editAnggota(anggota)" class="hover:text-yellow-500"><i class="fas fa-edit"></i></button>
                <button @click="hapusAnggota(anggota.id)" class="hover:text-red-600"><i class="fas fa-trash"></i></button>
              </td>
            </tr>
          </template>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal Tambah Anggota -->
  <div x-show="showTambah" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div class="bg-white p-6 rounded-xl w-96 shadow" @click.away="showTambah = false">
      <h3 class="text-lg font-semibold mb-4">Tambah Anggota</h3>
      <form @submit.prevent="submitAnggota">
        <input type="text" placeholder="Nama" class="mb-3 w-full border px-3 py-2 rounded" x-model="form.nama" required>
        <input type="text" placeholder="NPM" class="mb-3 w-full border px-3 py-2 rounded" x-model="form.npm" required>
        <input type="text" placeholder="Divisi" class="mb-3 w-full border px-3 py-2 rounded" x-model="form.divisi">
        <input type="text" placeholder="Jabatan" class="mb-3 w-full border px-3 py-2 rounded" x-model="form.jabatan">
        <select class="mb-3 w-full border px-3 py-2 rounded" x-model="form.type">
          <option value="Office">Office</option>
          <option value="Remote">Remote</option>
        </select>
        <select class="mb-4 w-full border px-3 py-2 rounded" x-model="form.status">
          <option value="Aktif">Aktif</option>
          <option value="Tidak Aktif">Tidak Aktif</option>
        </select>
        <div class="flex justify-end gap-2">
          <button type="button" @click="showTambah = false" class="px-4 py-2 bg-gray-200 rounded">Batal</button>
          <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
function anggotaApp() {
  return {
    anggotaList: [],
    showTambah: false,
    form: {
      nama: '', npm: '', divisi: '', jabatan: '', type: 'Office', status: 'Aktif'
    },
    init() {
      this.fetchAnggota();
    },
    fetchAnggota() {
      fetch('/api/anggota')
        .then(res => res.json())
        .then(data => this.anggotaList = data);
    },
    submitAnggota() {
      fetch('/api/anggota', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(this.form)
      })
      .then(() => {
        this.showTambah = false;
        this.resetForm();
        this.fetchAnggota();
      });
    },
    resetForm() {
      this.form = { nama: '', npm: '', divisi: '', jabatan: '', type: 'Office', status: 'Aktif' };
    },
    hapusAnggota(id) {
      if (confirm('Yakin ingin menghapus?')) {
        fetch(`/api/anggota/${id}`, { method: 'DELETE' })
          .then(() => this.fetchAnggota());
      }
    },
    editAnggota(anggota) {
      // Feature edit bisa dikembangkan di sini nanti
      alert('Fitur edit akan segera tersedia.');
    }
  }
}
</script>
@endpush