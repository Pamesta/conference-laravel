<?php

use App\Models\Conference;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('admin', function () {
    return view('admin');
})->middleware(['auth', 'admin']);

Route::get('conferences', function () {
    $conferences = Conference::all();
    return view('conferences', ['conferences' => $conferences]);
});
