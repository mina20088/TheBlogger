<x-layouts.email-layout :$message>

    <h2 style="font-size: 24px; line-height: 32px; color: #374151">Hi <span style="color: #2563eb">{{ $user->username }}</span>,</h2>
    <p style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #374151">
      We have received a request to reset your password for your <span style="color: #1C64F2;">TheBlogger</span> . Your
      account security is important to us, and we are here to assist you.
    </p>
    <p style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #374151;"></p>
    <p style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #374151;">
      if you didn`t initiate this request, please ignore this email.
    </p>
    <p style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #374151;"></p>
    <h4 style="font-size: 18px; line-height: 24px; color: #0f172a">To reset your password,Please click on the below button:</h4>
    <div style="margin-bottom: 40px; margin-top: 40px; text-align: center">
      <a href="{{ route('password.reset',['email' =>$user->email,'token'=>$token]) }}" style="text-decoration: underline; align-items: center; border-radius: 8px; background-color: #1d4ed8; padding: 24px; text-align: center; font-weight: 700; color: #fff; text-decoration-line: none">
        Reset Password
      </a>
    </div>
    <p style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #374151;">
      For security reasons, we recommend changing your password periodically and not sharing it with
      anyone.
    </p>
    <p style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #374151;"></p>
    <p style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #374151;">
      Thank you for choosing <span style="color: #1C64F2;">TheBlogger</span>. We take your account security seriously and appreciate
      your trust in our services.
    </p>
    <p style="font-size: 16px; line-height: 24px; margin: 12px 0 32px; color: #374151;"></p>
    <div>
      <p style="font-size: 16px; line-height: 24px; margin: 8px 0 32px; color: #4b5563">
        Thanks, <br>
        TheBlogger Team
      </p>
    </div>
    <p style="font-size: 16px; line-height: 24px; color: #475569; margin: 0 0 32px;"></p>
    <p style="font-size: 16px; line-height: 24px; color: #475569; margin: 0 0 32px;"></p>
    <p style="font-size: 16px; line-height: 24px; color: #475569; margin: 0 0 32px;"></p>
    <p style="font-size: 16px; line-height: 24px; color: #475569; margin: 0 0 32px;"></p>

</x-layouts.email-layout>