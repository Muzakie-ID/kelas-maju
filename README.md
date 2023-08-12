<p align="center">
  <a href="https://laravel.com/">
    <img src="https://github.com/mizzcode/kelas-maju/blob/dev/public/img/logo/kelasmaju-white.svg" width="150">
  </a>
</p>
<hr>
<span align="center">
    <b>KelasMaju</b> Adalah Sistem Manajemen Kelas untuk memberikan solusi inovatif yang mengintegrasikan potensi hebat dari <a href="https://laravel.com">Laravel</a> dan estetika modern dari <a href="https://github.com/stisla/stisla">Stisla</a> untuk mengatasi tantangan kompleks dalam pengelolaan kelas. Proyek ini dirancang untuk memberdayakan pendidik dan staff sekolah dengan alat yang diperlukan untuk mengelola, memonitor, dan memfasilitasi pengalaman belajar yang optimal.
</span>

## Installation

1. Clone the repository
```bash
https://github.com/mizzcode/kelas-maju.git
```
2. Install Package
```bash
composer install
```
3. Rename .env.example to .env
```bash
copy .env.example .env
```
4. Open .env lalu ubah konfigurasi database sesuai yang ingin dipakai
```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
5. Jalankan symbolic link untuk load asseets yang dibutuhkan
```bash
php artisan storage:link
```
6. Jalankan website
```bash
php artisan serve
```

## License

The <b>KelasMaju</b> is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
