<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

## ROUTE



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return "<h1>Selamat Datang Di Halaman Home</h1>";
// });

// Route::get('/profile', function () {
//     echo '<h1>Ini Halaman Profile</h1>';
//     echo '<p>Selamat Datang</p>';
// });

// Route::get('/karyawan/edutech', function () {
//     echo '<h2 style="text-align : center"><u>Welcome Albaar</u></h2>';
// });

## Route Parameter
// Route::get('/karyawan/{nama}', function ($nama) {
//     return "<h2 style='text-align : center'><u>Welcome $nama</u></h2>";
// });

## Route Optional Parameter 
// Route::get('/stok-barang/{jenis?}/{merek?}', 
//     function ($a = 'smartphone', $b = 'samsung') {
//     return "Cek sisa stok untuk $a $b";
// });

## Route Parameter Regular Expression
// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan user dengan id = $id";
// });

## Route Redirect
// Route::get('/hubungi-admin', function () {
//     return "<h1>Hubungi Admin</h1>";
// });
// Route::redirect('/contact-us', 'hubungi-admin');

## Route Group
// Route::prefix('/admin')->group(function () {
//     Route::get('/it', function () {
//         return "<h1>Daftar Karyawan IT</h1>";
//     });
//     Route::get('/hrd', function () {
//         return "<h1>Daftar Karyawan HRD</h1>";
//     });
//     Route::get('/marketing', function () {
//         return "<h1>Daftar Karyawan Marketing</h1>";
//     });
// });


## Cara Melihat List Route
// buka terminal, lalu ketik :
// php artisan route:list

## Agar penjelasan error tidak muncul
// buka file ".env", lalu pada
// "APP_DEBUG=" ketik "false"

// Untuk Melihat error saat APP_DEBUG=false lihat 
// pada folder storage/logs/laravel.blog


## Pencarian Debugging Menggunakan var_dump()
// Route::get('/hello', function () {
//     // $hello = 'Hello World';
//     // var_dump($hello);
//     ## agar hasil "return $hello" tidak ikut muncul
//     // die();
//     ## alternatif penggunaan var_dump dan die()
//     // dd($hello);
//     $hello = ['Hello World', 2 => ['Hello Ciledug','Hello Cibinong']];
//     //# dump();
//     // dump($hello);
//     //# print_r();
//     echo '<pre>';
//     print_r($hello);
//     echo '</pre>';
//     die();
//     return $hello;

// });

### VIEWS



// Route::get('/karyawan', function () {
//     return view ('karyawan');
// });

// ## Jika view terdapat dalam folder => return view (nama folder . nama view);
// Route::get('/karyawan', function () {
//     return view ('data.karyawan');
// }); 

// Route::get('/seminars', 'SeminarController@index')->name('seminars.index');
// Route::get('/seminars/create', 'SeminarController@create')->name('seminars.create');
// Route::post('/seminars', 'SeminarController@store')->name('seminars.store');
// Route::get('/seminars/{seminar}', 'SeminarController@show')->name('seminars.show');
// Route::get('/seminars/{seminar}/edit', 'SeminarController@edit')->name('seminars.edit');
// Route::patch('/seminars/{seminar}', 'SeminarController@update')->name('seminars.update');
// Route::delete('/seminars/{seminar}', 'SeminarController@destroy')->name('seminars.destroy');


Route::get('/', function () {
    return view ('drone.index');
}); 

Route::get('/home', function () {
    return view ('drone.index');
}); 

Route::get('/about', function () {
    return view ('drone.about');
}); 

Route::get('/contact', function () {
    return view ('drone.contact');
}); 