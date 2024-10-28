@extends('shared.guest.base')
@section('title', ucwords(__('Excursion Essaouira from Marrakech – Full-Day Tour')))
@php
    Core::$route = 1;
@endphp

@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Discover the charm of Essaouira on a full-day tour from Marrakech. Enjoy camel rides, explore the historic medina, and savor fresh seafood by the Atlantic coast.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Discover the charm of Essaouira on a full-day tour from Marrakech. Enjoy camel rides, explore the historic medina, and savor fresh seafood by the Atlantic coast.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Discover the charm of Essaouira on a full-day tour from Marrakech. Enjoy camel rides, explore the historic medina, and savor fresh seafood by the Atlantic coast.',
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
  "name": "Excursion Essaouira from Marrakech – Full-Day Tour",
  "description": "Discover the charm of Essaouira on a full-day tour from Marrakech. Enjoy camel rides, explore the historic medina, and savor fresh seafood by the Atlantic coast.",
  "image": [
    "{{ asset('img/essaouira/essaouira-1.webp') }}",
    "{{ asset('img/essaouira/essaouira-2.webp') }}",
    "{{ asset('img/essaouira/essaouira-3.webp') }}"
  ],
  "touristType": "Adventurers, Culture Enthusiasts, Families",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Departure from Marrakech",
        "description": "Pick-up between 8:00 AM and 9:00 AM from your hotel or Riad in Marrakech."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Explore the Medina",
        "description": "Stroll through the historic Medina of Essaouira, a UNESCO World Heritage site."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Admire the Skala",
        "description": "Visit the Skala and take in breathtaking views of the Atlantic coast."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Lunch by the Port",
        "description": "Savor freshly caught seafood at a traditional restaurant near the port."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Camel Ride on the Beach",
        "description": "Enjoy a peaceful camel ride along the Essaouira beach."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Visit the Jewish Quarter",
        "description": "Explore the old Jewish Quarter and discover its rich history."
      },
      {
        "@type": "ListItem",
        "position": 7,
        "name": "Return to Marrakech",
        "description": "Head back to Marrakech at 8:00 PM after a full day of exploration in Essaouira."
      }
    ]
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "EUR",
    "price": "20.00",
    "availability": "https://schema.org/InStock",
    "validFrom": "{{ now()->toIso8601String() }}",
    "url": "{{ route('views.guest.excursion') }}",
    "description": "Book your full-day excursion to Essaouira from Marrakech. Enjoy camel rides, explore the medina, and indulge in fresh seafood by the coast."
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
  "duration": "P1D",
  "startDate": "{{ now()->toIso8601String() }}",
  "endDate": "{{ now()->addDays(1)->toIso8601String() }}"
}
</script>

@endsection



