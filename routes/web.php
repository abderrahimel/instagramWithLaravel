<?php

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

use App\Mail\NewUserWelcomeMail;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\FollowsController;

Auth::routes();

Route::get('/email', function () {
    return new NewUserWelcomeMail();
});

Route::post('follow/{user}', [FollowsController::class, 'store']);

Route::get('/', [PostsController::class, 'index']);

Route::get('/p/create', [PostsController::class, 'create']);

Route::post('/p', [PostsController::class, 'store']);

Route::get('/p/{post}', [PostsController::class, 'show']);

Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profiles.show');
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profiles.edit');
Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profiles.update');
Route::get('/p/{post}', [PostsController::class, 'show']);


