<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\HomeCon;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GolonganConController;
use App\Http\Controllers\GajiCon;
use App\Http\Controllers\LemburCon;
use App\Http\Controllers\AkuCon;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('home', 'App\Http\Controllers\HomeCon@index');
Route::get('/home', [HomeCon::class, 'index']); // Home
Route::get('/aku', [AkuCon::class, 'index']);

// Route::get('pegawai', 'App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai', [PegawaiController::class, 'index']); // Home.
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']); // Manambahkan data.
Route::post('/pegawai/storetambah','App\Http\Controllers\PegawaiController@store'); // Masukkan data ke database.
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']); // Mengedit data.
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@storeupdate'); // Mengedit data dari database.
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus'); // Hapus data.
 

// Route::get('golongan', 'App\Http\Controllers\GolonganConController@index');
Route::get('/golongan', [GolonganConController::class, 'index']); // Home.
Route::get('/golongan/tambah', [GolonganConController::class, 'tambah']); // Manambahkan data.
Route::post('/golongan/storetambah','App\Http\Controllers\GolonganConController@store'); // Masukkan data ke database.
Route::get('/golongan/edit/{id}', [GolonganConController::class, 'edit']); // Mengedit data.
Route::post('/golongan/update','App\Http\Controllers\GolonganConController@storeupdate'); // Mengedit data dari database.
Route::get('/golongan/hapus/{id}','App\Http\Controllers\GolonganConController@hapus'); // Hapus data.


// Route::get('gaji', 'App\Http\Controllers\GajiCon@index');
Route::get('/gaji', [GajiCon::class, 'index']);
Route::get('/gaji/tambah', [GajiCon::class, 'tambah']);
Route::post('/gaji/storetambah','App\Http\Controllers\GajiCon@store');
Route::get('/gaji/edit/{id}', [GajiCon::class, 'edit']); // Mengedit data.
Route::post('/gaji/update','App\Http\Controllers\GajiCon@storeupdate'); // Mengedit data dari database.
Route::get('/gaji/hapus/{id}','App\Http\Controllers\GajiCon@hapus'); // Hapus data.


// Route::get('lembur', 'App\Http\Controllers\LemburCon@index');
Route::get('/lembur', [LemburCon::class, 'index']);
Route::get('/lembur/tambah', [LemburCon::class, 'tambah']);
Route::post('/lembur/storetambah','App\Http\Controllers\LemburCon@store');
Route::get('/lembur/edit/{id}', [LemburCon::class, 'edit']); // Mengedit data.
Route::post('/lembur/update','App\Http\Controllers\LemburCon@storeupdate'); // Mengedit data dari database.
Route::get('/lembur/hapus/{id}','App\Http\Controllers\LemburCon@hapus'); // Hapus data.