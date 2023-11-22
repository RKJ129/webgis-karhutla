<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\TitikPanasController;
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

Route::get("/", [DashboardController::class, 'index'])->name('index.dashboard');

Route::get('/test', function () {
    return view('test.index');
});


Route::get("/titik-panas", [TitikPanasController::class, 'index'])->name('index.titikpanas');
Route::get("/tambah-titik-panas", [TitikPanasController::class, 'create'])->name('create.titikpanas');
Route::post("/tambah-titik-panas", [TitikPanasController::class, 'store'])->name('store.titikpanas');
Route::get("/edit-titik-panas/{id}", [TitikPanasController::class, 'edit'])->name('edit.titikpanas');
Route::post("/edit-titik-panas/{id}", [TitikPanasController::class, 'update'])->name('update.titikpanas');
Route::delete("/edit-titik-panas/{id}", [TitikPanasController::class, 'destroy'])->name('delete.titikpanas');


Route::get("/kecamatan", [KecamatanController::class, 'index'])->name('index.kecamatan');
Route::get("/tambah-kecamatan", [KecamatanController::class, 'create'])->name('create.kecamatan');
Route::post("/tambah-kecamatan", [KecamatanController::class, 'store'])->name('store.kecamatan');
Route::get("/edit-kecamatan/{id}", [KecamatanController::class, 'edit'])->name('edit.kecamatan');
Route::post("/edit-kecamatan/{id}", [KecamatanController::class, 'update'])->name('update.kecamatan');
Route::delete("/hapus-kecamatan/{id}", [KecamatanController::class, 'destroy'])->name('delete.kecamatan');

Route::get("/kelurahan", [KelurahanController::class, 'index'])->name('index.kelurahan');
Route::get("/tambah-kelurahan", [KelurahanController::class, 'create'])->name('create.kelurahan');
Route::post("/tambah-kelurahan", [KelurahanController::class, 'store'])->name('store.kelurahan');
