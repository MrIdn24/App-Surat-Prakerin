<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SuratController;

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
Route::get('/home/datasiswa', function () {
    return view('admin.data-sekolah.datasiswa');
})->middleware('checkRole:admin');
Route::get('/home/datapetugas', function () {
    return view('admin.data-sekolah.datapetugas');
})->middleware('checkRole:admin');
Route::get('/home/datakelas', function () {
    return view('admin.data-sekolah.datakelas');
})->middleware('checkRole:admin,kepsek');

//datasiswa
Route::get('/home/datasiswa',[SiswaController::class, 'datasiswa'])->name('admin.data-sekolah.datasiswa');
Route::get('/home/tambahsiswa',[SiswaController::class, 'tambahsiswa'])->name('admin.data-sekolah.tambahsiswa');
Route::post('/home/storesiswa',[SiswaController::class, 'storesiswa'])->name('admin.data-sekolah.storesiswa');
Route::get('/home/editsiswa/{id}',[SiswaController::class, 'editsiswa'])->name('admin.data-sekolah.editsiswa');
Route::put('/home/updatesiswa/{id}',[SiswaController::class, 'updatesiswa'])->name('admin.data-sekolah.updatesiswa');
Route::delete('/home/hapussiswa/{id}',[SiswaController::class, 'hapussiswa'])->name('admin.data-sekolah.hapussiswa');

//datapetugas
Route::get('/home/datapetugas',[PetugasController::class, 'datapetugas'])->name('admin.data-sekolah.datapetugas');
Route::get('/home/tambahpetugas',[PetugasController::class, 'tambahpetugas'])->name('admin.data-sekolah.tambahpetugas');
Route::post('/home/storepetugas',[PetugasController::class, 'storepetugas'])->name('admin.data-sekolah.storepetugas');
Route::get('/home/editpetugas/{id}',[PetugasController::class, 'editpetugas'])->name('admin.data-sekolah.editpetugas');
Route::put('/home/updatepetugas/{id}',[PetugasController::class, 'updatepetugas'])->name('admin.data-sekolah.updatepetugas');
Route::delete('/home/hapuspetugas/{id}',[PetugasController::class, 'hapuspetugas'])->name('admin.data-sekolah.hapuspetugas');

//datakelas
Route::get('/home/datakelas',[KelasController::class, 'datakelas'])->name('admin.data-sekolah.datakelas');
Route::get('/home/tambahkelas',[KelasController::class, 'tambahkelas'])->name('admin.data-sekolah.tambahkelas');
Route::post('/home/store',[KelasController::class, 'store'])->name('admin.data-sekolah.store');
Route::get('/home/editkelas/{id}',[KelasController::class, 'editkelas'])->name('admin.data-sekolah.editkelas');
Route::put('/home/update/{id}',[KelasController::class, 'update'])->name('admin.data-sekolah.update');
Route::delete('/home/hapuskelas/{id}',[KelasController::class, 'hapuskelas'])->name('admin.data-sekolah.hapuskelas');

// Data Prakeirin
Route::get('/home/datasurat', function () {
    return view('admin.data-prakerin.datasurat');
})->middleware('checkRole:admin,kepsek,siswa,tu,hubin,kaprog');
Route::get('/home/list-pengajuan', function () {
    return view('admin.data-prakerin.pengajuan');
})->middleware('checkRole:admin,kepsek,siswa,tu,hubin,kaprog');
Route::get('/home/rekap-laporan', function () {
    return view('admin.data-prakerin.rekap-laporan');
})->middleware('checkRole:admin,kepsek,siswa,tu,hubin,kaprog');

//datasurat
Route::get('/home/datasurat',[SuratController::class, 'datasurat'])->name('admin.data-prakerin.datasurat');
Route::get('/home/tambahsurat',[SuratController::class, 'tambahsurat'])->name('admin.data-prakerin.tambahsurat');
Route::post('/home/storesurat',[SuratController::class, 'storesurat'])->name('admin.data-prakerin.storesurat');
Route::get('/home/editsurat/{id}',[SuratController::class, 'editsurat'])->name('admin.data-prakerin.editsurat');
Route::put('/home/updatesurat/{id}',[SuratController::class, 'updatesurat'])->name('admin.data-prakerin.updatesurat');
Route::delete('/home/hapussurat/{id}',[SuratController::class, 'hapussurat'])->name('admin.data-prakerin.hapussurat');

// Kelola Surat
Route::get('/home/disposisi-surat-masuk', function () {
    return view('admin.kelola-surat.disposisi');
})->middleware('checkRole:admin,kepsek,tu,hubin,kaprog');
Route::get('/home/ekspedisi-rekap-surat', function () {
    return view('admin.kelola-surat.ekspedisi-rekap');
})->middleware('checkRole:admin,kepsek,tu,hubin,kaprog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
