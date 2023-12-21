<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard',[UserController::class,'dashboard'])->name('dashboard');


Route::get('/post',[UserController::class,'index'])->name('post.show');

Route::get('/post/create',[UserController::class,'create'])->name('post.create');

Route::post('/post/store', [UserController::class, 'store'])->name('post.store');
Route::get('/posts/{id}/edit', [UserController::class, 'edit'])->name('post.edit');
Route::put('/posts/{id}', [UserController::class, 'update'])->name('post.update');
Route::delete('/posts/{id}', [UserController::class, 'destroy'])->name('post.destroy');


Route::get('/category',[UserController::class,'showCategory'])->name('category');
