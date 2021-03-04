<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogsModel;

class BlogsController extends Controller
{
   
  public function show()
  {
    $blogs = BlogsModel::all();

    return view('/admin.listblog', [
      'blogs' => $blogs
    ]);
    
  }
}
