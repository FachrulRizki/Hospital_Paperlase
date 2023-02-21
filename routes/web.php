<?php

use App\Models\RegistrasiPasien;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RegistrasiPasienController;
use App\Http\Controllers\PemeriksaanPasienController;

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
    return view('admin/home', [
        "title" => "Home"
    ]);
})->middleware('auth');

Route::get('/login', function () {
    return view('login');
});

Route::get('/dokter/dokterpp', function () {
    return view('dokter.dokterpp', [
        "title" => "Dokter Periksa"
    ]);
});

Route::get('/login',[AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login',[AuthController::class, 'authenticating']);

Route::get('/logout',[AuthController::class, 'logout'])->middleware('auth');

Route::get('/pasien',[PasienController::class, 'index'])->middleware('auth');
Route::get('/pasien-add',[PasienController::class, 'create'])->middleware(['auth','must-admin']);
Route::post('/pasien',[PasienController::class, 'store']);
Route::get('/pasien-edit/{no_rm}',[PasienController::class, 'edit'])->middleware(['auth','must-admin']);
Route::put('/pasien/{no_rm}',[PasienController::class, 'update']);
Route::get('/pasien-delete/{no_rm}',[PasienController::class, 'delete'])->middleware(['auth','must-admin']);
Route::delete('/pasien-destroy/{no_rm}',[PasienController::class, 'destroy']);

Route::get('/poli',[PoliController::class, 'index'])->middleware('auth');
Route::get('/poli-add',[PoliController::class, 'create'])->middleware(['auth','must-admin']);
Route::post('/poli',[PoliController::class, 'store']);
Route::get('/poli-edit/{id_poli}',[PoliController::class, 'edit'])->middleware(['auth','must-admin']);
Route::put('/poli/{id_poli}',[PoliController::class, 'update']);
Route::get('/poli-delete/{id_poli}',[PoliController::class, 'delete'])->middleware(['auth','must-admin']);
Route::delete('/poli-destroy/{id_poli}',[PoliController::class, 'destroy']);

Route::get('/registrasi_pasien',[RegistrasiPasienController::class, 'index'])->middleware('auth');
Route::get('/registp-add',[RegistrasiPasienController::class, 'create'])->middleware(['auth','must-admin']);
Route::post('/registrasi_pasien',[RegistrasiPasienController::class, 'store']);
Route::get('/registp-edit/{no_registrasi}',[RegistrasiPasienController::class, 'edit'])->middleware(['auth','must-admin']);
Route::put('/registrasi_pasien/{no_registrasi}',[RegistrasiPasienController::class, 'update']);
Route::get('/registp-delete/{no_registrasi}',[RegistrasiPasienController::class, 'delete'])->middleware(['auth','must-admin']);
Route::delete('/registp-destroy/{no_registrasi}',[RegistrasiPasienController::class, 'destroy']);

Route::get('/dokter',[DokterController::class, 'index'])->middleware('auth');
Route::get('/dokter-add',[DokterController::class, 'create'])->middleware(['auth','must-admin']);
Route::post('/dokter',[DokterController::class, 'store']);
Route::get('/dokter-edit/{kd_dokter}',[DokterController::class, 'edit'])->middleware(['auth','must-admin']);
Route::put('/dokter/{kd_dokter}',[DokterController::class, 'update']);
Route::get('/dokter-delete/{kd_dokter}',[DokterController::class, 'delete'])->middleware(['auth','must-admin']);
Route::delete('/dokter-destroy/{kd_dokter}',[DokterController::class, 'destroy']);

Route::get('/pemeriksaan_pasien',[PemeriksaanPasienController::class, 'index']);
Route::get('/periksap-add',[PemeriksaanPasienController::class, 'create']);
Route::post('/pemeriksaan_pasien',[PemeriksaanPasienController::class, 'store']);