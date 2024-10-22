@extends('shared.guest.base')
@section('title', ucwords(__('buggy ride')) . ' | ' . __('Morocco Adventure City'))
@php
    Core::$route = 1;
@endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('buggy ride'),
        'start' => [route('views.guest.excursion'), __('Excursions')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'buggy ride image',
                        'img' => [
                            asset('img/buggy/buggy-1.webp'),
                            asset('img/buggy/buggy-2.webp'),
                            asset('img/buggy/buggy-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('2-Day / 1-Night Excursion to Zagora from Marrakech.') }}
                    </p>
                </div>
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('90 € / Person') }}
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
                                __('2 hours'),
                                __('Availability : every day, departures from 9h to 14h'),
                                __('Printed or mobile confirmation vouchers are accepted'),
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
                                __('Enjoy a Buggy ride in the region of the palm grove of Marrakech'),
                                __('Explore Marrakech differently and admire its Saharan landscapes'),
                                __('Walk along the trails and visit the villages of the region'),
                                __('Stop for a few minutes break and enjoy a glass of mint tea'),
                                __('Feel the adrenaline rush in your veins'),
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
                                    {{ ucfirst(__('It’s an original way to discover the beaten tracks and the full desert of the palm grove region that we offer you here.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('After our driver picks you up at your hotel or Riad, towards the palm grove near Marrakech, you will be given an initiation to piloting your buggy before starting your ride. This initiation includes a briefing with presentation of the buggy (use of the vehicle, how to keep a buggy on an incline, reminders of caution) and a practical part during which you will perform some private maneuvers on private land in order to familiarize yourself with the buggy.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('In the company of a professional instructor, you will set off on your half-day ride and discover this authentic region of the palm grove. You will have a break in a Berber village where you will be able to enjoy a mint tea accompanied by traditional bread and organic olive oil. You will be able to take photos before resuming your way back.')) }}
                                </p>
                                <p class="text-x-black text-lg font-normal">
                                    {{ ucfirst(__('Our driver will drop you off at your hotel or Riad after this experience rich in emotion and good memories around the ocher city')) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <h2 class="font-x-thin text-2xl text-x-acent">
                        {{ ucwords(__('Included')) }}
                    </h2>
                    <div class="border border-x-shade rounded-x-huge p-6">
                        @include('shared.guest.list', [
                            'list' => [
                                __('Transfer to and from your hotel or Riad'),
                                __('Buggy ride'),
                                __('Helmet and goggles..'),
                                __('Tea break'),
                                __('Insurance'),
                            ],
                        ])
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <h2 class="font-x-thin text-2xl text-x-acent">
                        {{ ucwords(__('Prices')) }}
                    </h2>
                    <div class="border border-x-shade rounded-x-huge p-6">
                        @include('shared.guest.list', [
                            'list' => [__('Driver: 90 €'), __('Passenger: 45 €')],
                        ])
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-10">
                <div class="hidden lg:flex flex-col gap-10">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('90 € / Person') }}
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
        'type' => 'buggy ride',
    ])
@endsection
