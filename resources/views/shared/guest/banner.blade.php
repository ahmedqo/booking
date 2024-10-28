<section class="w-full bg-gray-900 bg-opacity-10 bg-blend-multiply py-20 bg-cover bg-center bg-no-repeat"
    style="background-image: url({{ asset('img/posters/video-background.webp') }})">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col gap-4 items-center">
            <h2 class="font-x-thin text-x-white text-3xl lg:text-5xl text-center">
                {{ ucwords(__('Discover Our Excursions & Tours Services.')) }}
            </h2>
            <p class="font-normal text-x-white text-lg lg:text-xl text-center lg:w-9/12">
                {{ __('Immerse yourself in the wonders of Marrakech, where history, culture, and beauty blend in a vibrant display of colors, flavors, and traditions.') }}
            </p>
            <button id="player" src="{{ asset('video/player.mp4') }}?v={{ env('APP_VERSION') }}"
                class="w-20 h-20 relative isolate rounded-full border-2 border-x-prime mt-6 flex items-center justify-center">
                <svg class="w-10 h-10 text-x-prime pointer-events-none" fill="currentColor" viewBox="0 -960 960 960">
                    <path d="M275-124v-712l561 356-561 356Z" />
                </svg>
            </button>
        </div>
    </div>
</section>
<neo-overlay id="modal">
    <video class="block w-full h-full" controls loop></video>
</neo-overlay>


@section('scripts')
    <script src="{{ asset('js/player.min.js') }}?v={{ env('APP_VERSION') }}"></script>
    @parent
@endsection
