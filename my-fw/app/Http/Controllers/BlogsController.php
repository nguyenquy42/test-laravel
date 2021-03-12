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
      'slug' => 'required',
      'content' => 'required',
    ]);

    $blog = new BlogsModel;
    $blog->title = $validated['title'];
    $blog->intro = $validated['intro'];
    $blog->slug = $validated['slug'];
    $blog->title_tag = $request->title_tag;
    $blog->keyword = $request->keyword;
    $blog->category = $request->category;
    $blog->imgurl = $request->imgurl;
    $blog->content = $validated['content'];
    $blog->author = session('username');
    $blog->date = date("Y/m/d");
    $blog->save();
    return redirect('admin/listblog');
  }


  public function delete($id)
  {
    $data = BlogsModel::find($id)->delete();
    // $data->delete();
    return redirect('/admin/listblog') ->with('success','User deleted successfully');
  }

  public function edit($id)
  {
    $data = BlogsModel::find($id);
    return view('admin/editblog', [
      'data' => $data,
    ]);
  }

  public function update(Request $request, $id)
  {
    $data = BlogsModel::find($id);

    $validated = $request->validate([
      'title' => 'required',
      'intro' => 'required',
      'slug' => 'required',
      'content' => 'required',
    ]);

    $data->title = $validated['title'];
    $data->intro = $validated['intro'];
    $data->slug = $validated['slug'];
    $data->title_tag = $request->title_tag;
    $data->keyword = $request->keyword;
    $data->category = $request->category;
    $data->imgurl = $request->imgurl;
    $data->content = $validated['content'];
    $data->author = session('username');
    $data->date = date("Y/m/d");

    $data->save();
    return redirect('admin/listblog');
  }

  public function  showProduct($id ) {
    $data = BlogsModel::find($id);
    return view('pages/product', [
      'data' => $data,
    ]);

  }

  
  public function  showdetail($slug ) {

    $data = BlogsModel::where('slug', $slug)->firstOrFail();

    return view('pages/detail', [
      'data' => $data,
    ]);

  }
  

  public function updateStatus(Request $request, $id)
  {
    $data = BlogsModel::find($id);
    $data->status = $request->status;
    $data->save();
    return redirect('admin/listblog');

  }

}
