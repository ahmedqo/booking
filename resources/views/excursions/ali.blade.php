@section('title', ucwords(__('Chez Ali Marrakech: Magical Night of Fantasia & Dinner')))
@extends('shared.guest.base')
@php
    Core::$route = 1;
@endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Experience an enchanting evening at Chez Ali Marrakech with a traditional dinner, captivating Fantasia show, Berber dancers, horseback acrobats, and fireworks.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Experience an enchanting evening at Chez Ali Marrakech with a traditional dinner, captivating Fantasia show, Berber dancers, horseback acrobats, and fireworks.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Experience an enchanting evening at Chez Ali Marrakech with a traditional dinner, captivating Fantasia show, Berber dancers, horseback acrobats, and fireworks.',
    ) !!}">
    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/ali/chezali-1.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/ali/chezali-1.webp') }}">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Chez Ali Marrakech: Magical Night of Fantasia & Dinner",
  "description": "Experience an enchanting evening at Chez Ali Marrakech with a traditional dinner, captivating Fantasia show, Berber dancers, horseback acrobats, and fireworks.",
  "image": [
    "{{ asset('img/ali/chezali-1.webp') }}",
    "{{ asset('img/ali/chezali-2.webp') }}",
    "{{ asset('img/ali/chezali-3.webp') }}",
    "{{ asset('img/ali/chezali-4.webp') }}",
    "{{ asset('img/ali/chezali-5.webp') }}",
    "{{ asset('img/ali/chezali-6.webp') }}",
    "{{ asset('img/ali/chezali-7.webp') }}",
    "{{ asset('img/ali/chezali-8.webp') }}"
  ],
  "touristType": "Culture Enthusiasts, Families, Adventure Seekers",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Pick-up from Marrakech",
        "description": "Pick-up between 7:30 PM and 8:30 PM from your hotel or Riad in Marrakech."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Traditional Berber Welcome",
        "description": "Be welcomed by Berber troops with traditional chants and dances as you enter the Chez Ali complex."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Dinner Under a Caidal Tent",
        "description": "Enjoy a traditional Moroccan dinner under a Berber tent while watching parades of Morocco's diverse tribes."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Fantasia Show",
        "description": "Admire the famous Fantasia show with acrobatic horseback riders, belly dancers, flying carpet performances, and fireworks."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Return to Marrakech",
        "description": "After the spectacular show, return to Marrakech around 11:30 PM."
      }
    ]
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "EUR",
    "price": "45.00",
    "availability": "https://schema.org/InStock",
    "validFrom": "{{ now()->toIso8601String() }}",
    "url": "{{ route('views.guest.excursion') }}",
    "description": "Book your Chez Ali Marrakech evening tour with Moroccan Adventure City. Enjoy a magical dinner and Fantasia show with Berber performers, acrobats, and fireworks."
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
  "duration": "PT4H",
  "startDate": "{{ now()->toIso8601String() }}",
  "endDate": "{{ now()->addHours(4)->toIso8601String() }}"
}
</script>


@endsection

@section('content')
    @include('shared.guest.topbar', [
        'title' => __('chez ali trip'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'chez ali trip image',
                        'img' => [
                            asset('img/ali/chezali-1.webp'),
                            asset('img/ali/chezali-2.webp'),
                            asset('img/ali/chezali-3.webp'),
                            asset('img/ali/chezali-4.webp'),
                            asset('img/ali/chezali-5.webp'),
                            asset('img/ali/chezali-6.webp'),
                            asset('img/ali/chezali-7.webp'),
                            asset('img/ali/chezali-8.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Enjoy a magical night in the ambiance of One Thousand and One Nights at the Chez Ali complex on the outskirts of Marrakech, an evening where you\'ll experience a blend of tasting local flavors and folkloric performances.') }}
                    </p>
                </div>
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('45 € / Person') }}
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
                                __('Duration: 4 hours'),
                                __('Pick-up time for clients: From 7:30 PM to 8:30 PM'),
                                __('Start of the show: 9:00 PM'),
                                __('Immediate confirmation'),
                                __(
                                    'Pick-up from your hotel or Riad in Marrakech. If your Riad is located in the Medina, pick-up will be arranged at a nearby accessible location as close as possible to your Riad or Hotel'),
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
                                __('Savor a delicious dinner with authentic Moroccan flavors under Berber tents'),
                                __('Discover the history of Moroccan folklore and its Berber troops'),
                                __(
                                    'Admire horseback acrobats, belly dancers, flying carpet performances, and fireworks'),
                                __(
                                    'Marvel at the fascinating and sophisticated Tbourida spectacle and its brave equestrians'),
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
                                    {{ ucwords(__('Immerse Yourself in the Magic of Chez Ali in Marrakech')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Do you need a place to go for a magical night in Marrakech? Leave the crowded cars of the city behind and find your way to the magical world of Chez Ali. This colorful location, right in the middle of the palm grove, will take you on an incredible four-hour journey filled with music, performances, and incredible entertainment.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('As soon as you set foot in Chez Ali Marrakech, you\'ll be met with a friendly embrace from the Berber troops, who will start your journey with traditional chants and dances. You will be called to your table inside a traditional caidal tent through the colorful and lively atmosphere as you make your way. Get ready to be enchanted by the charm and energy of Morocco\'s One Thousand and One Nights.')) }}
                                </p>

                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Feast for the Senses')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'The dinner at Chez Ali Fantasia is more than just a meal it\'s a cultural experience that touches all the senses. While enjoying your meal, you will be treated to parades displaying the various tribes that symbolize the rich and diverse history of Morocco. Through the rhythmic beats of the Gnawa and the Zayane, and Ahwache the graceful performance, each performance represents a different aspect of Moroccan heritage.',
                                        ),
                                    ) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('And then, as the night unfolds, the real magic begins! Truly, you will be speechless at the acrobats on horseback as they demonstrate their talents, and the belly dancers and flying carpet performers who will spice up the night with their grace and skill. And to top it all, a mesmerizing display of fireworks will dazzle the night sky, leaving a lasting impression on everyone.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('The Spectacular Finale: The Fantasia Show')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(
                                        __(
                                            'The grand finale of the night is the famous Chez Ali Fantasia show-a dramatic reenactment of the ancient horse battles that once took place in Morocco. When the warriors and Berber horsemen gallop through the arena, you\'ll be taken back to the time of ancient Morocco, witnessing a piece of this storied past.',
                                        ),
                                    ) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Get ready for the ride of a lifetime! The Chez Ali Restaurant takes you on a tour of the heart of Moroccan culture, all of which is beautifully wrapped up in an evening filled with breathtaking entertainment. Book now with Moroccan Adventure City and make your night in Marrakech one you will never forget!')) }}
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
                            {{ __('45 € / Person') }}
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
        'type' => 'chez ali excursion',
    ])
@endsection
