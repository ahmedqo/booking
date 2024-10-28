@extends('shared.guest.base')
@section('title', ucwords(__('Ouarzazate Day Trip from Marrakech: Ait Ben Haddou & Atlas')))
@php
    Core::$route = 1;
@endphp

@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Explore Ouarzazate and Ait Ben Haddou on a day trip from Marrakech. Discover film studios, historic Kasbahs, and the stunning Atlas Mountains.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Explore Ouarzazate and Ait Ben Haddou on a day trip from Marrakech. Discover film studios, historic Kasbahs, and the stunning Atlas Mountains.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Explore Ouarzazate and Ait Ben Haddou on a day trip from Marrakech. Discover film studios, historic Kasbahs, and the stunning Atlas Mountains.',
    ) !!}">
    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/majorelle/majorelle-1.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/majorelle/majorelle-1.webp') }}">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Ouarzazate Day Trip from Marrakech: Ait Ben Haddou & Atlas",
  "description": "Explore Ouarzazate and Ait Ben Haddou on a day trip from Marrakech. Discover iconic film studios, historic Kasbahs, and the stunning Atlas Mountains.",
  "image": [
    "{{ asset('img/ouarzazate/ouarzazate-1.webp') }}",
    "{{ asset('img/ouarzazate/ouarzazate-2.webp') }}",
    "{{ asset('img/ouarzazate/ouarzazate-3.webp') }}"
  ],
  "touristType": "Culture Enthusiasts, Adventure Seekers, History Buffs",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Pick-up from Marrakech",
        "description": "Pick-up from your hotel or Riad in Marrakech at 07:00 AM."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Journey through the Atlas Mountains",
        "description": "Travel through the scenic Atlas Mountains and Tichka Pass en route to Ouarzazate."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Visit Ait Ben Haddou Kasbah",
        "description": "Explore the UNESCO-listed Ait Ben Haddou Kasbah, a historic fortress of clay and stone."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Explore Ouarzazate",
        "description": "Discover Ouarzazate, known as 'The Hollywood of Africa,' and visit its famous film studios."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Return to Marrakech",
        "description": "End your excursion with a scenic return to Marrakech by 8:00 PM."
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
    "description": "Book your Ouarzazate day trip from Marrakech and explore Ait Ben Haddou, iconic film studios, and the stunning Atlas Mountains."
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
        'title' => __('ouarzazate trip'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'ouarzazate trip image',
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
                                __('1-Day Tour'),
                                __('Departure at 07:00 AM, Return at 8:00 PM'),
                                __('Printed or mobile vouchers accepted'),
                                __('Instant booking confirmation'),
                                __(
                                    'Hotel or Riad pick-up in Marrakech; Medina locations arranged for nearby access'),
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
                                __('Explore Ouarzazate, home to iconic film studios'),
                                __('Visit the UNESCO-listed Ait Ben Haddou Kasbah'),
                                __('Marvel at the stunning Atlas Mountains and Tichka Pass'),
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
                                {{ ucwords(__('Discover Ouarzazate and Ait Ben Haddou: A Day Trip from Marrakech')) }}
                            </h3>
                            <p class="text-x-black text-lg font-normal">
                                {{ ucfirst(__('Are you ready for an adventure that you\'ll never forget? Embark on a Ouarzazate day trip from Marrakech and discover some of Morocco\'s most beautiful and rich in culture and history. This is a daylong trip that will give you the opportunity to enjoy breathtaking views, experience an interesting history, and see what is referred to as "Africa\'s Hollywood."')) }}
                            </p>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Early Morning Departure from Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your journey begins with an early start at 7:00 AM from Marrakech. As you travel 180 kilometers through the winding roads of the majestic Atlas Mountains, famous Tichka Pass, as you pass them and drive through the 180 km distance. The impressive views of the mountains soaring high with the valleys unrolling at the foot of them will stun you. This is the perfect way to begin your excursion Marrakech Ouarzazate 1 day adventure.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Ait Ben Haddou Kasbah: A Historical Treasure')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your first place to go is Ait Ben Haddou Kasbah which is a UNESCO World Heritage site and a masterpiece of southern Moroccan architecture. The ancient Ait Ben Haddou Kasbah, constructed of clay and stone, is a perfect representation of the rich history of the region. The entrance to the building is by scaling its high walls, and inside, you will find the beautifully preserved houses, courtyards, and buildings which have so many stories to tell. Anyone who is a history lover or just a fan of ancient wonders will surely be amazed by the Ait Ben Haddou\'s architecture.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Discover Ouarzazate, the Hollywood of Africa')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your next stop will be Ouarzazate, which is otherwise known as the "Hollywood of Africa." The city has become popular for its film studios where some of the biggest movies have been produced. Here you can visit the film sets and even walk in the footsteps of stars who have filmed there. Besides the opportunity to experience the Moroccan film industry, Ouarzazate also presents you with a chance to visit the film sets and walk where epic scenes have been filmed. Ouarzazate is also home to some of the film places that were used in the making of the vibrant Moroccan films.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Return to Marrakech in Beauty')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your day will be finished and you will start the beautiful drive back to Marrakech where you will be there around 8:00 PM. The return trip gives you a last chance to admire the mesmerizing scenery of the Atlas Mountains as the sunset paints the peaks with golden color.')) }}
                                </p>

                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Ready for an Unforgettable Adventure?')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Don\'t let this opportunity to visit the charming Ouarzazate and Ait Ben Haddou Kasbah that is full of history and the majestic Ouarzazate pass you by. You will be treated to a variety of experiences during this day tour whether you are a fan of history, architecture, or cinema. Book your Ouarzazate day trip from Marrakech now and let the adventure begin!')) }}
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
        'type' => 'ouarzazate excursion',
    ])
@endsection
