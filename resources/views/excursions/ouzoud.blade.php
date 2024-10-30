@extends('shared.guest.base')
@section('title',
    ucwords(__('Experience Full-Day Tour of the ouzoud waterfalls')) .
    ' | ' .
    __('Morocco Adventure
    City'))
    @php
        Core::$route = 1;
    @endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Escape Marrakech on a full-day trip to Ouzoud Waterfalls. Explore nature, spot wildlife, and enjoy a traditional Tajine, with convenient hotel pick-up.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Escape Marrakech on a full-day trip to Ouzoud Waterfalls. Explore nature, spot wildlife, and enjoy a traditional Tajine, with convenient hotel pick-up.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Escape Marrakech on a full-day trip to Ouzoud Waterfalls. Explore nature, spot wildlife, and enjoy a traditional Tajine, with convenient hotel pick-up.',
    ) !!}">

    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/ouzoud/ouzoud-3.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/ouzoud/ouzoud-3.webp') }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TouristTrip",
      "name": "Ouzoud Waterfalls Day Trip from Marrakech",
      "description": "Escape Marrakech on a full-day trip to the breathtaking Ouzoud Waterfalls. Explore nature, spot wildlife, and enjoy a traditional Moroccan meal. The excursion includes hotel pick-up and free cancellation.",
      "image": [
        "{{ asset('img/ouzoud/ouzoud-1.webp') }}",
        "{{ asset('img/ouzoud/ouzoud-2.webp') }}",
        "{{ asset('img/ouzoud/ouzoud-3.webp') }}"
      ],
      "touristType": "Nature Lovers, Families, Adventurers",
      "itinerary": {
        "@type": "ItemList",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Pick-up from Marrakech",
            "description": "Pick-up between 8:00 AM & 9:00 AM from your hotel or Riad in Marrakech."
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "Journey to Ouzoud Falls",
            "description": "Enjoy a scenic 3-hour drive through traditional Berber villages and olive groves."
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "Explore Ouzoud Falls",
            "description": "Arrive at the Ouzoud Waterfalls and spend around four hours exploring. Swim in the natural pools, hike the trails, and admire the local wildlife, including Barbary macaques."
          },
          {
            "@type": "ListItem",
            "position": 4,
            "name": "Traditional Moroccan Meal",
            "description": "Savor an authentic Moroccan Tajine at a local restaurant near the falls."
          },
          {
            "@type": "ListItem",
            "position": 5,
            "name": "Return to Marrakech",
            "description": "Head back to Marrakech in the late afternoon, arriving around 8:00 PM, just in time for sunset."
          }
        ]
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "USD",
        "price": "20.00",
        "availability": "https://schema.org/InStock",
        "validFrom": "{{ now()->toIso8601String() }}",
        "url": "{{ route('views.excursions.ouzoud') }}",
        "description": "Book your full-day trip to Ouzoud Falls from Marrakech, including hotel pick-up, scenic views, and a traditional Moroccan meal."
      },
      "provider": {
        "@type": "TouristInformationCenter",
        "name": "Morocco Adventure City",
        "url": "{{ route('views.guest.index')  }}",
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
      "duration": "PT10H",
      "startDate": "{{ now()->toIso8601String() }}",
      "endDate": "{{ now()->addDays(1)->toIso8601String() }}"
    }
    </script>
@endsection

@section('content')
    @include('shared.guest.topbar', [
        'title' => __('the ouzoud falls'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'the ouzoud falls image',
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
                                __('Duration: Full day (1 day)'),
                                __('Pick-up: between 8:00 AM & 9:00 AM, depending on the location of your hotel'),
                                __('Return Time: Approximately 7:00 PM'),
                                __('Confirmation: Immediate booking confirmation.'),
                                __(
                                    'Direct pick-up at your hotel or Riad in Marrakech. If your Riad is located in the Medina, pick-up will be arranged at an accessible location, as close as possible to your Riad or hotel'),
                                __('Cancellation: 100% Free cancellation available'),
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
                                    'Discover and explore the magnificent region of Ouzoud and its pristine natural beauty'),
                                __(
                                    'Contemplate the Ouzoud waterfalls, the most spectacular waterfalls in North Africa'),
                                __('Admire the monkeys and birds that inhabit the area'),
                                __(
                                    'Enjoy a traditional Tajine in one of the local restaurants  for an authentic taste of Morocco'),
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
                                    {{ ucwords(__('Discover the Ouzoud Waterfalls from Marrakech: Embark on a Guaranteed Unforgettable Trip')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('A day trip to the Ouzoud Waterfalls is a perfect escape from the busy streets of Marrakech. Located around 150 kilometers away, the falls offer you a peaceful and scenic retreat into the Moroccan countryside, complete with stunning natural views, wildlife, and local cuisine.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Early Morning Departure from Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your trip starts early, leaving Marrakech around 8 a.m. The journey to Ouzoud Falls takes you through traditional villages and towns, giving you a glimpse of rural Moroccan life. The scenic drive of about three hours offers plenty to see as you pass olive groves, winding roads, and Berber settlements.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Arrival at the Ouzoud Waterfalls')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After the journey, you\'ll arrive at the breathtaking Ouzoud Waterfalls, standing over 100 meters high. You\'ll have around four hours to explore the area. There\'s plenty to do from walking around the falls to swimming in the pools at the base. You\'ll also likely encounter the famous Ouzoud Falls monkeys, a group of Barbary macaques that roam the area. They are friendly and often approach visitors, making for a memorable wildlife experience.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Enjoy a Traditional Moroccan Meal Break')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After exploring, you’ll probably be hungry. Luckily, there are a few small restaurants near the ouzoud cascades where to some mouthwatering Moroccan dishesthat will make your taste buds pop with every bite. Think tagine, couscous, and fresh salads authentic and hearty dishes to refuel you for the rest of your day.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Return to Marrakech in Beauty')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After a peaceful afternoon at Ouzoud Falls, it’s time to make your way back to Marrakech. You’ll head out in the late afternoon and arrive by 8 p.m., just in time to catch the final rays of the setting sun.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The excursion to the Ouzoud Waterfalls from Marrakech promises an unforgettable experience, blending nature, culture, and gastronomy. Ouzoud Waterfalls has something for everyone. Book your Ouzoud Falls day trip today for an unforgettable experience outside the city.')) }}
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
        'type' => 'ouzoud excursion',
    ])
@endsection
