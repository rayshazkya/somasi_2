<!-- Header -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<header class="bg-white py-4 px-6 shadow w-full">
  <div class="max-w-screen-xl mx-auto flex justify-between items-center">
    <div>
      <h2 class="text-xl font-semibold">Hello Glenn 👋🏼</h2>
      <p class="text-gray-600">Good Morning</p>
    </div>
    <div class="flex items-center space-x-4">
    <div class="flex items-center gap-4">
         <!-- Notifikasi (Dropdown) -->
              <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="focus:outline-none">
                  🔔
                </button>
                <!-- Dropdown -->
                <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-64 bg-white border rounded-lg shadow-lg p-4 text-sm z-50">
                  <h4 class="font-semibold mb-2">Notifikasi</h4>
                  <ul class="space-y-2">
                  <ul class="space-y-2">
          <li>
            <a href="#" class="block text-gray-700 hover:bg-gray-100 rounded px-2 py-1 transition">
              🔹 Pentas Seni telah disetujui.
            </a>
          </li>
          <li>
            <a href="#" class="block text-gray-700 hover:bg-gray-100 rounded px-2 py-1 transition">
              📢 Rapat umum dijadwalkan ulang.
            </a>
          </li>
          <li>
            <a href="#" class="block text-gray-700 hover:bg-gray-100 rounded px-2 py-1 transition">
              📥 Proposal kegiatan telah diunggah.
            </a>
          </li>
        </ul>

          </ul>
          <div class="mt-3 text-right">
            <button class="text-indigo-500 hover:underline text-xs">Lihat Semua</button>
          </div>
        </div>
      </div>

          </div>
      <div class="flex items-center bg-white shadow rounded-xl px-4 py-2 space-x-3">
        <img class="w-10 h-10 rounded-full border" src="https://i.pravatar.cc/100" alt="Profile" />
        <div>
          <a href="/ketuaProfile" class="text-gray-900 font-semibold leading-tight block">Glen Hakim</a>
          <span class="text-sm text-gray-500">Ketua Himpunan</span>
        </div>
      </div>
    </div>
  </div>
</header>
