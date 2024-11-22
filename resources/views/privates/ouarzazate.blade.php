@extends('shared.guest.base')
@section('title', ucwords(__('Private Ouarzazate Desert Tour From Marrakech')))
@php
    Core::$route = 2;
@endphp

@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Experience a private Ouarzazate desert tour from Marrakech. Visit Ait Ben Haddou, explore Atlas Film Studios, and enjoy the stunning Atlas Mountains in comfort.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Experience a private Ouarzazate desert tour from Marrakech. Visit Ait Ben Haddou, explore Atlas Film Studios, and enjoy the stunning Atlas Mountains in comfort.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Experience a private Ouarzazate desert tour from Marrakech. Visit Ait Ben Haddou, explore Atlas Film Studios, and enjoy the stunning Atlas Mountains in comfort.',
    ) !!}">
    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/ouarzazate/ouarzazate-1') }}">
    <meta name="twitter:image" content="{{ asset('img/ouarzazate/ouarzazate-1') }}">

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "{{ __('Private Ouarzazate Desert Tour From Marrakech') }}",
  "description": "{{ __('Experience a private day trip to Ouarzazate and Ait Ben Haddou from Marrakech. Visit the iconic Kasbah, explore Atlas Film Studios, and enjoy breathtaking Atlas Mountain views.') }}",
  "image": [
    "{{ asset('img/ouarzazate/ouarzazate-1.webp') }}",
    "{{ asset('img/ouarzazate/ouarzazate-2.webp') }}",
    "{{ asset('img/ouarzazate/ouarzazate-3.webp') }}"
  ],
  "touristType": "{{ __('Culture Enthusiasts, Film Lovers, Adventure Seekers') }}",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "{{ __('Departure from Marrakech') }}",
        "description": "{{ __('Begin your journey at 7:00 AM, traveling through the Atlas Mountains via the Tichka Pass.') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "{{ __('Visit Ait Ben Haddou Kasbah') }}",
        "description": "{{ __('Explore the UNESCO-listed Kasbah, a historical fortress made of clay and stone.') }}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "{{ __('Discover Ouarzazate') }}",
        "description": "{{ __('Visit the Atlas Film Studios and the historic Taourirt Kasbah in Ouarzazate.') }}"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "{{ __('Return to Marrakech') }}",
        "description": "{{ __('Enjoy the scenic drive back through the Atlas Mountains, arriving by 8:00 PM.') }}"
      }
    ]
  },
  "offers": [
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "160",
      "description": "{{ __('Price for 2 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 2
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "190",
      "description": "{{ __('Price for 7 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 7
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "200",
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
        'title' => __('Private Excursion to Ouarzazate and Ait Ben Haddou from Marrakech'),
        'start' => [route('views.guest.private'), __('Private Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => __('ouarzazate trip image'),
                        'img' => [
                            asset('img/ouarzazate/ouarzazate-1.webp'),
                            asset('img/ouarzazate/ouarzazate-2.webp'),
                            asset('img/ouarzazate/ouarzazate-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('One-day Excursion to Ouarzazate and Ait Ben Haddou from Marrakech.') }}
                    </p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        <h2 class="font-x-thin text-2xl text-x-acent">
                            {{ ucwords(__('Price Ranges')) }}
                        </h2>
                        @include('shared.guest.price', [
                            'items' => [
                                2 => '160',
                                3 => '160',
                                4 => '160',
                                5 => '160',
                                6 => '160',
                                7 => '190',
                                8 => '190',
                                9 => '190',
                                10 => '190',
                                11 => '190',
                                12 => '190',
                                13 => '190',
                                14 => '190',
                                15 => '190',
                                16 => '200',
                                17 => '200',
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
                                __('Duration 1 Days'),
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
                                __('Explore the beautiful city of Ouarzazate and its film studios'),
                                __('Discover the magnificent Kasbah of Ait Ben Haddou'),
                                __('Admire the magnificent landscapes of the Atlas Mountains and the Tichka Pass'),
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
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Private Ait Ben Haddou and Ouarzazate Tour From Marrakech: A Journey Through History')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Early Morning Departure from Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your private journey begins bright and early at 7:00 AM. With your personal driver, you\'ll travel 180 kilometers through the majestic Atlas Mountains via the Tichka Pass. As the sun rises, the winding roads reveal panoramic views of rugged cliffs, lush valleys, and traditional Berber villages. Every turn of the road feels like stepping into a postcard.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Explore Ait Ben Haddou: A UNESCO Heritage Site')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your first stop is the iconic Ait Ben Haddou Kasbah, a stunning clay and stone fortress that transports you to another era. Surrounded by towering walls, this UNESCO World Heritage Site boasts an intricate collection of homes and buildings that whisper stories of the past. As you wander through its narrow alleys, you\'ll feel the echoes of history in every corner. Ait Ben Haddou is not just a historical gem—it\'s a living testament to Morocco\'s cultural richness.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Ouarzazate: Where Culture Meets Cinema')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Next, the journey continues to Ouarzazate, a city that perfectly blends tradition with cinematic glamour. Known as the “Hollywood of Africa,” it\'s home to the world-famous Atlas Film Studios. Stroll through the impressive sets of blockbuster hits, and learn how Morocco\'s landscapes have captured the imagination of filmmakers worldwide.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('While in Ouarzazate, you can also visit the historic Taourirt Kasbah, a magnificent example of southern Moroccan architecture that adds yet another layer to the city\'s allure.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Scenic Return to Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After a day filled with discoveries, your excursion will come to an end, and you\'ll begin the return journey to Marrakech. You\'ll have the opportunity to admire the last rays of the sun as you return, arriving around 8:00 PM.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After a day of exploration and wonder, it\'s time to relax as you head back to Marrakech. Watch the sun dip below the Atlas Mountains, casting a golden glow on the landscape. Your private tour concludes with your arrival back in the city around 8:00 PM, leaving you with memories of a day well spent.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Why Choose This Private Tour?')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Tailored Just for You: This private tour is designed to fit your preferences, allowing you to explore at your own pace with personalized stops and insights. Unlike group tours, every detail is customized to ensure a seamless and enjoyable experience.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Exclusive Comfort: Travel in the luxury of a private vehicle with a dedicated driver who ensures your journey is as comfortable as it is convenient. No sharing, no rush—just you and your chosen companions enjoying a stress-free adventure.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Private Access to Iconic Sites: Dive deep into the rich culture and cinematic history of Morocco with exclusive attention from your guide. Discover the beauty of Ait Ben Haddou and Ouarzazate without the distractions of a crowded tour.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Breathtaking Private Moments: Marvel at the untouched landscapes of the Atlas Mountains and southern Morocco in tranquility. Every stop is yours to savor, every view yours to admire.')) }}
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
        'type' => 'private ouarzazate excursion',
    ])
@endsection
