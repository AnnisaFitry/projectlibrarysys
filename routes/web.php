<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PerpusController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CariController;
use App\Http\Controllers\BukukuController;
use App\Http\Controllers\PemberitahuanController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengikutController;
use App\Http\Controllers\PinjamanController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/cari-perpus', [CariController::class, 'index'])->name('cari-perpus');
Route::get('/search', [CariController::class, 'search'])->name('search');
Route::get('/perkota', [CariController::class, 'perkota'])->name('perkota');
Route::get('/perpus/{id}', [CariController::class, 'show'])->name('perpus');
Route::get('/perpus/{id}/caribuku', [CariController::class, 'caribuku'])->name('caribuku');
Route::get('/perpus/{id}/carikat', [CariController::class, 'perkategori'])->name('carikat');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/sign-in', function () {
    return view('sign-in');
})->name('sign-in');
Route::get('/sign-up', function () {
    return view('sign-up');
})->name('sign-up');
Route::get('/forgot', function () {
    return view('forgot');
})->name('forgot');
Route::get('/daftar-perpus', function () {
    return view('daftar-perpus');
})->name('daftar-perpus');
Route::get('/perpus', function () {
    return view('perpus');
})->name('perpus');
Route::get('/buku', function () {
    return view('buku');
})->name('buku');
Route::get('/cari-perpus', function () {
    return view('cari-perpus');
})->name('cari-perpus');
Route::get('/dash', function () {
    return view('dash');
})->name('dash');
Route::get('/pinjaman', function () {
    return view('pinjaman');
})->name('pinjaman');
Route::get('/notif', function () {
    return view('notif');
})->name('notif');
Route::get('/pengikut', function () {
    return view('pengikut');
})->name('pengikut');
Route::get('/peminjaman', function () {
    return view('peminjaman');
})->name('peminjaman');
Route::get('/bukuku', function () {
    return view('bukuku');
})->name('bukuku');
Auth::routes();
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index-admin');

// Route::middleware(['pustakawan'])->group(function () {
    
//     Route::resource('pengajuan', PengajuanController::class);
//     Route::resource('peminjaman', ProfileController::class);
//     Route::resource('bukuku', BukukuController::class);
// });
// Route::middleware(['users'])->group(function () {
    
//     Route::resource('pemberitahuan', PemberitahuanController::class);
//     Route::resource('pinjaman', PinjamanController::class);
// });
Route::get('/pustakawan', [App\Http\Controllers\PerpusController::class, 'index'])->name('pustakawan.index-perpus');
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index-user');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
