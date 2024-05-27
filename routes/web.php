<?php
use Illuminate\Support\Facades\Route; // Import the Route facade
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

