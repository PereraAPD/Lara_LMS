<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Home route
Route::get('/', function () {
    if (auth()->check()) {
        return view('dashboard'); // or return redirect('/dashboard');
    } else {
        return view('welcome');
    }
});

// Dashboard route
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Logout route
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

// Authentication routes
require __DIR__.'/auth.php';

// Conditional wildcard routes
Route::get('/{view}', function ($view) {
    $excludedRoutes = ['login', 'register', 'dashboard', 'profile', 'logout'];
    if (in_array($view, $excludedRoutes)) {
        abort(404);
    }
    return app(LoanController::class)->showView($view);
})->name('view.show');

Route::get('/{scheme}/{view}', function ($scheme, $view) {
    $excludedRoutes = ['login', 'register', 'dashboard', 'profile', 'logout'];
    if (in_array($scheme, $excludedRoutes) || in_array($view, $excludedRoutes)) {
        abort(404);
    }
    return app(LoanController::class)->showLoanView($scheme, $view);
})->name('loan.view');
