# Deploy ke Production

Checklist untuk meng-upload website company profile (dyp-app) ke server.
Website ini mengambil data dari **dyp-admin** lewat API, jadi dyp-admin harus sudah jalan dan bisa diakses dari server ini.

## 1. Di komputer lokal: build asset

```bash
npm ci
npm run build
```

Hasilnya ada di `public/build`. Pastikan **`npm run dev` tidak sedang jalan** dan file **`public/hot` tidak ikut ter-upload**.
Kalau `public/hot` ada di server, Laravel akan mencari asset ke dev server Vite dan halaman tampil tanpa CSS/JS.

## 2. Yang di-upload

Upload semua file project **kecuali**:

- `node_modules/`
- `public/hot`
- `.env` lokal (buat `.env` baru di server, lihat langkah 3)
- `storage/app/originals/` (salinan gambar/video asli sebelum dikompres, hanya untuk arsip)

## 3. File `.env` di server

Salin dari `.env.example`, lalu sesuaikan:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://domain-anda

LOG_LEVEL=warning

DB_DATABASE=dypdb        # sama dengan database dyp-admin
DB_USERNAME=...
DB_PASSWORD=...

SESSION_DRIVER=file
CACHE_STORE=file

ADMIN_API_URL=https://domain-admin/api
ADMIN_API_TOKEN=...      # sama dengan token API di dyp-admin
ADMIN_API_CACHE_TTL=600

COMPANY_LINKEDIN_URL=https://www.linkedin.com/company/...
```

`APP_DEBUG=false` wajib: kalau `true`, pesan error menampilkan isi `.env` (password database, token API) ke pengunjung.

## 4. Perintah di server

```bash
composer install --no-dev --optimize-autoloader
php artisan key:generate        # hanya saat pertama kali, kalau APP_KEY masih kosong
php artisan storage:link        # supaya gambar di storage/app/public bisa diakses
php artisan optimize            # cache config, route, view
```

Setiap kali update kode atau `.env`, jalankan lagi `php artisan optimize`.

## 5. Setelah konten diubah di admin

Data dari API di-cache selama `ADMIN_API_CACHE_TTL` detik (default 10 menit).
Supaya perubahan langsung tampil:

```bash
php artisan cache:clear
```

## 6. Cek setelah deploy

- [ ] Semua menu bisa dibuka, termasuk burger menu di HP
- [ ] Gambar dan ikon tampil (kalau gambar hilang, cek `php artisan storage:link`)
- [ ] Kirim satu pesan lewat form kontak, lalu pastikan muncul di dyp-admin
- [ ] Bagikan link ke WhatsApp dan pastikan preview gambarnya muncul (butuh `APP_URL` yang benar)
