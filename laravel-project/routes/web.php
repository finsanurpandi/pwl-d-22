<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;

// student controller
Route::get('student', [StudentController::class, 'index']);
Route::resource('lecturer', LecturerController::class);

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     return view('test.test');
// });
Route::view('/test', 'test.test');

// Route::get('/test2/{name}', function ($name) {
//     return "Hello ".$name;
// });

// Route::get('/test3/{name?}', function ($name = null) {
//     if($name == null) {
//         return "Hello World";
//     } else {
//         return "Welcome, ".$name;
//     }
// });
Route::prefix('admin')->group(function(){
    Route::get('/test2/{name}', function ($name) {
        return "Hello ".$name;
    });
    
    Route::get('/test3/{name?}', function ($name = null) {
        if($name == null) {
            return "Hello World";
        } else {
            return "Welcome, ".$name;
        }
    });
});

// localhost:8000/admin/profile
// localhost:8000/admin/dashboard