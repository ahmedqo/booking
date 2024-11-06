@extends('shared.core.base')
@section('title', __('View reserbation') . ' #' . $data->id)

@section('content')
    <div class="w-full grid grid-rows-1 grid-cols-1 lg:grid-cols-2 gap-6 p-6 bg-x-white rounded-x-thin shadow-x-core">
        <div class="flex flex-col gap-1">
            <label class="text-x-black font-x-thin text-base">
                {{ __('Last name') }}
            </label>
            <neo-textbox value="{{ $data->last_name }}" disable></neo-textbox>
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-x-black font-x-thin text-base">
                {{ __('First name') }}
            </label>
            <neo-textbox value="{{ $data->first_name }}" disable></neo-textbox>
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-x-black font-x-thin text-base">
                {{ __('Email') }}
            </label>
            <neo-textbox value="{{ $data->email }}" disable></neo-textbox>
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-x-black font-x-thin text-base">
                {{ __('Phone') }}
            </label>
            <neo-textbox value="{{ $data->phone }}" disable></neo-textbox>
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-x-black font-x-thin text-base">
                {{ __('Date') }}
            </label>
            <neo-textbox value="{{ $data->date }}" disable></neo-textbox>
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-x-black font-x-thin text-base">
                {{ __('Number of people') }}
            </label>
            <neo-textbox value="{{ $data->number_of_people }}" disable></neo-textbox>
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-x-black font-x-thin text-base">
                {{ __('Pick-up location') }}
            </label>
            <neo-textbox value="{{ $data->pick_up_location }}" disable></neo-textbox>
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-x-black font-x-thin text-base">
                {{ __('Country') }}
            </label>
            <neo-textbox value="{{ $data->country }}" disable></neo-textbox>
        </div>
        <div class="flex flex-col gap-1 lg:col-span-2">
            <label class="text-x-black font-x-thin text-base">
                {{ __('Message') }}
            </label>
            <neo-textarea value="{{ $data->message ?? 'N/A' }}" rows="4" disable></neo-textarea>
        </div>
    </div>
@endsection
