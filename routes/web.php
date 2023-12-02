<?php

use Illuminate\Support\Facades\Route;

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
