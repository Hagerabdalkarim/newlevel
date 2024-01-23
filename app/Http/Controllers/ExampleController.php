<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
 public function show(){
    return 'Welcom to my frist controller';
    
 }
 public function upload(Request $request){
   $file_extension = $request->image->getClientOriginalExtension();
   $file_name = time() . '.' . $file_extension;
   $path = 'assets/images';
   $request->image->move($path , $file_name);
   return 'Uploaded';
 }
   public function createSession(){
      session()->put('testSession', 'My frist session value');
   return 'seeion created' . session('testSession');
   }
 }


