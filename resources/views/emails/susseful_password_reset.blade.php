<x-layouts.email-layout :$message>
    <h2 style="font-size: 24px; line-height: 32px; color: #374151">Hi <span style="color: #2563eb">{{ $username }}</span>,</h2>
    <p style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #374151">
      We are contacting you to let you know that your password for The Blogger has been changed successfully on {{ $created_at }}.
    </p>
    <p style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #374151;">
      Please remember to keep your password confidential and do not share it with anyone. If you feel your account has been compromised, notify us right away so we can take appropriate security measures.
    </p>
    <p style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #374151;">
      Thank you for using The Blgger! Please let us know if you have any other questions or concerns.
    </p>
    <div>
      <p style="font-size: 16px; line-height: 24px; margin: 8px 0 32px; color: #4b5563">
        Thanks, <br>
        TheBlogger Team
      </p>
    </div>
    <p style="font-size: 16px; line-height: 24px; color: #475569; margin: 0 0 32px;"></p>
    <p style="font-size: 16px; line-height: 24px; color: #475569; margin: 0 0 32px;"></p>
    <p style="font-size: 16px; line-height: 24px; color: #475569; margin: 0 0 32px;"></p>
</x-layouts.email-layout>