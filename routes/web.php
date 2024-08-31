<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersExport;

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

//Finish The page UI
//1- route to show the page that lists the posts
//2- view to render the html
//3- Controller to render the view

Route::get('posts',[PostController::class,'index'])->name('posts.index');
Route::get('posts/create',[PostController::class,'create'])->name('posts.create');
Route::get('posts/{post}/show' , [PostController::class,'show'])->name('posts.show');
Route::get('posts/{post}/edit' , [PostController::class,'edit'])->name('posts.edit');
Route::get('posts/{post}' , [PostController::class,'destroy'])->name('posts.destroy');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');

// Route::get('users',[UserController::class,'index'])->name('users.index');
Route::get('/',[UserController::class,'index'])->name('users.index');
Route::get('users/create',[UserController::class, 'create'])->name('users.create');
Route::post('/users/import',[UserController::class, 'import'])->name('users.import');
Route::get('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');
// Route::get('users/create',[UserController::class,'create'])->name('users.create');
// Route::get('users/{post}' , [UserController::class,'show'])->name('users.show');
Route::post('/users/export', [UserController::class, 'export'])->name('users.export');
// Route::get('users/export/', [UsersController::class, 'export'])->name('users.export');