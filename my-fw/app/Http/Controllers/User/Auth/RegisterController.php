<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\Models\User;



class RegisterController extends Controller
{
  //

  public function getRegister()
  {
    return view("user.auth.register");
  }

  protected function create(Request $request)
  {

    $validated = $request->validate(
      [
        'email' => 'required|email',
        'password' => 'required|min:4',
        'password_confirmation' => 'required|same:password',
        'username' => 'required|min:4|max:8',
      ]
    );

    $data = new User;
    $data->email = $validated['email'];
    $data->password = $validated['password_confirmation'];
    $data->password = bcrypt($validated['password_confirmation']);
    $data->name = $validated['username'];
    $data->save();

    return redirect('login');
  }
}
