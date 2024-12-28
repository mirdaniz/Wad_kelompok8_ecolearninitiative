<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProfileController;

Route::resource('/materials', MaterialController::class);
Route::get('/profiles', [ProfileController::class, 'show'])->name('profiles.show');
Route::get('/profiles/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profiles', [ProfileController::class, 'update'])->name('profiles.update');

Route::get('/', function () {
    return view('welcome');
});
