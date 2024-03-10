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

//Authentication User
Route::get('/user-login', [AuthenticateController::class, 'userLogin'])->name('userLogin');
Route::get('/user-register', [AuthenticateController::class, 'userRegister'])->name('userRegister');
Route::get('/forgotPassword', [AuthenticateController::class, 'forgotPassword'])->name('forgotPassword');

//Authentication Admin
Route::get('/admin-register', [AuthenticateController::class, 'adminRegister'])->name('adminRegister');
Route::get('/admin-login', [AuthenticateController::class, 'adminLogin'])->name('adminLogin');