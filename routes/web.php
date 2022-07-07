<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TechController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewuserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard',function(){
    return view('backend.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('category',CategoryController::class);
Route::resource('post',PostController::class);
Route::resource('comment',CommentController::class);

Route::resource('user',NewuserController::class);




// frontend routes

//index page route
Route::get('/',[TechController::class,'home'])->name('index');
Route::get('posts/{id}',[TechController::class,'post'])->name('front.post');

Route::get('singlepost/{id}',[TechController::class,'singlepost'])->name('single-post');

//about us page route
Route::get('/about',[TechController::class,'about'])->name('about');

//contact page route
Route::get('/contact',[TechController::class,'contact'])->name('contact');

// login routes
Route::get('/signin',[TechController::class,'Login'])->name('signin');

// signup routes
Route::get('/signup',[TechController::class,'register'])->name('signup');


//category wise post show
Route::get('show_post/{id}',[TechController::class,'show_post'])->name('post_show');


