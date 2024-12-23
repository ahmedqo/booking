<neo-topbar transparent align="space-between"
    class="main-topbar bg-x-prime md:bg-transparent shadow-x-core md:shadow-none md:py-4">
    <div class="lg:flex-1 min-w-max flex flex-wrap gap-4 items-center">
        <button id="trigger" onclick="sidebar.toggle()" aria-label="sidebar_trigger"
            class="flex w-8 h-8 items-center justify-center text-x-white md:text-x-black outline-none rounded-x-thin !bg-opacity-5 hover:bg-x-black focus:bg-x-black focus-within:bg-x-black">
            <svg class="block w-6 h-6 pointer-events-none" fill="currentcolor" viewBox="0 -960 960 960">
                <path
                    d="M129-215q-20.75 0-33.375-12.675Q83-240.351 83-261.175 83-280 95.625-293T129-306h458q19.75 0 32.375 13.175 12.625 13.176 12.625 32Q632-240 619.375-227.5 606.75-215 587-215H129Zm0-221q-20.75 0-33.375-13.175Q83-462.351 83-482.175 83-502 95.625-514.5 108.25-527 129-527h339q18.75 0 31.875 12.675Q513-501.649 513-481.825 513-462 499.875-449 486.75-436 468-436H129Zm0-218q-20.75 0-33.375-13.175Q83-680.351 83-700.175 83-720 95.625-733 108.25-746 129-746h458q19.75 0 32.375 13.175 12.625 13.176 12.625 33Q632-680 619.375-667 606.75-654 587-654H129Zm605 173 114 113q13 14 12.5 33T847-304q-15 14-33.5 14T782-304L637-450q-14-13-14-31t14-32l145-146q13-13 31.5-13t33.5 13q13 14 12.5 33T847-594L734-481Z" />
            </svg>
        </button>
    </div>
    <h1
        class="lg:flex-[3] me-auto md:me-0 lg:text-center text-x-white md:text-x-black font-x-thin text-base md:text-2xl">
        @yield('title')
    </h1>
    <div class="lg:flex-1 min-w-max items-center justify-end flex flex-wrap gap-1">
        <neo-dropdown label="{{ __('Languages') }}" position="{{ Core::lang('ar') ? 'start' : 'end' }}">
            <button slot="trigger" aria-label="setting_trigger"
                class="flex w-8 h-8 items-center justify-center text-x-white md:text-x-black outline-none rounded-x-thin !bg-opacity-5 hover:bg-x-black focus:bg-x-black focus-within:bg-x-black">
                <svg class="block w-6 h-6 pointer-events-none" fill="currentcolor" viewBox="0 -960 960 960">
                    <path
                        d="M610-196 568.513-90.019Q566-78 555.452-71q-10.548 7-23.606 7Q510-64 499.5-80.963 489-97.927 497-118.094L654.571-537.15Q658-549 668-556.5q10-7.5 22-7.5h31.552q11.821 0 21.672 7T758-538l164 419q6 20.462-5.6 37.73Q904.799-64 884.273-64q-14.692 0-26.733-7.76t-15.536-22.576L808.585-196H610Zm22-72h148l-73.054-202H705l-73 202ZM355.135-397l-179.34 178.842Q162.86-206 146.206-206.5q-16.654-.5-27.93-11Q107-229 108-246.689q1-17.69 11.654-28.321L303-458q-39.6-45.818-70.8-92.409Q201-597 179-646h90q16 34 38.329 64.567 22.328 30.566 48.274 63.433Q403-567 434.628-619.861 466.256-672.721 489-730H63.857q-17.753 0-29.305-12.289Q23-754.579 23-771.982q0-17.404 12.35-29.318 12.35-11.914 29.895-11.914h248.731v-41.893q0-17.529 11.748-29.211Q337.471-896 355.098-896t29.637 11.682q12.011 11.682 12.011 29.211v41.893h249.548q17.685 0 29.696 11.768Q688-789.679 688-771.895q0 17.509-12.282 29.702Q663.436-730 645.759-730h-74.975Q548-656 510-587.5T416-457l102 103-29.389 83.933L355.135-397Z" />
                </svg>
            </button>
            <ul class="sys-colors w-full flex flex-col">
                <li class="w-full">
                    <a href="{{ route('actions.language.index', 'en') }}"
                        class="w-full flex flex-wrap gap-2 p-3 text-start items-center outline-none hover:text-x-white hover:bg-x-acent focus:text-x-white focus:bg-x-acent focus-within:text-x-white focus-within:bg-x-acent {{ Core::lang('en') ? 'bg-x-prime text-x-white' : 'text-x-black' }}">
                        <img src="{{ asset('lang/en.png') }}?v={{ env('APP_VERSION') }}"
                            alt="{{ env('APP_NAME') }} en language image"
                            class="bg-x-prime w-6 h-6 object-cover rounded-full" />
                        <span class="block flex-1 text-base text-start">{{ __('English') }}</span>
                    </a>
                </li>
                <li class="w-full">
                    <a href="{{ route('actions.language.index', 'fr') }}"
                        class="w-full flex flex-wrap gap-2 p-3 text-start items-center outline-none hover:text-x-white hover:bg-x-acent focus:text-x-white focus:bg-x-acent focus-within:text-x-white focus-within:bg-x-acent {{ Core::lang('fr') ? 'bg-x-prime text-x-white' : 'text-x-black' }}">
                        <img src="{{ asset('lang/fr.png') }}?v={{ env('APP_VERSION') }}"
                            alt="{{ env('APP_NAME') }} fr language image"
                            class="bg-x-prime w-6 h-6 object-cover rounded-full" />
                        <span class="block flex-1 text-base text-start">{{ __('French') }}</span>
                    </a>
                </li>
                <li class="w-full">
                    <a href="{{ route('actions.language.index', 'it') }}"
                        class="w-full flex flex-wrap gap-2 p-3 text-start items-center outline-none hover:text-x-white hover:bg-x-acent focus:text-x-white focus:bg-x-acent focus-within:text-x-white focus-within:bg-x-acent {{ Core::lang('it') ? 'bg-x-prime text-x-white' : 'text-x-black' }}">
                        <img src="{{ asset('lang/it.png') }}?v={{ env('APP_VERSION') }}"
                            alt="{{ env('APP_NAME') }} it language image"
                            class="bg-x-prime w-6 h-6 object-cover rounded-full" />
                        <span class="block flex-1 text-base text-start">{{ __('Italian') }}</span>
                    </a>
                </li>
                <li class="w-full">
                    <a href="{{ route('actions.language.index', 'sp') }}"
                        class="w-full flex flex-wrap gap-2 p-3 text-start items-center outline-none hover:text-x-white hover:bg-x-acent focus:text-x-white focus:bg-x-acent focus-within:text-x-white focus-within:bg-x-acent {{ Core::lang('sp') ? 'bg-x-prime text-x-white' : 'text-x-black' }}">
                        <img src="{{ asset('lang/sp.png') }}?v={{ env('APP_VERSION') }}"
                            alt="{{ env('APP_NAME') }} sp language image"
                            class="bg-x-prime w-6 h-6 object-cover rounded-full" />
                        <span class="block flex-1 text-base text-start">{{ __('Spanish') }}</span>
                    </a>
                </li>
            </ul>
        </neo-dropdown>
        <neo-dropdown label="{{ __('System') }}" position="{{ Core::lang('ar') ? 'start' : 'end' }}">
            <button slot="trigger" aria-label="setting_trigger"
                class="flex w-8 h-8 items-center justify-center text-x-white md:text-x-black outline-none rounded-x-thin !bg-opacity-5 hover:bg-x-black focus:bg-x-black focus-within:bg-x-black">
                <svg class="block w-6 h-6 pointer-events-none" fill="currentcolor" viewBox="0 -960 960 960">
                    <path
                        d="M408-59q-18 0-31-10.5T363-98l-15-94q-14-4-31-14t-28-19l-86 41q-15 6-32.5 1.5T144-204L72-332q-10-16-5-32.5T85-391l80-59q-1-5-1-14.5v-30q0-8.5 1-15.5l-81-58q-13-11-17.5-27.5T72-628l72-127q9-16 26.5-21t32.5 0l88 41q10-7 27-17t30-14l15-98q1-16 14.5-27t31.5-11h143q17 0 30.5 11t15.5 27l14 97q15 4 31.5 14t27.5 18l86-41q15-5 32.5 0t26.5 21l73 126q9 16 5 33t-19 28l-81 55q1 8 2.5 17t1.5 16q0 7-1.5 15.5T794-449l81 58q13 10 18.5 26.5T890-332l-74 128q-10 17-27 21.5t-32-1.5l-86-41q-11 9-28.5 19.5T613-192l-15 94q-2 18-15 28.5T552-59H408Zm71-294q53 0 90-37t37-90q0-52-37-89.5T479-607q-54 0-90.5 37.5T352-480q0 53 36.5 90t90.5 37Z" />
                </svg>
            </button>
            <ul class="sys-colors w-full flex flex-col">
                <li class="w-full">
                    <a href="{{ route('views.profile.patch') }}"
                        class="w-full flex flex-wrap gap-2 px-4 py-2 text-start items-center outline-none hover:text-x-white hover:bg-x-acent focus:text-x-white focus:bg-x-acent focus-within:text-x-white focus-within:bg-x-acent {{ request()->routeIs('views.profile.patch') ? 'bg-x-prime text-x-white' : 'text-x-black' }}">
                        <svg class="block w-6 h-6 pointer-events-none" fill="currentcolor" viewBox="0 -960 960 960">
                            <path
                                d="M310-279h340v-23q0-45.622-44.534-69.811Q560.931-396 479.966-396 399-396 354.5-371.811T310-302v23Zm170.044-184q33.431 0 55.693-22.975Q558-508.95 558-542.212q0-33.263-22.343-55.525Q513.314-620 479.832-620t-55.657 22.431Q402-575.139 402-542t22.307 56.069Q446.613-463 480.044-463ZM150-99q-37.175 0-64.088-26.594Q59-152.188 59-190v-495q0-36.588 26.912-64.294Q112.825-777 150-777h133l55-65q12.136-16 30.508-24 18.373-8 38.492-8h148q18.125 0 36.562 8Q610-858 623-842l55 65h132q37.225 0 64.613 27.706Q902-721.588 902-685v495q0 37.812-27.387 64.406Q847.225-99 810-99H150Z" />
                        </svg>
                        <span class="block flex-1 text-base text-start">{{ __('Profile') }}</span>
                    </a>
                </li>
                <li class="w-full">
                    <a href="{{ route('views.password.patch') }}"
                        class="w-full flex flex-wrap gap-2 px-4 py-2 text-start items-center outline-none hover:text-x-white hover:bg-x-acent focus:text-x-white focus:bg-x-acent focus-within:text-x-white focus-within:bg-x-acent {{ request()->routeIs('views.password.patch') ? 'bg-x-prime text-x-white' : 'text-x-black' }}">
                        <svg class="block w-6 h-6 pointer-events-none" fill="currentcolor" viewBox="0 -960 960 960">
                            <path
                                d="M229-62q-36.775 0-63.888-27.112Q138-116.225 138-153v-415q0-38.588 27.112-65.294Q192.225-660 229-660h53v-74q0-83.965 57.921-142.483Q397.843-935 479.731-935q81.889 0 140.079 58.517Q678-817.965 678-734v74h53q37.188 0 64.594 26.706Q823-606.588 823-568v415q0 36.775-27.406 63.888Q768.188-62 731-62H229Zm251.248-223Q512-285 533.5-306.615q21.5-21.616 21.5-51.969Q555-388 533.252-412q-21.748-24-53.5-24T426.5-412.064Q405-388.128 405-358.42q0 30.12 21.748 51.77 21.748 21.65 53.5 21.65ZM373-660h214v-73.769q0-47.731-30.973-78.481Q525.054-843 480.235-843q-44.818 0-76.027 30.75Q373-781.5 373-733.769V-660Z" />
                        </svg>
                        <span class="block flex-1 text-base text-start">{{ __('Password') }}</span>
                    </a>
                </li>
                <li class="w-full">
                    <form action="{{ route('actions.close.index') }}" method="POST">
                        @csrf
                        <button type="submit" aria-label="logout_trigger"
                            class="w-full flex flex-wrap gap-2 px-4 py-2 text-start items-center outline-none hover:text-x-white hover:bg-x-acent focus:text-x-white focus:bg-x-acent focus-within:text-x-white focus-within:bg-x-acent">
                            <svg class="block w-6 h-6 pointer-events-none" fill="currentcolor" viewBox="0 -960 960 960">
                                <path
                                    d="M635-306q-13-15-13.5-33.125T635-371l64-63H409q-19.775 0-32.388-13.36Q364-460.719 364-479.86q0-20.14 12.612-32.64Q389.225-525 409-525h288l-66-67q-13-12.267-12.5-30.081t14.714-31.866Q644.661-666 664.705-665.5 684.75-665 699-653l141 142q4.909 6.327 8.955 15.008Q853-487.311 853-478.676q0 8.636-4.045 17.106Q844.909-453.1 840-448L699.006-305.089Q686-292 668-293t-33-13ZM181-97q-38.1 0-65.05-26.975Q89-150.95 89-188v-584q0-37.463 26.95-64.731Q142.9-864 181-864h251q20.2 0 33.1 13.763 12.9 13.763 12.9 32.816 0 20.053-12.9 32.737Q452.2-772 432-772H181v584h251q20.2 0 33.1 12.675 12.9 12.676 12.9 32.816 0 19.141-12.9 32.325Q452.2-97 432-97H181Z" />
                            </svg>
                            <span class="block flex-1 text-base text-start">{{ __('Logout') }}</span>
                        </button>
                    </form>
                </li>
            </ul>
        </neo-dropdown>
    </div>
</neo-topbar>
