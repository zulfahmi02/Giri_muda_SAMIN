# Suku Samin

Website budaya Suku Samin berbasis Laravel 13 dengan halaman profil, narasi budaya, dan galeri panorama `VR 360°`.

## Ringkasan

Project ini menampilkan:

- halaman beranda dengan pengenalan budaya Suku Samin
- halaman detail untuk `Ajaran`, `Sejarah`, `Tokoh`, dan `Kepercayaan`
- galeri `VR 360°`
- viewer panorama interaktif berbasis Photo Sphere Viewer
- pencarian konten dari navbar

## Stack

- PHP `^8.3`
- Laravel `^13.0`
- Vite `^8`
- Tailwind CSS `^4`
- Photo Sphere Viewer `^5.14`
- Three.js `^0.183`

## Fitur Utama

- UI publik dengan tema glassmorphism
- viewer panorama 360 dengan marker navigasi antar scene
- fallback error saat panorama gagal dimuat
- asset frontend dibundle lewat Vite
- security headers dasar di level aplikasi
- session driver database dengan migration tersimpan di repo

## Route Utama

- `/` : beranda
- `/detail/ajaran`
- `/detail/sejarah`
- `/detail/tokoh`
- `/detail/kepercayaan`
- `/vr` : galeri panorama
- `/vr/{scene}` : halaman viewer panorama

## Scene VR

Scene yang saat ini dikenali aplikasi ada di `app/Http/Controllers/VRController.php`:

- `rumah-tradisional`
- `ladang-pertanian`
- `upacara-adat`
- `kehidupan-sehari`
- `kerajinan-tangan`
- `pemandangan-alam`

Catatan:
- asset panorama utama saat ini disimpan di `public/images/360`
- thumbnail galeri VR disimpan di `public/images/360/thumbnails`
- jika menambah scene baru, pastikan whitelist controller, thumbnail, dan file panorama ikut ditambahkan

## Kebutuhan Sistem

- PHP `8.3+`
- Composer
- Node.js `20+`
- npm
- database MySQL atau SQLite

## Instalasi Lokal

1. Install dependency backend dan frontend:

```bash
composer install
npm install
```

2. Buat file environment:

```bash
cp .env.example .env
php artisan key:generate
```

3. Atur koneksi database di `.env`.

4. Jalankan migration:

```bash
php artisan migrate
```

5. Jalankan development server:

```bash
composer run dev
```

Atau jalankan manual:

```bash
php artisan serve
npm run dev
```

## Perintah Penting

Build asset production:

```bash
npm run build
```

Menjalankan test:

```bash
php artisan test
```

Menjalankan formatter Laravel Pint:

```bash
./vendor/bin/pint
```

Setup cepat dari awal:

```bash
composer run setup
```

## Struktur Penting

- `routes/web.php` : route publik
- `app/Http/Controllers` : controller halaman
- `resources/views` : Blade view
- `resources/js/app.js` : interaksi navbar dan modal pencarian
- `resources/js/vr-viewer.js` : logic viewer panorama
- `resources/css/app.css` : styling global
- `resources/css/vr.css` : styling viewer VR
- `app/Http/Middleware/SecurityHeaders.php` : hardening response headers

## Catatan Deploy

Untuk deploy production, perhatikan hal berikut:

- jalankan `npm run build`
- set `APP_ENV=production`
- set `APP_DEBUG=false`
- pastikan `php artisan migrate --force` dijalankan
- idealnya asset panorama 360 dipindah ke object storage / CDN agar app server tidak melayani file besar langsung
- jika memakai domain production, sesuaikan `APP_URL`

## Optimasi Asset 360

Asset panorama saat ini sudah dikompresi agar lebih ringan untuk web. Meski begitu, untuk trafik lebih tinggi saya sarankan:

- simpan panorama di object storage seperti Cloudflare R2 / S3-compatible storage
- aktifkan cache header panjang untuk file gambar
- pertimbangkan tiled panorama jika jumlah scene atau trafik bertambah

## Testing

Test yang tersedia saat ini mencakup:

- response halaman utama
- security headers publik
- validasi bahwa halaman publik tidak lagi memakai CDN legacy untuk asset utama

## Lisensi

Project ini mengikuti lisensi `MIT`, mengikuti basis project Laravel.
