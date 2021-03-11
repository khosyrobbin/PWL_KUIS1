<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



// Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::get('/services',[HomeController::class, 'services']);
Route::get('/barang',[HomeController::class, 'barang']);
Route::get('/pelanggan',[HomeController::class, 'pelanggan']);
Route::get('/pegawai',[HomeController::class, 'pegawai']);
Route::get('/supplier',[HomeController::class, 'supplier']);

