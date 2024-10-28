@extends('shared.guest.base')
@section('title', ucwords(__('Thrilling Buggy Ride in Marrakech’s Palm Grove Desert')))
@php
    Core::$route = 1;
@endphp
@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Experience a thrilling buggy ride in Marrakech’s palm grove. Explore trails, visit Berber villages, and enjoy Saharan landscapes. Daily departures',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Experience a thrilling buggy ride in Marrakech’s palm grove. Explore trails, visit Berber villages, and enjoy Saharan landscapes. Daily departures',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Experience a thrilling buggy ride in Marrakech’s palm grove. Explore trails, visit Berber villages, and enjoy Saharan landscapes. Daily departures',
    ) !!}">
    <!-- Meta Titles -->
    <meta property="og:title" content="{{ __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ __('Morocco Adventure City') }}">

    <!-- Meta Images -->
    <meta property="og:image" content="{{ asset('img/buggy/buggy-1.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/buggy/buggy-1.webp') }}">
    <script type="application/ld+json">   
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Thrilling Buggy Ride in Marrakech’s Palm Grove Desert",
  "description": "Experience the thrill of a buggy ride through Marrakech’s palm grove desert. Explore scenic trails, visit Berber villages, and enjoy Saharan landscapes on this unforgettable adventure.",
  "image": [
    "{{ asset('img/buggy/buggy-1.webp') }}",
    "{{ asset('img/buggy/buggy-2.webp') }}",
    "{{ asset('img/buggy/buggy-3.webp') }}"
  ],
  "touristType": "Adventure Enthusiasts, Couples, Families",
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Pick-up from Marrakech",
        "description": "Pick-up from your hotel or Riad in Marrakech for a stress-free start to your adventure."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Buggy Ride Through the Palm Grove",
        "description": "Enjoy a thrilling buggy ride through desert trails in Marrakech’s palm grove."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Break at Berber Village",
        "description": "Stop at a traditional Berber village, enjoy mint tea, and learn about the local culture."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Return to Marrakech",
        "description": "Conclude the adventure and return to your hotel or Riad in Marrakech."
      }
    ]
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "EUR",
    "price": "90.00",
    "availability": "https://schema.org/InStock",
    "url": "{{ route('views.guest.excursion') }}",
    "description": "Book your 2-hour buggy ride in Marrakech’s palm grove and enjoy an exciting desert adventure."
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
        'title' => __('buggy ride'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'buggy ride image',
                        'img' => [
                            asset('img/buggy/buggy-1.webp'),
                            asset('img/buggy/buggy-2.webp'),
                            asset('img/buggy/buggy-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Your Next Adventure Awaits: Explore Marrakech by Buggy!') }}
                    </p>
                </div>
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('90 € / Person') }}
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
                                __('2-hour adventure through the Marrakech desert'),
                                __('Available daily with departures from 9:00 AM to 2:00 PM'),
                                __('Printed or mobile vouchers accepted for a hassle-free experience'),
                                __('Enjoy free cancellation for ultimate booking flexibility'),
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
                                    'Experience the thrill of a buggy ride through the stunning palm grove region of Marrakech'),
                                __('Discover the breathtaking Saharan landscapes from a whole new perspective'),
                                __('Cruise along scenic trails and explore traditional Berber villages'),
                                __('Take a refreshing break to enjoy a glass of mint tea in a peaceful village'),
                                __(
                                    'Feel the adrenaline as you power through the desert on this exhilarating adventure'),
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
                                {{ ucwords(__('Discover the Thrills of a Buggy Adventure in Marrakech')) }}
                            </h3>
                            <p class="text-x-black text-lg font-normal">
                                {{ ucfirst(__('Do you want a way to explore the beautiful nature around Marrakech? Try out a buggy excursion in Marrakech and enjoy a different adventure that will take you away from the busy city and into the wildness of the desert. Your buggy ride, whether you\'re a thrill-seeker or someone who just wants to have a good time, is the most amazing way to live in the natural beauty of Morocco.')) }}
                            </p>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Begin Your Adventure with a Hassle-Free Start')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your buggy adventure starts as soon as our chauffeur picks you from your accommodation, be it a hotel or Riad. We\'ll take you to the palm grove, a beautiful and peaceful place just outside of Marrakech, where your exciting journey begins. After the briefing, you will receive hands-on training to familiarize yourself with buggy driving techniques. If you\'re a newbie, you have no reason to be anxious. Our professional instructor will be there to guide you through every step and make sure you\'re confident enough to hit the trails.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Explore the Stunning Palm Grove Region')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('When you are prepared to go, it is time to turn on the engine and embark on your thrilling excursion buggy Marrakech adventure. You\'ll be driving through the desert on rugged and rocky trails, sandy paths, and finally, you\'ll look at the magnificent palm grove from a distance. Driving a buggy in the uninhabited regions of Marrakech is a great way to have fun. The thrill of the wind on your face and the adrenaline rushing through your veins is unmatched.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Cultural Stop at a Traditional Berber Village')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('While doing the whole adventure, you will also stop at a local Berber village. There, you can take time off and enjoy a welcome glass of mint tea, known as the Berber "mbre." The tea is traditionally prepared along with freshly baked bread and organic olive oil. This break not only allows you to recharge your batteries but also gives you a chance to learn about the local culture and interact with the villagers. Don’t forget to capture some memorable photos before continuing your buggy Marrakech adventure.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('End Your Day with Lasting Memories')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After an action-packed day of exploration, your buggy Marrakech tour ends after a day full of fun and discovery. Our driver will return you to your hotel or Riad,where you can reflect on the unforgettable experience of discovering the Moroccan desert and how you discovered it in the most thrilling way. The combination of adrenaline, scenic beauty, and cultural immersion makes this ride a memory you\'ll keep for years to come.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Book Your Marrakech Buggy Excursion Today!')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Ready to experience the ultimate thrill in the desert? Don’t miss out on this incredible opportunity to explore the beauty of Marrakech with a buggy tour. Book your adventure today, and get ready to make unforgettable memories on your next Moroccan vacation!')) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <h2 class="font-x-thin text-2xl text-x-acent">
                        {{ ucwords(__('Included')) }}
                    </h2>
                    <div class="border border-x-shade rounded-x-huge p-6">
                        @include('shared.guest.list', [
                            'list' => [
                                __(
                                    'Round-trip transfer from your hotel or Riad, ensuring a hassle-free experience.'),
                                __('Exciting buggy ride through the stunning landscapes of Marrakech.'),
                                __('Safety gear provided, including helmets and goggles for your protection'),
                                __(
                                    'Refreshing tea break at a local Berber village, paired with traditional bread and olive oil.'),
                                __('Full insurance coverage for a worry-free adventure.'),
                            ],
                        ])
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <h2 class="font-x-thin text-2xl text-x-acent">
                        {{ ucwords(__('Prices')) }}
                    </h2>
                    <div class="border border-x-shade rounded-x-huge p-6">
                        @include('shared.guest.list', [
                            'list' => [
                                __('Driver: €90 – Take the wheel and enjoy the thrill of driving your own buggy.'),
                                __('Passenger: €45 – Sit back, relax, and soak in the adventure as a passenger.'),
                            ],
                        ])
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-10">
                <div class="hidden lg:flex flex-col gap-10">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('90 € / Person') }}
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
        'type' => 'buggy ride',
    ])
@endsection
