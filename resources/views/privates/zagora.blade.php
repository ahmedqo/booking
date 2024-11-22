@extends('shared.guest.base')
@section('title', ucwords(__('2 Days Desert Tour From Marrakech to Zagora - Adventure Awaits')))
@php
    Core::$route = 2;
@endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Explore the Zagora desert on a 2-day tour from Marrakech. Visit Ait Ben Haddou, Ouarzazate, and the Draa Valley. Camel ride, starry bivouac, and more!',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Explore the Zagora desert on a 2-day tour from Marrakech. Visit Ait Ben Haddou, Ouarzazate, and the Draa Valley. Camel ride, starry bivouac, and more!',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Explore the Zagora desert on a 2-day tour from Marrakech. Visit Ait Ben Haddou, Ouarzazate, and the Draa Valley. Camel ride, starry bivouac, and more!',
    ) !!}">
    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/zagora/zagora-1.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/zagora/zagora-1.webp') }}">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "{{ __('2 Days Desert Tour From Marrakech to Zagora') }}",
  "description": "{{ __('Explore the Zagora desert on a 2-day tour from Marrakech. Visit Ait Ben Haddou, Ouarzazate, and the Draa Valley. Enjoy a camel ride, a starry bivouac, and more!') }}",
  "image": [
    "{{ asset('img/zagora/zagora-1.webp') }}",
    "{{ asset('img/zagora/zagora-2.webp') }}",
    "{{ asset('img/zagora/zagora-3.webp') }}"
  ],
  "touristType": "{{ __('Adventure Seekers, Culture Enthusiasts, Desert Lovers') }}",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "{{ __('Departure from Marrakech') }}",
        "description": "{{ __('Begin your journey with a scenic drive through the Atlas Mountains, crossing the Tichka Pass.') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "{{ __('Visit Ait Ben Haddou Kasbah') }}",
        "description": "{{ __('Explore the UNESCO World Heritage site known for its historic architecture.') }}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "{{ __('Lunch in Ouarzazate') }}",
        "description": "{{ __('Enjoy a delicious meal in the 'Hollywood of Africa,' surrounded by iconic film studios.') }}"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "{{ __('Draa Valley to Zagora') }}",
        "description": "{{ __('Pass through the stunning Draa Valley oasis and arrive at the desert gateway, Zagora.') }}"
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "{{ __('Camel Ride and Desert Bivouac') }}",
        "description": "{{ __('Ride camels through golden dunes, witness a breathtaking sunset, and sleep under the stars in a bivouac.') }}"
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "{{ __('Return to Marrakech') }}",
        "description": "{{ __('Journey back via Ouarzazate and the Tichka Pass, arriving in Marrakech around 8 PM.') }}"
      }
    ]
  },
  "offers": [
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "280",
      "description": "{{ __('Price for 2 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 2
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "320",
      "description": "{{ __('Price for 3 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 3
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "360",
      "description": "{{ __('Price for 4 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 4
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "400",
      "description": "{{ __('Price for 5 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 5
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "440",
      "description": "{{ __('Price for 6 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 6
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "520",
      "description": "{{ __('Price for 7 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 7
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "560",
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
  "duration": "P2D",
  "startDate": "{{ now()->toIso8601String() }}",
  "endDate": "{{ now()->addDays(2)->toIso8601String() }}"
}
</script>


@endsection



