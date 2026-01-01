<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<!-- <p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p> -->

#### Anggota
- Andi Nurkholis (Dosen)
- Ananda Rizky Setya Nugroho
- Asiil Nasywa Rabbani

# Project Guide Laravel
Project ini bertujuan sebagai pemandu atau <i>guide</i> untuk mereka yang ingin mempelajari <b>Framework LARAVEL</b>. <br>

Project ini akan berisi apa saja saja yang dijelaskan di dalam dokumentasi laravel yang bisa dipahami lebih mudah oleh orang awam atau yang baru memulai mencoba laravel <br>

# DAFTAR ISI
- [Penjelasan Project](#project-guide-laravel)
- [Daftar Isi](#daftar-isi)
- [Pengantar dan Instalasi](#pengantar-dan-instalasi)
- [Instalasi Composer](#instalasi-composer)
- [Instalasi Laravel](#instalasi-laravel)
- [Struktur Laravel](#strujtur-laravel)
- [Route, Views, dan Controller](#route-view-dan-controller)
- [Routes](#route)
- [Views](#view)
- [Controller](#controller)
- [Jenis Controller](#jenis-controller)
- [Passing dan Request Data](#passing-and-request-data)
- [Passing Data](#passing-data)
- [Request Data](#request-data)


## Pengantar dan Instalasi
Dalam instalasi framework Laravel, ada beberapa tahapan yang perlu diperhatikan. <br> 
1) Pastikan terlebih dahulu, telah menginstal XAMPP ataupun aplikasi sejenis web server lainnya, diharapkan dapat menginstal versi terbaru agar mendapatkan versi PHP terbaru.
2) Lakukan instalasi terhadap aplikasi composer terlebih dahulu untuk dapat menginstal dan menggunakan Laravel dengan lebih mudah nantinya.
3) Terakhir, lakukan instalasi Laravel menggunakan bantuan composer pada terminal CMD, yang file-file instalasi nya dapat diarahkan/diletakkan dalam folder yang diinginkan dijadikan folder project.
<br>

### Instalasi Composer
Sebelum masuk ke Cara Install Composer, alangkah baiknya diketahui dulu apa saja kegunaan dari composer. Composer adalah dependency manager pada PHP yang merupakan tool untuk manajemen library-library PHP yang dibutuhkan dalam pembuatan web, yang telah banyak dilakukan pengembangan oleh developer lainnya yang tergabung dalam komunitas packagist.org. Singkatnya, dengan menggunakan composer, library-library PHP yang tersedia di packagist.org akan lebih mudah dikelola dan saling diintegrasikan. Sehingga, secara tidak langsung membuat codingan atau source code project menjadi lebih rapi dan terstruktur. <br>
Cek terlebih dahulu apakah di komputer Anda sudah menginstal Composer atau belum. Bisa cek dengan masuk ke Command Prompt dan ketikkan:

```bash
composer --version
```
Jika belum ada aplikasi Composer, lanjutkan dengan langkah-langkah berikut :
1. Sebelum instal Composer, cek dahulu apakah sudah ada XAMPP atau sejenisnya. Jika belum ada, instal terlebih dahulu. (XAMPP atau paketan lain digunakan untuk mendapatkan PHP. Memilih XAMPP agar paket lengkap aja semisal membutuhkan yang lain dan bisa memakai XAMPP)
2. Kunjungi laman [Composer](https://getcomposer.org/download/)
3. JIka sudah selesai mendownload Composer, akses file yang sudah didownload tadi.
4. Tekan "Next" aja dan biarkan pengaturan default.
5. Jika sudah sampai bagian "Choose command-line PHP you want to use", pilih folder "C:\xampp\php\php.exe" atau tergantung dengan format file/folder/tempat PHP di komputermu
6. Jika sudah, tekan "Next" sampai ada tombol "Install." Dan kemudian tekan "Install," lalu tunggu selesai.
7. Jika sudah coba di cek lewat CMD dengan command "composer -v" seperti di atas tadi

### Instalasi Laravel
1. Buka CMD dan berpindah ke folder yang ingin dibuat sebagai project Laravel.
**(Biar mudah tinggal ke file explorer -> cari folder yang ingin dijadikan folder project -> masuk folder itu -> tekan bagian yang ada "home > nama folder > dst..." atau sejenisnya lalu ketikkan "CMD".)**
2. Kalau CMD sudah di folder project, ketik "composer create-project laravel/laravel (nama project)
```bash
composer create-project laravel/laravel (nama project)
```
3. Tinggal tunggu prosesnya selesai.
4. Jika sudah selesai, coba cek apakah benar sudah terinstal dengan cara
```bash
cd (nama-project)
```
Setelah itu
```bash
php artisan serve
```
Jika muncul
```bash
http://127.0.0.1:8000
```
maka sudah berhasil untuk instalasi Laravel
### Struktur Laravel
1. App, berisikan file kode logic dari aplikasi
2. Bootstrap, berisikan file bootstrap
3. Config, berisikan file konfigurasi aplikasi
4. Database, berisikan file pendukung operasi database
5.	Public, berisikan file asset pendukung yang digunakan oleh user
6.	Resources, berisikan file yang terkait dengan visualisasi tampilan aplikasi
7.	Routes, berisikan file pemetaan url aplikasi
8.	Storage, berisikan file yang dapat digunakan sebagai tempat unggah file
9.	Tests, berisikan file yang dapat digunakan uji terhadap aplikasi
10.	Vendor, berisikan library yang telah disediakan oleh Laravel

## Route, View, dan Controller
### Route
Route dan view adalah elemen paling dasar yang harus dipahami dalam menggunakan Laravel. Route jika diartikan ke dalam bahasa indonesia, maka artinya adalah rute atau jalur. Sehingga, dapat diambil kesimpulannya bahwa route pada laravel adalah bagian yang mengatur rute pada project aplikasi yang hendak dikembangkan. Sebagai contoh, ketika ingin mengatur rute URL untuk menampilkan konten blog dengan membuat route “blog”, kemudian mengarahkan aplikasi untuk menjalankan controller ataupun view yang berisi konten blog pada saat mengakses route tersebut.
Contoh route (biasanya ada di folder routes):
```bash
Route::get('/', function () {
    return view('welcome');
});
```

### View
View merupakan elemen yang berfungsi untuk menangani bagian tampilan/interface suatu halaman pada framework laravel. Dimana, segala sesuatu yang berkaitan dengan tampilan aplikasi web akan dibuat/manajemen dalam folder rewource/view.
```php
// resources/views/coba.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    WELCOME
</body>
</html>
```
Lalu tambahkan route agar bisa akses view yang telah dibuat dengan
```php
// routes/web.php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Kita tambahkan route baru di bawahnya 
Route::get('coba',function(){
    return view('coba');
});
```
### Controller
Controller merupakan jembatan atau penghubung antara view dan model. Sederhananya, controller dapat dipahami sebagai pengatur view dan model, serta juga dapat berperan sebagai pengolah data. File controller laravel terdapat dalam folder App/Http/Controllers/.

```php
// make controller
C:\laravel_project\test>php artisan make:controller UserController
```
controller dapat memiliki sejumlah metode public yang akan merespon permintaan HTTP yang masuk:
```php
<?php
namespace App\Http\Controllers;

use App\Models\User;
user Illuminate\View\View;

class UserController extends Controller
{
    /**
     * tampilkan profil pengguna yang diberikan
     */
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' =>User::findorFail($id)
        ]);
    }
}
```
setelah menulis kelas dan metode controller, definisikan rute ke metode controller:
```php
use App\Http\Controllers\UserController;

Route::get('/user/{id}',[UserController::class, 'show']);
```
ketika permintaan cocok dengan rute URL, metode 'show' pada kelas App\Http\Controllers\UserController akan dipanggil dan parameter rute akan diteruskan ke metode tersebut.

Sebagai tambahan, jika memakai VSCode dan menginstal extension "PHP Intelephense", maka cukup mengetik nama Controllernya saja agar muncul "use ..." di web.php-nya.

### Jenis Controller
Ketimbang disebut Jenis Controller, sebenarnya lebih cocok disebut "Jenis Flag Controller."
Dalam pembuatan/mkae/generate Controller dari Laravel menyediakan beberapa Flag yang bertujuan memenuhi kebutuhan Pengembang/Dev.
Berikut adalah jenis-jenis Flagnya
#### 1. Writing Controller
##### a. Basic Controller
##### b. Single Action (Invokable) Controller
#### 2. Resource Controller
##### a. Model
##### b. Request
##### c. API
## Passing and Request Data
### Passing Data
Pada sub bab ini, akan dibahas teknik passing data pada laravel. Passing data adalah proses mengoper data, dimana data yang dioper adalah data yang ada pada controller ke view untuk ditampilkan. Salah satu cara yang dapat digunakan untuk mempassing atau oper data ke view pada laravel adalah dengan mengirim data dalam parameter ke 2 pada fungsi view().
Berikut contoh sederhana untuk melakukan passing data:
1.	Memakai Controller(UserController.php) dan Route yang sudah dibuat di web.php, usahakan sudah membuat terlebih dahulu.
2. Hidupkan server Laravel **(php artisan serve)** 
3. Masuk ke web dan tambahkan "/user/(id)". Langsung ID tidak perlu tanda kurungnya
4. Jika sudah benar cara penulisannya, maka akan muncul tulisan "Welcome, (ID)"

### Request Data
Pada pemrograman PHP native, terdapat variabel superglobal GET dan POST untuk menerima atau menangkap data yang biasa disebut request. Pada Laravel konsep request ini lebih disederhanakan melalui kelas Illuminate\Http\Request yang menyediakan cara berorientasi objek untuk berinteraksi dengan permintaan HTTP saat ini yang sedang diproses oleh aplikasi Anda, serta mengambil input, cookie, dan file yang dikirimkan bersama permintaan tersebut. Ada 2 proses request atau penerimaan data pada Laravel, yaitu via URI dan Input.

**Permintaan Data Melalui URL**

Berikut adalah langkah sederhana teknik penerimaan data dari url:
1. Membuat file controller baru, dengan membuka terminal CMD, kemudian
arahkan ke folder aplikasi Laravel, misalnya disini laravel_blog menggunakan
perintah cd
2. Buka file UserController yang telah dibuat (terdapat dalam folder
app/Http/Controller), kemudian modifikasi isian pada function index dengan
menambahkan parameter “$nama”, yang selanjutnya dilakukan return.
3. Selanjutnya, buka file route pada web.php yang terdapat dalam folder routes, kemudian buat route baru “user/{nama}” yang mengarah pada function index
di UserController, dengan menambahkan data “{nama}” pada url-nya.
4. Terakhir, akses tampilan user yang telah dibuat dengan mengetikkan url
dengan memasukkan suatu string diakhir setelah “localhost:8000/user/”, contohnya “localhost:8000/user/anonymus”.

**Permintaan Data Dari Input**

Salah satu mekanisme yang banyak digunakan di web adalah menangkap data dari form input menggunakan form method post. Ini sering digunakan untuk memasukkan data ke dalam database dari inputan form. Berikut adalah pembahasan tentang percobaan membuat form input, kemudian melakukan request data berdasarkan inputannya. Langkah-langkahnya dapat dilakukan sebagai berikut:
1. Buka kembali file UserController (terdapat dalam folder app/Http/Controller), kemudian modifikasi isian pada function create dengan menambahkan return
view untuk menampilkan suatu halaman pada folder “resources/views”.
2. Membuat file form.blade.php. Pada contoh berikut, form.blade.php dibuat dalam folder terpisah, yakni “user” agar dibedakan dengan file tampilan lainnya.
3. Selanjutnya, perlu mengisi sintaks html pada file form.blade.php
4. Selanjutnya, perlu dibuat route baru untuk mengatur function create dan
tampilan yang telah dibuat sebelumnya agar bisa diakses.
5. Berikutnya, setelah dapat menampilkan
form input yang telah dibuat, perlu dibuat function yang dapat menampung
data yang akan dimasukkan. Pada UserController yang telah dibuat, telah
disediakan function yang dapat menghandle request data (dapat juga
membuatnya sendiri).
6. Selanjutnya, perlu didefinisikan lagi route untuk menjalankan function store
yang telah dimodifikasi sebelumnya.
7. Terakhir, akan dilakukan percobaan function store pada UserController yang
dimulai dari mengakses form input melalui uri “localhost:8000/user/create”.
<!-- Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->
