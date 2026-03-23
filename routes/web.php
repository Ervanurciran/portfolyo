<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolyoController;
use App\Http\Controllers\AdminController;

// Public sayfalar
Route::get('/', [PortfolyoController::class, 'anasayfa'])->name('anasayfa');
Route::get('/projeler', [PortfolyoController::class, 'projeler'])->name('projeler');
Route::get('/iletisim', [PortfolyoController::class, 'iletisim'])->name('iletisim');
Route::post('/iletisim', [PortfolyoController::class, 'iletisimGonder'])->name('iletisim.gonder');

// Admin paneli
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index'); // route('admin.index')
    Route::get('/ekle', [AdminController::class, 'create'])->name('create');
    Route::post('/ekle', [AdminController::class, 'store'])->name('store');
    Route::get('/duzenle/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::put('/duzenle/{id}', [AdminController::class, 'update'])->name('update');
    Route::delete('/sil/{id}', [AdminController::class, 'destroy'])->name('destroy');
    
    
    // Mesajlar Bölümü
    Route::get('/mesajlar', [AdminController::class, 'mesajlar'])->name('mesajlar'); // route('admin.mesajlar')
    Route::get('/mesajlar/{id}', [AdminController::class, 'mesajOku'])->name('mesajOku');
    Route::delete('/mesajlar/{id}', [AdminController::class, 'mesajSil'])->name('mesajSil');
});

require __DIR__.'/auth.php';