@section('content')
    @include('shared.guest.topbar', [
        'title' => __('2 Days / 1 Night Private Excursion to Zagora (Desert) from Marrakech'),
        'start' => [route('views.guest.private'), __('Private Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => __('zagora trip image'),
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
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        <h2 class="font-x-thin text-2xl text-x-acent">
                            {{ ucwords(__('Price Ranges')) }}
                        </h2>
                        @include('shared.guest.price', [
                            'items' => [
                                2 => '280',
                                3 => '320',
                                4 => '360',
                                5 => '400',
                                6 => '440',
                                7 => '520',
                                8 => '560',
                                9 => '600',
                                10 => '640',
                                11 => '680',
                                12 => '720',
                                13 => '760',
                                14 => '800',
                                15 => '840',
                                16 => '940',
                                17 => '980',
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
                                __('Duration: 2 Days / 1 Night'),
                                __('Departure: 7:00 AM from your hotel or Riad in Marrakech'),
                                __('Return: Around 8:00 PM on Day 2'),
                                __('Flexibility: Printed or mobile confirmation vouchers accepted'),
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
                                    'Breathtaking Atlas Mountains: Traverse the scenic Tichka Pass and marvel at its panoramic views.'),
                                __('Ait Ben Haddou Kasbah: Explore a UNESCO-listed gem steeped in history.'),
                                __('Ouarzazate: Visit the Hollywood of Africa and its iconic landmarks.'),
                                __(
                                    'Camel Ride and Desert Night: Experience the magic of the dunes and a starry night in a desert bivouac.'),
                                __('Draa Valley: Admire Morocco\'s largest oasis with its lush palm groves.'),
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
                                {{ ucfirst(__('Discover the Magic: Your Unforgettable 2 Days Desert Tour From Marrakech to Zagora')) }}
                            </p>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 1: Marrakech to Zagora – From busy Cityscapes to Desert Tranquility')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Setting Off From Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The adventure begins bright and early as you depart the vibrant city of Marrakech. Your route winds through the Tichka Pass, a breathtaking mountain passage perched at 2,260 meters above sea level. The journey through the Atlas Mountains offers sweeping views of verdant valleys, rugged cliffs, and winding roads a perfect prelude to the wonders ahead.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Marvel at the Ait Ben Haddou Kasbah')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The first stop on your excursion Marrakech Zagora is the iconic Ait Ben Haddou Kasbah, a UNESCO World Heritage site. This ancient fortress, with its striking mud-brick architecture and majestic gates, feels like stepping into another world. It\'s a favorite backdrop for Hollywood movies, and you\'ll see why as you explore its captivating streets and towers.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Lunch in Ouarzazate')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Next, you\'ll head to Ouarzazate, Morocco\'s film capital, fondly called the Hollywood of Africa. Here, you\'ll enjoy a delicious lunch while soaking in the charm of this cinematic city. Take a moment to appreciate its significance in bringing Moroccan beauty to screens worldwide.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Through the Draa Valley to Zagora')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('As the afternoon sun bathes the landscape, your journey continues through the picturesque Draa Valley. Known as the largest oasis in southern Morocco, this region is a feast for the eyes, with its palm groves and stunning desert vistas. By late afternoon, you\'ll arrive in Zagora—the gateway to Morocco\'s desert.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Magical Camel Ride at Sunset')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your day culminates with a camel ride through the golden dunes of Zagora. Picture this: the setting sun paints the sands in fiery hues, and you sway gently atop a camel, taking it all in. The evening leads to a desert bivouac, where you\'ll enjoy dinner under a canopy of stars. This is more than a trip; it\'s a memory etched into your soul.')) }}
                                </p>
                            </div>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 2: Zagora to Marrakech – A Journey of Discovery')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Farewell to the Desert')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('When the morning sun starts to kiss the dunes, you will leave Zagora to head back through the Agdz region. But the adventure is not over yet. The beauty of the desert follows your steps, now much like a welcomed companion.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Ouarzazate: A Glimpse Into Movie Magic')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Back in Ouarzazate, you\'ll have the chance to visit its renowned film studios, where cinematic legends are born. If time allows, you\'ll also explore another historic Kasbah, offering a deeper look into Morocco\'s rich heritage.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Return to Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The journey back to Marrakech takes you once again through the scenic Tichka Pass, where the towering peaks and lush valleys create a perfect closing chapter to your excursion Marrakech Zagora. By the time you arrive in Marrakech around 8 PM, your heart will be brimming with memories to last a lifetime.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Why Choose This Excursion?')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('This private Zagora desert excursion offers the perfect balance of adventure, cultural immersion, and natural beauty. Whether you\'re a thrill-seeker, a history buff, or someone yearning for tranquility, this trip has it all. Plus, with a free cancellation policy and convenient pick-up options, planning your dream desert getaway couldn\'t be easie')) }}
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
        'type' => 'private zagora excursion',
    ])
@endsection
