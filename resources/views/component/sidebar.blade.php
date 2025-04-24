<aside x-data="{ active: 'Dashboard' }" class="w-64 bg-white shadow-md p-6">
    <h1 class="text-2xl font-bold text-indigo-600 mb-10">SOMASI</h1>
    <nav class="space-y-4">
        <a href="/ketuaDashboard" @click="active = 'Dashboard'"
            :class="active === 'Dashboard' ? 'text-indigo-600 font-semibold' : 'text-gray-700 hover:text-indigo-600'"
            class="flex items-center">
            <svg class="h-5 w-5 mr-2" ...>...</svg>
            Dashboard
        </a>
        <a href="/daftarAnggota" @click="active = 'Anggota'"
            :class="active === 'Anggota' ? 'text-indigo-600 font-semibold' : 'text-gray-700 hover:text-indigo-600'"
            class="flex items-center">
            <svg class="h-5 w-5 mr-2" ...>...</svg>
            Daftar Anggota
        </a>
        <a href="#" @click="active = 'Department'"
            :class="active === 'Department' ? 'text-indigo-600 font-semibold' : 'text-gray-700 hover:text-indigo-600'"
            class="flex items-center">
            <svg class="h-5 w-5 mr-2" ...>...</svg>
            Daftar Department
        </a>
        <a href="#" @click="active = 'Kalender'"
            :class="active === 'Kalender' ? 'text-indigo-600 font-semibold' : 'text-gray-700 hover:text-indigo-600'"
            class="flex items-center">
            <svg class="h-5 w-5 mr-2" ...>...</svg>
            Kalender & Agenda Kegiatan
        </a>
        <a href="#" @click="active = 'Keuangan'"
            :class="active === 'Keuangan' ? 'text-indigo-600 font-semibold' : 'text-gray-700 hover:text-indigo-600'"
            class="flex items-center">
            <svg class="h-5 w-5 mr-2" ...>...</svg>
            Keuangan
        </a>
        <a href="#" @click="active = 'Kehadiran'"
            :class="active === 'Kehadiran' ? 'text-indigo-600 font-semibold' : 'text-gray-700 hover:text-indigo-600'"
            class="flex items-center">
            <svg class="h-5 w-5 mr-2" ...>...</svg>
            Kehadiran
        </a>
        <a href="#" @click="active = 'Dokumentasi'"
            :class="active === 'Dokumentasi' ? 'text-indigo-600 font-semibold' : 'text-gray-700 hover:text-indigo-600'"
            class="flex items-center">
            <svg class="h-5 w-5 mr-2" ...>...</svg>
            Dokumentasi & Arsip
        </a>
        <a href="/ketuaProfile" @click="active = 'Pengaturan'"
            :class="active === 'Pengaturan' ? 'text-indigo-600 font-semibold' : 'text-gray-700 hover:text-indigo-600'"
            class="flex items-center">
            <svg class="h-5 w-5 mr-2" ...>...</svg>
            Pengaturan
        </a>
    </nav>
</aside>
