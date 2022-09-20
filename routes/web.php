<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    KelasController,
    MapelController,
    GuruController,
    SiswaController
};


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
    return view('home');
});

Route::resource('/kelas', KelasController::class);
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);
Route::get('/kelas/hapus/{id}', [KelasController::class, 'destroy']);

Route::resource('/mapel', MapelController::class);
Route::get('/mapel/{id}/edit', [MapelController::class, 'edit']);
Route::get('/mapel/{id}/hapus', [MapelController::class, 'destroy']);

Route::resource('/guru', GuruController::class);
Route::get('/guru/{id}/edit', [GuruController::class, 'edit']);
Route::get('/guru/{id}/hapus', [GuruController::class, 'destroy']);

Route::resource('/siswa', SiswaController::class);
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::get('/siswa/{id}/hapus', [SiswaController::class, 'destroy']);