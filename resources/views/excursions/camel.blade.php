@extends('shared.guest.base')
@section('title', ucwords(__('Camel Safari Ride in Marrakech: Explore the Desert Oasis')))
@php
    Core::$route = 1;
@endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Experience a 2-hour camel safari in Marrakech’s Palmeraie. Discover desert landscapes, enjoy mint tea, and capture memories in traditional Berber attire.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Experience a 2-hour camel safari in Marrakech’s Palmeraie. Discover desert landscapes, enjoy mint tea, and capture memories in traditional Berber attire.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Experience a 2-hour camel safari in Marrakech’s Palmeraie. Discover desert landscapes, enjoy mint tea, and capture memories in traditional Berber attire.',
    ) !!}">
    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/camel/camel-1.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/camel/camel-1.webp') }}">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Camel Safari Ride in Marrakech: Explore the Desert Oasis",
  "description": "Experience a 2-hour camel safari in Marrakech’s Palmeraie. Discover desert landscapes, enjoy mint tea, and capture memories in traditional Berber attire.",
  "image": [
    "{{ asset('img/camel/camel-1.webp') }}",
    "{{ asset('img/camel/camel-2.webp') }}",
    "{{ asset('img/camel/camel-3.webp') }}"
  ],
  "touristType": "Adventure Seekers, Families, Culture Enthusiasts",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Pick-up from Marrakech",
        "description": "Pick-up from your hotel or Riad in Marrakech."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Camel Ride in the Palmeraie",
        "description": "Enjoy a scenic camel ride through Marrakech’s Palmeraie, exploring desert landscapes."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Visit a Berber Village",
        "description": "Stop in a traditional Berber village for mint tea and traditional bread with olive oil."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Return to Marrakech",
        "description": "After your desert safari, return to your hotel or Riad in Marrakech."
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
    "description": "Book your 2-hour camel safari in Marrakech’s Palmeraie. Discover the desert, enjoy mint tea, and capture memories."
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
  "duration": "PT2H",
  "startDate": "{{ now()->toIso8601String() }}",
  "endDate": "{{ now()->addHours(2)->toIso8601String() }}"
}
</script>

@endsection

@section('content')
    @include('shared.guest.topbar', [
        'title' => __('a camel biking day'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'a camel biking day image',
                        'img' => [
                            asset('img/camel/camel-1.webp'),
                            asset('img/camel/camel-2.webp'),
                            asset('img/camel/camel-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Enjoy a camel ride and explore Marrakech differently.') }}
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
                                __('Camel ride in Marrakech’s Palmeraie oasis'),
                                __('Available daily with departures from 9 AM to 4 PM'),
                                __('2-hour journey through scenic desert landscapes'),
                                __('Free cancellation for flexible bookings'),
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
                                __('Experience a camel ride through the Palmeraie oasis'),
                                __('Discover Marrakech’s stunning Saharan landscapes'),
                                __('Pause to relax with mint tea during your journey'),
                                __('Capture memories dressed in traditional Berber attire'),
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
                                    {{ ucwords(__('Discover the Magic of a Camel Ride in Marrakech’s Palmeraie')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Are you ready to discover the desert in a way that connects you with its history and its nomadic traditions? Camel ride Marrakech allows you to explore the tranquil Palmeraie region, just outside the hustle and bustle of the city. For two hours, you’ll immerse yourself in the serene beauty of palm groves and desert landscapes, all while riding a gentle camel along the ancient caravan routes.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('An Adventure Like No Other')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('You\'ll be picked by our friendly driver from your hotel or riad and whoosh you away to the peaceful Palmeraie region Here, you\'ll meet your trusty companion a beautifully adorned camel for a desert journey. You will be riding along, and at that moment it will feel as if time has stopped, you are as calm as the living beings that followed these paths for centuries. This isn\'t just a camel ride you are being transported back in time to the days of antiquity.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Cultural Stop in a Berber Village')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Partway through your trip, we will take a break at a typical Berber village. This is your doorway to the Moroccan culture\'s core. You will be greeted with a reviving glass of mint tea, which you can have along with traditional bread and organic olive oil, just as the locals have done over the years. It is a time for such rest, to absorb the sun, and even dress in nomadic attire to take some pictures, making memories that will always stay with you.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Unforgettable Scenery and Memories')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('As your desert safari Morocco camel ride continues, you will be regaled with the one of a kind glittering spectacles in Moroccan desert. The beautiful palm trees and the sandy trails creates a scene straight out of a postcard. This is your chance to unwind, embrace the stillness of the desert, and let the adventure fill your senses.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('End Your Journey with a Smile')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After the camel trek, our driver will take you back to your hotel or riad, and you\'ll be left with wonderful memories of this extraordinary adventure of a lifetime. This is perfect for those wanting a tranquil retreat or a bit of excitement, making this camel ride in Marrakech the ideal way to experience the incredible magic of Morocco.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Book Your Camel Ride Today!')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Ready for a truly unforgettable experience? Don’t wait—book your camel ride Marrakech today and embark on a journey through the desert that will leave you with stories to tell and memories to cherish. This is the ultimate way to discover the beauty of Morocco in the most authentic and peaceful way.')) }}
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
        'type' => 'camel ride',
    ])
@endsection
