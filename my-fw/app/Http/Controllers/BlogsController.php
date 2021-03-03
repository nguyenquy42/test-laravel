<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class BlogsController extends Controller
{
   
  public function show()
  {

    $users = DB::select('select * from posts ');
    return view('/pages.index', [
      'users' => $users
    ]);
    
  }
}
