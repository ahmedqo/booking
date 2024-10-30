<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/language/{locale}', function ($locale) {
    app()->setlocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('actions.language.index');

Route::view('/', 'guest.index')->name('views.guest.index');
Route::view('/about-us', 'guest.about')->name('views.guest.about');
Route::view('/contact-us', 'guest.contact')->name('views.guest.contact');
Route::view('/transfers', 'guest.transfer')->name('views.guest.transfer');
Route::view('/excursions', 'guest.excursion')->name('views.guest.excursion');
Route::view('/private-excursions', 'guest.private')->name('views.guest.private');

foreach ([
    [
        'slug' => 'the-ouzoud-falls',
        'view' => 'ouzoud',
    ], [
        'slug' => 'zagora-trip',
        'view' => 'zagora',
    ], [
        'slug' => 'merzouga-trip',
        'view' => 'merzouga',
    ], [
        'slug' => 'zagora-and-merzouga-trip',
        'view' => 'zagmer',
    ], [
        'slug' => 'a-day-in-essaouira',
        'view' => 'essaouira',
    ], [
        'slug' => 'a-day-in-ourika',
        'view' => 'ourika',
    ], [
        'slug' => 'ouarzazate-trip',
        'view' => 'ouarzazate',
    ], [
        'slug' => 'marrakech-historical-visit',
        'view' => 'historical',
    ], [
        'slug' => 'majorelle-gardens-and-souks',
        'view' => 'majorelle',
    ], [
        'slug' => 'chez-ali-trip',
        'view' => 'ali',
    ], [
        'slug' => 'a-quad-biking-day',
        'view' => 'quad',
    ], [
        'slug' => 'buggy-ride',
        'view' => 'buggy',
    ], [
        'slug' => 'a-camel-biking-day',
        'view' => 'camel',
    ]
] as $route) {
    Route::view('/excursions/' . $route['slug'], 'excursions.' . $route['view'])->name('views.excursions.' . $route['view']);
}


foreach ([
    [
        'slug' => 'the-ouzoud-falls',
        'view' => 'ouzoud',
    ], [
        'slug' => 'zagora-trip',
        'view' => 'zagora',
    ], [
        'slug' => 'merzouga-trip',
        'view' => 'merzouga',
    ], [
        'slug' => 'zagora-and-merzouga-trip',
        'view' => 'zagmer',
    ], [
        'slug' => 'a-day-in-essaouira',
        'view' => 'essaouira',
    ], [
        'slug' => 'a-day-in-ourika',
        'view' => 'ourika',
    ], [
        'slug' => 'ouarzazate-trip',
        'view' => 'ouarzazate',
    ]
] as $route) {
    Route::view('/private-excursions/' . $route['slug'], 'privates.' . $route['view'])->name('views.privates.' . $route['view']);
}


Route::post('/send-mail', [MailController::class, 'send'])->name('actions.mail.send');
