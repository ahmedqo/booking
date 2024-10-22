@extends('shared.guest.base')
@section('title', ucwords(__('the ouzoud falls')) . ' | ' . __('Morocco Adventure City'))
@php
    Core::$route = 1;
@endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('the ouzoud falls'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'the ouzoud falls image',
                        'img' => [
                            asset('img/ouzoud/ouzoud-1.webp'),
                            asset('img/ouzoud/ouzoud-2.webp'),
                            asset('img/ouzoud/ouzoud-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Have a wonderful day at the Ouzoud Falls.') }}
                    </p>
                </div>
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('20 € / Person') }}
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
                                __('Duration: 1 day'),
                                __('Pick-up between 8:00 AM & 9:00 AM, depending on the location of your hotel'),
                                __('Return at 7:00 PM'),
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
                                __('Discover the magnificent region of Ouzoud and its untouched nature'),
                                __(
                                    'Contemplate the Ouzoud waterfalls, the most spectacular waterfalls in North Africa'),
                                __('Admire the monkeys and birds that inhabit the area'),
                                __('Enjoy a traditional Tajine in one of the local restaurants'),
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
                                {{ ucwords(__('Discover the Ouzoud Waterfalls from Marrakech: An Unforgettable Adventure')) }}
                            </h3>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Early Morning Departure from Marrakech')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Your journey begins early, around 8 o\'clock in the morning, from bustling Marrakech. You\'re about to traverse approximately 150 kilometers through Morocco, providing a glimpse into life in many traditional villages and towns of the country.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Arrival at the Ouzoud Waterfalls')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After approximately three hours of picturesque drive, you\'ll reach the majestic Ouzoud Waterfalls. This marks the beginning of exploring this natural treasure. You have 4 hours to immerse yourself in the surrounding beauty. Let yourself be charmed by the playful monkeys and birds inhabiting the area. You also have the opportunity to refresh yourself by swimming or simply relax while enjoying a coffee by the waterfalls.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('A Gourmet Break')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The region is full of small traditional restaurants, where you can enjoy a delicious tagine while admiring the breathtaking landscapes. The local flavors will take you on an unforgettable culinary journey.')) }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h4 class="font-x-thin text-xl text-x-prime">
                                    {{ ucwords(__('Return to Marrakech in Beauty')) }}
                                </h4>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After a peaceful and relaxing day in the heart of the Ouzoud Waterfalls, it will be time to return to Marrakech. You can enjoy the last rays of the sun as you return around 8 p.m.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The excursion to the Ouzoud Waterfalls from Marrakech promises an unforgettable experience, blending nature, culture, and gastronomy. Book today and embark on a journey to discover this Moroccan marvel.')) }}
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
                            {{ __('20 € / Person') }}
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
        'type' => 'ouzoud excursion',
    ])
@endsection
