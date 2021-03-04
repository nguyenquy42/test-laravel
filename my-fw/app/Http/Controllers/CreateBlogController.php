<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogsModel;

class CreateBlogController extends Controller
{
  //  
  public function addData(Request $req)
  {
    $blog = new BlogsModel;
    if ($req->title) {
      $blog->title = $req->title;
    }
    else {
      $blog->title = '';
    }

    if ($req->intro) {
      $blog->intro = $req->intro;
    }
    else {
      $blog->intro = '';
    }

    if ($req->content) {
      $blog->content = $req->content;
    }
    else {
      $blog->content = '';
    }

    if ($req->category) {
      $blog->category = $req->category;
    }
    else {
      $blog->category = '';
    }

    if ($req->author) {
      $blog->author = $req->author;
    }
    else {
      $blog->author = '';
    }

    if ($req->imgurl) {
      $blog->imgurl = $req->imgurl;
    }
    else {
      $blog->imgurl = 'assets/images/product/1.jpg';
    }

    if ($req->slug) {
      $blog->slug = $req->slug;
    }
    else {
      $blog->slug = '';
    }

    $blog->date = date("Y/m/d");
    $blog->save();
    
    return redirect('admin/listblog');

  }
}
