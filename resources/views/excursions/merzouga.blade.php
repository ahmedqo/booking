@extends('shared.guest.base')
@section('title', ucwords(__('3-Day Merzouga Desert Tour from Marrakech | Camel Ride & Atlas Mountains')))
@php
    Core::$route = 1;
@endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Explore Morocco on a 3-day desert tour from Marrakech to Merzouga. Enjoy camel rides, visit Ait Ben Haddou, and experience Sahara desert.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Explore Morocco on a 3-day desert tour from Marrakech to Merzouga. Enjoy camel rides, visit Ait Ben Haddou, and experience Sahara desert .',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Explore Morocco on a 3-day desert tour from Marrakech to Merzouga. Enjoy camel rides, visit Ait Ben Haddou, and experience Sahara desert.',
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
  "name": "3-Day Merzouga Desert Tour from Marrakech | Camel Ride & Atlas Mountains",
  "description": "Explore Morocco on a 3-day desert tour from Marrakech to Merzouga. Enjoy camel rides, visit Ait Ben Haddou, and experience Sahara desert.",
  "image": [
    "{{ asset('img/merzouga/merzouga-1.webp') }}",
    "{{ asset('img/merzouga/merzouga-2.webp') }}",
    "{{ asset('img/merzouga/merzouga-3.webp') }}",
    "{{ asset('img/merzouga/merzouga-4.webp') }}"
  ],
  "touristType": "Adventurers, Culture Enthusiasts, Families",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Departure from Marrakech",
        "description": "Pick-up at 07:00 AM from your hotel or Riad in Marrakech."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Visit to Ait Ben Haddou",
        "description": "Explore the famous Ait Ben Haddou Kasbah, a UNESCO World Heritage site."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Lunch in Ouarzazate",
        "description": "Enjoy a traditional Moroccan meal in Ouarzazate, also known as the 'Gateway to the Desert'."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Drive through the Valley of a Thousand Kasbahs",
        "description": "Marvel at the ancient kasbahs along the way as you continue towards Merzouga."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Camel Ride and Overnight in Merzouga",
        "description": "Ride camels into the Erg Chebbi dunes, enjoy a beautiful sunset, and spend the night in a desert camp under the stars."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Return to Marrakech",
        "description": "After breakfast, head back to Marrakech, passing through Erfoud, Rissani, and Ouarzazate."
      }
    ]
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "EUR",
    "price": "85.00",
    "availability": "https://schema.org/InStock",
    "validFrom": "{{ now()->toIso8601String() }}",
    "url": "{{ route('views.guest.excursion') }}",
    "description": "Book your 3-day Merzouga Desert Trip from Marrakech, including camel rides, a night in the desert, and visits to Ait Ben Haddou, the Dades Gorges, and more."
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
  "duration": "P3D",
  "startDate": "{{ now()->toIso8601String() }}",
  "endDate": "{{ now()->addDays(3)->toIso8601String() }}"
}
</script>
@endsection




