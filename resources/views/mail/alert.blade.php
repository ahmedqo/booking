<table style="width: 100%;background: #dfa872">
    <tr>
        <td style="padding: 64px 16px;">
            <div style="width: 100%; max-width: 500px; margin: auto;">
                <a href="{{ route('views.guest.index') }}" aria-label="home_page_link"
                    style="width: 160px; max-width: 100%; display: block; text-decoration: unset; margin: auto;">
                    <img src="{{ asset('img/logo.png') }}?v={{ env('APP_VERSION') }}"
                        style="width: 100%; display: block;" />
                </a>
                <div style="background:#fcfcfc; padding: 44px 20px; border-radius: 10px;">
                    <div style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px; margin-bottom: 24px">
                        <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                            Type
                        </span>
                        <span
                            style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 5px">
                            {{ ucwords($data['content']->type) }}
                        </span>
                    </div>
                    <div style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px; margin-bottom: 24px">
                        <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                            Name
                        </span>
                        <span
                            style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 5px">
                            {{ ucwords($data['content']->name) }}
                        </span>
                    </div>
                    <div style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px; margin-bottom: 24px">
                        <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                            Email
                        </span>
                        <span
                            style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 5px">
                            {{ strtolower($data['content']->email) }}
                        </span>
                    </div>
                    <div style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px; margin-bottom: 24px">
                        <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                            Phone
                        </span>
                        <span
                            style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 5px">
                            {{ strtolower($data['content']->phone) }}
                        </span>
                    </div>
                    <div style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px; margin-bottom: 24px">
                        <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                            Country
                        </span>
                        <span
                            style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 5px">
                            {{ ucfirst($data['content']->country) }}
                        </span>
                    </div>
                    <div style="border: 1px solid #343434; border-radius: 4px; padding: 8px 16px;">
                        <span style="display: block; font-size: 14px; font-weight: 800; color: #1d1d1d;">
                            Message
                        </span>
                        <span
                            style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99; margin-top: 5px">
                            {{ ucfirst($data['content']->message) }}
                        </span>
                    </div>
                </div>
            </div>
        </td>
    </tr>
</table>
