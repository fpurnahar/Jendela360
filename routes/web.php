<?php

use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductContoller;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| Web Routes Tambah Product
|--------------------------------------------------------------------------
|
*/

Route::get('/addproduct', function () {
    return view('page.product.addproduct');
})->middleware('auth');

Route::get('/detailproduct', [ProductContoller::class, 'index'])->middleware('auth');

Route::post('/create_product', [ProductContoller::class, 'create']);

Route::get('/edit_product{id}', [ProductContoller::class, 'edit'])->middleware('auth');

Route::patch('/update_product{id}', [ProductContoller::class, 'update'])->middleware('auth');

Route::delete('/destroy_product/{id}', [ProductContoller::class, 'destroy']);


/*
|--------------------------------------------------------------------------
| Web Routes Tambah Penjualan
|--------------------------------------------------------------------------
|
*/

Route::get('/addpenjualan', function () {
    return view('page.penjualan.addpenjualan');
})->middleware('auth');

Route::get('/detailpenjualan', [PenjualanController::class, 'index'])->middleware('auth');

Route::post('/create_penjualan', [PenjualanController::class, 'create']);

Route::get('/edit_penjualan{id}', [PenjualanController::class, 'edit'])->middleware('auth');

Route::patch('/update_penjualan{id}', [PenjualanController::class, 'update'])->middleware('auth');

Route::delete('/destroy_penjualan/{id}', [PenjualanController::class, 'destroy']);

// Route::get('/sendmail/{id}', [PenjualanController::class, 'sendMail']);
