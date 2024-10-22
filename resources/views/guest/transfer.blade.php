@extends('shared.guest.base')
@section('title', ucwords(__('the airport of marrakech')) . ' | ' . __('Morocco Adventure City'))

@section('meta')
    <meta name="description" content="{!! __(
        'Explore convenient transfer services in Morocco, offering reliable transportation solutions between popular destinations, including airports and cities.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Explore convenient transfer services in Morocco, offering reliable transportation solutions between popular destinations, including airports and cities.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Explore convenient transfer services in Morocco, offering reliable transportation solutions between popular destinations, including airports and cities.',
    ) !!}">

    <meta property="og:title" content="{{ ucwords(__('the airport of marrakech')) . ' | ' . __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ ucwords(__('the airport of marrakech')) . ' | ' . __('Morocco Adventure City') }}">

    <meta property="og:image" content="{{ asset('img/transfers/transfer-1.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/transfers/transfer-1.webp') }}">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "{{ __('Transfers') }}",
            "url": "{{ route('views.guest.transfer') }}",
            "description": "{!! __('Explore convenient transfer services in Morocco, offering reliable transportation solutions between popular destinations, including airports and cities.') !!}",
            "publisher": {
                "@type": "Organization",
                "name": "Morocco Adventure City",
                "url": "{{ route('views.guest.index') }}",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{ asset('img/logo.png') }}"
                }
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "{{ env('APP_PHONE_NUMBER') }}",
                "contactType": "Customer Service",
                "areaServed": "MA",
                "availableLanguage": ["English", "French", "Arabic"]
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "{{ env('APP_EMAIL_ADDRESS') }}",
                "addressLocality": "Marrakech",
                "addressRegion": "Marrakech-Safi",
                "postalCode": "40000",
                "addressCountry": "MA"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 31.6295,
                "longitude": -7.9811
            }
        }
    </script>
@endsection

@php
    Core::$route = 3;
@endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('Transfer in private from or to the airport of Marrakech'),
        'start' => [route('views.guest.index'), __('Home')],
        'end' => __('airport of Marrakech'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    @include('shared.guest.slider', [
                        'alt' => 'transfers image',
                        'img' => [
                            asset('img/transfers/transfer-1.webp'),
                            asset('img/transfers/transfer-2.webp'),
                            asset('img/transfers/transfer-3.webp'),
                        ],
                    ])
                    <p class="text-x-black font-x-thin text-lg">
                        {{ __('Enjoy a private transfer from or to the airport of Marrakech.') }}
                    </p>
                </div>
                <div class="flex lg:hidden flex-col gap-6">
                    <div
                        class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('20 € / By trip (1-6) Persons') }}
                        </div>
                        <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                            {{ __('40 € / By trip (7-17) Persons') }}
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
                                __('Transfer from Marrakech airport to your distination or vice versa'),
                                __('Availability: 24h / 24h'),
                                __('Travel time: Between 20 to 30 Min'),
                                __('Free cancellation'),
                            ],
                        ])
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <h2 class="font-x-thin text-2xl text-x-acent">
                        {{ ucwords(__('Strong points')) }}
                    </h2>
                    <div class="border border-x-shade rounded-x-huge p-6">
                        @include('shared.guest.list', [
                            'list' => [
                                __('Enjoy a secure and comfortable private transfer'),
                                __('Avoid waiting for a taxi'),
                                __('No extra charge if your flight is delayed'),
                                __('Availability 24h / 24h'),
                            ],
                        ])
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex flex-col gap-10">
                <div class="flex flex-col gap-px border border-x-shade bg-x-shade shadow-md rounded-x-huge overflow-hidden">
                    <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                        {{ __('20 € / By trip (1-6) Persons') }}
                    </div>
                    <div class="p-6 text-red-500 font-x-huge text-4xl bg-x-white text-center">
                        {{ __('40 € / By trip (7-17) Persons') }}
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
        </div>
    </section>
    @include('shared.guest.reserve', [
        'type' => 'transfer',
    ])
@endsection
