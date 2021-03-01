<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Detail;

class InfosController extends Controller
{
  public function show($slug)
  {
    return view('info', [
      'detail' => Detail::where('slug', $slug)->firstOrFail()
    ]);
  }
}
