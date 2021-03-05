<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AdminAuth;

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
Route::get('/', [HomeController::class, 'index']);


Route::get('/bai-viet', function () {
    return view('pages/detailblog');
});

Route::get('/info', function () {
    return view('info');
});

// Route::get('/admin', function () {
//     return view('admin/login');
// });

Route::get('/admin/home', function () {
    return view('admin/home');
});


Route::get('/admin/createblog', function () {
    return view('admin/createblog');
});

Route::post('/admin/createblog', [BlogsController::class, 'addData']);
Route::get('/admin/delete/{id}', [BlogsController::class, 'delete']);

// Login
Route::get('/admin/listblog', [BlogsController::class, 'show']);

Route::post("login", [AdminAuth::class, 'adminLogin']);

Route::get('/admin', [AdminAuth::class, 'check']);

// Logout
Route::get('/logout', [AdminAuth::class, 'logout']);
