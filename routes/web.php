<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('/edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('/update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('/delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    Route::get('/posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('/add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('/add-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('/edit-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('/update-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('/delete-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'destroy']);

    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index']);
});
