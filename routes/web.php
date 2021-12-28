<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/acerca-de-mi', [WebsiteController::class, 'about'])->name('about');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/blog/{post:slug}', [WebsiteController::class, 'post'])->name('post');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::resource('pages', PageController::class);
});

require __DIR__.'/auth.php';
