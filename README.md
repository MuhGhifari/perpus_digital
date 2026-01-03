<h1 align="center">Perpus Digital</h1>

<p align="center">
    E-Library yang dibangun dengan Laravel 11 dan Bootstrap 5.
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

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
