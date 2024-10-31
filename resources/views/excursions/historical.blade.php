@extends('shared.guest.base')
@section('title', ucwords(__('4-Hour Marrakech Historical Tour: Palaces, Tombs & Souks')))
@php
    Core::$route = 1;
@endphp

@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Discover Marrakech\'s rich history with visits to Koutoubia Mosque, Bahia Palace, Saadian Tombs, the Mellah, and vibrant Souks on this 4-hour guided tour.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Discover Marrakech\'s rich history with visits to Koutoubia Mosque, Bahia Palace, Saadian Tombs, the Mellah, and vibrant Souks on this 4-hour guided tour.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Discover Marrakech\'s rich history with visits to Koutoubia Mosque, Bahia Palace, Saadian Tombs, the Mellah, and vibrant Souks on this 4-hour guided tour.',
    ) !!}">
    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/historical/historical-1.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/historical/historical-1.webp') }}">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "{{ __('Marrakech Historical Tour: Palaces, Tombs & Souks') }}",
  "description": "{{ __('Explore the rich history of Marrakech with visits to the Koutoubia Mosque, Bahia Palace, Saadian Tombs, Mellah, and vibrant souks on this 4-hour guided tour.') }}",
  "image": [
    "{{ asset('img/marrakech/marrakech-1.webp') }}",
    "{{ asset('img/marrakech/marrakech-2.webp') }}",
    "{{ asset('img/marrakech/marrakech-3.webp') }}"
  ],
  "touristType": "{{ __('Culture Enthusiasts, History Buffs, Families') }}",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "{{ __('Pick-up from Marrakech') }}",
        "description": "{{ __('Pick-up from your hotel or Riad in Marrakech between 9:00 AM and 10:00 AM.') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "{{ __('Visit to Koutoubia Mosque') }}",
        "description": "{{ __('Admire the exterior of the Koutoubia Mosque, one of Marrakech\'s most iconic landmarks.') }}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "{{ __('Visit to Mellah') }}",
        "description": "{{ __('Explore the Mellah, Marrakech\'s historical Jewish Quarter.') }}"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "{{ __('Visit to Saadian Tombs') }}",
        "description": "{{ __('Visit the Saadian Tombs, a resting place of Morocco’s past royalty.') }}"
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "{{ __('Visit to Bahia Palace') }}",
        "description": "{{ __('Discover the stunning Bahia Palace with its intricate architecture and lush gardens.') }}"
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "{{ __('Explore the Souks') }}",
        "description": "{{ __('Walk through the vibrant souks of Marrakech, where artisans sell their crafts.') }}"
      },
      {
        "@type": "ListItem",
        "position": 7,
        "name": "{{ __('Return to Marrakech') }}",
        "description": "{{ __('End your historical tour and return to your hotel by 1:00 PM or 6:00 PM, depending on your chosen time slot.') }}"
      }
    ]
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "EUR",
    "price": "30.00",
    "availability": "https://schema.org/InStock",
    "validFrom": "{{ now()->toIso8601String() }}",
    "url": "{{ route('views.guest.excursion') }}",
    "description": "{{ __('Book your 4-hour Marrakech Historical Tour and discover the Koutoubia Mosque, Bahia Palace, Saadian Tombs, and more.') }}"
  },
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
  "duration": "PT4H",
  "startDate": "{{ now()->toIso8601String() }}",
  "endDate": "{{ now()->addHours(4)->toIso8601String() }}"
}
</script>

@endsection


