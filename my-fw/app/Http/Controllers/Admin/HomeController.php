<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  //
  public function index(Request $request)
  {
    $data = Auth::guard('admin')->user();
    $user = $data->name;
    $request->session()->put('username', $user);
    return view('admin/home');
  }
}
