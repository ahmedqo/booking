@extends('shared.guest.base')
@section('title', ucwords(__('4-Day Desert Tour: Zagora & Merzouga from Marrakech')))
@php
    Core::$route = 1;
@endphp

@section('meta')
    <!-- Meta Descriptions -->
    <meta name="description" content="{!! __(
        'Join a 4-day desert tour from Marrakech to Zagora and Merzouga. Enjoy camel rides, desert camps, and explore the stunning landscapes of Morocco\'s Sahara.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Join a 4-day desert tour from Marrakech to Zagora and Merzouga. Enjoy camel rides, desert camps, and explore the stunning landscapes of Morocco\'s Sahara.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Join a 4-day desert tour from Marrakech to Zagora and Merzouga. Enjoy camel rides, desert camps, and explore the stunning landscapes of Morocco\'s Sahara.',
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
  "name": "4-Day Desert Tour: Zagora & Merzouga from Marrakech",
  "description": "Join a 4-day desert tour from Marrakech to Zagora and Merzouga. Enjoy camel rides, desert camps, and explore the stunning landscapes of Morocco's Sahara.",
  "image": [
    "{{ asset('img/merzouga/merzouga-1.webp') }}",
    "{{ asset('img/zagoura/zagoura-1.webp') }}",
    "{{ asset('img/merzouga/merzouga-2.webp') }}",
    "{{ asset('img/zagoura/zagoura-2.webp') }}",
    "{{ asset('img/merzouga/merzouga-3.webp') }}"
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
        "description": "Explore the iconic Ait Ben Haddou Kasbah, a UNESCO World Heritage site."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Lunch in Ouarzazate",
        "description": "Enjoy a traditional Moroccan lunch in Ouarzazate, known as the 'Gateway to the Desert'."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Camel Ride and Overnight in Zagora",
        "description": "Take a 1.5-hour camel ride through the Zagora desert, followed by an overnight stay under the stars at a desert camp."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Dades Gorges and Valley of a Thousand Kasbahs",
        "description": "Visit the Dades Gorges and pass through the beautiful Valley of a Thousand Kasbahs."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Camel Ride and Overnight in Merzouga",
        "description": "Ride camels into the Erg Chebbi dunes, enjoy the sunset, and spend the night in a desert camp."
      },
      {
        "@type": "ListItem",
        "position": 7,
        "name": "Return to Marrakech",
        "description": "After breakfast, journey back to Marrakech, passing through Kalaat M’gouna and the Valley of Roses."
      }
    ]
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "EUR",
    "price": "145.00",
    "availability": "https://schema.org/InStock",
    "validFrom": "{{ now()->toIso8601String() }}",
    "url": "{{ route('views.guest.excursion') }}",
    "description": "Book your 4-day desert tour from Marrakech to Zagora and Merzouga, including camel rides, desert camps, and visits to Ait Ben Haddou, Dades Gorges, and more."
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
  "duration": "P4D",
  "startDate": "{{ now()->toIso8601String() }}",
  "endDate": "{{ now()->addDays(4)->toIso8601String() }}"
}
</script>

@endsection


