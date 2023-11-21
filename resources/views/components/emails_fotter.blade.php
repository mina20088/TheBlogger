@props([
    'message'
])
<tr>
    <td class="sm-px-4" style="padding-left: 32px; padding-right: 32px">
        <table style="width: 100%;" cellpadding="0" cellspacing="0" role="none">
            <tr>
                <td class="sm-block sm-w-full sm-px-0">
                    <p style="line-height: 24px; margin: 0 0 8px; font-size: 14px; color: #94a3b8">
                    </p>
                    <footer style="position: relative">
                        <div style="position: absolute; right: 32px; width: 100%">
                            <img src="{{ $message->embed(resource_path('images/logo.png')) }}" width="100"
                                style="max-width: 100%; vertical-align: middle; line-height: 100%; border: 0;"
                                alt="">
                            <p
                                style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #6B7280;">
                                © 2023 TheBlogger. All Rights Reserved.</p>
                        </div>
                    </footer>
                    <p style="font-size: 16px; line-height: 24px; color: #475569; margin: 0 0 32px;"></p>
                </td>
            </tr>
        </table>
    </td>
</tr>