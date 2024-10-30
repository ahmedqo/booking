@extends('shared.guest.base')
@section('title', ucwords(__('Best Zagora Sahara Desert Tour & Excursion From Marrakech – 2-Day Trip')))
@php
    Core::$route = 1;
@endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Discover the Zagora Sahara Desert on a 2-day excursion from Marrakech. Enjoy camel rides, visit Ait Ben Haddou, and experience a magical night for just €65.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Discover the Zagora Sahara Desert on a 2-day excursion from Marrakech. Enjoy camel rides, visit Ait Ben Haddou, and experience a magical night for just €65.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Discover the Zagora Sahara Desert on a 2-day excursion from Marrakech. Enjoy camel rides, visit Ait Ben Haddou, and experience a magical night for just €65.',
    ) !!}">

    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/zagora/zagora-3.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/zagora/zagora-3.webp') }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Best Zagora Sahara Desert Tour & Excursion From Marrakech – 2-Day Trip",
  "description": "EDiscover the Zagora Sahara Desert on a 2-day excursion from Marrakech. Enjoy camel rides, visit Ait Ben Haddou, and experience a magical night for just €65.",
  "image": [
    "{{ asset('img/zagora/zagora-1.webp') }}",
    "{{ asset('img/zagora/zagora-2.webp') }}",
    "{{ asset('img/zagora/zagora-3.webp') }}"
  ],
  "touristType": "Adventurers, Culture Enthusiasts, Families",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Departure from Marrakech",
        "description": "Pick-up between 7:00 AM from your hotel or Riad in Marrakech."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Visit to Ait Ben Haddou Kasbah",
        "description": "Explore this UNESCO World Heritage site and learn about its rich history."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Lunch in Ouarzazate",
        "description": "Savor a traditional Moroccan meal in the ‘Hollywood of Africa’."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Camel ride and sunset in the Zagora Desert",
        "description": "Ride camels through the desert and watch a beautiful sunset before heading to your desert camp."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Overnight in a desert camp",
        "description": "Spend the night in a traditional desert bivouac under the stars."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Return to Marrakech",
        "description": "After breakfast, head back to Marrakech, arriving in the late evening."
      }
    ]
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "EUR",
    "price": "65.00",
    "availability": "https://schema.org/InStock",
    "validFrom": "{{ now()->toIso8601String() }}",
    "url": "{{ route('views.excursions.zagora') }}",
    "description": "Book your 2-day Zagora Desert Trip from Marrakech, including camel rides, a night in a desert camp, and a visit to Ouarzazate."
  },
  "provider": {
    "@type": "TouristInformationCenter",
    "name": "Morocco Adventure City",
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
  "duration": "P2D",
  "startDate": "{{ now()->toIso8601String() }}",
  "endDate": "{{ now()->addDays(2)->toIso8601String() }}"
}
</script>
@endsection

