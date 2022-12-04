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

Route::get('/', function () {
    return view('index');
})->name('index');
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
