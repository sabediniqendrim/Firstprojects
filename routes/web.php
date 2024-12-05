<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BusinessHourController;

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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('business-hours', [BusinessHourController::class, 'index']);
Route::post('business-hours', [BusinessHourController::class, 'update'])->name('business_hours.update');
Route::get('reserve', [AppointmentController::class,'index']);
Route::post('reserve', [AppointmentController::class,'reserve'])->name('reserve');
Route::get('alletermine', [AppointmentController::class,'alletermine'])->name('alletermine');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('agb', function () {
    return view('agb');
});