@section('content')
    @include('shared.guest.topbar', [
        'title' => __('zagora trip'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'zagora trip image',
                        'img' => [
                            asset('img/zagora/zagora-1.webp'),
                            asset('img/zagora/zagora-2.webp'),
                            asset('img/zagora/zagora-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('2-Day / 1-Night Excursion to Zagora from Marrakech.') }}
                    </p>
                </div>
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('65 € / Person') }}
                        </div>
                    </div>
                    <a href="#reservation"
                        class="flex w-full items-center justify-center px-10 py-4 font-x-huge rounded-x-huge text-x-white text-2xl outline-none bg-teal-500 hover:bg-teal-400 focus:bg-teal-400 relative isolate">
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
                                __('Duration 2 Days / 1 Nights'),
                                __('Departure at 07:00 & Return at 20:00'),
                                __('Printed or mobile confirmation vouchers are accepted'),
                                __('Immediate confirmation'),
                                __(
                                    'Pick-up from your hotel or Riad in Marrakech. If your Riad is located in the Medina, pick-up will be arranged at a nearby accessible location, as close as possible to your Riad or Hotel'),
                                __('Free cancellation'),
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
                                __('Explore the beautiful city of Ouarzazate'),
                                __('Admire the stunning landscapes of the Atlas Mountains and the Tichka Pass'),
                                __('Discover the magnificent Kasbah of Ait Ben Haddou'),
                                __('Enjoy a camel ride in the desert'),
                                __('Marvel at the beautiful Draa Valley, the largest oasis in southern Morocco'),
                                __('Spend a night in a desert bivouac under a beautiful and clear starry sky'),
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
                                {{ ucfirst(__('Exploring the Marrakech-Zagora Excursion:  A Journey Through Morocco’s Hidden Gem.')) }}
                            </p>
                            <div class="flex flex-col gap-2">
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Are you looking for an authentic Moroccan desert experience that takes you right into the heart of Morocco\'s rich cultural heritage? Look no further! Our Zagora desert tour is tailored just for you, where adventure meets tradition, and the breathtaking beauty of Zagora\'s Sahara Desert leaves a lasting impression. Discover why our special Zagora desert excursion should be on every traveler\'s bucket list, as we dive into the charm of this lesser-known desert and guide you through an unforgettable two-day journey from Marrakech.')) }}
                                </p>
                            </div>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 01: Zagora From Marrakech to Zagora Desert')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('The Adventure Begins: Leaving Marrakech Behind')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your advanture kicks off in the vibrant sunny city of Marrakech. This city is the perfect contrast to the tranquil desert awaiting you. As the excitement builds, you\'ll leave behind the chaotic charm of Marrakech and begin your scenic ascent from Tichka Pass at 2260 meters altitude through the High Atlas Mountains offering breathtaking views.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Step Back in Time: The Ait Ben Haddou Kasbah')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('No trip to the Zagora desert would be complete without a visit to the Ait Ben Haddou Kasbah, a UNESCO World Heritage site and an iconic symbol of Morocco\'s ancient past. This fortified mud-brick village is a testament to the country\'s rich history, standing as one of the best-preserved examples of southern Moroccan architecture. Whether you\'re a history buff or simply appreciate beautiful sights, exploring the Kasbah\'s labyrinth of alleyways, towers, and battlements is like stepping back in time.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Lunch in Ouarzazate: The Gateway to the Sahara')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After soaking in the history at Ait Ben Haddou, the journey continues to Ouarzazate, known as the "Hollywood of Africa" due to its numerous film studios. You\'ll enjoy a delicious lunch, recharging for the adventure ahead.')) }}
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Crossing The Draa Valley And Arrival In Zagora')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After leaving Ouarzazate, the real desert adventure begins as you pass through the Draa Valley, a lush oasis lined with towering palm trees and flanked by majestic mountains. This stretch of the journey is often described as one of the most scenic in Morocco, with its blend of greenery, villages, and desert landscapes. The Draa Valley serves as the gateway to the Zagora desert, where endless dunes and golden sands await. By the time you reach Zagora, you’ll feel as though you’ve entered another world. This small town, nestled on the edge of the Sahara, is where the magic of the desert truly begins. Known as the “gateway to the desert,” Zagora is your starting point for an unforgettable Zagora desert excursion.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Camel Ride Through the Zagora Dunes at Sunset')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('One of the most iconic experiences of any desert trip is the camel ride, and in Zagora, you\'ll have the chance to mount your trusty steed and set off into the rolling dunes. As the sun begins to dip below the horizon, casting a warm glow over the sands, the desert comes alive in a way that words can hardly describe. Riding through the Zagora Sahara Desert at sunset is not just an adventure; it\'s a moment of pure magic. You\'ll spend the night, an authentic and magical experience. (Half-board)')) }}

                                </p>
                            </div>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 2: Return to Marrakech, But the Memories Stay Forever')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Early Departure from Zagora')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The next morning, you\'ll leave Zagora, carrying unforgettable memories of your night in the desert. Your destination is Ouarzazate, passing through the Agdz region.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Stop in Ouarzazate: Film Studios and Another Kasbah')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('On your way back to Marrakech, you\'ll have the chance to stop once again in Ouarzazate, if the time is permitting, you can visit the famous film studios or explore another impressive kasbah. It\'s the perfect way to wrap up your trip, soaking in a bit more of Morocco\'s rich film and architectural heritage before heading home.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Return to Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After this fulfilling day, it will be time to hit the road back to Marrakech. You\'ll cross the Tichka Pass again, enjoying panoramic views, before returning to Marrakech around 8:00 PM')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The Marrakech to Zagora excursion is an epic adventure that allows you to discover the beauty of Morocco, from its cultural heritage to its desert landscapes, including its renowned film studios. Book your spot now for an unforgettable experience.')) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-10">
                <div class="hidden lg:flex flex-col gap-10">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('65 € / Person') }}
                        </div>
                    </div>
                    <a href="#reservation"
                        class="flex w-full items-center justify-center px-10 py-4 font-x-huge rounded-x-huge text-x-white text-2xl outline-none bg-teal-500 hover:bg-teal-400 focus:bg-teal-400 relative isolate">
                        <div
                            class="absolute w-[calc(100%+10px)] h-[calc(100%+10px)] -left-[5px] -top-[5px] z-[-1] rounded-x-huge overflow-hidden">
                            <div class="w-full h-full animate-ping bg-teal-500"></div>
                        </div>
                        {{ strtoupper(__('book now')) }}
                    </a>
                </div>
                @include('shared.guest.extra')
            </div>
        </div>
    </section>
    @include('shared.guest.reserve', [
        'type' => 'zagora excursion',
    ])
@endsection
