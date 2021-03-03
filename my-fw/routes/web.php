<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'show']);


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

Route::get('/admin/listblog', function () {
    return view('admin/listblog');
});
