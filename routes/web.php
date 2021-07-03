<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('localization/{locale}',[PostController::class,'localization']);


Route::get('/posts',[PostController::class,'getAllPost'])->name('post.getAllPost');

Route::get('/add-post',[PostController::class,'addPost'])->name('post.add');

Route::post('/add-post',[PostController::class,'addPostSubmit'])->name('post.addSubmit');

Route::get('/posts/{id}',[PostController::class,'getPostById'])->name('post.getById');

Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.delete');

Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.edit');

Route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');

Route::get('/inner-join',[PostController::class,'innerJoinCaluse'])->name('post.innerJoinCaluse');


Route::get('/all-posts',[PostController::class,'getAllPostsUsingModel'])->name('post.allposts');