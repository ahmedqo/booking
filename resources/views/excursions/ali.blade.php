@extends('shared.guest.base')
@section('title', ucwords(__('chez ali trip')) . ' | ' . __('Morocco Adventure City'))
@php
    Core::$route = 1;
@endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('chez ali trip'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'chez ali trip image',
                        'img' => [
                            asset('img/ali/chezali-1.webp'),
                            asset('img/ali/chezali-2.webp'),
                            asset('img/ali/chezali-3.webp'),
                            asset('img/ali/chezali-4.webp'),
                            asset('img/ali/chezali-5.webp'),
                            asset('img/ali/chezali-6.webp'),
                            asset('img/ali/chezali-7.webp'),
                            asset('img/ali/chezali-8.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Enjoy a magical night in the ambiance of One Thousand and One Nights at the Chez Ali complex on the outskirts of Marrakech, an evening where you\'ll experience a blend of tasting local flavors and folkloric performances.') }}
                    </p>
                </div>
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('45 € / Person') }}
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
                                __('Duration: 4 hours'),
                                __('Pick-up time for clients: From 7:30 PM to 8:30 PM'),
                                __('Start of the show: 9:00 PM'),
                                __('Immediate confirmation'),
                                __(
                                    'Pick-up from your hotel or Riad in Marrakech. If your Riad is located in the Medina, pick-up will be arranged at a nearby accessible location as close as possible to your Riad or Hotel'),
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
                                __('Savor a delicious dinner with authentic Moroccan flavors under Berber tents'),
                                __('Discover the history of Moroccan folklore and its Berber troops'),
                                __(
                                    'Admire horseback acrobats, belly dancers, flying carpet performances, and fireworks'),
                                __(
                                    'Marvel at the fascinating and sophisticated Tbourida spectacle and its brave equestrians'),
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
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Leave behind all the hustle and bustle of Marrakech and step into the enchanting atmosphere of the Chez Ali complex, located in the heart of the palm grove. You\'ll be dazzled for four hours by acrobats, dancers, and breathtaking fireworks.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('You\'ll be welcomed by Berber troops with ancient chants and dances, guiding you to your table under a caidal tent. Take your seat, listen closely, and open your eyes wide! This enchanting evening will immerse you in the magical universe of Morocco\'s legendary One Thousand and One Nights.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('During the feast, tribes representing the rich Moroccan history will parade near your table: Tiskiwine (Amz Miz), Zayane (Khnifra), Gnawa, Kelaa M’Gouna, Ahwache...')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Admire horseback acrobats, belly dancers, flying carpet performances, and breathtaking fireworks!')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Finally, discover the grand finale of this extraordinary evening: the Fantasia show. Admire a magnificent reenactment of scenes from ancient horse wars and uncover the secrets of the wild battles of the Berbers and desert warriors.')) }}
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
                            {{ __('45 € / Person') }}
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
        'type' => 'chez ali excursion',
    ])
@endsection