@section('content')
    @include('shared.guest.topbar', [
        'title' => __('merzouga trip'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'merzouga trip image',
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
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('85 € / Person') }}
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
                                __('Duration 3 Days / 2 Nights'),
                                __('Departure: 07:00 AM | Return: 20:00 PM'),
                                __('Voucher Acceptance: Printed or mobile confirmation accepted'),
                                __('Confirmation: Immediate'),
                                __(
                                    'Pick-up: From your hotel or Riad in Marrakech. If your Riad is within the Medina, we’ll arrange pick-up at the nearest accessible location to your accommodation.'),
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
                                    'Marvel at the Atlas Mountains: Witness the breathtaking landscapes of the Atlas Mountains and the stunning Tichka Pass.'),
                                __(
                                    'Explore Ait Ben Haddou: Visit the renowned Ait Ben Haddou Kasbah, a UNESCO World Heritage site.'),
                                __(
                                    'Discover Merzouga: Wander through the captivating desert town of Merzouga, a true gem in the heart of Morocco.'),
                                __(
                                    'Visit the Dades and Todra Gorges: Explore these dramatic canyons carved by nature, showcasing Morocco’s natural beauty.'),
                                __(
                                    'Camel Ride Adventure: Experience the magic of the desert with a camel ride across the dunes.'),
                                __('Spend a night in a desert bivouac under a beautiful, clear sky full of stars'),
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
                                    {{ ucfirst(__('Exploring Morocco’s Magical 3-Day Tour from Marrakech to Merzouga')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Are you seeking an incredible journey through the most amazing landscapes of Morocco?  The 3 days tour from Marrakech to Merzouga is the perfect way to immerse yourself in the country’s rich history, vibrant culture, and stunning natural beauty. From the majestic Atlas Mountains to the golden dunes of Merzouga, this tour promises a whirlwind of experiences you’ll never forget.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Day 1: From the vibrant city of Marrakech to the Serene Dades Gorges')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your journey starts in Marrakech, the lively city center of Morocco you’ll quickly leave the city behind as you ascend into the Atlas Mountains. The road to adventure takes you through the Tichka Pass, which climbs to a breathtaking 2,260 meters above sea level. Be sure to stop and admire the panoramic views of the valleys below as you snake your way through this mountainous road it looks like a scene from a movie!')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your very first stop will be the renowned Ait Ben Haddou Kasbah, a UNESCO World Heritage site that has been used as a location for various Hollywood films. It is an ancient, fortified city made of clay, which sits on the rock, different from the rest of the landscape. After studying the history of this amazing site, you will then go to Ouarzazate, the so-called "the gateway to the desert." Here, you can enjoy your meal, and if time permits, you may visit the Cinema Museum or the Taourirt Kasbah, a remarkable site.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('From Ouarzazate, your journey continues deeper into the countryside. You\'ll be passing through the Skoura Oasis which is known for its palm groves and the lovely town of Kalaat M\'gouna or also called the Valley of Roses. The rose water products in this region are quite popular and also make good gifts! Finally, you will get to the lovely Dades Gorges where the magnificent rocks and the green nature come together to form a very beautiful scene. You will start here with a night stay at a cozy local hotel, where you will have a delicious dinner and then you will rest up for the next part of your journey.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Day 2: Into the Heart of the Moroccan Desert – Merzouga Awaits')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('On a second day the excitement builds, as you start your journey from the Dades Gorges and go to the breathtaking Merzouga desert. The whole way, you will drive through the Valley of a Thousand Kasbahs, where old fortress-style homes from the past are along the road like the invincible sentinels of history. Your tour will divert you through the mesmerizing Todra Gorges, where towering rock walls frame a narrow, winding canyon. This is one of Morocco’s most iconic natural landmarks, and it’s sure to leave a lasting impression.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Apart from that, the real enchantment occurs right after you step on the land of Merzouga. The Erg Chebbi is a small dune field located at the western tip of this desert town, sitting right on the edge. You\'ll take a camel ride to admire the sunset over the golden dunes, then you\'ll reach a desert bivouac. Under a clear, starry sky, you\'ll spend a magical night and enjoy a delicious dinner on site.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Day 3: Sunrise Over the Dunes and Return to Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('It is priceless to spend the night in the desert and then have the opportunity to look at the sun rising over the dunes of Merzouga when you wake up. After breakfast, it\'s time to bid farewell to the Sahara and begin your journey back to Marrakech. On the return route, you\'ll pass through Erfoud, known for its fossils, and Rissani, a historic town that was once a major trading center in the region. You\'ll also stop once again in Ouarzazate for a relaxed lunch before continuing on through the Atlas Mountains, where you\'ll arrive around 8:00 PM, concluding this memorable Marrakech to Merzouga excursion.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Why This Tour is a Must-Do!')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('This 3 day desert tour from Marrakech to Merzouga offers an unmatched opportunity to experience the best of Morocco\'s natural beauty and cultural heritage. From the dramatic landscapes of the Atlas Mountains to the vast, mesmerizing dunes of the Sahara, this tour will leave you with memories that will last a lifetime. Whether you\'re an adventure enthusiast, a history buff, or simply someone looking to immerse themselves in the magic of Morocco, this tour has something for everyone.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('It’s not just about the destinations you’ll visit—it’s the journey itself. The scenic drives, the hidden gems along the way, and the chance to see Morocco from a perspective most tourists never do make this tour a truly unique experience')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Final Word: Your Adventure Awaits')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'Are you ready to embark on the best Merzouga desert tour and create unforgettable memories in the heart of Morocco? This tour isn’t just a trip it’s a once in a lifetime adventure Grab your spot now, and let Moroccan Adventure City take care of the rest!',
                                        ),
                                    ) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your desert dream is just a click away!')) }}
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
                            {{ __('85 € / Person') }}
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
        'type' => 'merzouga excursion',
    ])
@endsection
