<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AuthController;




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


Route::get('/',[AuthController::class,'show']);  

Route::post('user/auth',[AuthController::class,'auth']);
Route::get('user/logout',[AuthController::class,'logout']);


Route::group(['middleware' => ['auth','level:admin']],function(){
    Route::get('dashboard',function(){
        return view ('dashboard');
    })->name('dashboard');
});

Route::group(['middleware' => ['auth','level:member']],function(){
    Route::get('beranda',function(){
        return view ('beranda');
    })->name('beranda');
});
Route::get('beranda',[BarangController::class,'show']);
Route::get('/admin', [AdminController::class,'show']);
Route::get('admin/add', [AdminController::class,'add']);
Route::post('admin/create', [AdminController::class,'create']);
Route::get('admin/hapus/{id}', [AdminController::class,'hapus']);
Route::get('admin/edit/{id}', [AdminController::class,'edit']);
Route::post('admin/update/{id}', [AdminController::class,'update']);

Route::get('/produk', [ProdukController::class,'show']);
Route::get('produk/add', [ProdukController::class,'add']);
Route::post('produk/create', [ProdukController::class,'create']);
Route::get('produk/hapus/{id}', [ProdukController::class,'hapus']);
Route::get('produk/edit/{id}', [ProdukController::class,'edit']);
Route::post('produk/update/{id}', [ProdukController::class,'update']);


// Route::get('/', [BarangController::class,'show']);
Route::get('produk/detail/{id}', [BarangController::class,'detail']);



