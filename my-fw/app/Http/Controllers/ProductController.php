<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class  ProductController extends Controller
{

  public function show()
  {
    $products = [
      'imgUrl' => 'assets/images/product/1.jpg',
      'category' => 'Công nghệ.',
      'title' => 'Sách củ nhất.',
      'intro' => 'sản phẩn không như hình, ngu mua rán chịu.',
      'price' => '5.000.'
    ];

    $details = [
      'imgUrl' => 'assets/images/product/2.jpg',
      'title' => 'Lý giải nguyên nhân CONAN thông minh, minh thì không(ngu á).',
      'intro' => 'Hướng dẫn cách có người yêu, một phát ăn ngay và luôn, không tin thì thôi. NEXT..',
      'author' => 'Minh Quys',
      'date' => '69-96-1969'
    ];

    $users = DB::select('select * from posts ');

    return view('/pages.index', [
      'product' => $products,
      'detail' => $details,
      'users' => $users
    ]);
  }
}
