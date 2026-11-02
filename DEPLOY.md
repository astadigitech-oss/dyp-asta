# Deploy ke Production

Checklist untuk meng-upload website company profile (dyp-app) ke server.
Website ini mengambil data dari **dyp-admin** lewat API, jadi dyp-admin harus sudah jalan dan bisa diakses dari server ini.

## 0. Versi PHP server

Minimal **PHP 8.3.36**. Versi 8.3.0–8.3.35 rentan CVE-2026-109618 dan CVE-2026-109619 (remote code execution).
`composer.json` sudah mensyaratkan `^8.3.36`, jadi `composer install` dan aplikasinya menolak berjalan di PHP yang lebih lama.
Cek dengan `php -v` di server sebelum deploy. dyp-admin juga punya syarat yang sama.

## Deploy dengan Dokploy (Docker Compose)

File yang dipakai: `Dockerfile`, `docker-compose.yml`, `docker/`, `.dockerignore`.
Image sudah berisi PHP 8.3.36 + Apache, asset hasil `npm run build`, dan `composer install --no-dev`.
Saat container start, `storage:link` dan `php artisan optimize` dijalankan otomatis. Migrasi **tidak** dijalankan karena tabel dikelola dyp-admin.

1. Commit dan push semua file di atas, termasuk gambar di `storage/app/public/bases` dan `main`
   (hanya file yang terdaftar di `storage/app/public/.gitignore` yang ikut. Kalau menambah gambar baru di view, daftarkan juga di sana).
2. Di Dokploy: **Create Service → Compose**, pilih repo GitHub dan branch, Compose Path `./docker-compose.yml`.
3. Tab **Environment**, isi:

   ```env
   APP_KEY=base64:...            # buat di lokal: php artisan key:generate --show
   APP_URL=https://domain-anda
   DB_HOST=...                   # host MySQL dypdb (yang sama dengan dyp-admin)
   DB_PORT=3306
   DB_DATABASE=dypdb
   DB_USERNAME=...
   DB_PASSWORD=...
   ADMIN_API_URL=https://domain-admin/api
   ADMIN_API_TOKEN=...           # sama dengan token API di dyp-admin
   COMPANY_LINKEDIN_URL=https://www.linkedin.com/company/...
   ```

   Opsional: `ADMIN_API_CACHE_TTL` (default 600), `ADMIN_API_TIMEOUT` (default 5), `LOG_LEVEL` (default warning).
   `APP_ENV=production` dan `APP_DEBUG=false` sudah dikunci di `docker-compose.yml`.
4. Tab **Domains**: tambah domain, Service Name `app`, Container Port `80`, aktifkan HTTPS (Let's Encrypt).
5. Klik **Deploy**. Setiap mengubah domain atau environment, klik **Redeploy**.

Catatan:

- Kalau MySQL atau dyp-admin juga di Dokploy, `DB_HOST` dan `ADMIN_API_URL` boleh memakai nama service internalnya
  (asal berada di `dokploy-network`), misalnya `ADMIN_API_URL=http://nama-service-admin/api`.
- `APP_URL` di **dyp-admin** harus domain publik, karena URL gambar dari API dibuat dari situ. Kalau masih `localhost`, gambar tidak tampil di website.
- Log aplikasi ada di tab **Logs** Dokploy (`LOG_CHANNEL=stderr`).
- Untuk menghapus cache data API setelah konten diubah: buka tab **Terminal** container `app`, jalankan `php artisan cache:clear`.
- Bagian 1–4 di bawah ini hanya untuk deploy manual (tanpa Docker).

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
