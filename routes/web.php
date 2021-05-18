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
    return view('welcome');
});

Route::get('/anasayfa', function () {
    return view('anasayfa');
});

Route::get('/urunler-signia', function () {
    return view('urunler');
});

Route::get('/urunler-styletto', function () {
    return view('urunler-styletto');
});

Route::get('/urunler-motiongox', function () {
    return view('urunler-motiongox');
});

Route::get('/urunler-purecharge', function () {
    return view('urunler-purecharge');
});

Route::get('/urunler-pure312x', function () {
    return view('urunler-pure312x');
});

Route::get('/urunler-cros', function () {
    return view('urunler-cros');
});

Route::get('/urunler-insioiic', function () {
    return view('urunler-insioiic');
});

Route::get('/urunler-insioitt', function () {
    return view('urunler-insioitt');
});

Route::get('/urunler-signiasilk', function () {
    return view('urunler-signiasilk');
});

Route::get('/urunler-signiaassistans', function () {
    return view('urunler-signiaassistans');
});

