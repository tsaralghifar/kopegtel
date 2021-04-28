<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::middleware(['auth'])->group( function() {

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 // Pasang Baru
 Route::get('/pasang', [App\Http\Controllers\PasangController::class, 'index'])->name('pasang');
 Route::get('/pasang/pdf', [App\Http\Controllers\PasangController::class, 'createPDF'])->name('pasang.pdf');
 Route::get('/pasang/create', [App\Http\Controllers\PasangController::class, 'create'])->name('pasang.create');
 Route::post('/pasang/store', [App\Http\Controllers\PasangController::class, 'store'])->name('pasang.store');
 Route::get('/pasang/edit/{id}', [App\Http\Controllers\PasangController::class, 'edit'])->name('pasang.edit');
 Route::put('/pasang/update/{id}', [App\Http\Controllers\PasangController::class, 'update'])->name('pasang.update');
 Route::delete('/pasang/destroy/{id}', [App\Http\Controllers\PasangController::class, 'destroy'])->name('pasang.destroy');
 // Layanan
 Route::get('/layanan', [App\Http\Controllers\LayananController::class, 'index'])->name('layanan');
 Route::get('/layanan/pdf', [App\Http\Controllers\LayananController::class, 'createPDF'])->name('layanan.pdf');
 Route::get('/layanan/create', [App\Http\Controllers\LayananController::class, 'create'])->name('layanan.create');
 Route::post('/layanan/store', [App\Http\Controllers\LayananController::class, 'store'])->name('layanan.store');
 Route::get('/layanan/edit/{id}', [App\Http\Controllers\LayananController::class, 'edit'])->name('layanan.edit');
 Route::put('/layanan/update/{id}', [App\Http\Controllers\LayananController::class, 'update'])->name('layanan.update');
 Route::delete('/layanan/destroy/{id}', [App\Http\Controllers\LayananController::class, 'destroy'])->name('layanan.destroy');
 // Teknisi
 Route::get('/teknisi', [App\Http\Controllers\TeknisiController::class, 'index'])->name('teknisi');
 Route::get('/teknisi/pdf', [App\Http\Controllers\TeknisiController::class, 'createPDF'])->name('teknisi.pdf');
 Route::get('/teknisi/create', [App\Http\Controllers\TeknisiController::class, 'create'])->name('teknisi.create');
 Route::post('/teknisi/store', [App\Http\Controllers\TeknisiController::class, 'store'])->name('teknisi.store');
 Route::get('/teknisi/edit/{id}', [App\Http\Controllers\TeknisiController::class, 'edit'])->name('teknisi.edit');
 Route::put('/teknisi/update/{id}', [App\Http\Controllers\TeknisiController::class, 'update'])->name('teknisi.update');
 Route::delete('/teknisi/destroy/{id}', [App\Http\Controllers\TeknisiController::class, 'destroy'])->name('teknisi.destroy');
});