<x-layouts.email-layout :$message :$user>
    <main>
        <div style="display: flex; justify-content: center;">
            <div style="max-width: 640px; border-radius: 8px; border-width: 1px; border-color: #E5E7EB; background-color: #ffffff; padding: 24px; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px -1px rgba(0, 0, 0, 0.1)">
                <h5 style="margin-bottom: 8px; font-size: 24px; font-weight: 700; letter-spacing: -0.025em; color: #111827">
                    Hello, {{ $user->username }}</h5>
                <p style="margin-bottom: 12px; font-weight: 400; color: #374151">
                    We have received a request to reset your password for your <span style="color: #1C64F2;">TheBlogger</span> . Your
                    account security is important to us, and we are here to assist you.
                </p>
                <p>
                    if you didn`t initiate this request, please ignore this email
                </p>
                <h4>To reset your password,Please click on the below button:</h4>
                <div style="display: grid; place-content: center">
                    <a href="{{ route('password.reset',['token' =>$token,'email'=> $user->email]) }}" class="hover-bg-blue-800 focus-ring-4 focus-outline-none focus-ring-blue-300" style="align-items: center; border-radius: 8px; background-color: #1A56DB; padding: 28px; text-align: center; font-weight: 700; color: #ffffff; text-decoration-line: none">
                        Reset Password
                    </a>
                </div>
                <p>
                    For security reasons, we recommend changing your password periodically and not sharing it with
                    anyone.
                </p>
                <p>Thank you for choosing <span style="color: #1C64F2;">TheBlogger</span>. We take your account security seriously and appreciate
                    your trust in our services.</p>

                <p style="margin-top: 8px; color: #4B5563;">
                    Thanks, <br>
                    TheBlogger Team
                </p>
            </div>
        </div>
    </main>
    <footer style="margin-top: 32px;">
        <p style="margin-top: 12px; color: #6B7280">© 2023 TheBlogger. All Rights
            Reserved.</p>
    </footer>
</x-layouts.email-layout>
