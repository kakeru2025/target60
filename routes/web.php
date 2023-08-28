<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\CommentaryController;
use App\Http\Controllers\MypageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //ExamContoller
    Route::get('/exam', [ExamController::class, 'index']);
    Route::get('/exam/{year}', [ExamController::class, 'examine']);
    Route::post('/exam/{year}/explanation', [ExamController::class, 'explanate']);
    //CommentaryController
    Route::get('/commentary', [CommentaryController::class, 'unit'])->name('commentaries.unit');;
    Route::get('/commentary/{commentary}', [CommentaryController::class, 'commentary']);
    //
    //MypageContoller
    Route::get('/', [MypageController::class, 'toppage']);
    Route::get('/mypage', [MypageController::class, 'mypage']);
    Route::get('/mypage/welcome', [MypageController::class, 'welcome']);
    Route::get('/mypage/edit', function () {
        return view('mypages.edit');
    });
    Route::put('/mypage', [MypageController::class, 'store']);
});

Route::get('/', [MypageController::class, 'toppage']);

require __DIR__.'/auth.php';
