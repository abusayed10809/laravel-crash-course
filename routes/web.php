<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// index --------------------
Route::get('/', [ListingController::class, 'index']);

// create --------------------
Route::get('/listings/create', [ListingController::class, 'create']);

// store --------------------
Route::post('/listings', [ListingController::class, 'store']);

// edit --------------------
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// update --------------------
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// show --------------------
Route::get('/listings/{listing}', [ListingController::class, 'show']);
