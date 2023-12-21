<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('dashboard',[AdminController::class,'index'])->middleware(['auth','role:admin'])->name('admin.dashboard');
Route::get('dashboard',[AdminController::class,'index'])->name('dashboard');
// Route::get('login',[AdminController::class,'login'])->name('login');
Route::get('show',[AdminController::class,'show'])->name('show');


Route::resource('category', CategoryController::class);

Route::resource('post', PostController::class);


Route::get('/send/mail/view/all', [AdminController::class, 'emailViewAll'])->name('send.email.view.all');

Route::post('/store/email/all', [AdminController::class, 'storeAllUserEmail'])->name('store.alluser.email');
