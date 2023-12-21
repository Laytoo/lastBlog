<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterSubscriptionController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('frontend.index')->name('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::get('admin/dashboard',[AdminController::class,'index'])->middleware(['auth','role:admin'])->name('admin.dashboard');
Route::get('admin/login',[AdminController::class,'login'])->name('admin.login');


// Route::group(['middleware'=>['auth','verified'],'prefix'=>'user','as'=>'user.'],function () {

//     Route::get('/',[UserController::class,'index'])->middleware(['auth','role:user'])->name('index');
//     Route::get('/dashboard',[UserController::class,'userDashboard'])->name('dashboard');

// });
Route::get('/post/single/{id}',[HomeController::class,'showPost'])->name('post.single');


Route::resource('newsletter-subscriptions', NewsletterSubscriptionController::class)->only('store');


Route::get('about',[HomeController::class,'about'])->name('about');
