<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ Core::lang('ar') ? 'rtl' : 'ltr' }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:site_name" content="{{ __('Morocco Adventure City') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:site" content="">
    @yield('meta')
    <link rel="canonical" href="{{ url()->current() }}">
    @include('shared.base.styles')
    @yield('styles')
    <title>@yield('title')</title>
</head>

<body close>
    <section id="neo-page-cover">
        <img src="{{ asset('img/logo.png') }}?v={{ env('APP_VERSION') }}" alt="{{ env('APP_NAME') }} logo image"
            class="block w-20 animate-ping" width="916" height="516" />
    </section>
    <neo-wrapper class="flex flex-col">
        @include('shared.guest.header')
        <main>
            @yield('content')
        </main>
        @include('shared.guest.footer')
    </neo-wrapper>
    <neo-toaster horisontal="end" vertical="start" class="full-size"></neo-toaster>
    @include('shared.base.scripts', ['type' => 'guest'])
    @yield('scripts')
</body>

</html>
