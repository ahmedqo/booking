@extends('shared.guest.base')
@section('title', ucwords(__('Private Day Trip to Essaouira From Marrakech')))
@php
    Core::$route = 2;
@endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Book a private day trip to Essaouira from Marrakech. Explore the Medina, Skala ramparts, enjoy fresh seafood, camel rides, and discover its rich history.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Book a private day trip to Essaouira from Marrakech. Explore the Medina, Skala ramparts, enjoy fresh seafood, camel rides, and discover its rich history.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Book a private day trip to Essaouira from Marrakech. Explore the Medina, Skala ramparts, enjoy fresh seafood, camel rides, and discover its rich history.',
    ) !!}">
    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/essaouira/essaouira-1.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/essaouira/essaouira-1.webp') }}">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "{{ __('Private Day Trip to Essaouira From Marrakech') }}",
  "description": "{{ __('Book a private day trip to Essaouira from Marrakech. Explore the Medina, Skala ramparts, enjoy fresh seafood, camel rides, and discover its rich history.') }}",
  "image": [
    "{{ asset('img/essaouira/essaouira-1.webp') }}",
    "{{ asset('img/essaouira/essaouira-2.webp') }}",
    "{{ asset('img/essaouira/essaouira-3.webp') }}"
  ],
  "touristType": "{{  __('Culture Enthusiasts, Food Lovers, Coastal Explorers') }}",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "{{ __('Departure from Marrakech') }}",
        "description": "{{ __('Begin your journey with a private pick-up from your hotel or Riad in Marrakech, traveling through scenic Moroccan countryside.') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "{{ __('Arrival in Essaouira') }}",
        "description": "{{ __('Arrive at the coastal city of Essaouira, a UNESCO World Heritage site, known for its relaxed vibe and stunning seascapes.') }}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "{{ __('Explore the Medina') }}",
        "description": "{{ __('Discover Essaouira\'s vibrant Medina with narrow alleys, art galleries, and boutique shops at your own pace.') }}"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "{{ __('Visit the Skala Ramparts') }}",
        "description": "{{ __('Walk along the fortified Skala ramparts for breathtaking views of the Atlantic Ocean and historic cannons.') }}"
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "{{ __('Savor Fresh Seafood') }}",
        "description": "{{ __('Enjoy freshly caught seafood at a traditional Essaouira restaurant, a must-try culinary experience.') }}"
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "{{ __('Optional Camel Ride') }}",
        "description": "{{ __('Take a peaceful camel ride along Essaouira\'s beach, a unique way to enjoy the coastal scenery.') }}"
      },
      {
        "@type": "ListItem",
        "position": 7,
        "name": "{{ __('Explore the Jewish Quarter') }}",
        "description": "{{ __('Discover the history and culture of Essaouira\'s Jewish quarter, including centuries-old synagogues.') }}"
      },
      {
        "@type": "ListItem",
        "position": 8,
        "name": "{{ __('Return to Marrakech') }}",
        "description": "{{ __('Relax on your journey back to Marrakech, arriving at your hotel or Riad around 8:00 PM.') }}"
      }
    ]
  },
  "offers": [
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "150",
      "description": "{{ __('Price for 2 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 2
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "170",
      "description": "{{ __('Price for 8 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 8
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "180",
      "description": "{{ __('Price for 18 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 18
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
  "duration": "P1D",
  "startDate": "{{ now()->toIso8601String() }}",
  "endDate": "{{ now()->toIso8601String() }}"
}
</script>


@endsection



