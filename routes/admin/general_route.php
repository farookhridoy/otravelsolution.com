<?php

use App\Http\Controllers\Admin\GeneralPagesController;

Route::get('generalpages', [GeneralPagesController::class, 'index'])
    ->name('generalpages')
    ->middleware('remember', 'auth');

Route::get('generalpages/create', [GeneralPagesController::class, 'create'])
    ->name('generalpages.create')
    ->middleware('auth');

Route::post('generalpages', [GeneralPagesController::class, 'store'])
    ->name('generalpages.store')
    ->middleware('auth');

Route::get('generalpages/{id}/edit', [GeneralPagesController::class, 'edit'])
    ->name('generalpages.edit')
    ->middleware('auth');

Route::put('generalpages/{id}', [GeneralPagesController::class, 'update'])
    ->name('generalpages.update')
    ->middleware('auth');

Route::delete('generalpages/{id}', [GeneralPagesController::class, 'destroy'])
    ->name('generalpages.destroy')
    ->middleware('auth');

Route::put('generalpages/{id}/restore', [GeneralPagesController::class, 'restore'])
    ->name('generalpages.restore')
    ->middleware('auth');