@extends('shared.core.base')
@section('title', __('Dashboard'))

@section('meta')
    <meta name="core" content='{!! json_encode([
        'search' => route('actions.core.search'),
    ]) !!}' />
@endsection

@section('content')
    <div class="w-full items-start grid grid-rows-1 grid-cols-1 gap-6">
        <div class="flex flex-col gap-2 p-6 bg-x-white rounded-x-thin shadow-x-core">
            <div id="calendar"></div>
        </div>
    </div>
@endsection

@section('scripts')
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.min.js"></script>
    <script src="{{ asset('js/core/index.min.js') }}?v={{ env('APP_VERSION') }}"></script>
@endsection
