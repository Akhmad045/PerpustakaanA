<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [AdminController::class,"index"]);
Route::get('basic-table',function(){
    return view('pages.tables.basic-table');
});

Route::get('kategori',[KategoriController::class,'index']);
Route::get('kategori/tambah',[KategoriController::class,'tambah']);
Route::post('kategori/tambah',[KategoriController::class,'tambah_kategori']);
Route::get('kategori/edit/{id}',[KategoriController::class,'edit']);
Route::post('kategori/edit/{id}',[KategoriController::class,'edit_kategori']);

Route::get('tambah/buku',[BukuController::class,'tambah']);
Route::post('tambah/buku',[BukuController::class,'tambah_buku']);


Route::get('login',[AuthController::class, 'login']);
Route::post('login',[AuthController::class, 'ceklogin']);