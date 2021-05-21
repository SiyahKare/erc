<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('anasayfa'); });
Route::get('/anasayfa', function () { return view('anasayfa'); });
Route::get('/hakkimizda', function () { return view('hakkimizda'); });

Route::get('/urunler-signia', function () { return view('urunler-signia'); });
Route::get('/urunler-styletto', function () { return view('urunler-styletto'); });
Route::get('/urunler-motiongox', function () { return view('urunler-motiongox'); });
Route::get('/urunler-purecharge', function () { return view('urunler-purecharge'); });
Route::get('/urunler-pure312x', function () { return view('urunler-pure312x'); });
Route::get('/urunler-cros', function () { return view('urunler-cros'); });
Route::get('/urunler-insioiic', function () { return view('urunler-insioiic'); });
Route::get('/urunler-insioitt', function () { return view('urunler-insioitt'); });
Route::get('/urunler-signiasilk', function () { return view('urunler-signiasilk'); });
Route::get('/urunler-signiaassistans', function () { return view('urunler-signiaassistans'); });

Route::get('/urunler-widex', function () { return view('urunler-widex'); });
Route::get('/urunler-widex-evoke', function () { return view('urunler-widex-evoke'); });
Route::get('/urunler-widex-beyondz', function () { return view('urunler-widex-beyondz'); });
Route::get('/urunler-widex-unique', function () { return view('urunler-widex-unique'); });

Route::get('/urunler-temizlik', function () { return view('urunler-temizlik'); });
Route::get('/urunler-piller', function () { return view('urunler-piller'); });

Route::get('/iletisim', function () { return view('contact'); });

Route::get('/subeler-izmit', function () { return view('subeler-izmit'); });
Route::get('/subeler-izmit-plus', function () { return view('subeler-plus'); });
Route::get('/subeler-derince', function () { return view('subeler-derince'); });
Route::get('/subeler-sakarya', function () { return view('subeler-sakarya'); });

Route::get('/erc-tv', function () { return view('erc-tv'); });


















