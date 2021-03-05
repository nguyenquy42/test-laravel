<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
  public function login()
  {

    return view('admin/login');
  }

  public function authenticate(Request $request)
  {

    
    $request->validate([
      'email' => 'required|string|email',
      'password' => 'required|string',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
      return redirect()->intended('admin.home');
    }

    return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
  }

  public function logout()
  {
    Auth::logout();

    return redirect('login');
  }

  public function home()
  {

    return view('home');
  }
}
