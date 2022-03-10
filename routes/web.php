<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KelasController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\NilaiController;

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

Route::get('/kelas', [KelasController::class, 'index']);
Route::post('/addKelas', [KelasController::class, 'add'])->name('addKelas');
Route::get('/editKelas/{kelas:id}', [KelasController::class, 'edit'])->name('editKelas');
Route::patch('/updateKelas/{kelas:id}', [KelasController::class, 'update'])->name('updateKelas');
Route::delete('/delete/{kelas:id}', [KelasController::class, 'destroy'])->name('delete');


Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/addMahasiswa', [MahasiswaController::class, 'add'])->name('addMahasiswa');
Route::get('/editMahasiswa/{mahasiswa:id}', [MahasiswaController::class, 'edit'])->name('editMahasiswa');
Route::patch('/updateMahasiswa/{mahasiswa:id}', [MahasiswaController::class, 'update'])->name('updateMahasiswa');
Route::delete('/deleteMahasiswa/{mahasiswa:id}', [MahasiswaController::class, 'destroy'])->name('deleteMahasiswa');

Route::get('/dosen', [DosenController::class, 'index']);
Route::post('/addDosen', [DosenController::class, 'add'])->name('addDosen');
Route::get('/editDosen/{dosen:id}', [DosenController::class, 'edit'])->name('editDosen');
Route::patch('/updateDosen/{dosen:id}', [DosenController::class, 'update'])->name('updateDosen');
Route::delete('/deleteDosen/{dosen:id}', [DosenController::class, 'destroy'])->name('deleteDosen');

Route::get('/matkul', [MatakuliahController::class, 'index']);
Route::post('/addMatkul', [MatakuliahController::class, 'add'])->name('addMatkul');
Route::get('/editMatkul/{matakuliah:id}', [MatakuliahController::class, 'edit'])->name('editMatkul');
Route::patch('/updateMatkul/{matakuliah:id}', [MatakuliahController::class, 'update'])->name('updateMatkul');
Route::delete('/deleteMatkul/{matakuliah:id}', [MatakuliahController::class, 'destroy'])->name('deleteMatkul');


Route::get('/nilai', [NilaiController::class, 'index']);
Route::post('/addNilai', [NilaiController::class, 'add'])->name('addNilai');
Route::get('/editNilai/{nilai:id}', [NilaiController::class, 'edit'])->name('editNilai');
Route::patch('/updateNilai/{nilai:id}', [NilaiController::class, 'update'])->name('updateNilai');
Route::delete('/deleteNilai/{nilai:id}', [NilaiController::class, 'destroy'])->name('deleteNilai');