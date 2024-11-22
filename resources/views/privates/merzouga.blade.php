@extends('shared.guest.base')
@section('title', ucwords(__('3 Days Tour From Marrakech to Merzouga - Desert Adventure')))
@php
    Core::$route = 2;
@endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Book a 3-day desert tour from Marrakech to Merzouga. Explore Ait Ben Haddou, Todra Gorges, and Erg Chebbi. Camel ride, starry bivouac, and stunning landscapes!',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Book a 3-day desert tour from Marrakech to Merzouga. Explore Ait Ben Haddou, Todra Gorges, and Erg Chebbi. Camel ride, starry bivouac, and stunning landscapes!',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Book a 3-day desert tour from Marrakech to Merzouga. Explore Ait Ben Haddou, Todra Gorges, and Erg Chebbi. Camel ride, starry bivouac, and stunning landscapes!',
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
  "name": "{{ __('3 Days Desert Tour From Marrakech to Merzouga') }}",
  "description": "{{ __('Book a 3-day desert tour from Marrakech to Merzouga. Explore Ait Ben Haddou, Todra Gorges, and Erg Chebbi. Camel ride, starry bivouac, and stunning landscapes!') }}",
  "image": [
    "{{ asset('img/merzouga/merzouga-1.webp') }}",
    "{{ asset('img/merzouga/merzouga-2.webp') }}",
    "{{ asset('img/merzouga/merzouga-3.webp') }}",
    "{{ asset('img/merzouga/merzouga-4.webp') }}"
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
        "description": "{{ __('Enjoy a delicious meal in the \'Gateway to the Desert,\' surrounded by iconic film studios.') }}"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "{{ __('Dades Gorges') }}",
        "description": "{{ __('End the day in Dades Gorges, where dramatic rock formations and serene landscapes await.') }}"
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "{{ __('Todra Gorges') }}",
        "description": "{{ __('Marvel at the towering canyon walls of Todra Gorges and experience its natural beauty.') }}"
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "{{ __('Erg Chebbi Camel Ride') }}",
        "description": "{{ __('Ride camels through the golden dunes of Erg Chebbi and enjoy a stunning sunset.') }}"
      },
      {
        "@type": "ListItem",
        "position": 7,
        "name": "{{ __('Desert Bivouac') }}",
        "description": "{{ __('Spend the night in a traditional desert bivouac under a starry sky.') }}"
      },
      {
        "@type": "ListItem",
        "position": 8,
        "name": "{{ __('Return to Marrakech') }}",
        "description": "{{ __('Travel back through Ouarzazate and the Atlas Mountains, concluding your trip in Marrakech.') }}"
      }
    ]
  },
  "offers": [
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "450",
      "description": "{{ __('Price for 2 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 2
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "510",
      "description": "{{ __('Price for 3 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 3
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "570",
      "description": "{{ __('Price for 4 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 4
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "630",
      "description": "{{ __('Price for 5 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 5
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "690",
      "description": "{{ __('Price for 6 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 6
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "820",
      "description": "{{ __('Price for 7 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 7
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "880",
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
  "duration": "P3D",
  "startDate": "{{ now()->toIso8601String() }}",
  "endDate": "{{ now()->addDays(3)->toIso8601String() }}"
}
</script>



@endsection




