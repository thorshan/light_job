<?php

use App\Http\Controllers\ListingController;
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
Route::get('/listings/create', [ListingController::class, 'create'])->name('listing.create');

// Store listing
Route::post('/listings', [ListingController::class,'store'])->name('listing.store');

// Edit Listing
Route::get('/listings/edit/{listing}', [ListingController::class,'edit'])->name('listing.edit');

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('listing.update');

// Show the listing
Route::get('/listings/{listing}', [ListingController::class,'show'])->name('listing.show');

// Delete the listing
Route::delete('/listings/{listing}', [ListingController::class,'destroy'])->name('listing.delete');

