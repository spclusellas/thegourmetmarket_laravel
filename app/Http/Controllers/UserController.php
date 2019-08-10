<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function check(Request $request)
   {
       $user = User::find($request->id)->get();
       return $user;
   }
   public function show()
   {
      return view('profile');
   }
}
