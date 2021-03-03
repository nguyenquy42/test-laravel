<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;

class  ProductController extends Controller
{

  public function index()
  {
    $products = ProductModel::all();
    return view('/pages.index', [
      'products' => $products
    ]);
  }
}
