<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\ReelsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ChatController;

use App\Http\Controllers\PostController;

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
})->name('welcome');

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'profileEdit'])->name('profileEdit');

Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
Route::get('/reels', [ReelsController::class, 'index'])->name('reels');
Route::get('/chat', [ChatController::class, 'index'])->name('chat');

Route::get('/comments/{id}', [CommentsController::class, 'index'])->name('comments');
Route::get('/profile/reels', [ReelsController::class, 'profileReels'])->name('profileReels');
Route::get('/profile/posts', [PostController::class, 'profilePosts'])->name('profilePosts');



Auth::routes();


