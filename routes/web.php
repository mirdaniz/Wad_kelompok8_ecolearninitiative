<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ActivityController;

Route::view('/news1', 'news1');
Route::view('/news2', 'news2');
Route::view('/news3', 'news3');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/submit-quiz', function (Request $request) {
    $jawabanBenar = '1';
    $jawabanUser = $request->input('jawaban');
    $result = $jawabanUser == $jawabanBenar ? 'Benar' : 'Salah, Silahkan membaca Lesson terlebih dahulu.';
    return redirect()->back()->with('result', $result);
});
Route::resource('/materials', MaterialController::class);
Route::get('/profiles', [ProfileController::class, 'show'])->name('profiles.show');
Route::get('/profiles/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profiles', [ProfileController::class, 'update'])->name('profiles.update');

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/feedback' , [ReviewController::class , "getData"])->name('feedback');
Route::get('/feedback/{id}' , [ReviewController::class , "detail"])->name('feedback.detail');
Route::post('/feedback/create' , [ReviewController::class , "create"])->name('feedback.create');
Route::put('/feedback/update/{id}' , [ReviewController::class , "update"])->name('feedback.update');
Route::get('/feedback/delete/{id}' , [ReviewController::class , "delete"])->name('feedback.delete');
Route::resource('activities', ActivityController::class);



