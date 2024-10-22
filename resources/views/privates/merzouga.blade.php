@extends('shared.guest.base')
@section('title',
    ucwords(__('3 Days / 2 Nights Private Excursion to Merzouga from Marrakech')) .
    ' | ' .
    __('Morocco
    Adventure City'))
    @php
        Core::$route = 2;
    @endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('3 Days / 2 Nights Private Excursion to Merzouga from Marrakech'),
        'start' => [route('views.guest.private'), __('Private Excursions')],
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
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        <h2 class="font-x-thin text-2xl text-x-acent">
                            {{ ucwords(__('Price Ranges')) }}
                        </h2>
                        @include('shared.guest.price', [
                            'items' => [
                                2 => '450',
                                3 => '510',
                                4 => '570',
                                5 => '630',
                                6 => '690',
                                7 => '820',
                                8 => '880',
                                9 => '940',
                                10 => '1000',
                                11 => '1060',
                                12 => '1100',
                                13 => '1160',
                                14 => '1220',
                                15 => '1280',
                                16 => '1390',
                                17 => '1450',
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
                                __('Duration 3 Days / 2 Nights'),
                                __('Departure at 07:00 & Return at 20:00'),
                                __('Printed or mobile confirmation vouchers are accepted'),
                                __('Immediate confirmation'),
                                __(
                                    'Pick-up from your hotel or Riad in Marrakech. If your Riad is located in the Medina, pick-up will be arranged at a nearby accessible location, as close as possible to your Riad or Hotel'),
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
                                __('Admire the magnificent landscapes of the Atlas Mountains and the Tichka Pass'),
                                __('Discover the magnificent Kasbah of Ait Ben Haddou'),
                                __('Explore the beautiful city of Merzouga'),
                                __('Visit the Dades and Todra Gorges'),
                                __('Enjoy camel rides in the desert'),
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
                            <p class="text-x-black text-lg font-normal">
                                {{ ucfirst(__('Exploring the Marrakech-Merzouga Excursion: An Adventure in the Heart of Morocco.')) }}
                            </p>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Day 1: Marrakech – Dades Gorges')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your journey starts in Marrakech, where you\'ll leave the city to venture into the Atlas Mountains via the Tichka Pass, reaching an altitude of 2260 meters. Along the way, don\'t miss visiting the famous Ait Ben Haddou Kasbah, a UNESCO World Heritage site. You\'ll stop for lunch in Ouarzazate, known as the \'gateway to the desert\', and have the opportunity to visit the cinema museum and the Kasbah, if time permits.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your journey will continue through the lush oasis of Skoura, the town of Kalaat M’gouna, also known as the \'Valley of Roses\', before finally reaching the stunning Dades Gorges. You\'ll spend the night in a picturesque hotel in the region, where you can enjoy a delicious half-board dinner.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Day 2: Dades Gorges – Merzouga')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The second day of your adventure will take you even further into the heart of the Moroccan desert, to Merzouga. Along the way, you\'ll discover the Valley of a Thousand Kasbahs, Tinghir, and the impressive Todra Gorges. You\'ll also make stops at Erfoud and Rissani, all while enjoying the beauty of the Tifilalte oasis.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your final destination will be the Erg Chebbi in Merzouga, where you\'ll have an unforgettable experience. You\'ll take a camel ride to admire the sunset over the golden dunes, then you\'ll reach a desert bivouac. Under a clear, starry sky, you\'ll spend a magical night and enjoy a delicious dinner on site.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-x-huge text-xl text-x-black">
                                    {{ ucwords(__('Day 3: Merzouga – Marrakech')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('On the third day, you\'ll have the chance to admire the sunrise over the dunes of Merzouga before having breakfast. Then, it will be time to begin your journey back to Marrakech.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('On the way back, you\'ll pass through Erfoud and Ouarzazate, where you\'ll stop for lunch. You\'ll then continue your journey to Marrakech, where you\'ll arrive around 8:00 PM, concluding this memorable Marrakech to Merzouga excursion.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('This exceptional journey will allow you to discover the natural and cultural diversity of Morocco, from the Atlas Mountains to the desert dunes. Enjoy every moment of this magical adventure and let yourself be enchanted by the beauty of this captivating country. Book now for an experience you will cherish for a lifetime.')) }}
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
        'type' => 'private merzouga excursion',
    ])
@endsection
