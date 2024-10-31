@extends('shared.guest.base')
@section('title',
    ucwords(__('Private Marrakech Airport Transfer: 24/7 Service')) .
    ' | ' .
    __('Morocco Adventure
    City'))

@section('meta')
    <meta name="description" content="{!! __(
        'Book a private transfer to or from Marrakech Airport. Secure, comfortable, and available 24/7 with no extra charges for flight delays.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Book a private transfer to or from Marrakech Airport. Secure, comfortable, and available 24/7 with no extra charges for flight delays.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Book a private transfer to or from Marrakech Airport. Secure, comfortable, and available 24/7 with no extra charges for flight delays.',
    ) !!}">

    <meta property="og:title" content="{{ ucwords(__('the airport of marrakech')) . ' | ' . __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ ucwords(__('the airport of marrakech')) . ' | ' . __('Morocco Adventure City') }}">

    <meta property="og:image" content="{{ asset('img/transfers/transfer-1.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/transfers/transfer-1.webp') }}">

    <script type="application/ld+json">
      {
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "{{ __('Private Marrakech Airport Transfer: 24/7 Service') }}",
  "description": "{{ __('Book a private transfer to or from Marrakech Airport. Secure, comfortable, and available 24/7 with no extra charges for flight delays.') }}",
  "provider": {
    "@type": "Organization",
    "name": "{{ __('Morocco Adventure City') }}",
    "url": "https://example.com", 
    "logo": "https://example.com/img/logo.webp"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Marrakech"
  },
  "offers": [
    {
      "@type": "Offer",
      "url": "https://example.com/reservation",
      "priceCurrency": "EUR",
      "price": "20",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "minValue": 1,
        "maxValue": 6
      },
      "description": "{{ __('Private transfer for 1-6 persons') }}",
      "availability": "https://schema.org/InStock",
      "validFrom": "2024-10-26"
    },
    {
      "@type": "Offer",
      "url": "https://example.com/reservation",
      "priceCurrency": "EUR",
      "price": "40",
      "eligibleQuantity": {
        "@type": "QuantitativeValue",
        "minValue": 7,
        "maxValue": 17
      },
      "description": "Private transfer for 7-17 persons",
      "availability": "https://schema.org/InStock",
      "validFrom": "2024-10-26"
    }
  ],
  "additionalType": "https://schema.org/TransferService",
  "category": "Airport Transfer",
  "availableChannel": {
    "@type": "ServiceChannel",
    "serviceLocation": {
      "@type": "Place",
      "name": "Marrakech Airport"
    }
  }
}

    </script>
@endsection

@php
    Core::$route = 3;
@endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('Private Transfer To or From Marrakech Airport'),
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
                        {{ __('Enjoy a comfortable and private transfer service between Marrakech Airport and your destination.') }}
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
                                __(
                                    'Private transfer between Marrakech airport and your destination (or vice versa)'),
                                __('Availability: 24/7 service'),
                                __('Duration: 20 to 30 minutes'),
                                __('Free cancellation available'),
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
                                __('Enjoy a safe, comfortable, and private transfer'),
                                __('Skip the wait for a taxi'),
                                __('No extra charges for flight delays'),
                                __('24/7 availability for all your travel needs'),
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
