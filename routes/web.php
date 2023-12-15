<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ExampleController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\CarController;
use App\Http\Controllers\PostsController;
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
// Route::get('login',function(){
//  return view('login');
// });
// Route::post('logged',[UserController::class,'validateform']
// )->name('logged');
// Route::post('control',[UserController::class,'showform']);
// Route::get('control',[ExampleController::class,'show']);
// Route::post('storeCar',[CarController::class,'store'])->name('storeCar');
// Route::get('createCar',[CarController::class,'create'])->name('createCar');
// Route::get('cars',[CarController::class,'index'])->name('cars');
// Route::get('updateCar/{id}',[CarController::class,'edit'])->name('updateCar');
// Route::put('update/{id}',[CarController::class,'update'])->name('update');
// Route::get('showCar/{id}',[CarController::class,'show'])->name('showCar');
Route::get('posts',[PostsController::class,'index'])->name('posts');
Route::post('storepost',[PostsController::class,'store'])->name('storepost');
Route::get('createpost',[PostsController::class,'create'])->name('createpost');
Route::put('update/{id}',[PostsController::class,'update'])->name('update');
Route::get('editPost/{id}',[PostsController::class,'edit'])->name('editPost');