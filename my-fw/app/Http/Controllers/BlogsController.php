<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogsModel;
use Illuminate\Http\Request;

class BlogsController extends Controller
{

  public function show()
  {
    $data = BlogsModel::all();

    return view('/admin.listblog', [
      'blogs' => $data
    ]);
  }


  //  
  public function addData(Request $req)
  {

    $validated = $this->validate($req, [
      'title' => 'required',
      'intro' => 'required',
      'content' => 'required',
      'category' => 'required',
      'author' => 'required',
      'imgurl' => 'required',
      'slug' => 'required',
    ]);
    
    dd($validated);
    dd('cheets o day');
    $blog = new BlogsModel;

    if ($req->title) {
      $blog->title = $req->title;
    } else {
      $blog->title = '';
    }

    if ($req->intro) {
      $blog->intro = $req->intro;
    } else {
      $blog->intro = '';
    }

    if ($req->content) {
      $blog->content = $req->content;
    } else {
      $blog->content = '';
    }

    if ($req->category) {
      $blog->category = $req->category;
    } else {
      $blog->category = '';
    }

    if ($req->author) {
      $blog->author = $req->author;
    } else {
      $blog->author = '';
    }

    if ($req->imgurl) {
      $blog->imgurl = $req->imgurl;
    } else {
      $blog->imgurl = 'assets/images/product/1.jpg';
    }

    if ($req->slug) {
      $blog->slug = $req->slug;
    } else {
      $blog->slug = '';
    }

    $blog->date = date("Y/m/d");
    $blog->save();

    // return redirect('admin/listblog');
  }


  public function delete($id)
  {
    $data = BlogsModel::find($id);
    $data->delete();
    return redirect('/admin/listblog');
  }
}
