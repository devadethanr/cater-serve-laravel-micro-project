<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Booking;
use PHPUnit\Framework\TestStatus\Risky;

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
    return view('home');
});

Route::get('/book', function () {
    return view('book');
});

Route::get('/admin', function () {
    $bookings = Booking::all();
    // $bookings = auth()->showbookings()->latest()->get();
    return view('admin',['bookings'=> $bookings]);
});


Route::post('/register', [UserController::class,'register']);
Route::post('/logout',[UserController::class, 'logout']);
Route::post('/login',[UserController::class, 'login']);

//Booking related
Route::post('/create-book', [BookController::class, 'createBook']);
Route::get('/edit-booking/{booking}',[BookController::class,'showEditScreen']);
