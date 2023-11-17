<x-layouts.home-layout class="h-screen">
    @slot('title')
       {{ $title }}
    @endslot

    <div class="flex justify-center items-center h-screen">
        <div class='flex flex-row bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl'>
            <div class="flex flex-col p-4 justify-between leading-normal basis-full">
                <h5 class="mb-2 text-3xl font-bold tracking-tight text-blue-900 text-center">Email Verification Notice</h5>
                <h3 class="mb-3 font-semibold text-gray-700 text-2xl">Dear {{ Auth::user()->first_name }},</h3>
                <div class="space-y-8">
                    <p class="text-gray-500">
                        To access all features and fully utilize our website,
                        please take a moment to verify your email address.We sent a verification link to the email you signed up with.
                        Please click on the link in that email to verify your address.
                    </p>
                    <p class='text-gray-500'>
                        If you cannot locate the verification email,
                        please check your spam folder or click "Resend Verification Email" on the below botton.
                    </p>
                    <div class='flex justify-center' >
                        <a href="#" class="px-6 py-3.5 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm text-center me-2 mb-2">Re-send Verification Email</a>
                    </div>

                    <p class='text-gray-500'>
                        Thank you for taking this quick step to verify your email and improve your experience on our site!
                    </p>


                    <p class='text-gray-500'>
                        The Team at TheBlogger
                    </p>
                </div>

            </div>
        </div>
    </div>

</x-layouts.home-layout>