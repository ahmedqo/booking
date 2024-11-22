@extends('shared.guest.base')
@section('title', ucwords(__('Private Ourika Valley Day Trip From Marrakech')))
@php
    Core::$route = 2;
@endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Book a private day trip to Ourika Valley from Marrakech. Explore Setti Fatma, hike to Ourika waterfalls, visit an argan oil cooperative, and enjoy a riverside lunch.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Book a private day trip to Ourika Valley from Marrakech. Explore Setti Fatma, hike to Ourika waterfalls, visit an argan oil cooperative, and enjoy a riverside lunch.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Book a private day trip to Ourika Valley from Marrakech. Explore Setti Fatma, hike to Ourika waterfalls, visit an argan oil cooperative, and enjoy a riverside lunch.',
    ) !!}">
    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/ourika/ourika-1') }}">
    <meta name="twitter:image" content="{{ asset('img/ourika/ourika-1') }}">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "{{ __('Private Ourika Valley Day Trip From Marrakech') }}",
  "description": "{{ __('Book a private day trip to Ourika Valley from Marrakech. Explore Setti Fatma, hike to Ourika waterfalls, visit an argan oil cooperative, and enjoy a riverside lunch.') }}",
  "image": [
    "{{ asset('img/ourika/ourika-1.webp') }}",
    "{{ asset('img/ourika/ourika-2.webp') }}",
    "{{ asset('img/ourika/ourika-3.webp') }}",
    "{{ asset('img/ourika/ourika-4.webp') }}"
  ],
  "touristType": "{{ __('Nature Lovers, Culture Enthusiasts, Adventure Seekers') }}",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "{{ __('Departure from Marrakech') }}",
        "description": "{{ __('Begin your journey with a private pick-up from your hotel or riad in Marrakech, traveling through scenic countryside roads.') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "{{ __('Visit an Argan Cooperative') }}",
        "description": "{{ __('Discover a traditional argan oil cooperative, learn about its uses, and shop for authentic products.') }}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "{{ __('Explore Setti Fatma') }}",
        "description": "{{ __('Enjoy a guided exploration of the Setti Fatma region with its lush greenery and rustic charm.') }}"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "{{ __('Hike to Ourika Waterfalls') }}",
        "description": "{{ __('Experience the breathtaking Ourika waterfalls with a short hike and stunning views of the valley.') }}"
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "{{ __('Riverside Lunch') }}",
        "description": "{{ __('Savor traditional Moroccan dishes at a restaurant by the river while enjoying the serene ambiance.') }}"
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "{{ __('Return to Marrakech') }}",
        "description": "{{ __('Relax during your private drive back to Marrakech, arriving around 5:00 PM.') }}"
      }
    ]
  },
  "offers": [
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "90",
      "description": "{{ __('Price for 2 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 2
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "120",
      "description": "{{ __('Price for 8 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 8
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "150",
      "description": "{{ __('Price for 16 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 16
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
        'title' => __('private excursion to the ourika valley from marrakech'),
        'start' => [route('views.guest.private'), __('Private Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => __('a day in ourika image'),
                        'img' => [
                            asset('img/ourika/ourika-1.webp'),
                            asset('img/ourika/ourika-2.webp'),
                            asset('img/ourika/ourika-3.webp'),
                            asset('img/ourika/ourika-4.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('1-Day Excursion to Ourika Valley from Marrakech.') }}
                    </p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        <h2 class="font-x-thin text-2xl text-x-acent">
                            {{ ucwords(__('Price Ranges')) }}
                        </h2>
                        @include('shared.guest.price', [
                            'items' => [
                                2 => '90',
                                3 => '90',
                                4 => '90',
                                5 => '100',
                                6 => '100',
                                7 => '120',
                                8 => '120',
                                9 => '120',
                                10 => '120',
                                11 => '120',
                                12 => '120',
                                13 => '120',
                                14 => '120',
                                15 => '120',
                                16 => '150',
                                17 => '150',
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
                                __('Duration: 1 day'),
                                __('Departure at 10:00 & Return at 17:00'),
                                __('Transportation by minibus and local guide included'),
                                __('Pick-up from your hotel between 9:00 AM and 10:00 AM'),
                                __('Payment upon departure'),
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
                                __('Discover a traditional argan oil cooperative and its diverse uses.'),
                                __('Enjoy a guided exploration of the Setti Fatma region.'),
                                __('Hike to the breathtaking Ourika waterfalls with stunning valley views.'),
                                __('Savor a riverside lunch featuring authentic Moroccan cuisine.'),
                                __('Relax in the comfort of a private vehicle for your journey.'),
                            ],
                        ])
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <h2 class="font-x-thin text-2xl text-x-acent">
                        {{ ucwords(__('Description')) }}
                    </h2>
                    <div class="flex flex-col border border-x-shade rounded-x-huge gap-4 p-6">
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Private Day Trip to Ourika Valley From Marrakech: A Scenic Escape')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Looking for a tranquil escape from the bustling streets of Marrakech? A private day trip to Ourika Valley offers the perfect blend of natural beauty, cultural richness, and relaxation. Nestled in the foothills of the High Atlas Mountains, this lush oasis provides an ideal retreat, complete with serene rivers, traditional Berber villages, and the stunning Ourika waterfalls.')) }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Your Private Adventure Begins')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your journey starts with a personalized pick-up from your hotel or riad in Marrakech between 9:00 AM and 10:00 AM. Unlike group tours, this private excursion offers the flexibility to customize your experience. Sit back in the comfort of your private vehicle as you travel through scenic countryside roads, surrounded by picturesque landscapes and argan trees dotting the horizon.')) }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('First Stop: Argan Cooperative')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('On your way to the Ourika Valley, you\'ll visit a local argan oil cooperative, where Berber women produce this liquid gold using traditional methods. Learn about the various uses of argan oil, from cooking to skincare, and take the opportunity to purchase authentic products directly from the source.')) }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Explore the Setti Fatma Region')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Upon arriving in the Setti Fatma area, your private guide will take you on an immersive journey through this charming region. Stroll through narrow pathways lined with vibrant greenery, cross rustic bridges, and experience the tranquil rhythm of local life.')) }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('The Ourika Waterfalls')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The highlight of your visit is undoubtedly the stunning Ourika waterfalls. A short guided hike takes you up the rocky terrain to these cascading wonders, offering breathtaking views of the valley below. Whether you’re an adventure enthusiast or a nature lover, the waterfalls promise an experience that is both invigorating and serene.')) }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Lunch by the River')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After your hike, take a well-deserved break at one of the many traditional restaurants perched along the riverbanks. Enjoy a leisurely lunch featuring local Moroccan dishes, such as tagines, fresh salads, and mint tea. The sound of flowing water and the cool breeze create a dining experience that is both refreshing and unforgettable.')) }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Flexibility to Explore')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('One of the benefits of a private tour is the freedom to explore at your own pace. Whether you choose to spend extra time hiking, shopping for local crafts, or simply soaking in the peaceful ambiance of the valley, your itinerary can be adjusted to suit your preferences.')) }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Return to Marrakech')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('As the day winds down, you\'ll embark on a relaxed journey back to Marrakech, arriving around 5:00 PM. The scenic drive offers one last chance to appreciate the beauty of the Moroccan countryside, leaving you with cherished memories of your Ourika Valley day trip.')) }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Book Your Private Day Trip to Ourika Valley Today')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'This private Ourika Valley day trip is the perfect escape for those seeking peace, natural beauty, and cultural immersion just a short drive from Marrakech. Whether you’re traveling solo, as a couple, or with family, this journey promises a day filled with unforgettable experiences. Let the charm of the Ourika Valley and its majestic waterfalls captivate your heart. Book now and create memories to last a lifetime!',
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
        'type' => 'private ourika excursion',
    ])
@endsection
