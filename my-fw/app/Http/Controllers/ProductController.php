<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class  ProductConroller extends Controller
{
  public function show()
  {
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

    return view('info', [
      'product' => $products,
      'detail' => $details
  ]);
  }
}
