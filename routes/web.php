<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin;
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
        // Route::resource('admin', Admin::class);
        Route::controller(Admin::class)->group(function(){
            Route::get('admin', 'index')->name('admin');
            
        });
    });
});
