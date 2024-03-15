<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('post', [PostController::class, 'getPosts']); 
Route::get('product/{id}', [PostController::class, 'getPostById']);
Route::post('post', [PostController::class, 'createPost']);
Route::put('product/{id}', [PostController::class, 'updatePost']);
Route::delete('product/{id}', [PostController::class, 'deletePost']);