@section('content')
    @include('shared.guest.topbar', [
        'title' => __('a day tour in essaouira'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'a day in essaouira image',
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
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('20 € / Person') }}
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
                                __('Duration: 1 Day'),
                                __('Pick-up between 8:00 AM and 9:00 AM, depending on your hotel location'),
                                __('Return at 8:00 PM'),
                                __('Immediate Confirmation'),
                                __(
                                    'Pick-up from your hotel or Riad in Marrakech. For accommodations in the Medina, pick-up will be arranged at the nearest accessible location.'),
                                __('Free Cancellation Available'),
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
                                __('Stroll through the old Medina and its ramparts'),
                                __(
                                    'Discover the magnificent port city of Essaouira and the warm hospitality of its inhabitants'),
                                __('Visit the Skala and its cannons'),
                                __('Explore the ancient Jewish quarter'),
                                __('Admire the beach, the port, the souks, the Medina, and the craft galleries'),
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
                                    {{ ucwords(__('Explore Essaouira from Marrakech: A Cultural and Coastal Getaway')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Are you the one in search of a new fresh and refreshing environment away from the busy city of Marrakeck? Then this Essaouira day tour is exactly what you need. Essaouira tour from Marrakech is a perfect balance of relaxation and exploration for everyone-from history enthusiasts to foodies and nature lovers. Are you prepared for an unforgettable coastal experience? Let\'s examine the particulars of your imminent charming port town adventure called Essaouira.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Departure from Marrakech')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your visit to Essaouira will take place on a clear and sunny day when you will set out from Marrakeck at 9:00 AM. The sun rising in the mornings and the city of Marrakesh fading away in the background, you will witness the enchanting greeneries and beautiful breathtaking landscapes of rural Morocco. giving you plenty of opportunities to capture some stunning photos.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('By 11:00 AM you will have reached the historical yet still beautiful port city of Essaouira which is bound to take your breath away from the moment you step into it.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Explore the Enchanting Medina of Essaouira')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('On your first stop in Essaouira, the first place you would visit will be Medina which is famous for its beautiful decoration and labyrinthine streets. Essaouira’s Medieval Town is one of six UNESCO World Heritage sites in Morocco. This means that it is not only a pretty place but also has great historical and cultural significance. The ancient ramparts, narrow streets, and whitewashed buildings of the city are testaments to the rich history and culture of the city.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Walk along the labyrinth of narrow streets and look around this corner and you will discover something else, be it a colorful art gallery, a shop selling traditional Moroccan crafts or a small cafe where they serve mint tea. The Medina is a sensory overload, where the energy of the city makes you want to immerse yourself in the experience more and more.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Looking for a unique souvenir? The medina in Essaouira is your place if you want to buy original handicrafts. You can bring back some wooden carvings or necklaces, but this is not a complete list of the items you can find to remind you of your Essaouira day tour.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Admire Essaouira’s Unique Architecture')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('One of the most memorable things about Essaouira is the city\'s unique buildings. The city\'s diverse history is reflected in the architectural style of the buildings which is a blend of Moroccan, Portuguese, and French. The historical fortress Skala de la Kasbah, which gives you stunning views of the Atlantic Ocean, is also a must-see on your Essaouira tour from Marrakech.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('As you walk along the ramparts, you’ll feel the breeze from the Atlantic, and the sight of crashing waves will remind you of Essaouira’s strategic position as a fortified port city. The views here are nothing short of breathtaking, so make sure to bring your camera to capture the moment.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Savor the Flavors of Essaouira’s Fresh Moroccan Seafood')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('No trip to Essaouira is complete without a tasting of the city\'s signature seafood. Known for its fishing port, Essaouira has almost the freshest seafood in Morocco. You\'re at a point for lunch, and you can go to one of the many traditional restaurants within the medina or near the port. Taste the freshly caught fish, which is grilled to order, together with the Moroccan salads and the freshly baked bread.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The seaside ambiance makes your meal in Essaouira feel both relaxed and luxurious. However, If you’re not into seafood, don’t worry there are plenty of other delicious options, from tangy tagines to local Moroccan dishes that will satisfy your palate.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Camel Ride and Jewish Quarter Tour')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After enjoying a delicious meal, embark on a camel ride along the beach, an unforgettable experience for both young and old. You can also visit the old Jewish quarter of Essaouira, where you\'ll discover historical synagogues and the fascinating history surrounding them.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Return to Marrakech')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After a fulfilling day in Essaouira, you\'ll head back to Marrakech around 8:00 PM. This day trip will leave you with unforgettable memories of Morocco\'s beauty and culture, just a few hours from Marrakech. Enjoy every moment of this unique adventure!')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Ready to experience Morocco’s coastal charm? Don’t miss out on this unforgettable Essaouira day tour. Whether you’re traveling solo, as a couple, or with family, this tour offers something for everyone. Book your spot with Moroccan Adventure City and embark on a journey that’s packed with culture, history, and the relaxing vibes of the Atlantic coast.')) }}
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
                            {{ __('20 € / Person') }}
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
        'type' => 'essaouira excursion',
    ])
@endsection
