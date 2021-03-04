<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogsModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class BlogsController extends Controller
{

  protected function formatValidationErrors(Validator $validator)
  {
    return $validator->errors()->all();
  }

  public function show()
  {
    $data = BlogsModel::all();

    return view('/admin.listblog', [
      'blogs' => $data
    ]);
  }

  public function addData(Request $request)
  {


    $validated = $request->validate([
      'title' => 'required',
      'intro' => 'required',
      'content' => 'required',
    ]);

    $blog = new BlogsModel;
    $blog->title = $validated['title'];
    $blog->intro = $validated['intro'];
    $blog->imgurl = "assets/images/product/2.jpg";
    $blog->content = $validated['content'];
    $blog->date = date("Y/m/d");
    $blog->save();

    return redirect('admin/listblog');
  }


  public function delete($id)
  {
    $data = BlogsModel::find($id);
    $data->delete();
    return redirect('/admin/listblog');
  }
}
