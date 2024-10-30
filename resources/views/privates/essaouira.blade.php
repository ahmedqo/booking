@extends('shared.guest.base')
@section('title', ucwords(__('private excursion to essaouira from marrakech')) . ' | ' . __('Morocco Adventure City'))
@php
    Core::$route = 2;
@endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('private excursion to essaouira from marrakech'),
        'start' => [route('views.guest.private'), __('Private Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'a day in essaouira image',
                        'img' => [
                            asset('img/essaouira/essaouira-1.webp'),
                            asset('img/essaouira/essaouira-2.webp'),
                            asset('img/essaouira/essaouira-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Explore the city of winds and Discover the Serenity of Essaouira.') }}
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
                                16 => '170',
                                17 => '180',
                                18 => '180',
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
                                __('Pick-up between 8:00 AM & 9:00 AM, depending on the location of your hotel'),
                                __('Return at 8:00 PM'),
                                __('Immediate confirmation'),
                                __(
                                    'Pick-up at your hotel or Riad in Marrakech. If your Riad is located in the Medina, pick-up will be arranged at an accessible location, as close as possible to your Riad or hotel'),
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
                                __('Stroll through the old Medina and its ramparts'),
                                __(
                                    'Discover the magnificent port city of Essaouira and the warm hospitality of its inhabitants'),
                                __('Visit the Skala and its cannons'),
                                __('Explore the ancient Jewish quarter'),
                                __('Admire the beach, the port, the souks, the Medina, and the craft galleries'),
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
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Explore Essaouira from Marrakech: A Cultural and Coastal Getaway')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Embark on a journey to discover Essaouira from Marrakech for a memorable day. This excursion will take you through an experience rich in culture, cuisine, and breathtaking landscapes.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Departure from Marrakech')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your journey begins in the morning, at 9:00 AM, from the enchanting city of Marrakech. You\'ll be amazed by the picturesque landscapes throughout the journey, providing you with the opportunity to capture unforgettable photos. Around 11:00 AM, you\'ll arrive in Essaouira, the timeless port city.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Exploration of the Medina')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Once in Essaouira, immerse yourself in the enchanting atmosphere of the Medina. The city\'s ramparts welcome you to a unique cultural experience. Explore the narrow winding streets, where history is engraved in every stone. The city\'s many art galleries testify to its cultural richness.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Discovery of the Architecture')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Admire the well-preserved architecture of the old buildings in Essaouira, which tell the story of this coastal city. Don\'t miss the Skala, where you can enjoy breathtaking views of the Atlantic coast.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Flavors of the Sea')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your visit wouldn\'t be complete without tasting freshly caught fish in one of the many small traditional restaurants in Essaouira. Indulge in the flavors of the sea and local cuisine.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Camel Ride and Jewish Quarter Tour')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After enjoying a delicious meal, embark on a camel ride along the beach, an unforgettable experience for both young and old. You can also visit the old Jewish quarter of Essaouira, where you\'ll discover historical synagogues and the fascinating history surrounding them.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-prime">
                                    {{ ucwords(__('Return to Marrakech')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After a fulfilling day in Essaouira, you\'ll head back to Marrakech around 8:00 PM. This day trip will leave you with unforgettable memories of Morocco\'s beauty and culture, just a few hours from Marrakech. Enjoy every moment of this unique adventure!')) }}
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
        'type' => 'private essaouira excursion',
    ])
@endsection
