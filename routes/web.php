<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KebakaranController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TitikPanasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "webNow create something great!
|
*/


Route::get('/test', function () {
    return view('test.index');
});

Route::prefix('admin')->group(function() {
    Route::get("/", [DashboardController::class, 'index'])->name('index.dashboard');

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

});


Route::prefix('admin')->name('kebakaran.')->group(function () {
    Route::get('/kebakaran', [KebakaranController::class, 'index'])->name('index');
    Route::get('/kebakaran/create', [KebakaranController::class, 'create'])->name('create');
    Route::post('/kebakaran/store', [KebakaranController::class, 'store'])->name('store');
    Route::get('/kebakaran/edit/{id}', [KebakaranController::class, 'edit'])->name('edit');
    Route::put('/kebakaran/update/{id}', [KebakaranController::class, 'update'])->name('update');
    Route::delete('/kebakaran/destroy/{id}', [KebakaranController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin')->name('berita.')->group(function () {
Route::get('/berita', [BeritaController::class, 'index'])->name('index');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('create');
Route::post('/berita/store', [BeritaController::class, 'store'])->name('store');
Route::get('/berita/edit/{id}', [BeritaController::class, 'edit'])->name('edit');
Route::put('/berita/update/{id}', [BeritaController::class, 'update'])->name('update');
Route::delete('/berita/destroy/{id}', [BeritaController::class, 'destroy'])->name('destroy');
});

Route::name('user.')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/pemetaan', [HomeController::class, 'pemetaan'])->name('pemetaan');
    Route::get('/kebakaran', [HomeController::class, 'kebakaran'])->name('kebakaran');
    Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
    Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');

});

Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login/action', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout');

