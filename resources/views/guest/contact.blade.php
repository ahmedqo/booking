@extends('shared.guest.base')
@section('title', ucwords(__('contact us')) . ' | ' . __('Morocco Adventure City'))

@section('meta')
    <meta name="description" content="{!! __('Get in touch with us for inquiries, feedback, or support. We value your questions and comments.') !!}">
    <meta property="og:description" content="{!! __('Get in touch with us for inquiries, feedback, or support. We value your questions and comments.') !!}">
    <meta name="twitter:description" content="{!! __('Get in touch with us for inquiries, feedback, or support. We value your questions and comments.') !!}">

    <meta property="og:title" content="{{ ucwords(__('contact us')) . ' | ' . __('Morocco Adventure City') }}">
    <meta name="twitter:title" content="{{ ucwords(__('contact us')) . ' | ' . __('Morocco Adventure City') }}">

    <meta property="og:image" content="{{ asset('img/logo.png') }}">
    <meta name="twitter:image" content="{{ asset('img/logo.png') }}">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "{{ __('Contact Us') }}",
            "url": "{{ route('views.guest.contact') }}",
            "description": "{!! __('Get in touch with us for inquiries, feedback, or support. We value your questions and comments.') !!}",
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
            }
        }
    </script>
@endsection

@php
    Core::$route = 5;
@endphp
@section('content')
    <section class="container mx-auto p-4 mt-8">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-5 gap-10">
            <div class="w-full flex flex-col gap-6 lg:col-span-2">
                <h2 class="font-x-thin text-x-black text-4xl lg:text-5xl text-start">
                    {{ ucwords(__('contact info')) }}
                </h2>
                <p class="font-normal text-x-black text-base">
                    {{ __('Feel free to contact us for any inquiries, questions, or comments. We\'re here to help!.') }}
                </p>
                <ul class="flex flex-col gap-2">
                    <li class="font-x-thin text-x-black text-base">
                        <span class="text-opacity-70 text-x-black">
                            {{ __('Address') }}
                        </span>: {{ env('APP_MAP_ADDRESS') }}
                    </li>
                    <li class="font-x-thin text-x-black text-base">
                        <span class="text-opacity-70 text-x-black">
                            {{ __('Phone') }}
                        </span>: {{ env('APP_PHONE_NUMBER') }}
                    </li>
                    <li class="font-x-thin text-x-black text-base">
                        <span class="text-opacity-70 text-x-black">
                            {{ __('Email') }}
                        </span>: {{ env('APP_EMAIL_ADDRESS') }}
                    </li>
                    <li class="font-x-thin text-x-black text-base">
                        <span class="text-opacity-70 text-x-black">
                            {{ __('Whatsapp') }}
                        </span>: {{ env('APP_PHONE_NUMBER') }}
                    </li>
                </ul>
            </div>
            <div class="lg:col-span-3">
                <form validate action="{{ route('actions.mail.contact') }}" method="post"
                    class="grid grid-cols-1 grid-rows-1 lg:grid-cols-2 gap-6">
                    @csrf
                    <input type="hidden" name="type" value="contact" />
                    <div class="flex flex-col gap-px">
                        <neo-textbox rules="required" name="name" label="{{ __('Name') }}"
                            class="py-3 px-4 bg-transparent border border-x-shade"></neo-textbox>
                        <span class="hidden text-red-500 text-sm font-x-thin">
                            {{ __('The name field is required') }}
                        </span>
                    </div>
                    <div class="flex flex-col gap-px">
                        <neo-select search rules="required" name="country" label="{{ __('Country') }}"
                            class="py-3 px-4 bg-transparent border border-x-shade">
                            @foreach (Core::nationsList() as $nation)
                                <neo-select-item value="{{ $nation }}">{{ ucfirst(__($nation)) }}</neo-select-item>
                            @endforeach
                        </neo-select>
                        <span class="hidden text-red-500 text-sm font-x-thin">
                            {{ __('The country field is required') }}
                        </span>
                    </div>
                    <div class="flex flex-col gap-px">
                        <neo-textbox rules="email" type="email" name="email" label="{{ __('Email') }}"
                            class="py-3 px-4 bg-transparent border border-x-shade"></neo-textbox>
                        <span class="hidden text-red-500 text-sm font-x-thin">
                            {{ __('The email field must be a valid email addressr') }}
                        </span>
                    </div>
                    <div class="flex flex-col gap-px">
                        <neo-textbox rules="phone" type="tel" name="phone" label="{{ __('Phone') }}"
                            class="py-3 px-4 bg-transparent border border-x-shade"></neo-textbox>
                        <span class="hidden text-red-500 text-sm font-x-thin">
                            {{ __('The phone field must be a valid phone number') }}
                        </span>
                    </div>
                    <div class="lg:col-span-2 flex flex-col gap-px">
                        <neo-textarea rules="required" name="message" label="{{ __('Message') }}"
                            class="py-3 px-4 bg-transparent border border-x-shade" rows="4"></neo-textarea>
                        <span class="hidden text-red-500 text-sm font-x-thin">
                            {{ __('The message field is required') }}
                        </span>
                    </div>
                    <neo-button class="rounded-none px-10 py-3">
                        {{ strtoupper(__('submit now')) }}
                    </neo-button>
                </form>
            </div>
        </div>
    </section>
    <section class="container mx-auto p-4 py-10">
        <div class="w-full aspect-video md:aspect-[16/7] shadow-xl border border-x-shade rounded-x-huge overflow-hidden">
            <iframe name="map" loading="lazy" type="text/html"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13588.234530091742!2d-8.0232381945098!3d31.632244986603453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee8d931f3209%3A0x96ce34d39325c762!2sGu%C3%A9liz%2C%20Marrakech%2040000!5e0!3m2!1sfr!2sma!4v1709985389436!5m2!1sfr!2sma"
                frameborder="0" allowfullscreen="false" class="w-full h-full"></iframe>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/validate.min.js') }}?v={{ env('APP_VERSION') }}"></script>
@endsection
