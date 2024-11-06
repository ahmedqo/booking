<neo-sidebar id="sidebar">
    <neo-topbar transparent class="lg:h-[5.5rem]">
        <img src="{{ asset('img/logo.png') }}?v={{ env('APP_VERSION') }}" alt="{{ env('APP_NAME') }} logo image"
            class="block max-w-full max-h-full w-max m-auto pointer-events-auto" width="916" height="516"
            loading="lazy" />
    </neo-topbar>
    <ul class="nav-colors w-full flex flex-col flex-1 mt-6 lg:mt-0">
        <li class="w-full mib-w-[240px] overflow-hidden">
            <a href="{{ route('views.core.index') }}" aria-label="dashboard_page_link"
                class="w-full flex flex-wrap gap-2 px-3 py-2 text-start items-center outline-none lg:rounded-e-full hover:text-x-white hover:bg-x-acent focus:text-x-white focus:bg-x-acent focus-within:text-x-white focus-within:bg-x-acent {{ Core::matchRoute('dashboard') ? 'bg-x-prime text-x-white' : 'text-x-black' }}">
                <svg class="block w-6 h-6 pointer-events-none" fill="currentcolor" viewBox="0 -960 960 960">
                    <path
                        d="M99-425v-356q0-32.025 24.194-56.512Q147.387-862 179-862h277v437H99Zm405-437h277q32.025 0 56.512 24.488Q862-813.025 862-781v197H504v-278Zm0 763v-436h358v356q0 31.613-24.488 55.806Q813.025-99 781-99H504ZM99-376h357v277H179q-31.613 0-55.806-24.194Q99-147.387 99-179v-197Z" />
                </svg>
                <span class="block flex-1 text-base">{{ __('Dashboard') }}</span>
            </a>
        </li>
        <li class="w-full mib-w-[240px] overflow-hidden">
            <a href="{{ route('views.reservations.index') }}"
                class="w-full flex flex-wrap gap-2 px-3 py-2 text-start items-center outline-none lg:rounded-e-full hover:text-x-white hover:bg-x-acent focus:text-x-white focus:bg-x-acent focus-within:text-x-white focus-within:bg-x-acent {{ Core::matchRoute('reservations') ? 'bg-x-prime text-x-white' : 'text-x-black' }}">
                <svg class="block w-6 h-6 pointer-events-none" fill="currentcolor" viewBox="0 -960 960 960">
                    <path
                        d="M482.77-98Q434-135 378-160q-56-25-117.59-25Q221-185 184-174t-71 29q-37 19-71.5-1T7-206v-480q0-26.06 11-48.33Q29-756.61 52-769q47.63-22 99.32-32.5Q203-812 257.24-812q60.26 0 116.51 15Q430-782 480-748.53V-229q51-31 106-50t114-19q36 0 71 7t69 20v-524q17.52 6 34.52 13 17 7 35.48 13 23 10.39 33 33.67 10 23.27 10 49.33v496q0 35-34.5 49.5T847-145q-34-18-71-29t-76.41-11q-60.59 0-114.82 25-54.23 25-102 62ZM560-332v-417l200-208v437L560-332Z" />
                </svg>
                <span class="block flex-1 text-base">{{ __('Reservations') }}</span>
            </a>
        </li>
        <li class="w-full mib-w-[240px] overflow-hidden">
            <a href="{{ route('views.users.index') }}"
                class="w-full flex flex-wrap gap-2 px-3 py-2 text-start items-center outline-none lg:rounded-e-full hover:text-x-white hover:bg-x-acent focus:text-x-white focus:bg-x-acent focus-within:text-x-white focus-within:bg-x-acent {{ Core::matchRoute('users') ? 'bg-x-prime text-x-white' : 'text-x-black' }}">
                <svg class="block w-6 h-6 pointer-events-none" fill="currentcolor" viewBox="0 -960 960 960">
                    <path
                        d="M68-130q-20.1 0-33.05-12.45Q22-154.9 22-174.708V-246q0-42.011 21.188-75.36 21.187-33.348 59.856-50.662Q178-404 238.469-419 298.938-434 363-434q66.062 0 126.031 15Q549-404 624-372q38.812 16.018 60.406 49.452Q706-289.113 706-246v71.708Q706-155 693.275-142.5T660-130H68Zm679 0q11-5 20.5-17.5T777-177v-67q0-65-32.5-108T659-432q60 10 113 24.5t88.88 31.939q34.958 18.329 56.539 52.945Q939-288 939-241v66.787q0 19.505-13.225 31.859Q912.55-130 893-130H747ZM364-494q-71.55 0-115.275-43.725Q205-581.45 205-652.5q0-71.05 43.725-115.275Q292.45-812 363.5-812q70.05 0 115.275 44.113Q524-723.775 524-653q0 71.55-45.112 115.275Q433.775-494 364-494Zm386-159q0 70.55-44.602 114.775Q660.796-494 591.035-494 578-494 567.5-495.5T543-502q26-27.412 38.5-65.107 12.5-37.696 12.5-85.599 0-46.903-12.5-83.598Q569-773 543-804q10.75-3.75 23.5-5.875T591-812q69.775 0 114.387 44.613Q750-722.775 750-653Z" />
                </svg>
                <span class="block flex-1 text-base">{{ __('Users') }}</span>
            </a>
        </li>
    </ul>
</neo-sidebar>