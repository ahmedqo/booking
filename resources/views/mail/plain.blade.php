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
                    @foreach ($data['content'] as $message)
                        <p style="display: block; font-size: 16px; font-weight: 600; color: #1d1d1d99;margin:0">
                            {{ ucfirst($message) }}
                        </p>
                    @endforeach
                </div>
            </div>
        </td>
    </tr>
</table>
