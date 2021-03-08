<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
  //
  public function login(Request $request)
  {
    if ($request->getMethod() == 'GET') {
      return view('user.auth.login');
    }

    $request->validate([
      'email' => 'required|string|email',
      'password' => 'required|string',
    ]);

    $credentials = $request->only(['email', 'password']);

    if (Auth::attempt($credentials)) {

      $user = Auth::user();
      $username = $user->name;
      $request->session()->put('user', $username);
      return redirect()->route('home');

    } else {
      return redirect()->back()->withInput();
    }
  }

  public function logout()
  {
    if (session()->has('user')) {
      session()->pull('user', null);
    }
    return view('/pages/index');
  }
  
}
