
<div id="tambahAnggotaModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen p-4">
        <!-- Backdrop -->
        <div class="fixed inset-0 bg-black bg-opacity-25 transition-opacity"></div>

        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-xl w-full max-w-md mx-auto">
            <div class="p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Tambah Anggota</h3>

                <form id="tambahAnggotaForm" action="{{ route('anggota.store') }}" method="POST">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <input type="text" name="nama" id="nama"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Nama Lengkap" required>
                        </div>

                        <div>
                            <input type="text" name="npm" id="npm"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="NPM" required>
                        </div>

                        <div>
                            <input type="email" name="email" id="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Email" required>
                        </div>

                        <div>
                            <input type="text" name="divisi" id="divisi"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Divisi" required>
                        </div>

                        <div>
                            <input type="text" name="role" id="role"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Role" required>
                        </div>

                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <select name="status" id="status"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="active">Active</option>
                                <option value="non_active" selected>Non Active</option>
                            </select>
                        </div>

                        <input type="hidden" name="avatar"
                            value="https://ui-avatars.com/api/?name=User&background=random">
                    </div>

                    <div class="flex justify-end space-x-3 mt-6">
                        <button type="button" id="batalTambahAnggota"
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Batal
                        </button>
                        <button type="submit"
                            class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
