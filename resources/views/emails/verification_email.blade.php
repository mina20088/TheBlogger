<x-layouts.email-layout :$message>
    <h2 style="font-size: 24px; line-height: 32px; color: #374151">Hi <span style="color: #2563eb">{{ $username }}</span>,</h2>
    <p style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #374151">
      Thank you for signing up for our service. To complete your registration, please verify your email address by clicking the link below:
    </p>
    <div style="margin-bottom: 40px; margin-top: 40px; text-align: center">
      <a href={{ $url }} style="text-decoration: underline; align-items: center; border-radius: 8px; background-color: #1d4ed8; padding: 24px; text-align: center; font-weight: 700; color: #fff; text-decoration-line: none">
        verify
      </a>
    </div>
    <p style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #374151;">
      This link will expire in 48 hours. If you did not sign up for our service, please disregard this email.Verifying your email address allows you to access all features of your account, ensures we can communicate with you effectively, and provides an extra layer of security.
    </p>
    <p style="font-size: 16px; line-height: 24px; color: #475569; margin: 0 0 32px;">Please let us know if you have any questions!</p>
    <p style="font-size: 16px; line-height: 24px; color: #475569; margin: 0 0 32px;"></p>
    <div>
      <p style="font-size: 16px; line-height: 24px; margin: 8px 0 32px; color: #4b5563">
        Thanks, <br>
        TheBlogger Team
      </p>
    </div>
    <p style="font-size: 16px; line-height: 24px; color: #475569; margin: 0 0 32px;"></p>
    <p style="font-size: 16px; line-height: 24px; color: #475569; margin: 0 0 32px;"></p>
</x-layouts.email-layout>