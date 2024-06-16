<?php

use App\Http\Controllers\Admin\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticPagesController;
use Illuminate\Support\Facades\Route;

//static pages
Route::get('/' , [StaticPagesController::class, 'home']);
Route::get('/listings/all' , [StaticPagesController::class, 'ListingAll']);

//login and register
Route::get('/users/login', function () {
    return view('users.login');
});
Route::get('/users/register', function () {
    return view('users.register');
});

//listings
Route::get('/listings', [ListingController::class, 'index']);
Route::get('/listings/create', [ListingController::class, 'create']);
Route::post('/listings', [ListingController::class, 'store']);
Route::get('/listings/{id}', [ListingController::class, 'show']);
Route::get('/listings/{id}/edit', [ListingController::class, 'edit']);
Route::put('/listings/{id}', [ListingController::class, 'update']);
Route::delete('/listings/{id}', [ListingController::class, 'destroy']);
Route::delete('/listings/{id}', [ListingController::class, 'destroyImage']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