@section('content')
    @include('shared.guest.topbar', [
        'title' => __('Private Day Trip to Essaouira From Marrakech'),
        'start' => [route('views.guest.private'), __('Private Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => __('a day in essaouira image'),
                        'img' => [
                            asset('img/essaouira/essaouira-1.webp'),
                            asset('img/essaouira/essaouira-2.webp'),
                            asset('img/essaouira/essaouira-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Explore the city of winds and Discover the Serenity of Essaouira.') }}
                    </p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        <h2 class="font-x-thin text-2xl text-x-acent">
                            {{ ucwords(__('Price Ranges')) }}
                        </h2>
                        @include('shared.guest.price', [
                            'items' => [
                                2 => '150',
                                3 => '150',
                                4 => '150',
                                5 => '150',
                                6 => '150',
                                7 => '150',
                                8 => '170',
                                9 => '170',
                                10 => '170',
                                11 => '170',
                                12 => '170',
                                13 => '170',
                                14 => '170',
                                15 => '170',
                                16 => '170',
                                17 => '180',
                                18 => '180',
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
                                __('Duration: Full Day'),
                                __('Pick-up: Between 8:00 AM and 9:00 AM, depending on your hotel location'),
                                __('Return: Approximately 8:00 PM'),
                                __('Instant booking confirmation'),
                                __(
                                    'Hotel or Riad pick-up in Marrakech included. For Medina locations, pick-up will be arranged at the nearest accessible point'),
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
                                __('Discover Essaouira\'s UNESCO-listed Medina at your own pace.'),
                                __('Marvel at the Skala ramparts with panoramic views of the Atlantic Ocean.'),
                                __('Savor the freshest seafood in local restaurants.'),
                                __(
                                    'Enjoy optional activities like a camel ride or a visit to the Jewish quarter.'),
                                __(
                                    'Travel in style with a private vehicle, ensuring comfort and flexibility throughout the day.'),
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
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Private Day Trip to Essaouira From Marrakech: A Coastal Escape Like No Other')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Looking for a personalized and enriching experience away from the bustling streets of Marrakech? This private day trip to Essaouira from Marrakech offers a perfect balance of culture, history, and coastal beauty. With a tailored itinerary designed just for you, this excursion ensures an unforgettable journey filled with picturesque landscapes, delicious cuisine, and unique cultural experiences.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Departure From Marrakech: Your Private Adventure Begins')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your journey begins at 9:00 AM as your private driver picks you up from your hotel or riad in Marrakech. Unlike group tours, this exclusive excursion gives you the flexibility to enjoy the journey at your own pace. Sit back and relax as you travel through scenic Moroccan countryside, dotted with argan trees and local villages. Feel free to stop along the way for photos or a coffee break, immersing yourself in the serene surroundings.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Arrival in Essaouira: The Jewel of the Atlantic')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('By 11:00 AM, you\'ll arrive in the historic coastal city of Essaouira, a UNESCO World Heritage site. Known for its relaxed vibe, this charming port city boasts a perfect blend of culture, art, and stunning seascapes.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('A Private Stroll Through the Medina')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your first stop is the Essaouira Medina, a maze of narrow alleys filled with vibrant colors and traditional charm. As you explore, your guide will share fascinating stories about the city\'s history, offering a personalized glimpse into its past. Unlike crowded tours, this private excursion allows you to linger at art galleries, boutique shops, or quiet corners to soak in the magical atmosphere.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Discover Essaouira\'s Unique Architecture')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Essaouira\'s distinctive architecture reflects its rich history as a meeting point of cultures. Wander along the city\'s ramparts, fortified walls overlooking the Atlantic Ocean. The Skala de la Kasbah, with its rows of cannons and panoramic views, is a highlight of any visit. Your guide can help you discover hidden gems, from intricately designed doors to well-preserved colonial buildings.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('A Taste of the Sea: Fresh Seafood Delights')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('No trip to Essaouira would be complete without indulging in its renowned seafood. Your guide will take you to one of the city\'s finest local restaurants, where you can savor freshly caught fish, grilled to perfection. Whether you\'re a seafood lover or looking to try something new, this meal is a feast for the senses')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__(' Camel Ride Along the Coast')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('For a touch of adventure, enjoy a camel ride along Essaouira\'s pristine beach. The experience is not only a highlight for families but also a peaceful way to connect with the natural beauty of the area.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Explore the Jewish Quarter')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('History enthusiasts can visit the Jewish quarter, or Mellah, a testament to Essaouira\'s multicultural heritage. Here, you\'ll uncover centuries-old synagogues and learn about the city\'s Jewish community, once an integral part of its cultural fabric.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Return to Marrakech: Memories to Cherish')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After a day filled with exploration and relaxation, you\'ll begin your journey back to Marrakech around 5:30 PM. With the flexibility of a private tour, you can stop for a break or a final photo op before arriving back at your hotel around 8:00 PM.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Book Your Private Day Trip to Essaouira Now')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('This private excursion to Essaouira offers a perfect escape from Marrakech, tailored just for you. Whether you\'re a history buff, a food lover, or simply seeking relaxation by the sea, this journey promises a day filled with unforgettable experiences.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Let the magic of Essaouira captivate your heart. Book now for a private adventure that will leave you with cherished memories!')) }}
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
        'type' => 'private essaouira excursion',
    ])
@endsection
