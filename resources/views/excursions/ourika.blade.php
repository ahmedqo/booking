@extends('shared.guest.base')
@section('title', ucwords(__('Ourika Valley Day Tour and Excursion from Marrakech')))
@php
    Core::$route = 1;
@endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Escape Marrakech with a guided tour to Ourika Valley. Explore the stunning waterfalls, Berber villages, and authentic Moroccan culture on this full-day excursion.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Escape Marrakech with a guided tour to Ourika Valley. Explore the stunning waterfalls, Berber villages, and authentic Moroccan culture on this full-day excursion.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Escape Marrakech with a guided tour to Ourika Valley. Explore the stunning waterfalls, Berber villages, and authentic Moroccan culture on this full-day excursion.',
    ) !!}">
    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/ourika/ourika-1.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/ourika/ourika-1.webp') }}">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "{{ __('Ourika Valley Tour and Excursion from Marrakech') }}",
  "description": "{{ __('Escape Marrakech with a guided tour to Ourika Valley. Explore the stunning waterfalls, Berber villages, and authentic Moroccan culture on this full-day excursion.') }}",
  "image": [
    "{{ asset('img/ourika/ourika-1.webp') }}",
    "{{ asset('img/ourika/ourika-2.webp') }}",
    "{{ asset('img/ourika/ourika-3.webp') }}",
    "{{ asset('img/ourika/ourika-4.webp') }}"
  ],
  "touristType": "{{ __('Nature Enthusiasts, Culture Lovers, Families') }}",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "{{ __('Departure from Marrakech') }}",
        "description": "{{ __('Pick-up between 9:00 AM and 10:00 AM from your hotel or Riad in Marrakech.') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "{{ __('Visit to Argan Cooperative') }}",
        "description": "{{ __('Stop by an Argan oil cooperative and learn about traditional methods of oil production.') }}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "{{ __('Setti Fatma & Ourika Valley Waterfalls') }}",
        "description": "{{ __('Hike to the stunning Setti Fatma waterfalls and enjoy the surrounding nature.') }}"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "{{ __('Lunch by the River') }}",
        "description": "{{ __('Savor a traditional Moroccan lunch at a riverside restaurant with stunning views.') }}"
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "{{ __('Visit to Berber Villages') }}",
        "description": "{{ __('Explore local Berber villages, experiencing traditional Moroccan culture.') }}"
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "{{ __('Return to Marrakech') }}",
        "description": "{{ __('Head back to Marrakech around 5:00 PM after a day filled with nature and culture.') }}"
      }
    ]
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "EUR",
    "price": "15.00",
    "availability": "https://schema.org/InStock",
    "validFrom": "{{ now()->toIso8601String() }}",
    "url": "{{ route('views.guest.excursion') }}",
    "description": "{{ __('Book your full-day tour to Ourika Valley from Marrakech. Enjoy stunning nature, explore Berber villages, and hike to the famous waterfalls.') }}"
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
  "duration": "P1D",
  "startDate": "{{ now()->toIso8601String() }}",
  "endDate": "{{ now()->addDays(1)->toIso8601String() }}"
}
</script>


@endsection

