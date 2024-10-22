@extends('shared.guest.base')
@section('title',
    ucwords(__('private excursion to the ourika valley from marrakech')) .
    ' | ' .
    __('Morocco Adventure
    City'))
    @php
        Core::$route = 2;
    @endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('private excursion to the ourika valley from marrakech'),
        'start' => [route('views.guest.private'), __('Private Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'a day in ourika image',
                        'img' => [
                            asset('img/ourika/ourika-1.webp'),
                            asset('img/ourika/ourika-2.webp'),
                            asset('img/ourika/ourika-3.webp'),
                            asset('img/ourika/ourika-4.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('1-Day Excursion to Ourika Valley from Marrakech.') }}
                    </p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        <h2 class="font-x-thin text-2xl text-x-acent">
                            {{ ucwords(__('Price Ranges')) }}
                        </h2>
                        @include('shared.guest.price', [
                            'items' => [
                                2 => '90',
                                3 => '90',
                                4 => '90',
                                5 => '100',
                                6 => '100',
                                7 => '120',
                                8 => '120',
                                9 => '120',
                                10 => '120',
                                11 => '120',
                                12 => '120',
                                13 => '120',
                                14 => '120',
                                15 => '120',
                                16 => '150',
                                17 => '150',
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
                                __('Departure at 10:00 & Return at 17:00'),
                                __('Transportation by minibus and local guide included'),
                                __('Pick-up from your hotel between 9:00 AM and 10:00 AM'),
                                __('Payment upon departure'),
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
                                __('Discover the magnificent Ourika Valley and its untouched nature'),
                                __(
                                    'Explore some Berber villages and their terraces clinging to the reddish slopes of the valley'),
                                __('Learn more about argan oil and visit cooperatives run by Berber women'),
                                __('Visit the authentic Berber souk (market), available on Mondays'),
                                __('Admire the Setti Fatma waterfalls'),
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
                                    {{ ucwords(__('Explore Ourika from Marrakech: A Cultural and Coastal Getaway')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('First, the minibus will pick you up between 9:00 AM and 10:00 AM. Then, we\'ll head towards the Ourika Valley, with a stop along the way to visit an Argan cooperative. After that, we\'ll continue our journey through the valley until we reach the Setti Fatma area. Here, a local guide will take over to show you around the region and accompany you to the waterfalls. After the walk, you\'ll have free time to enjoy lunch at one of the small restaurants overlooking the river.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('You\'ll return around 5:00 PM to conclude your enjoyable Ourika Valley excursion from Marrakech.')) }}
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
        'type' => 'private ourika excursion',
    ])
@endsection
