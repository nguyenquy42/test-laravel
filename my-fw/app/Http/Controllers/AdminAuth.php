<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class AdminAuth extends Controller
{

  //
  public function adminLogin(Request $request)
  {

    $data = $request->input('email');
    $request->session()->put('email', $data);
    return redirect('admin/home');
  }

  public function logout()
  {
    if (session()->has('email')) {
      session()->pull('email', null);
    }
    return redirect('admin');
  }

  public function check() {
    if (session()->has('email')) {
    return redirect('admin/home');
    }
    return view('admin/login');
  }
}
