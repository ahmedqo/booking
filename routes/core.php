<?php

use App\Http\Controllers\CoreController;
use Illuminate\Support\Facades\Route;

Route::get('/language/{locale}', function ($locale) {
    app()->setlocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('actions.language.index');

Route::group(['middleware' => ['auth'], 'prefix' => '/admin'], function () {
    Route::get('/dashboard', [CoreController::class, 'index_view'])->name('views.core.index');

    Route::get('/data/search', [CoreController::class, 'search_action'])->name('actions.core.search');
});
