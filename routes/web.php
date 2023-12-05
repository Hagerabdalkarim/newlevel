<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ExampleController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//  Route::get('test',function(){
//     return 'Welcome to my frist laravel websit';
//  });
Route::get('/', function () {
    return view('welcome');
});

// Route::fallback(function(){
//  return redirect('/');
// });

// Route::prefix('lar')->group(function(){
    
//     Route::get('food',function(){
//         return view('food');
//     });
//     Route::get('test1/{id}',function($id){
//         return 'The Id is: ' . $id;
//     });

//  Route::get('product/{category}',function($cat){
//     return 'The category is ' . $cat;
//  })->whereIn('category',['laptop','pc','phone']);
// });
// 
Route::get('login',function(){
 return view('login');
});
Route::post('logged',[UserController::class,'validateform']
)->name('logged');
// Route::post('control',[UserController::class,'showform']);
// Route::get('control',[ExampleController::class,'show']);
