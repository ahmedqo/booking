@extends('shared.guest.base')
@section('title', ucwords(__('ouarzazate trip')) . ' | ' . __('Morocco Adventure City'))
@php
    Core::$route = 1;
@endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('ouarzazate trip'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'ouarzazate trip image',
                        'img' => [
                            asset('img/ouarzazate/ouarzazate-1.webp'),
                            asset('img/ouarzazate/ouarzazate-2.webp'),
                            asset('img/ouarzazate/ouarzazate-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('One-day Excursion to Ouarzazate and Ait Ben Haddou from Marrakech.') }}
                    </p>
                </div>
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('30 € / Person') }}
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
                                __('Duration 1 Days'),
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
                                __('Explore the beautiful city of Ouarzazate and its film studios'),
                                __('Discover the magnificent Kasbah of Ait Ben Haddou'),
                                __('Admire the magnificent landscapes of the Atlas Mountains and the Tichka Pass'),
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
                                {{ ucwords(__('Explore Ait Ben Haddou Kasbah and Ouarzazate from Marrakech')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Early Morning Departure from Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your adventure day starts early, around 7 o\'clock in the morning, from the beautiful city of Marrakech. You\'re about to travel 180 kilometers through the majestic Atlas Mountains via the Tichka Pass. The journey promises breathtaking landscapes, and a fascinating destination awaits you.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Ait Ben Haddou Kasbah: A Historical Treasure')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your first stop takes you to the Ait Ben Haddou Kasbah, a complex of clay and stone surrounded by imposing walls and monumental gates. Inside this fortress, you\'ll discover a collection of beautifully crafted homes and buildings. This site is one of the gems of southern Morocco and has been proclaimed a UNESCO World Heritage Site. You\'ll immerse yourself in the history and culture of this iconic region.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Discover Ouarzazate, the Hollywood of Africa')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After this journey into history, you\'ll continue your adventure to reach the city of Ouarzazate, nicknamed the \'Hollywood of Africa\'. This city is famous for its film studios, where many cinematic masterpieces were born. You\'ll have the opportunity to visit these studios, walk in the footsteps of movie stars, and learn more about the Moroccan film industry.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Return to Marrakech in Beauty')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After a day filled with discoveries, your excursion will come to an end, and you\'ll begin the return journey to Marrakech. You\'ll have the opportunity to admire the last rays of the sun as you return, arriving around 8:00 PM.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The excursion to the Ait Ben Haddou Kasbah and Ouarzazate from Marrakech promises an exceptional cultural and historical experience. Book now to explore these Moroccan treasures and create unforgettable memories.')) }}
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
                            {{ __('30 € / Person') }}
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
        'type' => 'ouarzazate excursion',
    ])
@endsection
