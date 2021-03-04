<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;

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

Route::get('/admin', function () {
    return view('admin/login');
});

Route::get('/admin/home', function () {
    return view('admin/home');
});

Route::get('/admin/listblog', [BlogsController::class, 'show']);

Route::get('/admin/insertblog', function () {
    return view('admin/insertblog');
});