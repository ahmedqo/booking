@extends('shared.guest.base')
@section('title', ucwords(__('Explore Majorelle Gardens, Koutoubia Mosque & Souks')))
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
    <meta property="og:image" content="{{ asset('img/majorelle/koutobia.jpg') }}">
    <meta name="twitter:image" content="{{ asset('img/majorelle/koutobia.jpg') }}">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "{{ __('4-Hour Marrakech Tour: Koutoubia Mosque, Majorelle Gardens & Souks') }}",
  "description": "{{ __('Explore the best of Marrakech with visits to the iconic Koutoubia Mosque, vibrant Majorelle Gardens, and the bustling souks of the Medina on this 4-hour guided tour.') }}",
  "image": [
    "{{ asset('img/medina/medina-and-souks-1.webp') }}",
    "{{ asset('img/medina/medina-and-souks-2.webp') }}",
    "{{ asset('img/medina/medina-and-souks-3.webp') }}",
    "{{ asset('img/medina/medina-and-souks-3.webp') }}"
  ], 
  "touristType": "{{ __('Culture Enthusiasts, Nature Lovers, Families') }}",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "{{ __('Pick-up from Marrakech') }}",
        "description": "{{ __('Pick-up from your hotel or Riad in Marrakech between 9:00 AM and 10:00 AM or between 2:00 PM and 3:00 PM.') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "{{ __('Visit to Koutoubia Mosque') }}",
        "description": "{{ __('Admire the stunning exterior of the Koutoubia Mosque, a 12th-century architectural gem.') }}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "{{ __('Visit to Majorelle Gardens') }}",
        "description": "{{ __('Discover the lush greenery and exotic plants of the Majorelle Gardens, created by French painter Jacques Majorelle.') }}"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "{{ __('Explore the Souks') }}",
        "description": "{{ __('Stroll through the lively souks of Marrakech, filled with local crafts, spices, and treasures.') }}"
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "{{ __('Return to Marrakech') }}",
        "description": "{{ __('End your tour with a return to your hotel or Riad by 1:00 PM or 6:00 PM.') }}"
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
    "description": "{{ __('Book your 4-hour tour to explore Marrakech\'s highlights including Koutoubia Mosque, Majorelle Gardens, and the vibrant souks.') }}"
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
        'title' => __('majorelle gardens & souks'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => __('majorelle gardens & souks image'),
                        'img' => [
                            asset('img/medina/medina-and-souks-1.webp'),
                            asset('img/medina/medina-and-souks-2.webp'),
                            asset('img/medina/medina-and-souks-3.webp'),
                            asset('img/medina/medina-and-souks-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Discover the Charm of Majorelle Gardens and the Souks of the Medina.') }}
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
                                __('Duration: 4 hours'),
                                __('Morning Tour: 9:00 AM – 1:00 PM'),
                                __('Afternoon Tour: 2:00 PM – 6:00 PM'),
                                __('Meet at Café Argana, Jamaa El Fna Square'),
                                __('Professional Guide Included'),
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
                                __('Visit the iconic Koutoubia Mosque and its serene gardens'),
                                __('Dive into the vibrant Medina of Marrakech, a UNESCO World Heritage site'),
                                __(
                                    'Shop and explore the bustling souks filled with local crafts and aromatic spices'),
                            ],
                        ])
                    </div>
                </div>
                {{-- <div class="flex flex-col gap-4">
                    <h2 class="font-x-thin text-2xl text-x-acent">
                        {{ ucwords(__('Description')) }}
                    </h2>
                    <div class="border border-x-shade rounded-x-huge p-6">
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Discover The Beauty of Majorelle Gardens and the Vibrant Souks of Marrakech.')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('For people who are discovering Marrakech, the Majorelle Gardens as well as the lively and bustling Marrakech souks are the two must visits stops if you are keen on discovering the rich culture of the city and its heritage. The destinations not only symbolize the artistic and historical beauty of Morocco but also are a peaceful oasis and a lively adventure through the heart of the city.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Majorelle Gardens: A Lush Oasis in Marrakech.')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'One of the tourist attractions in Marrakech is the Majorelle Gardens which are located in a lively city. A retreat, originally belonging to French painter Jacques Majorelle, was constructed in the 1920s and is now an oasis amidst the bustling Medina. The garden is a sun-drenched haven for the famously blue color known as Majorelle Blue. It is a signature of this color that it appeared on the walls of an Art Deco villa. The building contains a spectacular collection of Islamic art which was previously owned by Yves Saint Laurent and Pierre Bergé, thus giving the cultural depth to the greenery.',
                                        ),
                                    ) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('As you take a stroll in the garden, you will meet with the different species of plants from every corner of the world. From long and strong palm trees to beautiful and pretty bougainvilleas, the garden can be likened to a real-life painting. Whether you\'re finding a shaded spot to relax or taking a casual walk by the central pool, the Majorelle Garden brings you a peaceful experience that will fascinate you with its beauty.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('The Souks of Marrakech: A Cultural Adventure.')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'After your visit to the Majorelle Gardens, take a euphoric plunge into the colorful world of Marrakech souks which buzz with life energy. These lively trading posts are not far from the center of the Medina. Here you can discover the narrow winding streets full of stalls where you can buy articles of handmade crafts, and aromatic spices among many others. The souks are not so much as a place to shop; rather, they are a glimpse into the very traditions of Morocco.',
                                        ),
                                    ) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('In the ancient past, the souks were trading spots for caravans heading to the south of Timbuktu. With time, the souks turned into the major centers of social and cultural exchanges wherein lively markets emerged. Walking around the souks in Marrakech you can catch the vibe of the city as the vendors shout at you, no matter if you are in a hurry or not, and they will try to sell you everything from colorful textiles to intricate jewelry. Each moment unveils a new encounter, and the fragrance of leather, spices, and fresh mint tea electrifies the atmosphere.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Be it the search for a unique piece or just the ambiance of the busy place, the souks remain a vital part of the Marrakech adventure.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Ready for an Unforgettable Journey?')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('A visit to Majorelle Gardens and the souks of Marrakech combines relaxation, history, and adventure. From the peaceful walkways of the garden to the bustling energy of the Medina, you’ll discover the charm and beauty of Marrakech’s most beloved landmarks. Ready to explore? Book your tour with Moroccan Adventure City and embark on a journey that will stay with you forever!')) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="flex flex-col gap-4">
                    <h2 class="font-x-thin text-2xl text-x-acent">
                        {{ ucwords(__('Description')) }}
                    </h2>
                    <div class="border border-x-shade rounded-x-huge p-6">
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Discover The Charm of the Medina and the Vibrant Souks of Marrakech.')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Dive into the heart of Marrakech with a guided exploration of the Medina and the lively souks. This tour is perfect for those eager to uncover the rich history, culture, and traditions that define this magical city. Wander through narrow streets, admire stunning architecture, and immerse yourself in the bustling energy of Marrakech’s iconic landmarks.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('The Medina: A Journey Through History')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Begin your adventure at Café Argana on the famous Jamaa El Fna square. From here, your professional guide will lead you into the Medina, a UNESCO World Heritage site. As you explore the labyrinth of narrow streets, you’ll encounter centuries-old architecture, vibrant street art, and the captivating Koutoubia Mosque with its serene gardens.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your guide will share fascinating stories about the Medina’s rich history, from its origins as a trading hub to its role as the cultural heart of Marrakech.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('The Souks: A Shopper’s Paradise')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Navigate through the bustling souks with the help of your guide, who will take you to the best spots for authentic shopping. Discover colorful textiles, intricate handicrafts, aromatic spices, and more. The souks are a sensory experience where every stall tells a story, and every corner offers something new to uncover.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Whether you’re looking for a unique souvenir or simply soaking in the lively atmosphere, the souks of Marrakech are a must-visit.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Practical Details for Your Adventure')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your tour begins with a meeting point at Café Argana on Jamaa El Fna square, offering convenience and easy access. A professional guide will ensure you navigate the Medina and souks effortlessly, making your experience both enjoyable and informative.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Ready to Explore the Soul of Marrakech?')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Embark on a journey through the Medina and souks of Marrakech for an unforgettable cultural adventure. From historical landmarks to vibrant markets, this tour promises a unique insight into the essence of Marrakech. Book your guided tour today and discover the magic of this extraordinary city!')) }}
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
        'type' => 'majorelle excursion',
    ])
@endsection
