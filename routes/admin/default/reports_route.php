<?php

use App\Http\Controllers\Admin\ReportsController;

Route::get('reports', [ReportsController::class, 'index'])
    ->name('reports')
    ->middleware('auth');