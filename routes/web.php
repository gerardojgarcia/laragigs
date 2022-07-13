<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ListingController::class, 'index']);







// show creat form



Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');


//Store listing data

Route::post('/listings', [ListingController::class, 'store']);



//Show Edit Form

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);


//Submit UPdated Form

Route::put('/listings/{listing}', [ListingController::class, 'update']);


//Delete Listing

Route::delete('listings/{listing}', [ListingController::class, 'destroy']);

// Manage Listings

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Single Listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);





// Show Registration Form


Route::get('/register', [UserController::class, 'create'])->middleware('guest');


//Create User

Route::post('/users', [UserController::class, 'store']);

// logout User

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


// Show Login Form

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');


//Log In User

Route::post('/users/authenticate', [UserController::class, 'authenticate']);




