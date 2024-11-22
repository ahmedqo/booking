@extends('shared.guest.base')
@section('title', ucwords(__('Private Ouzoud Waterfalls Tour from Marrakech')))
@php
    Core::$route = 2;
@endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Experience the beauty of Ouzoud Waterfalls on a private tour from Marrakech. Enjoy scenic views, wildlife, local cuisine, and a relaxing escape to nature.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Experience the beauty of Ouzoud Waterfalls on a private tour from Marrakech. Enjoy scenic views, wildlife, local cuisine, and a relaxing escape to nature.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Experience the beauty of Ouzoud Waterfalls on a private tour from Marrakech. Enjoy scenic views, wildlife, local cuisine, and a relaxing escape to nature.',
    ) !!}">
    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/essaouira/essaouira-1.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/essaouira/essaouira-1.webp') }}">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "{{ __('Private Ouzoud Waterfalls Tour from Marrakech') }}",
  "description": "{{ __('Experience the beauty of Ouzoud Waterfalls on a private tour from Marrakech. Enjoy scenic views, wildlife, local cuisine, and a relaxing escape to nature.') }}",
  "image": [
    "{{ asset('img/ouzoud/ouzoud-1.webp') }}",
    "{{ asset('img/ouzoud/ouzoud-2.webp') }}",
    "{{ asset('img/ouzoud/ouzoud-3.webp') }}"
  ],
  "touristType": "{{ __('Nature Enthusiasts, Foodies, Relaxation Seekers') }}",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "{{ __('Early Departure from Marrakech') }}",
        "description": "{{ __('Start your journey at 8:00 AM and enjoy a scenic drive through the Moroccan countryside.') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "{{ __('Arriving at the Ouzoud Waterfalls') }}",
        "description": "{{ __('Explore the stunning Ouzoud Waterfalls, surrounded by lush greenery and wildlife.') }}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "{{ __('Wildlife Encounters') }}",
        "description": "{{ __('Meet playful monkeys and admire colorful birds in their natural habitat.') }}"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "{{ __('Traditional Moroccan Lunch') }}",
        "description": "{{ __('Enjoy a delicious tagine at a local restaurant near the falls.') }}"
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "{{ __('Relaxation and Activities') }}",
        "description": "{{ __('Take a swim in the cool waters or relax with a coffee while enjoying the views.') }}"
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "{{ __('Return to Marrakech') }}",
        "description": "{{ __('Arrive back in Marrakech around 7:00 PM after a memorable day trip.') }}"
      }
    ]
  },
  "offers": [
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "150.00",
      "description": "{{ __('Price for 2 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 2
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "150.00",
      "description": "{{ __('Price for 3 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 3
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "150.00",
      "description": "{{ __('Price for 4 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 4
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "170.00",
      "description": "{{ __('Price for 8 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 8
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "170.00",
      "description": "{{ __('Price for 9 persons') }}",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "value": 9
      }
    },
    {
      "@type": "Offer",
      "priceCurrency": "EUR",
      "price": "180.00",
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
  "endDate": "{{ now()->addDays(1)->toIso8601String() }}"
}
</script>


@endsection