@section('content')
    @include('shared.guest.topbar', [
        'title' => __('3 Days / 2 Nights Private Excursion to Merzouga from Marrakech'),
        'start' => [route('views.guest.private'), __('Private Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => __('merzouga trip image'),
                        'img' => [
                            asset('img/merzouga/merzouga-1.webp'),
                            asset('img/merzouga/merzouga-2.webp'),
                            asset('img/merzouga/merzouga-3.webp'),
                            asset('img/merzouga/merzouga-4.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('3-Day / 2-Night Excursion to Merzouga from Marrakech.') }}
                    </p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        <h2 class="font-x-thin text-2xl text-x-acent">
                            {{ ucwords(__('Price Ranges')) }}
                        </h2>
                        @include('shared.guest.price', [
                            'items' => [
                                2 => '450',
                                3 => '510',
                                4 => '570',
                                5 => '630',
                                6 => '690',
                                7 => '820',
                                8 => '880',
                                9 => '940',
                                10 => '1000',
                                11 => '1060',
                                12 => '1100',
                                13 => '1160',
                                14 => '1220',
                                15 => '1280',
                                16 => '1390',
                                17 => '1450',
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
                                __('Duration 3 Days / 2 Nights'),
                                __('Departure: 7:00 AM from your hotel in Marrakech'),
                                __('Return: Around 8:00 PM on Day 3'),
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
                                __('Scenic Atlas Mountains: Traverse the Tichka Pass and enjoy panoramic views.'),
                                __('Ait Ben Haddou Kasbah: Explore a UNESCO-listed architectural gem.'),
                                __('Ouarzazate: Discover Morocco’s cinematic history.'),
                                __('Dades and Todra Gorges: Marvel at dramatic natural landscapes.'),
                                __('Erg Chebbi: Witness the beauty of Merzouga’s golden dunes.'),
                                __('Camel Ride and Desert Night: Experience a magical evening under the stars.'),
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
                            <h3 class="font-x-huge text-xl text-x-prime">
                                {{ ucwords(__('Epic 3 Days Tour From Marrakech to Merzouga: Your Ultimate Desert Adventure')) }}
                            </h3>
                            <p class="text-x-black text-lg font-normal">
                                {{ ucfirst(__('Embarking on a 3 days tour from Marrakech to Merzouga is like stepping into a world of breathtaking landscapes and timeless culture. This excursion takes you from the vibrant city of Marrakech to the golden dunes of the Merzouga desert, with unforgettable stops along the way. Ready to dive into the details? Let\'s start!')) }}
                            </p>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Day 1: From Marrakech to Dades Gorges – Gateway to Adventure')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your adventure starts in bustling Marrakech. As you leave the city behind, the towering Atlas Mountains welcome you with open arms. The Tichka Pass, perched at 2,260 meters, offers jaw-dropping views that will have you reaching for your camera at every turn.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('A Visit to Ait Ben Haddou Kasbah')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your first major stop is the Ait Ben Haddou Kasbah that is world-renowned and is a UNESCO World Heritage site that gives the feeling of going back in time. This centuries-old fortress with its characteristic mud-brick buildings has been a setting for countless Hollywood movies.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Lunch in Ouarzazate')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Then you\'ll move to Ouarzazate, the city which is always referred to as the "Gateway to the Desert." This city\'s culture itself gives the feeling of a famous scene in a movie, so if time allows you may be able to experience the cinema museum or meander and explore the old Kasbah. Surely, a good Moroccan lunch will replenish your energy for you to continue your journey.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Through Skoura and the Valley of Roses')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Proceeding further, you will drive through the luxuriant Skoura oasis and the attractive town of Kalaat M\'gouna, which is also referred to as the "Valley of Roses." The view here is something out of a fairy-tale, and you will be enveloped in the rainbow explosion of flowers in the spring.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Arrival at Dades Gorges')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The day is concluded with you arriving at the breathtaking Dades Gorges, where your eyes will see rock formations that are like sculptures in nature and you will find a calm environment that is an ideal spot for relaxing. You will spend your night in a picturesque hotel, dining on a delicious dinner under the stars.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Day 2: Dades Gorges to Merzouga – Into the Heart of the Desert')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your second day begins with a journey through the Valley of a Thousand Kasbahs, where traditional mud-brick structures dot the landscape like relics from another era.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Todra Gorges – Nature at Its Best')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The next highlight is the Todra Gorges, where towering canyon walls create a natural wonder of breathtaking magnificence. You\'ll have the chance to explore this beautiful place and experience the peace and beauty of nature.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Onward to Merzouga')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The road goes further through Erfoud and Rissani which are the last stops before the desert. While driving through the road to the oasis in Tifilalte, the green scenery is cheerful in the background of the harsh stones surrounding.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Camel Ride and Desert Bivouac')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Then, you will finally reach the Erg Chebbi dunes which are one of the most famous of all the dunes in the world. When the sun sets, the desert turns into a golden paradise, and you will be able to ride a camel to enjoy the view. Then, you\'ll go to a traditional desert bivouac. Under the vast, starry sky, you will have a very good night with a nice dinner and hospitality from Morocco.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Day 3: Merzouga to Marrakech – A Sunrise to Remember')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('There’s no better way to start your day than watching the sunrise over the Merzouga desert dunes. The interplay of light and shadow on the golden sands is simply mesmerizing.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Breakfast and Return Journey')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After breakfast, it’s time to bid farewell to the desert and begin your journey back to Marrakech. You’ll retrace your steps through Erfoud and stop for lunch in Ouarzazate. The scenic drive through the Atlas Mountains once again offers plenty of photo opportunities before you arrive in Marrakech around 8:00 PM.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Why Choose This Excursion?')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('This excursion Merzouga is more than a trip—it’s an immersive journey into Morocco’s rich cultural heritage and natural wonders. You’ll explore everything from ancient Kasbahs to towering dunes, experiencing the essence of the Merzouga desert excursion. Whether you’re a culture enthusiast, nature lover, or thrill-seeker, this tour offers something for everyone.')) }}
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
        'type' => 'private merzouga excursion',
    ])
@endsection
