<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostUnlikeController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);
Route::get('/logout', [LogoutController::class,'store'])->name('logout');

Route::get('/posts', [PostController::class,'index'])->name('posts');
Route::post('/posts', [PostController::class,'store']);
// Route::get('/posts/1/likes', [PostController::class,'index']);
Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::post('/posts/{post}/unlikes', [PostUnlikeController::class, 'store'])->name('posts.unlikes');

// Route::get('/forgot-password', [PasswordResetController::class, 'showResetForm'])->name('password.reset');

// Route::post('/reset-password', [PasswordResetController::class, 'reset'])->name('password.update');

//create a route for deleting a post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/users/{user}/posts', [UserPostController::class, 'index'])->name('users.posts');
    
