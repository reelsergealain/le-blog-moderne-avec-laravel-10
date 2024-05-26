<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

# Post Controller
Route::get('/',[PostController::class, 'index'])->name('posts.index');
Route::get('/',[PostController::class, 'show'])->name('posts.index');
