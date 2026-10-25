<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

// Home page
Route::get('/', [HomeController::class, 'index']);

// About page
Route::get('/about', [HomeController::class, 'about']);

// Contact page
Route::get('/contact', [HomeController::class, 'contact']);

// Student management routes
Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])
    ->name('students.create');
Route::post('/students', [StudentController::class, 'store'])
    ->name('students.store');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])
    ->name('students.edit');
Route::put('/students/{student}', [StudentController::class, 'update'])
    ->name('students.update');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])
    ->name('students.destroy');
Route::get('/register', [AuthController::class, 'register'])
    ->name('register');

Route::post('/register', [AuthController::class, 'storeRegister']);

Route::get('/login', [AuthController::class, 'login'])
    ->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');    