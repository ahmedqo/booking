@extends('shared.guest.base')
@section('title', ucwords(__('2 Days / 1 Night Private Excursion to Zagora (Desert) from Marrakech')) . ' | ' .
    __('Morocco Adventure City'))
    @php
        Core::$route = 2;
    @endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('2 Days / 1 Night Private Excursion to Zagora (Desert) from Marrakech'),
        'start' => [route('views.guest.private'), __('Private Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'zagora trip image',
                        'img' => [
                            asset('img/zagora/zagora-1.webp'),
                            asset('img/zagora/zagora-2.webp'),
                            asset('img/zagora/zagora-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('2-Day / 1-Night Excursion to Zagora from Marrakech.') }}
                    </p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        <h2 class="font-x-thin text-2xl text-x-acent">
                            {{ ucwords(__('Price Ranges')) }}
                        </h2>
                        @include('shared.guest.price', [
                            'items' => [
                                2 => '280',
                                3 => '320',
                                4 => '360',
                                5 => '400',
                                6 => '440',
                                7 => '520',
                                8 => '560',
                                9 => '600',
                                10 => '640',
                                11 => '680',
                                12 => '720',
                                13 => '760',
                                14 => '800',
                                15 => '840',
                                16 => '940',
                                17 => '980',
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
                                __('Duration 2 Days / 1 Nights'),
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
                                __('Explore the beautiful city of Ouarzazate'),
                                __('Admire the stunning landscapes of the Atlas Mountains and the Tichka Pass'),
                                __('Discover the magnificent Kasbah of Ait Ben Haddou'),
                                __('Enjoy a camel ride in the desert'),
                                __('Marvel at the beautiful Draa Valley, the largest oasis in southern Morocco'),
                                __('Spend a night in a desert bivouac under a beautiful and clear starry sky'),
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
                                {{ ucfirst(__('Exploring the Marrakech-Zagora Excursion: An Adventure in the Heart of Morocco.')) }}
                            </p>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 01: Marrakech – Zagora')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Memorable Departure from Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your adventure begins in the beautiful Marrakech. You\'ll leave this enchanting city for a memorable journey. The starting point is the Tichka Pass, perched at 2260 meters altitude, offering breathtaking views of the Atlas Mountains.')) }}
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
                                    {{ ucwords(__('Lunch in Ouarzazate')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After visiting the Kasbah, you\'ll head to Ouarzazate, a city nicknamed the \'Hollywood of Africa\' due to its film studios. You\'ll have the opportunity to enjoy a delicious lunch there.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Crossing the Draa Valley and Arrival in Zagora')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your journey then takes you through the picturesque Draa Valley, a region with stunning desert landscapes. You will finally reach Zagora, the gateway to the Moroccan desert. There, a unique adventure awaits you.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Camel Ride at Sunset')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('To cap off this day, you\'ll embark on an unforgettable experience: a camel ride through the golden dunes. You\'ll reach the desert bivouac, where you\'ll witness a magnificent sunset. Under a clear, starry sky, you\'ll spend the night, an authentic and magical experience. (Half-board)')) }}
                                </p>
                            </div>
                            <h3 class="font-x-huge text-xl text-x-black">
                                {{ ucwords(__('Day 2: Zagora – Marrakech')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Early Departure from Zagora')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The next morning, you\'ll leave Zagora, carrying unforgettable memories of your night in the desert. Your destination is Ouarzazate, passing through the Agdz region.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Visit to the Film Studios and the Kasbah')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('If time permits, you\'ll have the opportunity to visit the famous film studios of Ouarzazate, where many cinematic masterpieces were born. You\'ll also explore another remarkable Kasbah.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Return to Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After this fulfilling day, it will be time to hit the road back to Marrakech. You\'ll cross the Tichka Pass again, enjoying panoramic views, before returning to Marrakech around 8:00 PM')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The Marrakech to Zagora excursion is an epic adventure that allows you to discover the beauty of Morocco, from its cultural heritage to its desert landscapes, including its renowned film studios. Book your spot now for an unforgettable experience.')) }}
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
        'type' => 'private zagora excursion',
    ])
@endsection
