<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function showform() {
      return view('login');
   }
   public function validateform(Request $request) {
      echo $name = Request::createFromGlobals()->get('name');
      echo "<br/>";
      echo $email = Request::createFromGlobals()->get('email');
      echo "<br/>";
       echo $password = Request::createFromGlobals()->get('password');
   }

}
