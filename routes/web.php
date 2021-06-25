<?php

use App\Http\Controllers\Admin\DashboardController;
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
Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');
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