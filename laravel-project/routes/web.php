<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LecturerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/student', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:admin'])->name('student');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::name('lecturer.')
        ->prefix('lecturer')
        ->middleware(['auth', 'verified', 'role:admin'])
        ->group(function () {
            Route::get('/', [LecturerController::class, 'index'])->name('index');
            Route::get('/create', [LecturerController::class, 'create'])->name('create');
            Route::post('/store', [LecturerController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [LecturerController::class, 'edit'])->name('edit');
            Route::patch('/{id}/update', [LecturerController::class, 'update'])->name('update');
            Route::delete('/{id}/destroy', [LecturerController::class, 'destroy'])->name('destroy');
        });

require __DIR__.'/auth.php';
