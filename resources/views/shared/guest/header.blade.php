<header class="flex flex-col">
    <div class="hidden lg:flex border-b border-b-x-shade">
        <div class="container mx-auto px-4">
            <ul class="flex w-full h-14">
                <li class="flex-[1.5] flex flex-wrap items-center">
                    <div class="border-e border-e-x-shade h-full flex items-center pe-4">
                        <a href="tel:{{ env('APP_PHONE_NUMBER') }}"
                            class="flex flex-wrap gap-2 items-center font-x-thin text-base text-x-black">
                            <svg class="w-4 h-4 text-x-prime pointer-events-none" fill="currentColor"
                                viewBox="0 -960 960 960">
                                <path
                                    d="M812-74q-137 0-269.5-58.5T301-299Q192-407 133.5-541T75-811q0-33 20.5-54t53.5-21h175q37 0 60.5 18t31.5 52l27 130q5 30-1.5 52.5T416-595l-106 94q15 25 36.5 50.5T396-397q26 25 49 44t44 32l108-102q19-19 41.5-25t50.5 0l127 29q34 10 52 31t18 55v184q0 33-21 54t-53 21Z" />
                            </svg>
                            {{ env('APP_PHONE_NUMBER') }}
                        </a>
                    </div>
                    <div class="flex items-center ps-4">
                        <a href="mailto:{{ env('APP_EMAIL_ADDRESS') }}"
                            class="flex flex-wrap gap-2 items-center font-x-thin text-base text-x-black">
                            <svg class="w-4 h-4 text-x-prime pointer-events-none" fill="currentColor"
                                viewBox="0 -960 960 960">
                                <path
                                    d="M170-114q-56.72 0-96.36-40.14Q34-194.27 34-250v-460q0-55.72 39.64-95.86T170-846h620q56.72 0 96.36 40.14T926-710v460q0 55.73-39.64 95.86Q846.72-114 790-114H170Zm310-274 310-200v-122L480-508 170-710v122l310 200Z" />
                            </svg>
                            {{ env('APP_EMAIL_ADDRESS') }}
                        </a>
                    </div>
                </li>
                <li class="flex-1 flex flex-wrap items-center">
                    <div class="flex flex-wrap gap-4 w-max pe-4">
                        <a href="" class="flex items-center justify-center w-5 h-5 text-x-black">
                            <svg class="w-5 h-5 pointer-events-none" fill="currentColor" viewBox="0 0 50 50">
                                <path
                                    d="M32,11h5c0.552,0,1-0.448,1-1V3.263c0-0.524-0.403-0.96-0.925-0.997C35.484,2.153,32.376,2,30.141,2C24,2,20,5.68,20,12.368 V19h-7c-0.552,0-1,0.448-1,1v7c0,0.552,0.448,1,1,1h7v19c0,0.552,0.448,1,1,1h7c0.552,0,1-0.448,1-1V28h7.222 c0.51,0,0.938-0.383,0.994-0.89l0.778-7C38.06,19.518,37.596,19,37,19h-8v-5C29,12.343,30.343,11,32,11z">
                            </svg>
                        </a>
                        <a href="" class="flex items-center justify-center w-5 h-5 text-x-black">
                            <svg class="w-5 h-5 pointer-events-none" fill="currentColor" viewBox="0 0 26 26">
                                <path
                                    d="M 7.546875 0 C 3.390625 0 0 3.390625 0 7.546875 L 0 18.453125 C 0 22.609375 3.390625 26 7.546875 26 L 18.453125 26 C 22.609375 26 26 22.609375 26 18.453125 L 26 7.546875 C 26 3.390625 22.609375 0 18.453125 0 Z M 7.546875 2 L 18.453125 2 C 21.527344 2 24 4.46875 24 7.546875 L 24 18.453125 C 24 21.527344 21.53125 24 18.453125 24 L 7.546875 24 C 4.472656 24 2 21.53125 2 18.453125 L 2 7.546875 C 2 4.472656 4.46875 2 7.546875 2 Z M 20.5 4 C 19.671875 4 19 4.671875 19 5.5 C 19 6.328125 19.671875 7 20.5 7 C 21.328125 7 22 6.328125 22 5.5 C 22 4.671875 21.328125 4 20.5 4 Z M 13 6 C 9.144531 6 6 9.144531 6 13 C 6 16.855469 9.144531 20 13 20 C 16.855469 20 20 16.855469 20 13 C 20 9.144531 16.855469 6 13 6 Z M 13 8 C 15.773438 8 18 10.226563 18 13 C 18 15.773438 15.773438 18 13 18 C 10.226563 18 8 15.773438 8 13 C 8 10.226563 10.226563 8 13 8 Z">
                            </svg>
                        </a>
                    </div>
                    <a href="{{ route('views.guest.excursion') }}"
                        class="w-0 flex-1 bg-x-prime font-x-thin text-base text-x-white flex text-center px-6 h-full items-center justify-center hover:bg-x-acent focus:bg-x-acent">
                        {{ strtoupper(__('BOOKING NOW')) }}
                    </a>
                    <ul class="flex flex-wrap gap-4 items-center ps-6">
                        @foreach (['en', 'fr', 'it', 'sp'] as $lang)
                            <li class="w-max">
                                <a href="{{ route('actions.language.index', $lang) }}"
                                    class="flex items-center justify-center w-8 h-8">
                                    <img src="{{ asset('lang/' . $lang . '.png') }}?v={{ env('APP_VERSION') }}"
                                        alt="{{ env('APP_NAME') }} {{ $lang }} language image"
                                        class="bg-x-prime w-full h-full object-cover rounded-full" />
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="border-b border-b-x-shade">
        <div class="container mx-auto px-4 py-2">
            <div class="flex flex-wrap items-center justify-between">
                <a href="{{ route('views.guest.index') }}" class="flex items-center justify-center">
                    <img src="{{ asset('img/logo.png') }}?v={{ env('APP_VERSION') }}"
                        alt="{{ env('APP_NAME') }} logo image" class="w-24 object-contain object-center" />
                </a>
                <nav class="w-max hidden lg:block">
                    <ul class="flex items-center gap-4">
                        @foreach (Core::nav() as $link => $path)
                            <li>
                                <a href="{{ $path }}"
                                    class="w-max font-x-thin text-lg text-x-black p-2 hover:border-b-2 hover:border-b-x-prime {{ Core::$route === $loop->index ? '!border-b-2 !border-b-x-prime' : '' }}">
                                    {{ ucwords($link) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <button onclick="document.querySelector('#sidebar').show()"
                    class="flex items-center justify-center rounded-x-thin border border-x-x-black border-y-x-black w-10 h-10 lg:hidden">
                    <svg class="w-6 h-6 text-x-black pointer-events-none" fill="currentColor" viewBox="0 -960 960 960">
                        <path d="M74-184v-136h812v136H74Zm0-228v-136h812v136H74Zm0-229v-136h812v136H74Z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <neo-sidebar id="sidebar" stick class="lg:hidden">
        <div class="flex flex-col gap-6 my-10">
            <ul class="flex flex-wrap gap-4 items-center justify-center">
                @foreach (['en', 'fr', 'it', 'sp'] as $lang)
                    <li class="w-max">
                        <a href="{{ route('actions.language.index', $lang) }}"
                            class="flex items-center justify-center w-8 h-8">
                            <img src="{{ asset('lang/' . $lang . '.png') }}?v={{ env('APP_VERSION') }}"
                                alt="{{ env('APP_NAME') }} {{ $lang }} language image"
                                class="bg-x-prime w-full h-full object-cover rounded-full" />
                        </a>
                    </li>
                @endforeach
            </ul>
            <a href="{{ route('views.guest.excursion') }}"
                class="bg-x-prime font-x-thin text-base text-x-white flex text-center px-6 py-2.5 items-center justify-center hover:bg-x-acent focus:bg-x-acent mx-auto">
                {{ strtoupper(__('BOOKING NOW')) }}
            </a>
            <nav class="w-9/12 mx-auto">
                <ul class="flex flex-col">
                    @foreach (Core::nav() as $link => $path)
                        <li class="w-full">
                            <a href="{{ $path }}"
                                class="w-full block font-x-thin text-base text-x-black p-2 border-b border-b-x-shade hover:text-x-prime {{ Core::$route === $loop->index ? '!text-x-prime' : '' }}">
                                {{ ucwords($link) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <div class="flex flex-wrap gap-4 w-max mx-auto">
                <a href="" class="flex items-center justify-center w-5 h-5 text-x-black">
                    <svg class="w-5 h-5 pointer-events-none" fill="currentColor" viewBox="0 0 50 50">
                        <path
                            d="M32,11h5c0.552,0,1-0.448,1-1V3.263c0-0.524-0.403-0.96-0.925-0.997C35.484,2.153,32.376,2,30.141,2C24,2,20,5.68,20,12.368 V19h-7c-0.552,0-1,0.448-1,1v7c0,0.552,0.448,1,1,1h7v19c0,0.552,0.448,1,1,1h7c0.552,0,1-0.448,1-1V28h7.222 c0.51,0,0.938-0.383,0.994-0.89l0.778-7C38.06,19.518,37.596,19,37,19h-8v-5C29,12.343,30.343,11,32,11z">
                    </svg>
                </a>
                <a href="" class="flex items-center justify-center w-5 h-5 text-x-black">
                    <svg class="w-5 h-5 pointer-events-none" fill="currentColor" viewBox="0 0 26 26">
                        <path
                            d="M 7.546875 0 C 3.390625 0 0 3.390625 0 7.546875 L 0 18.453125 C 0 22.609375 3.390625 26 7.546875 26 L 18.453125 26 C 22.609375 26 26 22.609375 26 18.453125 L 26 7.546875 C 26 3.390625 22.609375 0 18.453125 0 Z M 7.546875 2 L 18.453125 2 C 21.527344 2 24 4.46875 24 7.546875 L 24 18.453125 C 24 21.527344 21.53125 24 18.453125 24 L 7.546875 24 C 4.472656 24 2 21.53125 2 18.453125 L 2 7.546875 C 2 4.472656 4.46875 2 7.546875 2 Z M 20.5 4 C 19.671875 4 19 4.671875 19 5.5 C 19 6.328125 19.671875 7 20.5 7 C 21.328125 7 22 6.328125 22 5.5 C 22 4.671875 21.328125 4 20.5 4 Z M 13 6 C 9.144531 6 6 9.144531 6 13 C 6 16.855469 9.144531 20 13 20 C 16.855469 20 20 16.855469 20 13 C 20 9.144531 16.855469 6 13 6 Z M 13 8 C 15.773438 8 18 10.226563 18 13 C 18 15.773438 15.773438 18 13 18 C 10.226563 18 8 15.773438 8 13 C 8 10.226563 10.226563 8 13 8 Z">
                    </svg>
                </a>
            </div>
            <ul class="w-10/12 flex flex-col gap-4 mx-auto items-center mt-4">
                <li class="flex items-center">
                    <a href="tel:{{ env('APP_PHONE_NUMBER') }}"
                        class="flex flex-col gap-2 items-center font-x-thin text-sm text-x-black">
                        <svg class="w-4 h-4 text-x-prime pointer-events-none" fill="currentColor"
                            viewBox="0 -960 960 960">
                            <path
                                d="M812-74q-137 0-269.5-58.5T301-299Q192-407 133.5-541T75-811q0-33 20.5-54t53.5-21h175q37 0 60.5 18t31.5 52l27 130q5 30-1.5 52.5T416-595l-106 94q15 25 36.5 50.5T396-397q26 25 49 44t44 32l108-102q19-19 41.5-25t50.5 0l127 29q34 10 52 31t18 55v184q0 33-21 54t-53 21Z" />
                        </svg>
                        {{ env('APP_PHONE_NUMBER') }}
                    </a>
                </li>
                <li class="flex items-center">
                    <a href="mailto:{{ env('APP_EMAIL_ADDRESS') }}"
                        class="flex flex-col gap-2 items-center font-x-thin text-sm text-x-black">
                        <svg class="w-4 h-4 text-x-prime pointer-events-none" fill="currentColor"
                            viewBox="0 -960 960 960">
                            <path
                                d="M170-114q-56.72 0-96.36-40.14Q34-194.27 34-250v-460q0-55.72 39.64-95.86T170-846h620q56.72 0 96.36 40.14T926-710v460q0 55.73-39.64 95.86Q846.72-114 790-114H170Zm310-274 310-200v-122L480-508 170-710v122l310 200Z" />
                        </svg>
                        {{ env('APP_EMAIL_ADDRESS') }}
                    </a>
                </li>
            </ul>
        </div>
    </neo-sidebar>
</header>
