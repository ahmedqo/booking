@extends('shared.guest.base')
@section('title', ucwords(__('Quad Marrakech Desert excursion : Explore Dunes & Desert ')))
@php
    Core::$route = 1;
@endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Discover the Marrakech desert quad tour. Explore trails, visit villages, and enjoy mint tea. Daily departures, book now for an unforgettable experience',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Discover the Marrakech desert quad tour. Explore trails, visit villages, and enjoy mint tea. Daily departures, book now for an unforgettable experience',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Discover the Marrakech desert quad tour. Explore trails, visit villages, and enjoy mint tea. Daily departures, book now for an unforgettable experience',
    ) !!}">
    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/quad/quad-1.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/quad/quad-1.webp') }}">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "{{ __('Quad Marrakech Desert Excursion: Explore Dunes & Desert') }}",
  "description": "{{ __('Discover the Marrakech desert quad tour. Explore trails, visit villages, and enjoy mint tea. Daily departures, book now for an unforgettable experience.') }}",
  "image": [
    "{{ asset('img/quad/quad-1.webp') }}",
    "{{ asset('img/quad/quad-2.webp') }}",
    "{{ asset('img/quad/quad-3.webp') }}"
  ],
  "touristType": "{{ __('Adventure Seekers, Outdoor Enthusiasts') }}",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "{{ __('Pick-up from Marrakech') }}",
        "description": "{{ __('Pick-up from your hotel or Riad in Marrakech at your selected departure time.') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "{{ __('Quad Ride Through the Palmeraie') }}",
        "description": "{{ __('Embark on a thrilling quad ride through the Palmeraie region, exploring desert trails and admiring scenic landscapes.') }}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "{{ __('Visit to Berber Village') }}",
        "description": "{{ __('Stop at a traditional Berber village for mint tea and freshly baked bread with organic olive oil.') }}"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "{{ __('Return to Marrakech') }}",
        "description": "{{ __('End your desert adventure and return to Marrakech with unforgettable memories.') }}"
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
    "description": "{{ __('Book your exciting quad desert Marrakech excursion. Explore the dunes, visit local villages, and enjoy the thrill of the desert.') }}"
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
  "duration": "PT2H",
  "startDate": "{{ now()->toIso8601String() }}",
  "endDate": "{{ now()->addHours(2)->toIso8601String() }}"
}
</script>

@endsection

@section('content')
    @include('shared.guest.topbar', [
        'title' => __('a quad biking day'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'a quad biking day image',
                        'img' => [
                            asset('img/quad/quad-1.webp'),
                            asset('img/quad/quad-2.webp'),
                            asset('img/quad/quad-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Enjoy a quad ride and explore Marrakech in a different way.') }}
                    </p>
                </div>
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('30 € / Person') }}
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
                                __('Exciting quad ride through the Palmeraie region of Marrakech'),
                                __('Daily availability with departures from 9 AM to 4 PM'),
                                __('Experience the thrill of a 2-hour quad adventure'),
                                __('Hassle-free booking with free cancellation'),
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
                                __('Embark on an exhilarating quad ride through the Palmeraie'),
                                __('Discover Marrakech’s stunning Saharan landscapes from a unique perspective'),
                                __('Navigate desert trails and explore local villages'),
                                __('Pause to relax and enjoy traditional Moroccan mint tea'),
                                __('Feel the adrenaline rush as you ride through the desert'),
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
                                    {{ ucwords(__('Experience the Ultimate Thrill with a Quad Marrakech Adventure Tour')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Would you like to enjoy an unforgettable excursion that will take you to the heart of the Moroccan desert? Look no further! Our quad Marrakech rides are the best way to satisfy your thrill thirst while riding through breathtaking places. Strap in for two hours of pure adrenaline as you zoom through the desert on a breathtaking and thrilling quad tour Marrakech.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The very first moment you leave the teeming Marrakech city, your adventure begins. Our friendly and professional, driver will pick you directly from your hotel or riad, making this a stress-free experience. After a short drive to the starting point, you will meet your experienced instructor who will give you a sign to pass the quad biking basics and ensure you are ready for the desert.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Once you’re geared up and briefed, it’s time to hop on your quad and hit the desert trails! Imagine the thrill as your quad Marrakech excursion journey leads you through the wild, sandy, and rocky terrain. One stop of awe for the magnificence of the diversity in terrain and then you will finish off with the stunning panoramic views. This is more than a simple ride this is a chance to discover a side of Morocco that only our quad desert Marrakech tour tailored just for you can reveal. Feel the wind on your face and the sun on your back as you ride across miles of sand with the majestic Atlas mountains behind you - the ultimate combination of excitement and nature.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('As you you ride, you will be able to explore some hidden treasures of the desert, places that are only reachable by quad. These are the moments that make the Marrakech quad excursion truly unique. Nevertheless, the ride is not the only thing that makes the experience so exhilarating. The group will make a stop at a traditional Berber village where hospitality and culture meet. You will be served with a glass of mint tea and delicious homemade bread that is further served with organic olive oil. It is the perfect moment to unwind, learn about local traditions, and take some snaps of remembrance.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('This stop in the Berber village adds a meaningful cultural dimension to your quad tour Marrakech, making it more than just a thrilling ride. You’ll get a taste of authentic Moroccan life while being surrounded by the serenity of the desert.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After this well-deserved break, the journey continues as you head back through the dunes and desert. The wind in your face, the sound of the engine, and the ever-changing scenery make for a quad experience you won’t forget. By the end of your dunes & desert quad Marrakech excursion, you’ll be buzzing with excitement and memories that will last a lifetime.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Once the complete adventure has ended, our driver will be right there, after having dropped you back at your hotel or riad, to enable you to think about the whole day’s thrilling experiences. As you return to the vibrant city of Marrakech you will feel exhilarated and fulfilled having experienced a side of Morocco few have the chance to really see.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('So, are you ready to embark on a desert adventure like no other? Don’t miss out on this incredible opportunity to explore Morocco’s landscapes on an exciting quad desert Marrakech tour. Book your adventure today and get ready to create unforgettable memories in the Moroccan desert!')) }}
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
                            {{ __('30 € / Person') }}
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
        'type' => 'quad ride',
    ])
@endsection
