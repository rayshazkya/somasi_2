# SOMASI - Sistem Organisasi Manajemen dan Arsip

SOMASI adalah platform web berbasis Laravel untuk manajemen organisasi. Fitur utamanya mencakup pengelolaan anggota, keuangan, dokumentasi, agenda kegiatan, dan lainnya.

---

## 🚀 Cara Menjalankan Project Laravel SOMASI

```bash
# 1. Clone Repository
git clone https://github.com/rayshazkya/somasi_2.git
cd somasi_2

# 2. Copy File .env
cp .env.example .env

# 3. Install Dependency Laravel
composer install

# 4. Generate App Key
php artisan key:generate

# 5. Konfigurasi Database (edit .env sesuai setting lokalmu)
# DB_DATABASE=somasi_db
# DB_USERNAME=root
# DB_PASSWORD=your_password

# 6. Jalankan Migrasi Database
php artisan migrate

# 7. Jalankan Server Laravel
php artisan serve
