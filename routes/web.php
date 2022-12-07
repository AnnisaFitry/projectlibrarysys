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
Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index-admin');

//Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.index-admin')->middleware('admin');

// Route::middleware(['pustakawan'])->group(function () {
//     Route::resource('perpusHome', AdminController::class);
//     Route::resource('pengajuan', PengajuanController::class);
//     Route::resource('peminjaman', ProfileController::class);
//     Route::resource('bukuku', BukukuController::class);
// });
// Route::middleware(['users'])->group(function () {
//     Route::resource('userHome', AdminController::class);
//     Route::resource('pemberitahuan', PemberitahuanController::class);
//     Route::resource('pinjaman', PinjamanController::class);
// });

Route::get('/pustakawan', [App\Http\Controllers\PerpusController::class, 'index'])->name('pustakawan.index');
Route::get('/pengikut', [App\Http\Controllers\PengikutController::class, 'index'])->name('pustakawan.pengikut');
Route::get('/peminjaman', [App\Http\Controllers\PeminjamanController::class, 'index'])->name('pustakawan.peminjaman');
Route::get('/bukuku', [App\Http\Controllers\BukukuController::class, 'index'])->name('pustakawan.bukuku');
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index');
Route::get('/pemberitahuan', [App\Http\Controllers\PemberitahuanController::class, 'index'])->name('users.notif');
Route::resource('pinjaman', PinjamanController::class);
Route::resource('pemberitahuan', PemberitahuanController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

