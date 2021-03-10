<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;

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

// Login User.
Route::get('/login', [LoginController::class, 'getLogin']);
Route::post('/postlogin', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

// Resgister User.
Route::get('/register', [RegisterController::class, 'getRegister']);
Route::post('/createregister', [RegisterController::class, 'create']);

//  Trang View
Route::get('/', [HomeController::class, 'index']);

Route::get('/bai-viet/{id}', [BlogsController::class, 'showdetail']);

Route::get('/san-pham/{id}', [BlogsController::class, 'showProduct']);

Route::get('/info', function () {
    return view('info');
});