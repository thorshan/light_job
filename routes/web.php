<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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
    return view('index');
});

// Show all listings
Route::get('/listings', [ListingController::class,'listings'])->name('listings');

// Create Listing Form
Route::get('/listings/create', [ListingController::class, 'create'])->name('listing.create')->middleware('auth');

// Store listing
Route::post('/listings', [ListingController::class,'store'])->name('listing.store')->middleware('auth');

// Edit Listing
Route::get('/listings/edit/{listing}', [ListingController::class,'edit'])->name('listing.edit')->middleware('auth');

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('listing.update')->middleware('auth');

// Show the listing
Route::get('/listings/{listing}', [ListingController::class,'show'])->name('listing.show');

// Delete the listing
Route::delete('/listings/{listing}', [ListingController::class,'destroy'])->name('listing.delete')->middleware('auth');

// User Dashbaord
Route::get('/dashboard', [UserController::class,'index'])->name('dashboard')->middleware('auth');

// Register Form
Route::get('/register', [UserController::class,'create'])->name('register')->middleware('guest');

// Create new user
Route::post('/users', [UserController::class,'store'])->name('create');

// Logout
Route::post('/logout', [UserController::class,'logout'])->middleware('auth');

// Login form
Route::get('/login', [UserController::class,'login'])->name('login')->middleware('guest');

// Login user
Route::post('/users/authenticate', [UserController::class,'authenticate'])->name('authenticate');
