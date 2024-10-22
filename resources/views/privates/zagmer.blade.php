@extends('shared.guest.base')
@section('title', ucwords(__('4 Days / 3 Nights Private Excursion to Zagora & Merzouga Desert from Marrakech')) . ' | '
    . __('Morocco Adventure City'))
    @php
        Core::$route = 2;
    @endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('4 Days / 3 Nights Private Excursion to Zagora & Merzouga Desert from Marrakech'),
        'start' => [route('views.guest.private'), __('Private Excursions')],
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
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        <h2 class="font-x-thin text-2xl text-x-acent">
                            {{ ucwords(__('Price Ranges')) }}
                        </h2>
                        @include('shared.guest.price', [
                            'items' => [
                                2 => '600',
                                3 => '700',
                                4 => '800',
                                5 => '900',
                                6 => '1000',
                                7 => '1980',
                                8 => '2080',
                                9 => '2180',
                                10 => '2280',
                                11 => '2380',
                                12 => '2480',
                                13 => '2580',
                                14 => '2680',
                                15 => '2780',
                                16 => '3000',
                                17 => '3100',
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
                                __('Duration 4 Days / 3 Nights'),
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
                                {{ ucfirst(__('Epic 4-Day Excursion from Marrakech to Merzouga: Discovering Morocco.')) }}
                            </p>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 01: Marrakech – Zagora')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Memorable Departure from Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your adventure begins in the beautiful city of Marrakech. You are about to embark on an unforgettable journey. You will leave the city by crossing the Tichka Pass, located at an impressive altitude of 2260 meters.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Exploration of the Ait Ben Haddou Kasbah')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your first stop takes you to the famous Ait Ben Haddou Kasbah, a UNESCO World Heritage site. This fortified mud-brick fortress surrounded by imposing walls and majestic gates is a historical treasure.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Lunch in Ouarzazate and Head to Zagora')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After the Kasbah visit, you\'ll head to Ouarzazate for a delicious lunch. The next leg of the journey takes you through the stunning Draa Valley, offering breathtaking landscapes. Your final destination is Zagora.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Camel Ride and Starry Night')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After a 1.5-hour camel ride, you will reach the Bivouac. There, you\'ll have the opportunity to admire a beautiful desert sunset and spend the night under a clear sky, filled with sparkling stars. (Half-board)')) }}
                                </p>
                            </div>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 02: Zagora – Dades Gorges')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Magical Sunrise and Return to Zagora')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The day begins with the admiration of the sunrise, followed by a 1.5-hour camel ride back to the minibuses.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Stop in Ouarzazate and Free Stroll')) }}
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
                                    {{ ucfirst(__('Your next destination will take you to the Dades Gorges. You will pass through Erfoud, Tinghir, the Todra Gorges, and the Valley of a Thousand Kasbahs before finally reaching the Dades Gorges, where you will spend the night at the hotel with half-board.')) }}
                                </p>
                            </div>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 03: Dades Gorges – Merzouga')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Heading to Merzouga Through Breathtaking Landscapes')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('You\'ll hit the road towards Merzouga passing through Nkoub, Tazzarine (where you\'ll have lunch), Rissani, the Tafilalet Oasis, ultimately reaching Erg Chebbi.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Camel Adventure and Night in a Bivouac')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After a camel ride to admire the sunset, you will arrive at your desert bivouac. There, you will spend a magical night under a starry sky. (Dinner on site)')) }}
                                </p>
                            </div>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 04: Merzouga – Marrakech')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Admiring the Sunrise and Breakfast')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The day begins with admiring the sunrise and enjoying a delicious breakfast.')) }}
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
                                    {{ ucfirst(__('This 4-day excursion from Marrakech to Merzouga is a true adventure through majestic landscapes, historical treasures, and the magic of the Moroccan desert. Book now to experience an unforgettable journey.')) }}
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
        'type' => 'private zagora and merzouga excursion',
    ])
@endsection
