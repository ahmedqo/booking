@extends('shared.guest.base')
@section('title', ucwords(__('4-Day Private Desert Tour From Marrakech to Merzouga')))
@php
    Core::$route = 2;
@endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Explore Morocco on a 4-day desert tour from Marrakech to Merzouga. Visit Ait Ben Haddou, Dades Gorges, Erg Chebbi, and enjoy camel rides & starlit bivouacs.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Explore Morocco on a 4-day desert tour from Marrakech to Merzouga. Visit Ait Ben Haddou, Dades Gorges, Erg Chebbi, and enjoy camel rides & starlit bivouacs.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Explore Morocco on a 4-day desert tour from Marrakech to Merzouga. Visit Ait Ben Haddou, Dades Gorges, Erg Chebbi, and enjoy camel rides & starlit bivouacs.',
    ) !!}">
    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/merzouga/merzouga-1.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/merzouga/merzouga-1.webp') }}">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "{{ __('4-Day Private Desert Tour From Marrakech to Merzouga') }}",
  "description": "{{ __('Explore Morocco on a 4-day desert tour from Marrakech to Merzouga. Visit Ait Ben Haddou, Dades Gorges, Erg Chebbi, and enjoy camel rides & starlit bivouacs.') }}",
  "image": [
    "{{ asset('img/merzouga/merzouga-1.webp') }}",
    "{{ asset('img/zagora/zagora-1.webp') }}",
    "{{ asset('img/merzouga/merzouga-2.webp') }}",
    "{{ asset('img/zagora/zagora-2.webp') }}",
    "{{ asset('img/merzouga/merzouga-3.webp') }}"
  ],
  "touristType": "{{ __('Adventure Seekers, Culture Enthusiasts, Desert Lovers') }}",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "{{ __('Departure from Marrakech') }}",
        "description": "{{ __('Start your journey with a scenic drive through the Atlas Mountains and the Tichka Pass.') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "{{ __('Ait Ben Haddou Kasbah') }}",
        "description": "{{ __('Explore the historic UNESCO World Heritage site and its iconic mud-brick architecture.') }}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "{{ __('Camel Ride and Bivouac in Zagora') }}",
        "description": "{{ __('Enjoy a camel ride to a desert camp in Zagora and spend the night under a starry sky.') }}"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "{{ __('Exploration in Ouarzazate') }}",
        "description": "{{ __('Visit the 'Hollywood of Africa' and its film studios or take time to explore the city.') }}"
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "{{ __('Todra and Dades Gorges') }}",
        "description": "{{ __('Marvel at the dramatic canyon walls of Todra Gorges and the serene landscapes of Dades Gorges.') }}"
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "{{ __('Erg Chebbi and Merzouga Desert') }}",
        "description": "{{ __('Experience the mesmerizing dunes of Erg Chebbi with a sunset camel ride and a magical bivouac stay.') }}"
      },
      {
        "@type": "ListItem",
        "position": 7,
        "name": "{{ __('Return to Marrakech') }}",
        "description": "{{ __('Travel back through the Valley of Roses and Ouarzazate, crossing the Tichka Pass back to Marrakech.') }}"
      }
    ]
  },
  "offers": [
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "600",
      "description": "{{ __('Price for 2 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 2
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "700",
      "description": "{{ __('Price for 3 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 3
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "800",
      "description": "{{ __('Price for 4 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 4
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "900",
      "description": "{{ __('Price for 5 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 5
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "1000",
      "description": "{{ __('Price for 6 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 6
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "1980",
      "description": "{{ __('Price for 7 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 7
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "2080",
      "description": "{{ __('Price for 8 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 8
      }
    }
  ],
  "provider": {
    "@type": "TouristInformationCenter",
    "name": "{{ __('Morocco Adventure City') }}",
    "url": "{{ route('views.guest.index') }}",
    "logo": "{{ asset('img/logo.png') }}",
    "sameAs": [
      "https://www.facebook.com/moroccoadventurecity",
      "https://www.instagram.com/moroccoadventurecity",
      "https://twitter.com/moroccoadventurecity"
    ],
    "telephone": "{{ env('APP_PHONE_NUMBER') }}",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "{{ env('APP_EMAIL_ADDRESS') }}",
      "addressLocality": "Marrakech",
      "addressRegion": "Marrakech-Safi",
      "postalCode": "40000",
      "addressCountry": "MA"
    }
  },
  "duration": "P4D",
  "startDate": "{{ now()->toIso8601String() }}",
  "endDate": "{{ now()->addDays(4)->toIso8601String() }}"
}
</script>



