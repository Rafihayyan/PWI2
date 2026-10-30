<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SapaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'  => 'Sendy Prayogo',
        'kelas' => 'TSM-00',
        'nim'   => '0123456789',
    ]);
});

Route::view('/contact', 'pages.contact');

// Satu controller dapat memiliki beberapa method
Route::get('/product', [ProductController::class, 'getProduct']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);

Route::get('/sapa', [SapaController::class, 'index']);

Route::get('/latihan', function () {
    $matakuliah = ['Pemrograman Web', 'Basis Data', 'UI/UX'];
    return view('pages.latihan', ['matakuliah' => $matakuliah]);
});

