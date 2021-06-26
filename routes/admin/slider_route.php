<?php

use App\Http\Controllers\Admin\SliderController;

Route::get('slider', [SliderController::class, 'index'])
    ->name('slider')
    ->middleware('remember', 'auth');

Route::get('slider/create', [SliderController::class, 'create'])
    ->name('slider.create')
    ->middleware('auth');

Route::post('slider', [SliderController::class, 'store'])
    ->name('slider.store')
    ->middleware('auth');

Route::get('slider/{id}/edit', [SliderController::class, 'edit'])
    ->name('slider.edit')
    ->middleware('auth');

Route::put('slider/{id}', [SliderController::class, 'update'])
    ->name('slider.update')
    ->middleware('auth');

Route::delete('slider/{id}', [SliderController::class, 'destroy'])
    ->name('slider.destroy')
    ->middleware('auth');

Route::put('slider/{id}/restore', [SliderController::class, 'restore'])
    ->name('slider.restore')
    ->middleware('auth');