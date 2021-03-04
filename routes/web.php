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

Route::get('/addproduct', function () {
    return view('page.product.addproduct');
});
Route::get('/detailproduct', function () {
    return view('page.product.detailproduct');
});


Route::get('/addpenjualan', function () {
    return view('page.penjualan.addpenjualan');
});
Route::get('/detailpenjualan', function () {
    return view('page.penjualan.detailpenjualan');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
