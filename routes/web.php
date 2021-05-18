<?php

use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('master');
})->name('home');

Route::get('/text', function () {
    return view('ServicesDetails');
})->name('services');

Route::get('services/{name}', [ServicesController::class, 'show'])->name('showService');

Route::get('/contactus', [App\Http\Controllers\HomeController::class, 'index'])->name('ContactUs');
Auth::routes();
