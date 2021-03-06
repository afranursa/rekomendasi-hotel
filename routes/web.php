<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', [HomeController::class, 'index']); 

Route::get('/login', [LoginController::class, 'loginIndex']);

Route::get('/dashboard', function () {
    return view('admin.dashboard'); 
});
Route::get('/datahotel', function () {
    return view('admin.tabel_hotel'); 
});
Route::get('/datarating', function () {
    return view('admin.tabel_rating'); 
});
Route::get('/datauser', function () {
    return view('admin.tabel_user'); 
});


Route::get('/user', function () {
    return view('user.master');
});
Route::get('/user/about', function () {
    return view('user.about');
});