@section('content')
    @include('shared.guest.topbar', [
        'title' => __('4-Day zagora & merzouga trip'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'zagoura & merzouga trip image',
                        'img' => [
                            asset('img/merzouga/merzouga-1.webp'),
                            asset('img/zagoura/zagoura-1.webp'),
                            asset('img/merzouga/merzouga-2.webp'),
                            asset('img/zagoura/zagoura-2.webp'),
                            asset('img/merzouga/merzouga-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('4-Day / 3-Night Excursion to Zagora and Merzouga from Marrakech.') }}
                    </p>
                </div>
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('145 € / Person') }}
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
                                __('Duration 4 Days / 3 Nights'),
                                __('Departure: 07:00 AM | Return: 20:00 PM'),
                                __('Voucher Acceptance: Printed or mobile confirmation accepted'),
                                __('Confirmation: Immediate'),
                                __(
                                    'Pick-up: From your hotel or Riad in Marrakech. For accommodations in the Medina, pick-up will be arranged at the nearest accessible location.'),
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
                                __('Behold the stunning landscapes of the Atlas Mountains and the Tichka Pass'),
                                __('Enjoy camel rides through the desert'),
                                __('Spend two nights in a desert camp under a beautiful, starry sky'),
                                __(
                                    'Discover the magnificent Kasbah of Ait Ben Haddou, Ouarzazate, Zagora, Merzouga...'),
                                __('Explore the town of Zagora, Dades Gorges, Rose Valley,...'),
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
                            <p class="text-x-black text-lg font-normal">
                                {{ ucfirst(__('Discover Morocco: The Ultimate 4-Day Desert Tour from Marrakech to Merzouga and Zagora')) }}
                            </p>
                            <div class="flex flex-col gap-2">
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Looking for a journey that takes you right into the heart of Morocco with its vibrant culture and picture-perfect desert landscapes? This 4 days desert tour from Marrakech to Zagora and Merzouga guarantees experiences that are full of action, history, and breathtaking pictures. No matter if you are a thrill-seeker or a history lover, this trip will give you a unique experience.')) }}
                                </p>
                            </div>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 1: From the city of Marrakech to the Tranquil Zagora sahara')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Memorable Departure from Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your Zagora tour begins in the lively city of Marrakech, your tour begins to rise toward the High Atlas Mountains over the impressive Tichka Pass, which stands at an altitude of 2,260 meters. The curves of the road give you a panoramic view of the rugged hills and the valleys, thus creating the ambient for the trip you are about to take.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Explore the Historic Ait Ben Haddou Kasbah')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your first stop is at the iconic **Ait Ben Haddou Kasbah**, a UNESCO World Heritage site. This ancient city surrounded by a mud wall is still standing and has a clay architecture masterpiece that was used in many movies. Taking a walk among its kmowingly built alleys makes you feel like you are in a different world—remember to take some pictures of the magnificent mud-brick walls!')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Lunch in Ouarzazate and Journey to Zagora')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After exploring the kasbah, the next destination is Ouarzazate which is known as the "Gateway to the Desert." Enjoy nice traditional Moroccan lunch here before passing through the rich **Draa Valley**, an area known for its palm thickets and lush greenery. The beautiful view makes it easy to get to **Zagora**, the final destination for the day.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Camel Ride and Night Under the Stars')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('It is not possible to imagine a desert trip where a camel ride is not included. As you go to the glorious town of Zagora, you shall mount a camel and slowly go through the desert for a peaceful 1.5 hour journey . After the ride, you will spend the night in a (Half-board) under a blanket of stars. This romantic evening spent in the desert is one of the main attractions of the Zagora desert tour.')) }}
                                </p>
                            </div>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 2: From Zagora to the Majestic Dades Gorges')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Magical Sunrise and Return to Zagora')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your second day will start by the spectacular sight of a desert sunrise. After breakfast, you will take a camel ride back to the minibus where it will be a start of the next leg of the journey.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Ouarzazate Stop and Free Exploration')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('You will make a stop in Ouarzazate, where you\'ll have 2.5 hours of free time to explore this city nicknamed the \'Hollywood of Africa\' due to its film studios. There will also be a minibus change.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Head to the Dades Gorges')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The Dades Gorges is the next destination, on your way you will go through the Valley of a Thousand Kasbahs where fortresses that are centuries-old rest on the landscape. The second Kasbah will showcase bridges made out of wood and the towns of Erfoud and Tinghir the last Kasbah. Beautiful views and breathtaking Todra Gorges are located in these towns. As the dramatic Dades Gorges greets you, soar over the cliffs and fit through the canyons. You will stay at a local hotel for the night where you can rest and take in the dinner served in this lovely setting.')) }}
                                </p>
                            </div>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 3: Venturing into the Merzouga Desert')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Heading to Merzouga Through Breathtaking Landscapes')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The thrill is now full on during day three as you are driving to Merzouga, the gateway to the Erg Chebbi dunes. The road trip brings to life the dynamic landscape that consists of contrasting features such as rugged mountains and stretches of golden sand.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Lunch and Scenic Drive Through Tazzarine and Rissani')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('In addition to that, you will take time for lunch in the village of Tazzarine, a quaint spot on your trip. Continuing your path, you will go past the ancient town of Rissani and the mesmerizing Tafilalet Oasis, a place where the greenery of the trees stands out against the backdrop of the desert just as the sky is blue.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Sunset Camel Ride and Desert Bivouac')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your journey in Merzouga now really starts the desert adventure, as you move into the Merzouga desert, with the majestic dunes of Erg Chebbi behind you. From the sunset that lightly caresses the golden dunes to their shadows that appear on the ground, this experience is pure enchantment.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('While the sun sets, you will arrive at your desert camp. Following a traditional Moroccan dinner, you will spend the evening under a blanket of stars - a truly ephemeral and unbelievable experience among all the Moroccan wonders. You simply can\'t beat this Merzouga desert tour experience!')) }}
                                </p>
                            </div>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 4: Sunrise in the Merzouga Desert and Return to Marrakech')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Admiring the Sunrise and Breakfast')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your final day starts with the desert\'s most iconic moment that is the sunrise over the dunes. The stillness of the desert early in the morning is a one-of-a-kind experience. After breakfast at the bivouac you will start your journey back to Marrakech.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Return to Marrakech via a Scenic Route')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('You\'ll take the return route to Marrakech passing through Kalaat M’gouna, the Valley of Roses, Ouarzazate (where you\'ll visit the Kasbah of the city and the film studios if time permits). You\'ll have lunch there before crossing the Tichka Pass to finally reach Marrakech.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('This 4-day excursion from Marrakech to Merzouga is not just a tour, it is an immersive experience into Morocco\'s vibrant culture and varied landscapes. From the mountains of the Atlas to the peacefulness of the Sahara, this tour presents an opportunity for every one. You could be camel riding in the Merzouga desert tours or admiring the stunning gorges of Dades.')) }}
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
                            {{ __('145 € / Person') }}
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
        'type' => 'zagoura and merzouga excursion',
    ])
@endsection
