<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/language/{locale}', function ($locale) {
    app()->setlocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('actions.language.index');

Route::get('/test', function () {
    function extractTranslationStrings($content)
    {
        // Regex pattern to match the text within __()
        $pattern = '/__\(\s*[\'"](.+?)[\'"]\s*\)/';

        // Initialize an array to store matches
        $matches = [];

        // Use preg_match_all to find all occurrences
        preg_match_all($pattern, $content, $matches);

        // Return the array of matches
        return $matches[1]; // Return only the first capturing group
    }

    // Example usage
    $content = "  = collect([
            (object) [
                'image' => asset('img/excursions/the-ouzoud-falls.webp'),
                'title' => __('Ouzoud Trip'),
                'desc' => __(
                    'Embarking on a trip to Ouzoud promises a refreshing escape into nature to witness one of Morocco\'s most spectacular waterfalls',
                ),
                'price' => '20',
                'time' => '4 ' . __('hours'),
                'url' => route('views.excursions.ouzoud'),
            ],
            (object) [
                'image' => asset('img/excursions/zagoura-trip.webp'),
                'title' => __('Zagoura Excursions'),
                'desc' => __(
                    'Traveling from Marrakech to Zagoura offers an opportunity to experience the stunning landscapes of Morocco\'s desert region',
                ),
                'price' => '65',
                'time' => '2 ' . __('days') . ' / 1 ' . __('nights'),
                'url' => route('views.excursions.zagoura'),
            ],
            (object) [
                'image' => asset('img/excursions/merzouga-trip.webp'),
                'title' => __('Merzouga Excursions'),
                'desc' => __(
                    'Embarking on an excursion to Merzouga from Marrakech promises an unforgettable adventure through landscapes of Morocco\'s Sahara Desert',
                ),
                'price' => '85',
                'time' => '3 ' . __('days') . ' / 2 ' . __('nights'),
                'url' => route('views.excursions.merzouga'),
            ],
            (object) [
                'image' => asset('img/excursions/zagoura-and-merzouga-trip.webp'),
                'title' => __('Merzouga & Zagoura'),
                'desc' => __('Combining visits to both Merzouga and Zagoura offers a exploration of Morocco\'s desert'),
                'price' => '145',
                'time' => '4 ' . __('days') . ' / 3 ' . __('nights'),
                'url' => route('views.excursions.zagmer'),
            ],
            (object) [
                'image' => asset('img/excursions/a-day-in-essaouira.webp'),
                'title' => __('Excursion to Essaouira'),
                'desc' => __(
                    'The port city of Essaouira, Discover the medina, the beach, the port, the souks, craft galleries',
                ),
                'price' => '20',
                'time' => '1 ' . __('day'),
                'url' => route('views.excursions.essaouira'),
            ],
            (object) [
                'image' => asset('img/excursions/a-day-in-ourika.webp'),
                'title' => __('Excursion to Ourika'),
                'desc' => __(
                    'The Ourika Valley attracts tourists looking for green space and an exceptional landscape',
                ),
                'price' => '15',
                'time' => '1 ' . __('day'),
                'url' => route('views.excursions.ourika'),
            ],
            (object) [
                'image' => asset('img/excursions/marrakech-historical-visit.webp'),
                'title' => __('Historical Visit'),
                'desc' => __(
                    'Visiting Marrakech for its historical sites is an excellent! is steeped in history and culture',
                ),
                'price' => '10',
                'time' => '4 ' . __('hours'),
                'url' => route('views.excursions.historical'),
            ],
            (object) [
                'image' => asset('img/excursions/majorelle-gardens-and-souks.webp'),
                'title' => __('Majorelle & Souks'),
                'desc' => __('Exploring the Majorelle Gardens and the bustling souks of Marrakech'),
                'price' => '20',
                'time' => '1 ' . __('day'),
                'url' => route('views.excursions.majorelle'),
            ],
            (object) [
                'image' => asset('img/excursions/ouarzazate-trip.webp'),
                'title' => __('Ouarzazate Trip'),
                'desc' => __('Embarking on a trip to Ouarzazate promises a captivating journey through Morocco\'s'),
                'price' => '30',
                'time' => '1 ' . __('day'),
                'url' => route('views.excursions.ouarzazate'),
            ],
            (object) [
                'image' => asset('img/excursions/chez-ali-trip.webp'),
                'title' => __('CHEZ ALI Trip'),
                'desc' => __(
                    'Enjoy a magical night in the ambiance of One Thousand and One Nights at the Chez Ali complex on the outskirts of Marrakech',
                ),
                'price' => '45',
                'time' => '4 ' . __('hours'),
                'url' => route('views.excursions.ali'),
            ],
            (object) [
                'image' => asset('img/excursions/a-quad-biking-day.webp'),
                'title' => __('Quad Ride'),
                'desc' => __(
                    'Embarking on a quad biking adventure in the desert can be an exhilarating experience, offering a unique way to explore the rugged terrain',
                ),
                'price' => '30',
                'time' => '2 ' . __('hours'),
                'url' => route('views.excursions.quad'),
            ],
            (object) [
                'image' => asset('img/excursions/buggy-ride.webp'),
                'title' => __('Buggy Ride'),
                'desc' => __(
                    'Embarking on a buggy ride adventure offers an exciting and exhilarating way to explore the Moroccan countryside, desert terrain',
                ),
                'price' => '90',
                'time' => '2 ' . __('hours'),
                'url' => route('views.excursions.buggy'),
            ],
            (object) [
                'image' => asset('img/excursions/a-camel-biking-day.webp'),
                'title' => __('Camel Ride'),
                'desc' => __(
                    'Embarking on a camel ride through the palm grove near Marrakech offers a serene and scenic way to explore the lush oasis landscape',
                ),
                'price' => '20',
                'time' => '2 ' . __('hours'),
                'url' => route('views.excursions.camel'),
            ],
        ]);";

    $result = extractTranslationStrings($content);

    // Output the result
    print_r($result);
});

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
        'slug' => 'zagoura-trip',
        'view' => 'zagoura',
    ], [
        'slug' => 'merzouga-trip',
        'view' => 'merzouga',
    ], [
        'slug' => 'zagoura-and-merzouga-trip',
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
        'slug' => 'zagoura-trip',
        'view' => 'zagoura',
    ], [
        'slug' => 'merzouga-trip',
        'view' => 'merzouga',
    ], [
        'slug' => 'zagoura-and-merzouga-trip',
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
