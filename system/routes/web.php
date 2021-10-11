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
});

Route::get('template', function () {
    return view('admin.template');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('admin/profile', function () {
    return view('admin.profil.index');
});


Route::get('admin/produk', function () {
    return view('admin.produk.index');
});


Route::get('admin/beranda', function () {
    return view('admin.beranda');
});

Route::get('admin/kategori', function () {
    return view('admin.kategori.index');
});

Route::get('/brand', function () {
    return view('brand');
});

Route::get('/shoes', function () {
    return view('shoes');
});

Route::get('/masuk', function () {
    return view('masuk');
});


Route::get('/search', function () {
    return view('search');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/kategori', function () {
    return view('kategori');
});
Route::get('/detail', function () {
    return view('detail');
});
