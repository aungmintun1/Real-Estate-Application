<?php

use App\Http\Controllers\Admin\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SavedListingController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//static pages
Route::get('/' , [StaticPagesController::class, 'home']);
Route::get('/listings/all' , [StaticPagesController::class, 'ListingAll']);
Route::get('/search' , [StaticPagesController::class, 'search']);
Route::get('/contact' , [StaticPagesController::class, 'contact']);
Route::get('/about' , [StaticPagesController::class, 'about']);
// Route::get('/results' , [StaticPagesController::class, 'results']);

//users
Route::get('/users/login' , [UserController::class, 'login']);
Route::get('/users/register' , [UserController::class, 'register']);
Route::get('/users/dashboard' , [UserController::class, 'dashboard']);
Route::get('/users/favorites' , [UserController::class, 'favorites']);
Route::get('/users/all' , [UserController::class, 'all'])->middleware('role:Admin');
Route::get('/users/{id}/edit' , [UserController::class, 'edit']);
Route::put('/users/{id}' , [UserController::class, 'update']);
Route::delete('/users/{id}' , [UserController::class, 'destroy'])->middleware('role:Admin');
Route::get('/users/error' , [UserController::class, 'error']);

//listings
Route::get('/listings', [ListingController::class, 'index']);
Route::get('/listings/results', [ListingController::class, 'search']);
Route::get('/listings/create', [ListingController::class, 'create']);
Route::post('/listings', [ListingController::class, 'store']);
Route::get('/listings/{id}', [ListingController::class, 'show']);
Route::get('/listings/{id}/edit', [ListingController::class, 'edit']);
Route::put('/listings/{id}', [ListingController::class, 'update']);
Route::delete('/listings/{id}', [ListingController::class, 'destroy']);
Route::delete('/listings/{id}', [ListingController::class, 'destroyImage']);

//favorites
Route::delete('/favorites/{id}', [SavedListingController::class, 'destroy']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
