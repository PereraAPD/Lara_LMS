<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

Route::get('/L01', function () {
    return view('L01');
})->name('L01.index');

Route::get('/L02', function () {
    return view('L02');
})->name('L02.index');

Route::get('/L03', function () {
    return view('L03');
})->name('L03.index');

Route::get('/L04', function () {
    return view('L04');
})->name('L04.index');

Route::get('/L05', function () {
    return view('L05');
})->name('L05.index');

Route::get('/L06', function () {
    return view('L06');
})->name('L06.index');

Route::get('/L07', function () {
    return view('L07');
})->name('L07.index');

Route::get('/L08', function () {
    return view('L08');
})->name('L08.index');

Route::get('/L09', function () {
    return view('L09');
})->name('L09.index');

Route::get('/L10', function () {
    return view('L10');
})->name('L10.index');

Route::get('/L11', function () {
    return view('L11');
})->name('L11.index');

Route::get('/L12', function () {
    return view('L12');
})->name('L12.index');

Route::get('/L13', function () {
    return view('L13');
})->name('L13.index');

Route::get('/L14', function () {
    return view('L14');
})->name('L14.index');

Route::get('/L15', function () {
    return view('L15');
})->name('L15.index');

Route::get('/L16', function () {
    return view('L16');
})->name('L16.index');

Route::get('/L17', function () {
    return view('L17');
})->name('L17.index');

Route::get('/L18', function () {
    return view('L18');
})->name('L18.index');

Route::get('/Security', function () {
    return view('Security');
})->name('security.index');

require __DIR__.'/auth.php';

