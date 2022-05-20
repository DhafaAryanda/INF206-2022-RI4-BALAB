<?php

use App\Http\Controllers\laborancontroller;
// use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\LoginPasiencontroller;
use App\Http\Controllers\pasiencontroller;
use App\Http\Controllers\doktercontroller;
use App\Http\Controllers\logoutController;
// use App\Http\Controllers\laborancontroller;
use Illuminate\Support\Facades\Route;
use App\Models\pasien;
use App\Models\Dokter;


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

Route::get('/dokter/login', [App\Http\Controllers\Logincontroller::class, 'index1'])->middleware('guest');
Route::post('/dokter/login', [App\Http\Controllers\Logincontroller::class, 'authenticate1']);


Route::get('/laboran/login', [App\Http\Controllers\Logincontroller::class, 'index2'])->middleware('guest');
Route::post('/laboran/login', [App\Http\Controllers\Logincontroller::class, 'authenticate2']);

Route::get('/laboran', [App\Http\Controllers\laborancontroller::class, 'index'])->middleware('auth');
Route::post('/laboran', [App\Http\Controllers\laborancontroller::class, 'store']);

// Route::get('/data/pasien', function () {
//     return view('input_data_laboran');
// });

Route::get('/input/penjelasan', function () {
    return view('input_penjelasan');///dokter
})->middleware('auth');

Route::get('/sisi/dokter', [App\Http\Controllers\DokterController::class, 'index'])->middleware('auth');

Route::post('/sisi/dokter', [App\Http\Controllers\DokterController::class, 'store']);//input data pasien


Route::get('/tentang/kami', function () {
    return view('tentang-kami');
})->middleware('auth');;

Route::get('/sisi/pasien', function () {
    return view('sisi_pasien');//output hasil laboran
})->middleware('auth');

Route::get('/login/pasien', [App\Http\Controllers\Logincontroller::class, 'index3']);
Route::post('/login/pasien', [App\Http\Controllers\Logincontroller::class, 'authenticate3']);

Route::get('/daftar/akun/pasien', [App\Http\Controllers\LoginPasienController::class, 'index'])->middleware('guest');
 Route::post('/daftar/akun/pasien', [App\Http\Controllers\LoginPasienController::class, 'store']);


Route::get('/sisi/laboran', function () {
    return view('sisi_laboran');//input hasil laboran
})->middleware('auth');

Route::get('/bantuan', function () {
    return view('bantuan');
})->middleware('auth');

// Route::get('/tambah', function () {
//     return view('Tambah_pasien');
// });

Route::get('/profil/dokter', [App\Http\Controllers\DokterController::class, 'indexProfil'])->middleware('auth');
Route::post('/profil/dokter', [App\Http\Controllers\DokterController::class, 'storeProfil']);

Route::get('/profil/laboran', [App\Http\Controllers\laborancontroller::class, 'indexProfil'])->middleware('auth');
Route::post('/profil/laboran', [App\Http\Controllers\laborancontroller::class, 'storeProfil']);

Route::get('/Home/laboran', function () {
    return view('HomeLaboran');
})->middleware('auth');

Route::get('/Home/dokter', function () {
    return view('HomeDokter');
})->middleware('auth');;

Route::get('/Bantuan/laboran', function () {
    return view('bantuan_laboran');
})->middleware('auth');

Route::get('/Bantuan/dokter', function () {
    return view('bantuan_dokter');
});

Route::get('/Tentang/laboran', function () {
    return view('tentang_laboran');
});

Route::get('/Home/pasien', function () {
    return view('HomePasien');
})->middleware('auth');

Route::get('/Profil/pasien', [App\Http\Controllers\pasienController::class, 'indexProfil'])->middleware('auth');;

Route::post('/Profil/pasien', [App\Http\Controllers\pasienController::class, 'storeProfil']);
Route::post('/logout', [App\Http\Controllers\logoutController::class, 'logout']);
