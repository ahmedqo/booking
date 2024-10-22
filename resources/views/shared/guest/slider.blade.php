<div class="aspect-[16/8] rounded-x-huge overflow-hidden relative flex flex-wrap items-center">
    <button id="ui-prev" aria-label="prev_arrow"
        class="flex items-center justify-center w-8 h-8 rounded-full absolute left-4 rtl:left-auto rtl:right-4 hover:bg-gray-900">
        <svg class="block w-5 h-5 pointer-events-none text-x-white" viewBox="0 -960 960 960" fill="currentColor">
            <path
                d="{{ Core::lang('ar') ? 'M584-412H114v-136h470L382-750l98-96 366 366-366 366-97-96 201-202Z' : 'm376-412 201 202-97 96-366-366 366-366 98 96-202 202h470v136H376Z' }}" />
        </svg>
    </button>
    <div id="ui-carousel" class="w-full">
        <ul>
            @foreach ($img as $image)
                <li class="w-full aspect-[16/8]">
                    <img src="{{ $image }}" alt="{{ $alt }} {{ $loop->index + 1 }}" loading="lazy"
                        class="block w-full h-full object-cover object-center" />
                </li>
            @endforeach
        </ul>
    </div>
    <button id="ui-next" aria-label="next_arrow"
        class="flex items-center justify-center w-8 h-8 rounded-full absolute right-4 rtl:right-auto rtl:left-4 hover:bg-gray-900">
        <svg class="block w-5 h-5 pointer-events-none text-x-white" viewBox="0 -960 960 960" fill="currentColor">
            <path
                d="{{ Core::lang('ar') ? 'm376-412 201 202-97 96-366-366 366-366 98 96-202 202h470v136H376Z' : 'M584-412H114v-136h470L382-750l98-96 366 366-366 366-97-96 201-202Z' }}" />
        </svg>
    </button>
</div>

@section('scripts')
    <script src="{{ asset('js/slider.min.js') }}?v={{ env('APP_VERSION') }}"></script>
    @parent
@endsection
