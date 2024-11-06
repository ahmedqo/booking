<table style="width: 100%;background: #dfa872">
    <tr>
        <td style="padding: 64px 16px;">
            <div style="width: 100%; max-width: 500px; margin: auto;">
                <a href="{{ route('views.guest.index') }}" aria-label="home_page_link"
                    style="width: 160px; max-width: 100%; display: block; text-decoration: unset; margin: auto; margin-bottom: 16px">
                    <img src="{{ asset('img/logo.png') }}?v={{ env('APP_VERSION') }}"
                        style="width: 100%; display: block;" />
                </a>
                <div style="background:#fcfcfc; padding: 44px 20px; border-radius: 10px;">
                    @php
                        $type = $data['content']->excursion != 'contact';
                    @endphp
                    <div style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px; margin-bottom: 24px">
                        <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                            Type
                        </span>
                        <span
                            style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 3px">
                            {{ ucwords($data['content']->excursion) }}
                        </span>
                    </div>
                    <div style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px; margin-bottom: 24px">
                        <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                            Name
                        </span>
                        <span
                            style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 3px">
                            @if ($type)
                                {{ strtoupper($data['content']->last_name) }}
                                {{ ucwords($data['content']->first_name) }}
                            @else
                                {{ ucwords($data['content']->name) }}
                            @endif
                        </span>
                    </div>
                    <div style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px; margin-bottom: 24px">
                        <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                            Email
                        </span>
                        <span
                            style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 3px">
                            {{ strtolower($data['content']->email) }}
                        </span>
                    </div>
                    <div style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px; margin-bottom: 24px">
                        <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                            Phone
                        </span>
                        <span
                            style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 3px">
                            {{ strtolower($data['content']->phone) }}
                        </span>
                    </div>
                    @if ($type)
                        <div
                            style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px; margin-bottom: 24px">
                            <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                                Date
                            </span>
                            <span
                                style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 3px">
                                {{ strtolower($data['content']->date) }}
                            </span>
                        </div>
                        <div
                            style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px; margin-bottom: 24px">
                            <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                                Number of people
                            </span>
                            <span
                                style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 3px">
                                {{ strtolower($data['content']->number_of_people) }}
                            </span>
                        </div>
                        <div
                            style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px; margin-bottom: 24px">
                            <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                                Pick-up location
                            </span>
                            <span
                                style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 3px">
                                {{ strtolower($data['content']->pick_up_location) }}
                            </span>
                        </div>
                    @endif
                    <div style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px; margin-bottom: 24px">
                        <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                            Country
                        </span>
                        <span
                            style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 3px">
                            {{ ucfirst($data['content']->country) }}
                        </span>
                    </div>
                    <div style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px;">
                        <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                            Message
                        </span>
                        <span
                            style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 3px">
                            {{ ucfirst($data['content']->message) }}
                        </span>
                    </div>
                </div>
            </div>
        </td>
    </tr>
</table>
