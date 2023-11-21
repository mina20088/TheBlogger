@props([
    'message'
])

<tr>
    <td
        style="width: 900px; max-width: 100%; border-radius: 12px; background-color: #e2e8f0; padding-top: 32px; padding-bottom: 32px">
        <table style="width: 100%;" cellpadding="0" cellspacing="0" role="none">
            <tr>
                <td style="text-align: center">
                    <img src="{{ $message->embed(resource_path('images/logo.png')) }}" alt="logo"
                        style="max-width: 100%; vertical-align: middle; line-height: 100%; border: 0">
                </td>
            </tr>

            {{ $slot }}

        </table>
    </td>
</tr>