@extends('shared.guest.base')
@section('title', ucwords(__('majorelle gardens & souks')) . ' | ' . __('Morocco Adventure City'))
@php
    Core::$route = 1;
@endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('majorelle gardens & souks'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'majorelle gardens & souks image',
                        'img' => [
                            asset('img/majorelle/majorelle-1.webp'),
                            asset('img/majorelle/majorelle-2.webp'),
                            asset('img/majorelle/majorelle-3.webp'),
                            asset('img/majorelle/majorelle-4.webp'),
                            asset('img/majorelle/majorelle-5.webp'),
                            asset('img/majorelle/majorelle-6.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Discover the Charm of Majorelle Gardens and the Souks of the Medina.') }}
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
                                __('Visit to the Majorelle Gardens'),
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
                                    {{ ucwords(__('Discover the Charm of Majorelle Gardens and the Souks of the Medina.')) }}
                                </h3>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Majorelle Gardens. Created in the 1920s by French painter Jacques Majorelle, the Majorelle garden is centered around a small Art Deco workshop painted in vivid blue. This shade of blue now carries the registered name \'Majorelle Blue\'. The workshop now houses collections of Islamic art left by Yves Saint Laurent and Pierre Bergé to the foundation that now manages the estate. A lover of colors and Morocco, Majorelle planted rare species brought from all corners of the globe.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Bougainvilleas, palm trees, coconut trees, banana trees, and bamboo populate the garden, which is also adorned with other rare exotic plants. Structured around a long central pool, the garden offers a variety of atmospheres and provides many places conducive to meditation or shaded conversation.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('The Souks of Marrakech. Under a sieve of reeds filtering the light, kilometers of endless alleys and lanes intersect, intertwine, and form a vast maze from the Ben Youssef Mosque to the outskirts of Jemâa El Fna square. Here you are immersed in the Marrakech souks, among the most authentic and renowned in the entire Cherifian Kingdom. Originally, these grounds served as gathering points for caravan traders heading south to Timbuktu. They came here to equip themselves to face the desert.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Around the market (souk), urban gathering took shape and developed over time. The souk also served as neutral ground for different tribes to come together, settle disputes and debts, or arrange marriages. With the development of Marrakech, it gradually became a full-fledged social institution. Here, people learned and applied the rules of social life and social conventions.')) }}
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
        'type' => 'majorelle excursion',
    ])
@endsection
