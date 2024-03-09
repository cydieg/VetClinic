<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AuthenticateController;
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
    return view('welcome');
});

//Landing_Page
Route::get('/home', [LandingPageController::class, 'Home'])->name('home');
Route::get('/ContactUs', [LandingPageController::class, 'ContactUs'])->name('contactUs');
Route::get('/Services', [LandingPageController::class, 'Services'])->name('services');
Route::get('/OurClinic', [LandingPageController::class, 'OurClinic'])->name('ourClinic');
Route::get('/OurShop', [LandingPageController::class, 'OurShop'])->name('ourShop');

//Authentication
Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::get('/register', [AuthenticateController::class, 'register'])->name('register');
Route::get('/forgotPassword', [AuthenticateController::class, 'forgotPassword'])->name('forgotPassword');