<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
  //
  public function getLogin()
  {
    return view('user.auth.login');
  }

  public function login(Request $request)
  {

    $request->validate([
      'email' => 'required|string|email',
      'password' => 'required|string',
    ]);


    $credentials = $request->only(['email', 'password']);

    if (Auth::attempt($credentials)) {

      $user = Auth::user();
      $username = $user->name;
      $request->session()->put('user', $username);
      return redirect('');
    } else {
      return redirect()->back()->withInput();
    }
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');

  }
}