@section('content')
    @include('shared.guest.topbar', [
        'title' => __('a day in ourika'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'a day in ourika image',
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
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('15 € / Person') }}
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
                                __('Duration: 1 Day'),
                                __('Departure at 10:00 AM | Return at 5:00 PM'),
                                __('Transportation via minibus and guided tour included'),
                                __('Hotel pick-up between 9:00 AM and 10:00 AM'),
                                __('Payment upon departure'),
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
                                __('Discover the magnificent Ourika Valley and its untouched nature'),
                                __(
                                    'Explore some Berber villages and their terraces clinging to the reddish slopes of the valley'),
                                __('Learn more about argan oil and visit cooperatives run by Berber women'),
                                __('Visit the authentic Berber souk (market), available on Mondays'),
                                __('Admire the Setti Fatma waterfalls'),
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
                                    {{ ucwords(__('Explore Ourika from Marrakech: A Cultural and Coastal Getaway')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('What are the best options to escape from the vibrant, fast-paced life of Marrakech to somewhere quieter for a day? If you are looking for an escape into nature where you can breathe in the fresh mountain air, admire beautiful landscapes, and get immersed in local culture, then the Ourika Valley tour is just the right choice for you. This picturesque journey will take you to the Ourika Valley, which is the ideal destination with its tranquil atmosphere as a contrast to the lively city. The Ourika trip guarantees a remarkable adventure with its mystical waterfalls, verdant nature, and the authentic Berber Settlements.')) }}
                                </p>

                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Relaxing Start to Your Journey')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'Your day starts off between 9:00 AM and 10:00 AM, as our comfortable minibus picks you up from your hotel or Riad in Marrakech. You will be in the countryside of Morocco in no time as you leave behind the bustling city and get lost in the charming countryside of Morocco. The road leading you to the Ourika Valley is phenomenal as it has the luxurious Atlas Mountains, and every twist and turn unveils more of Morocco’s spectacular landscapes.',
                                        ),
                                    ) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Among us, we shall stop by an Argan oil cooperative for a short while along the way-a rare chance to discover the making of this well-known oil. The cooperative is managed by local women who use traditional methods to produce the oil of morocco. These methods have been passed down through generations. In this place, you will see the whole process of making Argan oil, starting from the nuts and finishing with the product. If you like, you can also buy some as a souvenir. It’s an exciting opening to the old traditions of this area before moving forward to the richer part of the valley.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Exploring Setti Fatma and the Ourika Valley Waterfalls')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'After the brief visit to the cooperative, we’ll proceed to the very center of the Ourika Valley, and reach the lovely town of Setti Fatma. This lovely village is where the famous Ourika Valley waterfalls begin your adventure.',
                                        ),
                                    ) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('When you get to Setti Fatma, a local tour guide will be waiting for you and he will take you around the village and up the trails to the waterfalls. As you hike to the falls, you will enjoy the scenery and the calmness of nature. Along the way, you will encounter small wooden bridges, local homes, and rich green plants that create a serene atmosphere in the Ourika Valley.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __('Reaching the waterfalls is of course the high point of the walk. The cool, flowing water gives great relief and you will have enough time to relax, take photos, or even dip your feet in the water. The hike is appropriate for almost every fitness level, and your guide will make sure the speed is easy for all.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Lunch by the River: A Taste of Moroccan Flavors.'),
                                    ) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Lunch by the River: A Taste of Moroccan Flavors')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'After your hike to the waterfalls, it is time to de-stress your brain and go for a nice lunch in one of the riverside traditional restaurants. These delightful restaurants provide stunning views of the environmentally friendly nature thus allow for real dining pleasures. You can imagine having a delicious meal of Moroccan dishes, including tagine and grilled meats, as the river flows by creating the ideal setting.',
                                        ),
                                    ) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('This brief period of inactivity is a chance to fully absorb the loveliness of the Ourika Valley and thus, to become more aware of the blessings of life in this area. Regardless of whether you are eating alone or with family and friends, the peaceful riverside environment makes a perfect backdrop for your meal.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Glimpse Into Traditional Berber Life')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'Among the most beneficial aspects of the Ourika trip is the chance to see traditional Berber culture up very close. As you make your way through the valley, you will see different Berber settlements, some of which look as if they are about to fall off the mountain. These villages are inhabited by the local Berber folk who have been living in this area for more than a thousand years.',
                                        ),
                                    ) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('While in Setti Fatma or on the way to the hiking path, you might get the opportunity to talk with some of the people and discover the secrets of their lives. The Berber people are famous for their kindness, so you may expect a warm welcome and bright smiles upon your arrival. It is a good opportunity to discover their customs, their relation to the earth, and the simple way they live.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('If you would like to bring a piece of the valley home with you, keep your eyes peeled for local handicrafts such as woven rugs, pottery, and jewelry. These items not only are great gifts but also help the local communities.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Scenic Return to Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'As the afternoon draws near, you will start your trip back to Marrakech, leaving the peaceful Ourika Valley behind you. The way back is just as picturesque as the first trip, so you have another chance to enjoy the magnificent Alpine scenery. You will be back in the city around 5 PM, at which point you will feel invigorated and full of life, with a mind full of recollections of the day spent immersed in the beauty of nature in Morocco.',
                                        ),
                                    ) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'Ready to experience the tranquility and beauty of the Ourika Valley for yourself? Whether you’re a nature lover, a culture enthusiast, or simply looking for a peaceful day trip from Marrakech, this tour offers something for everyone. Don’t miss out on the chance to hike to the Ourika Valley waterfalls, visit traditional Berber villages, and enjoy a delicious lunch by the river.',
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
                            {{ __('15 € / Person') }}
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
        'type' => 'ourika excursion',
    ])
@endsection
