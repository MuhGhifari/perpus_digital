<h1 align="center">Perpus Digital</h1>

<p align="center">
    E-Library yang dibangun dengan Laravel 11 dan Bootstrap 5.
    <br/>Link desain dapat diakses <a href="https://www.figma.com/design/OwJoPM00Iyg0LKcgKhCaYA/KP-SMAM7?node-id=0-1&t=fr9arhrDUSqdgzYt-0">di sini</a>
</p>

<h3>Fitur</h3>
<ul>
    <li>Pengguna :
        <ul>
            <li>Dashboard katalog buku</li>
            <li>Transaksi peminjaman buku</li>
            <li>Pencarian & filter buku berdasarkan kategori</li>
        </ul>
    </li>
    <li>Admin :
        <ul>
            <li>Analitik transaksi buku</li>
            <li>Manajemen transaksi reservasi buku</li>
            <li>Manajemen kategori</li>
            <li>Manajemen buku</li>
        </ul>
    </li>
</ul>

<br/>

## Prasyarat
* Laravel 11
* PHP 8.2+
* MySQL 8.3+
* Konfigurasi AWS S3

<br/>

## Cara Menjalankan

1. Kloning repositori ini

   ```bash
   git clone https://github.com/ai-null/perpus_digital.git
   ```

2. Masuk ke direktori proyek

   ```bash
   cd perpus_digital
   ```

3. Install dependensi dengan composer

   ```bash
   composer install
   ```

4. Jalankan migrasi database

   ```bash
   php artisan migrate:fresh
   ```

5. (Opsional) Jalankan seeder

   ```bash
   php artisan db:seed
   ```

6. Jalankan aplikasi

   ```bash
   php artisan serve
   ```

<br/>

### Menjalankan dengan Docker (Laravel Sail)

1. Pastikan Docker sudah terinstall di komputer Anda.
2. Copy file `.env.example` menjadi `.env` dan sesuaikan konfigurasi jika diperlukan.
3. Install dependensi menggunakan Sail

   ```bash
   ./vendor/bin/sail up -d
   ./vendor/bin/sail composer install
   ```

4. Jalankan migrasi database

   ```bash
   ./vendor/bin/sail artisan migrate:fresh
   ```

5. (Opsional) Jalankan seeder

   ```bash
   ./vendor/bin/sail artisan db:seed
   ```

<br/>

## Dependensi
| Library | Deskripsi |
| ------  | ----------- |
| [FakerPHP](https://fakerphp.org/) | untuk seeding database |
| [FileSystem AWS S3](https://packagist.org/packages/league/flysystem-aws-s3-v3) | untuk penyimpanan aset gambar |

<br/>

## Lisensi
```
MIT License

Copyright (c) 2020 Ainul

Izin diberikan secara gratis, kepada siapa saja yang memperoleh salinan
perangkat lunak ini dan file dokumentasi terkait ("Perangkat Lunak"), untuk
bertransaksi dalam Perangkat Lunak tanpa batasan, termasuk hak untuk
menggunakan, menyalin, mengubah, menggabungkan, mempublikasikan, mendistribusikan,
mensublisensikan, dan/atau menjual salinan Perangkat Lunak, serta mengizinkan
orang yang diberikan Perangkat Lunak untuk melakukannya, dengan syarat berikut:

Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
setiap salinan atau bagian substansial dari Perangkat Lunak.

PERANGKAT LUNAK INI DIBERIKAN "APA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT
MAUPUN TERSIRAT, TERMASUK NAMUN TIDAK TERBATAS PADA JAMINAN DIPERDAGANGKAN,
KESESUAIAN UNTUK TUJUAN TERTENTU DAN BEBAS PELANGGARAN. DALAM HAL APA PUN
PENULIS ATAU PEMEGANG HAK CIPTA TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN
ATAU KEWAJIBAN LAIN, BAIK DALAM TINDAKAN KONTRAK, KESALAHAN ATAU LAINNYA,
YANG TIMBUL DARI, KELUAR DARI ATAU SEHUBUNGAN DENGAN PERANGKAT LUNAK ATAU
PENGGUNAAN ATAU TRANSAKSI LAIN DALAM PERANGKAT LUNAK.
```
