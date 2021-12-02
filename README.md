<h1 align="center">
<br>
  <img src="https://user-images.githubusercontent.com/16473727/144255015-ee0a64e6-463a-45d0-a102-b61f612060dc.png" alt="Ifish" width="500">
</h1>

<h4 align="center">Executive Information System .</h4>

<p align="center">
  <a href="#sekilas-tentang">Deskripsi Aplikasi</a> •
  <a href="#alur-instalasi">Alur Instalasi</a> •
  <a href="#kebutuhan-sistem-magento">Kebutuhan Sistem Magento</a> •
  <a href="Langkah Instalasi">Langkah Instalasi</a> •
</p>

<p align="center">
    <a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Deskipris Aplikasi
[`^ kembali ke atas ^`](#)

***Ifish*** adalah aplikasi berbasis web untuk suatu perusahaan e-commerce agar mempermudah eksekutif memonitoring penjualan, stock serta pendapatan perusahaannya dan eksekutif dapat menggunakannya untuk membuat perencanaan berdasarkan informasi dari aplikasi..

# Alur Instalasi
[`^ kembali ke atas ^`](#)

1. Siapkan lingkungan server .
Install perangkat lunak prasyarat yaitu Xampp

2. Dapatkan Repository Ifish.
Dapatkan Repository Ifish di Github.

3. Install Composer.
Install menggunakan baris perintah di ***Command Prompt***

4. Verifikasi penginstalan dengan melihat Login Page dan Dashboard Admin.

# Kebutuhan Sistem IFish
[`^ kembali ke atas ^`](#)

#### Sistem Operasi (Linux x86-64) :
Distribusi Linux, seperti RedHat Enterprise Linux (RHEL), CentOS, Ubuntu, Debian, dan sejenisnya. Ifish juga mendukung didukung di Microsoft Windows dan macOS.

#### Persyaratan Memori :
Memerlukan RAM hingga 2 GB atau lebih.

#### Brower yang Didukung :
-   Microsoft Edge ,Firefox terbaru (sistem operasi apapun),
-   Chrome terbaru (sistem operasi apapun),
-   Safari terbaru (khusus Mac OS),

#### Composer :
-   Composer 1.x atau 2.x

#### Server web :
-   Apache 2.4  
-   nginx 1.x

#### Database :
-   MySQL 8.0
-   MariaDB 10.4 

#### PHP :
- PHP 7.x.x. 

#### Framework :
- Laravel 8
- Boostrap 5
- Admin LTE.

# Langkah Instalasi
[`^ kembali ke atas ^`](#)

### Langkah 1: Install Xampp :
Install Xampp,  aplikasi bisa anda didapatkan pada link berikut : https://www.apachefriends.org/download.html pilih versi yang sesuai dan pastikan directory di set ke ***C:*** pada saat penginstalan.

### Langkah 2: Clone Repository Ifish dari Github
Buka ***Command Prompt*** dan masukan perintah seperti dibawah ini
```
cd ..
cd ..
cd xampp/htdocs
git clone https://github.com/ihsanfir/R1-MPPL-4
```

### Langkah 3: Install Composer
Lanjutkan langkah selanjutnya dengan memasukan baris perintah di bawah ini:
```
cd R1-MPPL-4
composer install
```

### Langkah 4 : Jalankan Program dan lakukan Verifikasi Penginstalan 
Terakhir jalankan program dengan memasukan baris perintah dibawah ini: 
```
php artisan key:generate
php artisan serve
```
Selanjutnya buka browser yang sedang anda gunakan dan akses http://127.0.0.1:8000/ apabila anda melihat login page maka penginstalan sudah berhasil.
