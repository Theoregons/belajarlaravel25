<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('coba', function () {
    return view('coba');
});
// Route::get('users/{id}', function ($id) {});
// Route::post('users/{id}', function ($id) {});
// Route::put('users/{id}', function ($id) {});
// Route::delete('users/{id}', function ($id) {});

Route::get('hello', function () {
    return 'Ini Laravel Saya ';
});
Route::get('tampil/{nilai}', function ($nilai) {
    return 'nilai Saya adalah ' . $nilai;
});
Route::get('tambah/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil penjumlahan adalah '. $nilai1 + $nilai2;
});
Route::get('kurang/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil pengurangan adalah '. $nilai1 - $nilai2;
});
Route::get('kali/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil perkalian adalah '. $nilai1 * $nilai2;
});
Route::get('bagi/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil pembagian adalah '. $nilai1 / $nilai2;
});

Route::get('tabel', function () {
    $barang = ['meja', 'pensil', 'bolpoin', 'lampu', 'kursi'];

    // return view('table', ['data' => $data, 'barang' => $barang2]);
    return view('table', compact('barang'));
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);
// Route::get('showsiswa', [SiswaController::class, 'show']);

Route::resource('siswa', SiswaController::class);
