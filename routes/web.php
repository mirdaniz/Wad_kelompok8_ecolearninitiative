<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ReviewController;

Route::resource('/materials', MaterialController::class);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/feedback' , [ReviewController::class , "getData"])->name('feedback');
Route::get('/feedback/{id}' , [ReviewController::class , "detail"])->name('feedback.detail');
Route::post('/feedback/create' , [ReviewController::class , "create"])->name('feedback.create');
Route::put('/feedback/update/{id}' , [ReviewController::class , "update"])->name('feedback.update');
Route::get('/feedback/delete/{id}' , [ReviewController::class , "delete"])->name('feedback.delete');
