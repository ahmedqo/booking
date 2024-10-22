@extends('shared.guest.base')
@section('title', ucwords(__('about us')) . ' | ' . __('Morocco Adventure City'))

@section('meta')
    <meta name="description" content="{!! __(
        'Morocco Adventure City is a leading travel agency offering a variety of services including accommodation and customized travel experiences.',
    ) !!}">
    <meta property="og:description" content="{!! __(
        'Morocco Adventure City is a leading travel agency offering a variety of services including accommodation and customized travel experiences.',
    ) !!}">
    <meta name="twitter:description" content="{!! __(
        'Morocco Adventure City is a leading travel agency offering a variety of services including accommodation and customized travel experiences.',
    ) !!}">

    <meta property="og:title" content="{{ ucwords(__('about us')) . ' | ' . __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ ucwords(__('about us')) . ' | ' . __('Morocco Adventure City') }}">

    <meta property="og:image" content="{{ asset('img/logo.png') }}">
    <meta name="twitter:image" content="{{ asset('img/logo.png') }}">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "{{ __('About Us') }}",
            "url": "{{ route('views.guest.about') }}",
            "description": "{!! __('Morocco Adventure City is a leading travel agency offering a variety of services including accommodation and customized travel experiences.') !!}",
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
    Core::$route = 4;
@endphp
@section('content')
    @include('shared.guest.topbar', [
        'title' => __('About Us'),
        'start' => [route('views.guest.index'), __('Home')],
        'end' => __('About Us'),
    ])
    <section class="container mx-auto p-4">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-2 gap-10">
            <div class="w-full flex flex-col gap-6">
                <h2 class="font-x-thin text-x-black text-4xl lg:text-5xl text-start">
                    {{ ucwords(__('welcome to morocco adventure city')) }}
                </h2>
                <p class="font-normal text-x-black text-lg lg:text-xl text-justify">
                    {{ __('Our tourist visits agency in marrakech is a leader in the industry, offering a comprehensive range of travel services to meet all our clients needs. With a dedicated team of travel experts and strong partnerships with leading travel in Marrakech and surrounding regions, we are committed to delivering exceptional experiences to every traveler.') }}
                </p>
            </div>
            <div>
                <ul class="w-full flex flex-col gap-4 lg:w-max lg:mx-auto">
                    @foreach ([__('Accommodation Reservations'), __('Excursions and Tours'), __('Customized Travel Services'), __('Free Services'), __('Group Discounts')] as $text)
                        <li class="flex flex-wrap gap-3 items-center">
                            <svg class="w-6 h-6 text-x-prime pointer-events-none" fill="currentColor"
                                viewBox="0 -960 960 960">
                                <path d="M382-200 113-469l97-97 172 173 369-369 97 96-466 466Z" />
                            </svg>
                            <span class="font-x-thin text-xl text-x-black text-opacity-60">
                                {{ ucwords($text) }}.
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <section class="container mx-auto p-4 py-10">
        <ul class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-10">
            <li class="rounded-x-huge overflow-hidden w-full aspect-square lg:aspect-[8/9] relative isolate">
                <img src="{{ asset('img/about-us/excursion.webp') }}" alt="excursion-poster" loading="lazy"
                    class="absolute w-full h-full inset-0 object-cover object-center z-[-1]">
                <div class="absolute w-full h-full inset-0 flex items-end justify-center px-4 py-10">
                    <div class="flex flex-col items-center gap-4">
                        <h3 class="text-3xl font-x-huge text-x-white text-center">
                            {{ ucwords(__('Excursion')) }}
                        </h3>
                    </div>
                </div>
            </li>
            <li class="rounded-x-huge overflow-hidden w-full aspect-square lg:aspect-[8/9] relative isolate">
                <img src="{{ asset('img/about-us/activity.webp') }}" alt="activity-poster" loading="lazy"
                    class="absolute w-full h-full inset-0 object-cover object-center z-[-1]">
                <div class="absolute w-full h-full inset-0 flex items-end justify-center px-4 py-10">
                    <div class="flex flex-col items-center gap-4">
                        <h3 class="text-3xl font-x-huge text-x-black text-center">
                            {{ ucwords(__('Activity')) }}
                        </h3>
                    </div>
                </div>
            </li>
            <li class="rounded-x-huge overflow-hidden w-full aspect-square lg:aspect-[8/9] relative isolate">
                <img src="{{ asset('img/about-us/transfer.webp') }}" alt="transfer-poster" loading="lazy"
                    class="absolute w-full h-full inset-0 object-cover object-center z-[-1]">
                <div class="absolute w-full h-full inset-0 flex items-end justify-center px-4 py-10">
                    <div class="flex flex-col items-center gap-4">
                        <h3 class="text-3xl font-x-huge text-x-black text-center">
                            {{ ucwords(__('Transfer')) }}
                        </h3>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    @include('shared.guest.banner')
@endsection
