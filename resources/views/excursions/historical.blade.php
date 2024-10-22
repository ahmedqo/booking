@extends('shared.guest.base')
@section('title', ucwords(__('marrakech historical visit')) . ' | ' . __('Morocco Adventure City'))
@php
    Core::$route = 1;
@endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('marrakech historical visit'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'marrakech historical visit image',
                        'img' => [
                            asset('img/historical/historical-1.webp'),
                            asset('img/historical/historical-2.webp'),
                            asset('img/historical/historical-3.webp'),
                            asset('img/historical/historical-4.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Have a wonderful day exploring the history of Marrakech.') }}
                    </p>
                </div>
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('10 € / Person') }}
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
                                __('Morning visit: 9:00 AM – 1:00 PM'),
                                __('Afternoon visit: 2:00 PM – 6:00 PM'),
                                __('Tour conducted by an official guide'),
                                __('Pick-up from your hotel or Riad in Marrakech'),
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
                                __('Visit to the Koutoubia Mosque'),
                                __('Visit to the Mellah, the old Jewish Quarter'),
                                __('Visit to the Saadian Tombs'),
                                __('Visit to the Bahia Palace'),
                                __('Visit to the Souks'),
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
                                    {{ ucwords(__('Have a wonderful day exploring the history of Marrakech.')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Behind its red ramparts, Marrakech holds some of the most incredible treasures imaginable.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Enriched by trade in gold, ivory, and precious woods from Africa, it showcases its wealth through the harmony of a medieval setting. You won\'t be able to resist the secret charm of its impressive medina. On the agenda: visiting the main monuments that bear witness to the history of the ochre city.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The Koutoubia Mosque, with its minaret, is a jewel of Muslim architecture. This tower, towering 77 meters high, dominates the city of Essaouira. Built by the Almohad dynasty, it has only two rivals: the Giralda in Seville and the Hassan Tower in Rabat, both of which are also the work of the Almohads. It can be seen from more than 25 km away from the city.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The Bahia Palace is one of the most beautiful and richest palaces in Morocco, deserving the name "resplendent palace." Built by Ba Ahmed, son of Si Mussa, the grand vizier of Sidi Muhammad ben Abd er-Rahman, it was constructed towards the end of the 19th century. The building, almost entirely on the ground floor with only one apartment on the first floor (the menzeh), extends over eight hectares and is surrounded by splendid gardens perfumed by the many essences it contains.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The Djamaa El-Fna square is more than just a square; it\'s a myth that must be seen, experienced, listened to, and felt. It alone constitutes a destination, a capital within the capital, a place that has nothing to envy to other European or American squares, to those other magical places where, at least once in a lifetime, one must have been.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The Saadian Tombs are one of the most evocative places in the city. From the Casbah Mosque, through a narrow alley, one can reach the tombs dating back to the 16th century. They were discovered and could only be visited since 1917. Indeed, the Alawite sultan Moulay Ismail had a wall built, a century after their creation, to conceal them.')) }}
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
                            {{ __('10 € / Person') }}
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
        'type' => 'historical visit',
    ])
@endsection
