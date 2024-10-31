<section id="reservation" class="container mx-auto p-4 mt-6 mb-14">
    <h2 class="font-x-thin text-3xl text-x-black mb-6">
        {{ ucwords(__('take your place')) }}
    </h2>
    <form validate action="{{ route('actions.mail.reserve') }}" method="post"
        class="grid grid-cols-1 grid-rows-1 lg:grid-cols-2 gap-6">
        @csrf
        <input type="hidden" name="type" value="{{ $type }}" />
        <div class="flex flex-col gap-px">
            <neo-textbox rules="required" name="last_name" label="{{ __('Last name') }}"
                class="py-3 px-4 bg-transparent border border-x-shade"></neo-textbox>
            <span class="hidden text-red-500 text-sm font-x-thin">
                {{ __('The last name field is required') }}
            </span>
        </div>
        <div class="flex flex-col gap-px">
            <neo-textbox rules="required" name="first_name" label="{{ __('First name') }}"
                class="py-3 px-4 bg-transparent border border-x-shade"></neo-textbox>
            <span class="hidden text-red-500 text-sm font-x-thin">
                {{ __('The first name field is required') }}
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
        <div class="flex flex-col gap-px">
            <neo-datepicker rules="required|date_after:today" type="number" name="date" label="{{ __('Date') }}"
                class="py-3 px-4 bg-transparent border border-x-shade"></neo-datepicker>
            <span class="hidden text-red-500 text-sm font-x-thin">
                {{ __('The date field is required') }}
            </span>
        </div>
        <div class="flex flex-col gap-px">
            <neo-textbox rules="required" type="number" name="number_of_people" label="{{ __('Number of people') }}"
                class="py-3 px-4 bg-transparent border border-x-shade"></neo-textbox>
            <span class="hidden text-red-500 text-sm font-x-thin">
                {{ __('The number of people field is required') }}
            </span>
        </div>
        <div class="flex flex-col gap-px">
            <neo-select rules="required" name="pick_up_location" label="{{ __('Pick-up location') }}"
                class="py-3 px-4 bg-transparent border border-x-shade">
                @foreach (Core::pickupList() as $pickup)
                    <neo-select-item value="{{ $pickup }}">{{ ucfirst(__($pickup)) }}</neo-select-item>
                @endforeach
            </neo-select>
            <span class="hidden text-red-500 text-sm font-x-thin">
                {{ __('The pick-up location field is required') }}
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
        <div class="lg:col-span-2 flex flex-col gap-px">
            <neo-textarea rules="required" name="message" label="{{ __('Message') }}"
                class="py-3 px-4 bg-transparent border border-x-shade" rows="4"></neo-textarea>
            <span class="hidden text-red-500 text-sm font-x-thin">
                {{ __('The message field is required') }}
            </span>
        </div>
        <neo-button class="rounded-none px-10 py-3">
            {{ strtoupper(__('book now')) }}
        </neo-button>
    </form>
</section>

@section('scripts')
    <script src="{{ asset('js/validate.min.js') }}?v={{ env('APP_VERSION') }}"></script>
    @parent
@endsection
