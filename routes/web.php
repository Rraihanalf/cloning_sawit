<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\PetugasLab;
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

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/', [LoginController::class, 'index'])->name('login');

Route::controller(LoginController::class)->group(function(){
    Route::get('/', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('/logout', 'logout');
});

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cekUserLogin:1']], function(){
        Route::controller(Admin::class)->group(function(){
            Route::get('admin', 'index')->name('admin');
            Route::get('pegawai/admin', 'showpegawai');
            Route::get('pegawai/create', 'add_pegawai');
            Route::post('pegawai/create/store', 'store_pegawai');

            Route::get('laboratorium/admin', 'showlab');
            Route::get('laboratorium/create', 'add_lab');
            Route::post('laboratorium/create/store', 'store_laboratorium');

            Route::get('lapangan/admin', 'showlapangan');
            Route::get('lapangan/create', 'addlapangan');
            Route::post('lapangan/create/store', 'store_lapangan');

            Route::get('sampel/admin', 'showsampel');
            Route::get('sampel/create', 'add_sampel');
            Route::post('sampel/create/store', 'store_sampel');

            Route::get('user/admin', 'showuser');
            Route::get('user/create', 'add_user');
            Route::post('user/create/store', 'store_user');
        });
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function(){
        Route::controller(PetugasLab::class)->group(function(){
            Route::get('petugas', 'index')->name('petugas');
        });
    });

    Route::group(['middleware' => ['cekUserLogin:3']], function(){

    });

    Route::group(['middleware' => ['cekUserLogin:4']], function(){

    });

    Route::group(['middleware' => ['cekUserLogin:5']], function(){

    });
});
