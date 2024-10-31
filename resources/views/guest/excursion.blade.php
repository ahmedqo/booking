@extends('shared.guest.base')
@section('title', ucwords(__('excursions')) . ' | ' . __('Morocco Adventure City'))

@section('meta')
    <meta name="description" content="{!! __(
        'Explore our exciting excursions in Morocco, including trips to the Sahara Desert, Ouzoud Falls, and more.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Explore our exciting excursions in Morocco, including trips to the Sahara Desert, Ouzoud Falls, and more.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Explore our exciting excursions in Morocco, including trips to the Sahara Desert, Ouzoud Falls, and more.',
    ) !!}">

    <meta property="og:title" content="{{ ucwords(__('excursions')) . ' | ' . __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ ucwords(__('excursions')) . ' | ' . __('Morocco Adventure City') }}">

    <meta property="og:image" content="{{ asset('img/slides/slide-2.webp') }}">
    <meta name="twitter:image" content="{{ asset('img/slides/slide-2.webp') }}">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "{{ __('Excursions') }}",
            "url": "{{ route('views.guest.excursion') }}",
            "description": "{!! __('Explore our exciting excursions in Morocco, including trips to the Sahara Desert, Ouzoud Falls, and more.') !!}",
            "publisher": {
                "@type": "Organization",
                "name": "{{ __('Morocco Adventure City') }}",
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
            },
            "offer": {
                "@type": "OfferCatalog",
                "name": "{{ __('Excursions') }}",
                "itemListElement": [@foreach (Core::trips() as $trip){
                        "@type": "Offer",
                        "name": "{!! $trip->title !!}",
                        "url": "{{ $trip->url }}",
                        "priceCurrency": "EUR",
                        "price": "{{ $trip->price }}",
                        "availability": "https://schema.org/InStock",
                        "validFrom": "{{ now()->toIso8601String() }}",
                        "description": "{!! $trip->desc !!}"
                    }@if(!$loop->last),@endif @endforeach]
            }
        }
    </script>
@endsection

@php
    Core::$route = 1;
@endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('Our Excursions'),
        'start' => [route('views.guest.index'), __('Home')],
        'end' => __('Excursions'),
    ])
    <section class="container mx-auto p-4">
        <ul class="grid grid-rows-1 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach (Core::trips() as $trip)
                <li class="flex flex-col border border-x-light rounded-x-thin overflow-hidden">
                    <img src="{{ $trip->image }}" alt="{{ pathinfo($trip->image, PATHINFO_FILENAME) }}"
                        class="aspect-video object-cover object-center" loading="lazy" />
                    <div class="flex flex-col gap-4 p-4 flex-1">
                        <h3 class="font-x-thin text-2xl lg:text-3xl text-center text-x-prime">
                            {{ $trip->title }}
                        </h3>
                        <p class="font-normal text-x-black text-base text-justify">
                            {{ $trip->desc }}...
                        </p>
                        <div class="flex mt-auto flex-wrap justify-between items-end">
                            <div class="w-max">
                                <span class="font-x-thin text-2xl lg:text-3xl text-x-prime">
                                    {{ $trip->price }} €
                                </span>/
                                <span class="font-x-thin text-base text-x-black">
                                    {{ __('person') }}
                                </span>
                            </div>
                            <div class="w-max flex gap-2 flex-wrap items-center">
                                <svg class="w-5 h-5 text-x-black text-opacity-50 pointer-events-none" fill="currentColor"
                                    viewBox="0 -960 960 960">
                                    <path
                                        d="m595-281 86-84-141-141v-171H420v220.56L595-281ZM480-34q-92.64 0-174.47-34.6-81.82-34.61-142.07-94.86T68.6-305.53Q34-387.36 34-480q0-92.9 34.66-174.45 34.67-81.55 95.18-141.94 60.51-60.39 142.07-95Q387.48-926 480-926q92.89 0 174.48 34.59 81.59 34.6 141.96 94.97 60.37 60.37 94.97 141.99Q926-572.83 926-479.92q0 92.92-34.61 174.25-34.61 81.32-95 141.83Q736-103.33 654.45-68.66 572.9-34 480-34Z" />
                                </svg>
                                <span class="font-x-thin text-base text-x-black">
                                    {{ $trip->time }}
                                </span>
                            </div>
                        </div>
                        <a href="{{ $trip->url }}"
                            class="flex w-max mx-auto text-x-black font-x-thin text-base p-2 border-b-2 border-b-x-prime">
                            {{ ucwords(__('more details')) }}
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
