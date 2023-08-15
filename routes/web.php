<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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


// --------------------
// listing
// --------------------

// index --------------------
Route::get('/', [ListingController::class, 'index']);

// create listing form--------------------
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// store listing--------------------
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// edit listing form --------------------
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// update listing --------------------
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// delete --------------------
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// show single listing --------------------
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// --------------------
// authentication
// --------------------

// create user register form --------------------
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// store user --------------------
Route::post('/users', [UserController::class, 'store']);

// logout user --------------------
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// show login form --------------------
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// user log in --------------------
Route::post('users/authenticate', [UserController::class, 'authenticate']);
