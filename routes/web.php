<?php

use App\Http\Controllers\DanceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dance/form');
});

Route::get('/dance/upload-form', [DanceController::class, 'showUploadForm'])->name('showUploadForm');
Route::post('/import-dance-classes', [DanceController::class, 'importDanceClasses'])->name('importDanceClasses');
Route::get('/dance/form', [DanceController::class, 'showForm'])->name('dance.form');
Route::match(['get', 'post'], '/dance/filter', [DanceController::class, 'filterClasses'])->name('dance.filter');
Route::get('/download-favorites', [DanceController::class, 'downloadFavorites'])->name('downloadFavorites');
Route::match(['get', 'post'], '/processFavorites', [DanceController::class, 'processFavorites'])->name('processFavorites');
//Route::match(['get', 'post'], '/emails/favorites', [DanceController::class, 'emailFavorites'])->name('emails.favorites');

// Route for processing selected classes
//Route::post('/processFavorites', [DanceController::class, 'processFavorites'])->name('processFavorites');

// Route for sending email
//Route::get('/sendFavoritesEmail', [DanceController::class, 'sendFavoritesEmail'])->name('sendFavoritesEmail');
Route::post('/sendFavoritesEmail', [DanceController::class, 'sendFavoritesEmail'])->name('sendFavoritesEmail');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
