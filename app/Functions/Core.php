<?php

namespace App\Functions;

use App\Models\Reminder;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Core
{
    public static $route = 0;

    public static function nav()
    {
        return [__('Home') => route('views.guest.index'), __('Excursions') => route('views.guest.excursion'), __('Private Excursions') => route('views.guest.private'), __('Transfers') => route('views.guest.transfer'), __('About Us') => route('views.guest.about'), __('Contact') => route('views.guest.contact')];
    }

    public static function trips($private = false)
    {
        return $private ? collect([
            (object) [
                'image' => asset('img/excursions/the-ouzoud-falls.webp'),
                'title' => __('Ouzoud Trip'),
                'desc' => __(
                    'Embarking on a trip to Ouzoud promises a refreshing escape into nature to witness one of Morocco\'s most spectacular waterfalls',
                ),
                'price' => '150',
                'time' => '4 ' . __('hours'),
                'hours' => 4,
                'url' => route('views.privates.ouzoud'),
            ],
            (object) [
                'image' => asset('img/excursions/zagora-trip.webp'),
                'title' => __('Zagora Excursions'),
                'desc' => __(
                    'Traveling from Marrakech to Zagora offers an opportunity to experience the stunning landscapes of Morocco\'s desert region',
                ),
                'price' => '280',
                'time' => '2 ' . __('days') . ' / 1 ' . __('nights'),
                'hours' => 48,
                'url' => route('views.privates.zagora'),
            ],
            (object) [
                'image' => asset('img/excursions/merzouga-trip.webp'),
                'title' => __('Merzouga Excursions'),
                'desc' => __(
                    'Embarking on an excursion to Merzouga from Marrakech promises an unforgettable adventure through landscapes of Morocco\'s Sahara Desert',
                ),
                'price' => '450',
                'time' => '3 ' . __('days') . ' / 2 ' . __('nights'),
                'hours' => 72,
                'url' => route('views.privates.merzouga'),
            ],
            (object) [
                'image' => asset('img/excursions/zagora-and-merzouga-trip.webp'),
                'title' => __('Merzouga & Zagora'),
                'desc' => __('Combining visits to both Merzouga and Zagora offers a exploration of Morocco\'s desert'),
                'price' => '600',
                'time' => '4 ' . __('days') . ' / 3 ' . __('nights'),
                'hours' => 96,
                'url' => route('views.privates.zagmer'),
            ],
            (object) [
                'image' => asset('img/excursions/a-day-in-essaouira.webp'),
                'title' => __('Excursion to Essaouira'),
                'desc' => __(
                    'The port city of Essaouira, Discover the medina, the beach, the port, the souks, craft galleries',
                ),
                'price' => '150',
                'time' => '1 ' . __('day'),
                'hours' => 24,
                'url' => route('views.privates.essaouira'),
            ],
            (object) [
                'image' => asset('img/excursions/a-day-in-ourika.webp'),
                'title' => __('Excursion to Ourika'),
                'desc' => __(
                    'The Ourika Valley attracts tourists looking for green space and an exceptional landscape',
                ),
                'price' => '90',
                'time' => '1 ' . __('day'),
                'hours' => 24,
                'url' => route('views.privates.ourika'),
            ],
            (object) [
                'image' => asset('img/excursions/ouarzazate-trip.webp'),
                'title' => __('Ouarzazate Trip'),
                'desc' => __('Embarking on a trip to Ouarzazate promises a captivating journey through Morocco\'s'),
                'price' => '160',
                'time' => '1 ' . __('day'),
                'hours' => 24,
                'url' => route('views.privates.ouarzazate'),
            ],
        ]) : collect([
            (object) [
                'image' => asset('img/excursions/the-ouzoud-falls.webp'),
                'title' => __('Ouzoud Trip'),
                'desc' => __(
                    'Embarking on a trip to Ouzoud promises a refreshing escape into nature to witness one of Morocco\'s most spectacular waterfalls',
                ),
                'price' => '20',
                'time' => '4 ' . __('hours'),
                'hours' => 4,
                'url' => route('views.excursions.ouzoud'),
            ],
            (object) [
                'image' => asset('img/excursions/zagora-trip.webp'),
                'title' => __('Zagora Excursions'),
                'desc' => __(
                    'Traveling from Marrakech to Zagora offers an opportunity to experience the stunning landscapes of Morocco\'s desert region',
                ),
                'price' => '65',
                'time' => '2 ' . __('days') . ' / 1 ' . __('nights'),
                'hours' => 48,
                'url' => route('views.excursions.zagora'),
            ],
            (object) [
                'image' => asset('img/excursions/merzouga-trip.webp'),
                'title' => __('Merzouga Excursions'),
                'desc' => __(
                    'Embarking on an excursion to Merzouga from Marrakech promises an unforgettable adventure through landscapes of Morocco\'s Sahara Desert',
                ),
                'price' => '85',
                'time' => '3 ' . __('days') . ' / 2 ' . __('nights'),
                'hours' => 72,
                'url' => route('views.excursions.merzouga'),
            ],
            (object) [
                'image' => asset('img/excursions/zagora-and-merzouga-trip.webp'),
                'title' => __('Merzouga & Zagora'),
                'desc' => __('Combining visits to both Merzouga and Zagora offers a exploration of Morocco\'s desert'),
                'price' => '145',
                'time' => '4 ' . __('days') . ' / 3 ' . __('nights'),
                'hours' => 96,
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
                'hours' => 24,
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
                'hours' => 24,
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
                'hours' => 4,
                'url' => route('views.excursions.historical'),
            ],
            (object) [
                'image' => asset('img/excursions/medina-and-souks.webp'),
                'title' => __('Medina and Souks'),
                'desc' => __('Exploring the Majorelle Gardens and the bustling souks of Marrakech'),
                'price' => '20',
                'time' => '1 ' . __('day'),
                'hours' => 24,
                'url' => route('views.excursions.medina'),
            ],
            (object) [
                'image' => asset('img/excursions/ouarzazate-trip.webp'),
                'title' => __('Ouarzazate Trip'),
                'desc' => __('Embarking on a trip to Ouarzazate promises a captivating journey through Morocco\'s'),
                'price' => '30',
                'time' => '1 ' . __('day'),
                'hours' => 24,
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
                'hours' => 4,
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
                'hours' => 2,
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
                'hours' => 2,
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
                'hours' => 2,
                'url' => route('views.excursions.camel'),
            ],
        ]);
    }

    public static function matchRoute($str)
    {
        return Str::contains(request()->path(), $str);
    }

    public static function subString($str, $max = 157)
    {
        if (strlen($str) > $max) {
            $output = substr($str, 0, $max);
            return $output . '...';
        } else {
            return $str;
        }
    }

    public static function lang($lang = null)
    {
        return $lang ? app()->getLocale() == $lang : app()->getLocale();
    }

    public static function genderList()
    {
        return ['male', 'female'];
    }

    public static function pickupList()
    {
        return ['hotel', 'riad'];
    }

    public static function nationsList()
    {
        return  [
            'afghanistan', 'albania', 'algeria', 'united states', 'andorra', 'angola', 'anguilla', 'antigua and barbuda', 'argentina', 'armenia', 'australia', 'austria', 'azerbaijan', 'bahamas', 'bahrain', 'bangladesh', 'barbados', 'belarus', 'belgium', 'belize', 'benin', 'bermuda', 'bhutan', 'bolivia', 'bosnia and herzegovina', 'botswana', 'brazil', 'united kingdom', 'british virgin islands', 'brunei', 'bulgaria', 'burkina faso', 'myanmar', 'burundi', 'cambodia', 'cameroon', 'canada', 'cape verde', 'cayman islands', 'central african republic', 'chad', 'chile', 'china', 'colombia', 'comoros', 'congo', 'congo (drc)', 'cook islands', 'costa rica', 'croatia', 'cuba', 'wales', 'cyprus', 'czech republic', 'denmark', 'djibouti', 'dominica', 'dominican republic', 'netherlands', 'timor-leste', 'ecuador', 'egypt', 'united arab emirates', 'england', 'equatorial guinea', 'eritrea', 'estonia', 'ethiopia', 'faroe islands', 'fiji', 'philippines', 'finland', 'france', 'gabon', 'gambia', 'georgia', 'germany', 'ghana', 'gibraltar', 'greece', 'greenland', 'grenada', 'guam', 'guatemala', 'guinea-bissau', 'guinea', 'guyana', 'haiti', 'honduras', 'hong kong', 'hungary', 'iceland', 'india', 'indonesia', 'iran', 'iraq', 'ireland', 'israel', 'italy', 'ivory coast', 'jamaica', 'japan', 'jordan', 'kazakhstan', 'kenya', 'saint kitts and nevis', 'kiribati', 'kosovo', 'kuwait', 'kyrgyzstan', 'laos', 'latvia', 'lebanon', 'liberia', 'libya', 'liechtenstein', 'lithuania', 'luxembourg', 'macau', 'north macedonia', 'madagascar', 'malawi', 'malaysia', 'maldives', 'mali', 'malta', 'marshall islands', 'martinique', 'mauritania', 'mauritius', 'mexico', 'micronesia', 'moldova', 'monaco', 'mongolia', 'montenegro', 'montserrat', 'morocco', 'lesotho', 'mozambique', 'namibia', 'nauru', 'nepal', 'new zealand', 'nicaragua', 'nigeria', 'niger', 'niue', 'north korea', 'northern ireland', 'norway', 'oman', 'pakistan', 'palau', 'palestine', 'panama', 'papua new guinea', 'paraguay', 'peru', 'pitcairn islands', 'poland', 'portugal', 'puerto rico', 'qatar', 'romania', 'russia', 'rwanda', 'el salvador', 'san marino', 'samoa', 'sao tome and principe', 'saudi arabia', 'scotland', 'senegal', 'serbia', 'seychelles', 'sierra leone', 'singapore', 'slovakia', 'slovenia', 'solomon islands', 'somalia', 'south africa', 'south korea', 'south sudan', 'spain', 'sri lanka', 'saint helena', 'saint lucia', 'stateless', 'sudan', 'suriname', 'eswatini', 'sweden', 'switzerland', 'syria', 'taiwan', 'tajikistan', 'tanzania', 'thailand', 'togo', 'tonga', 'trinidad and tobago', 'tristan da cunha', 'tunisia', 'turkey', 'turkmenistan', 'turks and caicos islands', 'tuvalu', 'uganda', 'ukraine', 'uruguay', 'uzbekistan', 'vatican city', 'vanuatu', 'venezuela', 'vietnam', 'saint vincent and the grenadines', 'wallis and futuna', 'wales', 'yemen', 'zambia', 'zimbabwe'
        ];
    }
}
