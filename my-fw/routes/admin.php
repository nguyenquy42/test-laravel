<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');

Route::middleware('auth:admin')->group(function () {
  Route::get('/', [HomeController::class, 'index'])->name('dashboard');

  // show home admin.
  // blog.
  Route::get('/createblog', function () {
    return view('admin/createblog');
  });
  Route::get('/listblog', [BlogsController::class, 'show']);
  Route::post('/createblog', [BlogsController::class, 'addData']);
  Route::get('/delete/{id}', [BlogsController::class, 'delete']);
  Route::get('/edit/{id}', [BlogsController::class, 'edit']);
  Route::post('/update/{id}', [BlogsController::class, 'update']);
  Route::post('/status/{id}', [BlogsController::class, 'updateStatus']);

  // Users.
  Route::get('/users', [HomeController::class, 'show']);


});
