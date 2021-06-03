<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

//Data Sekolah 
Route::get('/home/data-siswa', function () {
    return view('admin.data-sekolah.data-siswa');
})->middleware('checkRole:admin');
Route::get('/home/data-petugas', function () {
    return view('admin.data-sekolah.data-petugas');
})->middleware('checkRole:admin');
Route::get('/home/data-kelas', function () {
    return view('admin.data-sekolah.data-kelas');
})->middleware('checkRole:admin,kepsek');

// Data Prakeirin
Route::get('/home/list-pengajuan', function () {
    return view('admin.data-prakerin.pengajuan');
})->middleware('checkRole:admin,kepsek,siswa,tu,hubin,kaprog');
Route::get('/home/rekap-laporan', function () {
    return view('admin.data-prakerin.rekap-laporan');
})->middleware('checkRole:admin,kepsek,siswa,tu,hubin,kaprog');

// Kelola Surat
Route::get('/home/disposisi-surat-masuk', function () {
    return view('admin.kelola-surat.disposisi');
})->middleware('checkRole:admin,kepsek,tu,hubin,kaprog');
Route::get('/home/ekspedisi-rekap-surat', function () {
    return view('admin.kelola-surat.ekspedisi-rekap');
})->middleware('checkRole:admin,kepsek,tu,hubin,kaprog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
