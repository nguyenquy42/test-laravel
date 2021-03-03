<?php

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

Route::get('/', function () {
    $products = [
        'category' => 'Công nghệ.',
        'title' => 'Sách củ nhất.',
        'intro' => 'sản phẩn không như hình, ngu mua rán chịu.',
        'price' => '5.000.'
    ];

    $details = [
        'title' => 'Lý giải nguyên nhân CONAN thông minh, minh thì không(ngu á).',
        'intro' => 'Hướng dẫn cách có người yêu, một phát ăn ngay và luôn, không tin thì thôi. NEXT..',
        'author' => 'Minh Quys',
        'date' => '69-96-1969'
    ];
    return view('pages/index', [
        'product' => $products,
        'detail' => $details
    ]);
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