@endsection


@section('content')
    @include('shared.guest.topbar', [
        'title' => __('Epic 4-Day - 3 Nights Excursion From Marrakech to Merzouga'),
        'start' => [route('views.guest.private'), __('Private Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => __('zagora & merzouga trip image'),
                        'img' => [
                            asset('img/merzouga/merzouga-1.webp'),
                            asset('img/zagora/zagora-1.webp'),
                            asset('img/merzouga/merzouga-2.webp'),
                            asset('img/zagora/zagora-2.webp'),
                            asset('img/merzouga/merzouga-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('4-Day / 3-Night Excursion to Zagora and Merzouga from Marrakech.') }}
                    </p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        <h2 class="font-x-thin text-2xl text-x-acent">
                            {{ ucwords(__('Price Ranges')) }}
                        </h2>
                        @include('shared.guest.price', [
                            'items' => [
                                2 => '600',
                                3 => '700',
                                4 => '800',
                                5 => '900',
                                6 => '1000',
                                7 => '1980',
                                8 => '2080',
                                9 => '2180',
                                10 => '2280',
                                11 => '2380',
                                12 => '2480',
                                13 => '2580',
                                14 => '2680',
                                15 => '2780',
                                16 => '3000',
                                17 => '3100',
                            ],
                        ])
                    </div>
                    <a href="#reservation"
                        class="flex lg:hidden w-full items-center justify-center px-10 py-4 font-x-huge rounded-x-huge text-x-white text-2xl outline-none bg-teal-500 hover:bg-teal-400 focus:bg-teal-400 relative isolate">
                        <div
                            class="absolute w-[calc(100%+10px)] h-[calc(100%+10px)] -left-[5px] -top-[5px] z-[-1] rounded-x-huge overflow-hidden">
                            <div class="w-full h-full animate-ping bg-teal-500"></div>
                        </div>
                        {{ strtoupper(__('book now')) }}
                    </a>
                </div>
                <div class="flex flex-col gap-4">
                    <h2 class="font-x-thin text-2xl text-x-acent">
                        {{ ucwords(__('About this activity')) }}
                    </h2>
                    <div class="border border-x-shade rounded-x-huge p-6">
                        @include('shared.guest.list', [
                            'list' => [
                                __('Duration: 4 Days / 3 Nights'),
                                __('Departure: 7:00 AM | Return: 8:00 PM'),
                                __('Accepted: Printed or mobile confirmation vouchers'),
                                __('Instant booking confirmation'),
                                __(
                                    'Hotel or Riad pick-up in Marrakech included. For Medina locations, pick-up will be arranged at the nearest accessible spot.'),
                                __('Free cancellation available'),
                            ],
                        ])
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <h2 class="font-x-thin text-2xl text-x-acent">
                        {{ ucwords(__('Highlights')) }}
                    </h2>
                    <div class="border border-x-shade rounded-x-huge p-6">
                        @include('shared.guest.list', [
                            'list' => [
                                __(
                                    'Atlas Mountains: Traverse the scenic Tichka Pass and enjoy unparalleled views.'),
                                __('Ait Ben Haddou Kasbah: Step back in time at this UNESCO World Heritage site.'),
                                __(
                                    'Ouarzazate: Discover the cultural and cinematic history of the “Hollywood of Africa.”'),
                                __('Todra Gorges: Marvel at towering canyon walls carved by nature.'),
                                __('Erg Chebbi: Experience the mesmerizing dunes of the Merzouga desert.'),
                                __('Camel Rides: Enjoy serene treks through golden sands.'),
                                __('Desert Bivouacs: Spend magical nights under a starry sky.'),
                            ],
                        ])
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <h2 class="font-x-thin text-2xl text-x-acent">
                        {{ ucwords(__('Description')) }}
                    </h2>
                    <div class="border border-x-shade rounded-x-huge p-6">
                        <div class="flex flex-col gap-6">
                            <p class="text-x-black text-lg font-normal">
                                {{ ucfirst(__('Epic 4-Day - 3 nights Excursion From Marrakech to Merzouga: A Journey Through Morocco\'s Hidden Gems')) }}
                            </p>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 1: From Marrakech to Zagora – A Gateway to the Desert')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('The Journey Begins')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your adventure kicks off in the vibrant city of Marrakech. Leaving behind the bustling streets, you\'ll traverse the Tichka Pass, a breathtaking mountain pass perched at an altitude of 2,260 meters. The scenic drive offers a feast for the eyes, with panoramic views of the majestic Atlas Mountains.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Ait Ben Haddou Kasbah – A Step Back in Time')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your first stop is the iconic Ait Ben Haddou Kasbah, a UNESCO World Heritage site. This ancient, fortified village boasts mud-brick structures that tell stories of a time long past. As you wander through its winding alleys, you\'ll feel like you\'ve stepped onto the set of a Hollywood blockbuster.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Sunset Camel Ride and Desert Bivouac')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('As the sun dips below the horizon, you\'ll embark on a 1.5-hour camel ride through golden dunes. Arriving at your desert bivouac, you\'ll be treated to a magical evening under a canopy of stars. Dinner and traditional hospitality make this a night to remember.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Day 2: From Zagora to Dades Gorges – A Journey Through Morocco\'s Beauty')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Wake up early to witness the breathtaking sunrise over the dunes. After a light breakfast, you\'ll return to Zagora by camel, reliving the tranquility of the desert once more.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Free Exploration in Ouarzazate')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Back in Ouarzazate, you\'ll have 2.5 hours of free time to explore the city. Whether it\'s visiting the renowned film studios or simply soaking in the ambiance, the choice is yours.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Through Tinghir and the Todra Gorges')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your journey continues through the Valley of a Thousand Kasbahs, passing picturesque towns like Erfoud and Tinghir. One of the highlights is the Todra Gorges, where towering canyon walls create a dramatic natural wonder.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Arrival at Dades Gorges')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your day concludes at the stunning Dades Gorges, where unique rock formations and a serene atmosphere provide the perfect backdrop for a restful evening. Dinner and an overnight stay at a local hotel complete your day.')) }}
                                </p>
                            </div>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 3: From Dades Gorges to Merzouga – Into the Heart of the Desert')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Scenic Route to Merzouga')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'Your third day begins with a scenic drive through Nkoub and Tazzarine, where you\'ll stop for lunch. As you approach Merzouga, the landscape transforms into the mesmerizing dunes of Erg Chebbi, marking your entry into the Merzouga desert.',
                                        ),
                                    ) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Camel Ride and Starry Night in a Desert Bivouac')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('As the sun sets, you\'ll embark on another camel ride, this time to your desert camp. The serene beauty of the Merzouga desert excursion is unmatched, and you\'ll spend the night under a star-filled sky, enjoying a traditional dinner and the warm hospitality of the desert.')) }}
                                </p>
                            </div>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 4: From Merzouga to Marrakech – A Farewell to the Desert')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Sunrise Over the Dunes')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Start your final day with the magical sight of the sunrise illuminating the dunes. After breakfast, it\'s time to bid farewell to the desert.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Scenic Return to Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The return journey to Marrakech is just as enchanting. You\'ll pass through the Valley of Roses and Kalaat M\'gouna, where vibrant blooms add a pop of color to the arid landscape. A stop in Ouarzazate allows you to explore the Kasbah and film studios one last time before crossing the Tichka Pass back to Marrakech.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Why Choose This 4-Day Excursion?')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('This excursion from Marrakech to Merzouga offers an immersive journey through Morocco’s cultural and natural wonders. Whether it’s the timeless allure of the Merzouga desert, the historic charm of Ait Ben Haddou, or the dramatic landscapes of the Dades and Todra Gorges, every moment is designed to captivate your senses.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Book Your Adventure Today')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('This 4-day excursion from Marrakech to Merzouga is more than a trip it\'s an adventure that will leave you with memories to last a lifetime. From the bustling streets of Marrakech to the tranquil dunes of Merzouga, this journey offers a glimpse into Morocco\'s soul. Don\'t wait—book now and let the magic of the desert captivate you!')) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-10">
                <div class="hidden lg:flex flex-col gap-10">
                    <a href="#reservation"
                        class="flex w-full items-center justify-center px-10 py-4 font-x-huge rounded-x-huge text-x-white text-2xl outline-none bg-teal-500 hover:bg-teal-400 focus:bg-teal-400 relative isolate">
                        <div
                            class="absolute w-[calc(100%+10px)] h-[calc(100%+10px)] -left-[5px] -top-[5px] z-[-1] rounded-x-huge overflow-hidden">
                            <div class="w-full h-full animate-ping bg-teal-500"></div>
                        </div>
                        {{ strtoupper(__('book now')) }}
                    </a>
                </div>
                @include('shared.guest.extra', [
                    'private' => true,
                ])
            </div>
        </div>
    </section>
    @include('shared.guest.reserve', [
        'type' => 'private zagora and merzouga excursion',
    ])
@endsection
