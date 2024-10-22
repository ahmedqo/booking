@php
    $url = url()->current();
    $trips = Core::trips(isset($private));
    $trips = $trips
        ->reject(function ($trip) use ($url) {
            return $trip->url === $url;
        })
        ->random(2);
@endphp

<div class="flex flex-col gap-6">
    <h2 class="font-x-thin text-3xl text-x-black text-center">
        {{ ucwords(__('Recommended')) }}
    </h2>
    <ul class="grid grid-rows-1 grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6">
        @foreach ($trips as $trip)
            <li class="w-full">
                <a href="{{ $trip->url }}"
                    class="block rounded-x-huge overflow-hidden w-full aspect-[9/12] relative isolate">
                    <img src="{{ $trip->image }}" alt="{{ pathinfo($trip->image, PATHINFO_FILENAME) }}" loading="lazy"
                        class="absolute w-full h-full inset-0 object-cover object-center z-[-1]">
                    <div class="absolute w-full h-full inset-0 flex items-end justify-center px-4 py-10">
                        <div class="flex flex-col items-center gap-4">
                            <h5
                                class="text-3xl font-x-thin text-x-white text-center p-2 px-4 bg-x-prime rounded-x-thin">
                                {{ $trip->title }}
                            </h5>
                            <span class="block text-3xl font-x-thin text-x-white text-center">
                                {{ $trip->price }} €
                            </span>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
