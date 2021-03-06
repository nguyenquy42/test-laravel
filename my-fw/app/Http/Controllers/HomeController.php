<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use App\Models\BlogsModel;

class  HomeController extends Controller
{

  public function index()
  {
    $products = ProductModel::all();
    $blogs = BlogsModel::where('status',1)->get();
    return view('/pages.index', [
      'products' => $products,
      'blogs' => $blogs
    ]);
  }
}