@section('content')
    @include('shared.guest.topbar', [
        'title' => __('Private Ouzoud Waterfalls Tour from Marrakech'),
        'start' => [route('views.guest.private'), __('Private Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => __('the ouzoud falls image'),
                        'img' => [
                            asset('img/ouzoud/ouzoud-1.webp'),
                            asset('img/ouzoud/ouzoud-2.webp'),
                            asset('img/ouzoud/ouzoud-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Have a wonderful day at the Ouzoud Falls.') }}
                    </p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        <h2 class="font-x-thin text-2xl text-x-acent">
                            {{ ucwords(__('Price Ranges')) }}
                        </h2>
                        @include('shared.guest.price', [
                            'items' => [
                                2 => '150',
                                3 => '150',
                                4 => '150',
                                5 => '150',
                                6 => '150',
                                7 => '150',
                                8 => '170',
                                9 => '170',
                                10 => '170',
                                11 => '170',
                                12 => '170',
                                13 => '170',
                                14 => '170',
                                15 => '170',
                                16 => '180',
                                17 => '180',
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
                                __(
                                    'Pick-up: Between 8:00 AM and 9:00 AM from your hotel or Riad in Marrakech. If your accommodation is in the Medina, pick-up will be arranged at the nearest accessible location.'),
                                __('Return: Around 7:00 PM.'),
                                __('Cancellation: Free cancellation for peace of mind.'),
                                __('Confirmation: Immediate upon booking.'),
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
                                    'Witness the breathtaking beauty of Ouzoud, home to North Africa\'s tallest waterfalls.'),
                                __('Spot adorable monkeys and exotic birds that thrive in the area.'),
                                __('Indulge in a traditional Moroccan tagine at a local restaurant.'),
                                __('Enjoy free time to swim, relax, or explore the falls at your own pace.'),
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
                                {{ ucwords(__('Escape to the Ouzoud Waterfalls: A Must-Visit Moroccan Marvel')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Are you ready to embark on an adventure that combines breathtaking natural beauty, culture that is immersive, and an unforgettable culinary delights? The private excursion to the Ouzoud Waterfalls from Marrakech is a great holiday option for those in search of a different Moroccan experience. This day tour offers a wonderful chance of sightseeing combined with some exciting things to do and moments of utmost relaxation. Let\'s find out what makes the trip so remarkable!')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('An Early Start from Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your day begins bright and early, around 8:00 AM, During the trip, you\'ll come across the Moroccan countryside, hemmed with charming traditional villages. The scenic drive offers an authentic glimpse into the rural Moroccan way of life, setting the tone for the adventure ahead.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Arriving at the Spectacular Ouzoud Waterfalls')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('When you have leisurely driven for three hours, you\'ll be standing on the banks of one of North Africa\'s breathtaking natural wonders: Ouzoud Waterfalls. With over 100-meter high cascades, these majestic falls are surrounded by lush greenery and teeming with wildlife. You\'ll have four hours to explore, unwind, and soak up the beauty of this serene oasis. If you are interested in wildlife, meet the mischievous monkeys who inhabit this area. Besides, they are like stars and will definitely melt your heart! You will also fawn over the colorful birds darting through the trees. Do you have the feeling of curiosity that is unquenchable? Take a refreshing swim in the cool water or just relax with a cup of coffee at the nearby cafe!')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Taste of Moroccan Cuisine')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Food is an indispensable part of the visit to the Ouzoud Falls, so don’t suppose that you have tried the local cuisine until you come here. You can sample several of them each of which is traditional Moroccan fare and mouth-watering indeed. Just imagine a plate full of steaming tagine being served right in front of the breathtaking waterfalls this is definitely not one of the ordinary dishes you have ever tasted but rather a spectacle. Mastering such a combination of unique flavors and breathtaking views will be for you a real treat. Breaking away to one of the small, authentic restaurants of the local market will be a foodie encounter of a lifetime.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Heading Back to Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('As your day at the Ouzoud Waterfalls winds down, it’s time to return to Marrakech. The drive back is a peaceful journey, allowing you to reflect on the day’s adventures as the golden hues of the setting sun paint the horizon. Expect to arrive back in Marrakech around 7:00 PM, with a heart full of memories and a phone full of stunning photos.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Why Choose This Excursion?')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('This private excursion is more than just a trip; it’s an experience that blends nature, culture, and relaxation in perfect harmony. Whether you’re a nature enthusiast, a foodie, or simply someone looking to escape the hustle and bustle of city life, the Ouzoud Waterfalls offer something special for everyone.')) }}
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
        'type' => 'private ouzoud excursion',
    ])
@endsection
