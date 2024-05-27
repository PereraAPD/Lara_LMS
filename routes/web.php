<?php
use Illuminate\Support\Facades\Route; // Import the Route facade
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/{user}', [ProfileController::class, 'show']);
Route::get('/profile/{user}/edit', [ProfileController::class, 'edit']);
Route::patch('/profile/{user}', [ProfileController::class, 'update']);