<?php

use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QnaController;

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

Route::middleware("auth")->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'authenticate'])->name('login');
Route::get('/qna', [QnaController::class, 'index'])->name('qna');

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/user-details', [DashboardController::class, 'userDetails'])->name('user-details');
    Route::get('/user-details/create', [DashboardController::class, 'userCreate'])->name('user-details.create');
    Route::post('/user-details/store', [DashboardController::class, 'userStore'])->name('user-details.store');
    Route::delete('/user-details/delete/{id}', [DashboardController::class, 'userDelete'])->name('user-details.delete');
    Route::get('/user-details/edit/{id}', [DashboardController::class, 'userEdit'])->name('user-details.edit');
    Route::put('/user-details/update/{id}', [DashboardController::class, 'userUpdate'])->name('user-details.update');
});

Route::middleware(['auth', 'user-access:admin|karyawan'])->group(function () {
    Route::get('/adminDashboard', [DashboardController::class, 'index'])->name('adminDashboard');

    Route::prefix('produk')->group(function () {
        Route::post('/store', [DashboardController::class, 'store'])->name('produk.store');
        Route::get('/edit/{id}', [DashboardController::class, 'edit'])->name('produk.edit');
        Route::delete('/delete/{id}', [DashboardController::class, 'delete'])->name('produk.delete');
        Route::put('/update/{id}', [DashboardController::class, 'update'])->name('produk.update');
    });

    Route::prefix('produk-kategori')->group(function () {
        Route::get('/create', [DashboardController::class, 'createKategori'])->name('produk-kategori.create');
        Route::post('/store', [DashboardController::class, 'storeKategori'])->name('produk-kategori.store');
        Route::get('/edit/{id}', [DashboardController::class, 'editKategori'])->name('produk-kategori.edit');
        Route::delete('/delete/{id}', [DashboardController::class, 'deleteKategori'])->name('produk-kategori.delete');
        Route::put('/update/{id}', [DashboardController::class, 'updateKategori'])->name('produk-kategori.update');
    });

    Route::prefix('qna')->group(function () {
        Route::get('/create', [QnaController::class, 'create'])->name('qna.create');
        Route::post('/store', [QnaController::class, 'store'])->name('qna.store');
        Route::get('/edit/{id}', [QnaController::class, 'edit'])->name('qna.edit');
        Route::put('/update/{id}', [QnaController::class, 'update'])->name('qna.update');
        Route::delete('/delete/{id}', [QnaController::class, 'delete'])->name('qna.delete');
    });
});

Route::middleware(['auth', 'user-access:manager|admin'])->group(function () {
    Route::get('/manager-dashboard', [ChartController::class, 'index'])->name('manager-dashboard');
});

Route::get('/welcome', function () {
    return view('welcome');
});