@section('content')
    @include('shared.guest.topbar', [
        'title' => __('marrakech historical visit'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'marrakech historical visit image',
                        'img' => [
                            asset('img/historical/historical-1.webp'),
                            asset('img/historical/historical-2.webp'),
                            asset('img/historical/historical-3.webp'),
                            asset('img/historical/historical-4.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Have a wonderful day exploring the history of Marrakech.') }}
                    </p>
                </div>
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('10 € / Person') }}
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
                                __('Duration: 4 hours'),
                                __('Morning Tour: 9:00 AM – 1:00 PM'),
                                __('Afternoon Tour: 2:00 PM – 6:00 PM'),
                                __('Guided Tour: Led by an official, knowledgeable guide'),
                                __('Pick-up: From your hotel or Riad in Marrakech'),
                                __('Cancellation: Free cancellation available'),
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
                                    'Explore the Koutoubia Mosque, an architectural gem and iconic landmark of Marrakech.'),
                                __(
                                    'Discover the Mellah, the historic Jewish Quarter rich in culture and heritage.'),
                                __('Visit the fascinating Saadian Tombs, dating back to the 16th century.'),
                                __('Wander through the stunning Bahia Palace, showcasing Moroccan opulence.'),
                                __(
                                    'Dive into the vibrant atmosphere of the Souks, filled with local crafts and treasures.'),
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
                                    {{ ucwords(__('Unveiling the Rich History of Marrakech: A Journey Through Time.')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Marrakech, the "Red City," is a place that merges history, culture, and architectural beauty together. The red walls of the main street give away a long list of historical landmarks whose stories will give you a glimpse of the Moroccan colorful history. If you\'re looking to explore Marrakech historical places and delve into the cultural heritage of Marrakech, this city won\'t disappoint.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('It has everything from ancient mosques to grand palaces, and all the locations in the city have something unique to tell. Let us go together and explore the history of the places in Marrakech, where the old monuments and buildings of Marrakech still stand as proof of the rich old history of the city.')) }}
                                </p>

                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('The Koutoubia Mosque: A Masterpiece of Islamic Architecture.')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'One of the most significant Marrakech landmarks is the Koutoubia Mosque. This beautiful minaret is 77 meters high and overlooks the town from 25 km away. The Almohad dynasty built the mosque in the 12th century, a remarkable piece of Islamic architecture. Its magnificence can be compared to the creations of Almohads like the Giralda in Seville and the Hassan Tower in Rabat. The Koutoubia Mosque has been a symbol of Marrakech\'s religious and cultural heritage for centuries, and every visitor to the city admires its beauty.',
                                        ),
                                    ) }}
                                </p>

                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Bahia Palace: A Resplendent Jewel of Marrakech.')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'Take a step into the magnificent Bahia Palace, one of the best historical buildings in the city, and you will be transported back in time. Built in the late 1800s by Ba Ahmed, the Prime Minister of Sultan Sidi Muhammad, the palace is a true representation of the name that stands for brilliance and glory. Covering eight hectares, this luxurious mansion features elaborately decorated courtyards, stunning gardens, and detailed woodwork. Walking around the area of the Bahia Palace, you will seem as if you are in the days of Moroccan royalty.',
                                        ),
                                    ) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('The Historic Djamaa El-Fna Square: The Epicenter of Marrakech.')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'Those who go to Marrakech should not skip the iconic Djamaa El-Fna square. It is not just a public place but a real symbol of the vibrant heritage of Marrakech. With its colorful square, this lively cultural migrant center is where people from all walks of life come together to enjoy performances by snake charmers, storytellers, and musicians. As the sun sets, the square becomes a buzzing food market, so make sure you come here to have a fun experience and an unforgettable time.',
                                        ),
                                    ) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('The Saadian Tombs: A Hidden Gem of History.')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'Behind the walls of the Casbah Mosque is the Saadian Tombs, a legendary historical site with a beguiling past. Rich in history, they speak of the 16th century and were covered from view for a long time until their rediscovery in 1917. Sultan Moulay Ismail of the Alawite dynasty buried them here, and anytime you visit, you will see that they are preserved remarkably and will show you the glory of the Saadian dynasty.',
                                        ),
                                    ) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Why Marrakech is a Must-Visit for History Lovers.')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'Marrakech is not just a city but a living museum that is full of past stories. You’ll get to see the Koutoubia Mosque, walk along the Bahia Palace, or look in awe at the Saadian Tombs when you visit Marrakech where there are lots of historical places that will transport you to its cultural past.',
                                        ),
                                    ) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Ready to Explore Marrakech’s Historical Treasures?')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'If you\'re eager to dive into the rich history of Marrakech, now is the time to embark on a journey like no other. At Moroccan Adventure City, we offer expertly guided tours to explore the city\'s most iconic historical landmarks. Book your tour today and let us take you on a memorable trip through the heart of Marrakech\'s past. Whether you\'re fascinated by historical monuments, intrigued by cultural heritage, or simply love exploring new places, Marrakech is waiting for you!',
                                        ),
                                    ) }}
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
                            {{ __('10 € / Person') }}
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
        'type' => 'historical visit',
    ])
@endsection
