<?php

use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [ConferenceController::class, 'showList']);
Route::get('/home', [ConferenceController::class, 'showList'])->name('home');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('conferences', [ConferenceController::class, 'showList'])->name('conferences');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('conferences/edit/{id}', [ConferenceController::class, 'showEditForm'])->name('conferences/edit');
    Route::post('conferences/edit/{id}', [ConferenceController::class, 'update'])->name('conferences/edit');
    Route::post('conferences/delete/{id}', [ConferenceController::class, 'delete'])->name('conferences/delete');
    Route::get('conferences/new', [ConferenceController::class, 'showCreateForm'])->name('conferences/new');
    Route::post('conferences/new', [ConferenceController::class, 'create'])->name('conferences/new');
});

