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

// Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('login');

// Route::middleware('auth')->group(function (){
//     Route::get('/', [HomeController::class, 'index'])->name('home');
//     Route::get('/logout', [LoginController::class, 'logout'])->name('home');
// });

// Resgister User.
Route::get('/register', [RegisterController::class, 'getRegister']);



// Admin
Route::get('/admin/home', function () {
    return view('admin/home');
});

Route::get('/admin/createblog', function () {
    return view('admin/createblog');
});

Route::post('/admin/createblog', [BlogsController::class, 'addData']);
Route::get('/admin/delete/{id}', [BlogsController::class, 'delete']);

//  Trang View
Route::get('/', [HomeController::class, 'index']);

Route::get('/bai-viet', function () {
    return view('pages/detailblog');
});

Route::get('/info', function () {
    return view('info');
});