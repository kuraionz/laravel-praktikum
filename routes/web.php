<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route ke halaman welcome
Route::get('/', function () {
  return redirect()->route('dashboard');
});

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware('auth')->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

  Route::get('/students', [Studentcontroller::class, 'index'])->name('students.index');
  Route::get('/students/create', [Studentcontroller::class, 'create'])->name('students.create');
  Route::post('/students', [Studentcontroller::class, 'store'])->name('students.store');
  Route::get('/student/{id}', [Studentcontroller::class, 'show'])->name('students.show');
  Route::get('/student/{id}/edit', [Studentcontroller::class, 'edit'])->name('students.edit');
  Route::put('/student/{id}', [Studentcontroller::class, 'update'])->name('students.update');
  Route::delete('/students/{id}', [Studentcontroller::class, 'destroy'])->name('students.destroy');

  Route::resource('majors', MajorController::class);
});