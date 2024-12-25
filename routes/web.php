<?php

use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use app\Http\Controllers\home;
use App\Http\Controllers\peminjamController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {return view('welcome');})->name('welcome');

Route::group(['middleware' => 'role:admin'], function () {
    Route::resource('dashboard-admin', AdminController::class);
    Route::resource('dashboard-peminjaman', peminjamController::class);
    // Route::get('peminjaman/create/{id}', [peminjamController::class, 'create'])->name('peminjaman.create');
});

Route::group(['middleware' => 'role:pelanggan'], function () {
    Route::resource('dashboard-pelanggan', PelangganController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
