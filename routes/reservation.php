<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth'], 'prefix' => '/admin'], function () {
    Route::get('/reservations', [ReservationController::class, 'index_view'])->name('views.reservations.index');
    Route::get('/reservations/{id}/scene', [ReservationController::class, 'scene_view'])->name('views.reservations.scene');

    Route::get('/reservations/search', [ReservationController::class, 'search_action'])->name('actions.reservations.search');
    Route::delete('/reservations/{id}/clear', [ReservationController::class, 'clear_action'])->name('actions.reservations.clear');
});
