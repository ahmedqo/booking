@extends('shared.guest.base')
@section('title', ucwords(__('a quad biking day')) . ' | ' . __('Morocco Adventure City'))
@php
    Core::$route = 1;
@endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('a quad biking day'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'a quad biking day image',
                        'img' => [
                            asset('img/quad/quad-1.webp'),
                            asset('img/quad/quad-2.webp'),
                            asset('img/quad/quad-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Enjoy a quad ride and explore Marrakech in a different way.') }}
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
                                __('Quad ride in the Palmeraie region of Marrakech'),
                                __('Availability: Every day, departures from 9 am to 4 pm'),
                                __('Duration of the journey: 2 hours'),
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
                                __('Enjoy a quad ride in the Palmeraie region'),
                                __('Explore Marrakech differently and admire its Saharan landscapes'),
                                __('Drive along the trails and visit the villages of the region'),
                                __('Stop for a few minutes to rest and enjoy a glass of mint tea'),
                                __('Feel the adrenaline rush through your veins'),
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
                                    {{ ucwords(__('Explore thrilling sensations during a 2-hour quad excursion departing from Marrakech.')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Are you ready for an exhilarating experience in the heart of the Moroccan desert? Embark on a 2-hour quad excursion that will unveil breathtaking landscapes departing from Marrakech. Our qualified driver will pick you up from your riad or hotel at the agreed time, ready to take you on an unforgettable adventure.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Accompanied by an experienced instructor, you will take the wheel of your own quad and venture into the beaten trails and rocky plains of the desert region north of Marrakech. Feel the adrenaline rush as you explore diverse terrains while enjoying breathtaking panoramic views. You will discover incredible places that only quads can reach.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('During this excursion, make a well-deserved stop in a traditional Berber village. You will have the opportunity to taste delicious mint tea, accompanied by freshly baked bread made in the traditional way and high-quality organic olive oil. Take advantage of this authentic experience to learn more about the local culture and interact with the welcoming inhabitants. Don\'t forget to capture this moment by taking memorable photos.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After this thrilling adventure, our driver will safely take you back to your hotel or riad in Marrakech. You will immerse yourself again in the bustle of the ochre city, but with unforgettable memories of your quad excursion in the Moroccan desert.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Don\'t miss the opportunity to experience thrills and create unforgettable memories during this quad excursion from Marrakech. Book now and get ready for an exciting adventure in the Moroccan desert.')) }}
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
        'type' => 'quad ride',
    ])
@endsection
