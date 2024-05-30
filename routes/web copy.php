<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\LoanController;
// // Route for accessing views without specifying a loan scheme
// Route::get('/{view}', [LoanController::class, 'showView'])->name('view.show');
// // Route for accessing views within a loan scheme
// Route::get('/{scheme}/{view}', [LoanController::class, 'showLoanView'])->name('loan.view');

Route::get('/', function () {
    if (auth()->check()) {
        return view('dashboard'); // or return redirect('/dashboard');
    } else {
        return view('welcome');
    }
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

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

require __DIR__.'/auth.php';