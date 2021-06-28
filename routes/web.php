<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Web\BookingController;
use App\Http\Controllers\Web\WeddingBookingController;
use App\Http\Controllers\Admin\ImagesController;
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

// Auth
include('auth/auth_route.php');
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::get('/booking-list', [DashboardController::class, 'booking_list'])->name('booking-list')->middleware('auth');
Route::get('/airport-list', [DashboardController::class, 'airport_list'])->name('airport-list')->middleware('auth');
Route::get('/wedding-list', [DashboardController::class, 'wedding_list'])->name('wedding-list')->middleware('auth');
// Users

include('admin/default/user_route.php');
// Organizations

include('admin/default/organizations_route.php');
// Contacts

include('admin/default/contacts_route.php');
// Reports

include('admin/default/reports_route.php');

// Images

Route::get('/img/{path}', [ImagesController::class, 'show'])->where('path', '.*');
// 500 error

Route::get('500', function () {
    // Force debug mode for this endpoint in the demo environment
    if (App::environment('demo')) {
        Config::set('app.debug', true);
    }
    echo $fail;
});

// Generel Pages
include('admin/general_route.php');
include('admin/slider_route.php');

//home controllers

Route::get('/', [WebController::class, 'index'])->middleware('web');

Route::post('get-in-touch', [WebController::class, 'store'])
    ->name('web.contact.store');

//booking controllers
Route::get('/booking', [BookingController::class, 'index'])->middleware('web');
Route::get('/airport', [BookingController::class, 'airport'])->middleware('web');
Route::get('/wedding', [WeddingBookingController::class, 'index'])->middleware('web');

Route::post('booking-submit', [BookingController::class, 'store'])
    ->name('web.booking.store')->middleware('web');

Route::post('airport-submit', [BookingController::class, 'airport_store'])
    ->name('web.airport.booking.store')->middleware('web');

Route::post('wedding-submit', [WeddingBookingController::class, 'store'])
    ->name('web.wedding.booking.store')->middleware('web');