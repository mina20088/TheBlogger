
<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
    <meta charset="utf-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no, url=no">
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings xmlns:o="urn:schemas-microsoft-com:office:office">
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <style>
        td,th,div,p,a,h1,h2,h3,h4,h5,h6 {font-family: "Segoe UI", sans-serif; mso-line-height-rule: exactly;}
    </style>
    <![endif]-->

    <title>Welcome Email</title>
    <style>/* Tailwind CSS components */
        /**
         * @import here any custom CSS components - that is, CSS that
         * you'd want loaded before the Tailwind utilities, so the
         * utilities can still override them.
        */
        /*
         * Here is where you can add your global markdown CSS styles.
         *
         * This is preferred over using the @tailwindcss/typography
         * plugin, because that plugin contains selectors
         * that are not supported in HTML emails.
        */
        h1{
            font-size: 30px;
            line-height: 36px;
            color: #0f172a;
        }
        @media (max-width: 600px){
            h1{
                font-size: 24px !important;
                line-height: 32px !important;
            }
        }
        h2{
            font-size: 24px;
            line-height: 32px;
            color: #0f172a;
        }
        @media (max-width: 600px){
            h2{
                font-size: 20px !important;
                line-height: 28px !important;
            }
        }
        h3{
            font-size: 20px;
            line-height: 28px;
            color: #0f172a;
            margin: 0;
            margin-bottom: 16px;
        }
        @media (max-width: 600px){
            h3{
                font-size: 18px !important;
                line-height: 24px !important;
            }
        }
        h4{
            font-size: 18px;
            line-height: 24px;
            color: #0f172a;
        }
        @media (max-width: 600px){
            h4{
                font-size: 16px !important;
                line-height: 20px !important;
            }
        }
        h5{
            font-size: 16px;
            line-height: 20px;
            color: #0f172a;
        }
        @media (max-width: 600px){
            h5{
                font-size: 14px !important;
            }
        }
        h6{
            font-size: 16px;
            text-transform: uppercase;
            line-height: 20px;
            color: #0f172a;
        }
        @media (max-width: 600px){
            h6{
                font-size: 14px !important;
            }
        }
        p{
            font-size: 16px;
            line-height: 24px;
            color: #475569;
            margin: 0;
            margin-bottom: 32px;
        }
        ul, ol{
            line-height: 24px;
            color: #475569;
        }
        blockquote p{
            margin: 0;
            font-size: 18px;
            line-height: 28px;
        }
        blockquote{
            border-left: 4px solid #6366f1;
            margin: 0;
            margin-bottom: 32px;
            padding-left: 16px;
        }
        hr{
            height: 1px;
            border-width: 0px;
            background-color: #cbd5e1;
            color: #cbd5e1;
            margin-top: 32px;
            margin-bottom: 32px;
        }
        img{
            max-width: 100%;
            vertical-align: middle;
            line-height: 100%;
            border: 0;
        }
        a{
            color: #2563eb;
            text-decoration: underline;
        }
        pre{
            margin-bottom: 24px;
            overflow: auto;
            white-space: pre;
            border-radius: 8px;
            padding: 24px;
            text-align: left;
            font-family: ui-monospace, Menlo, Consolas, monospace;
            font-size: 16px;
            color: #cbd5e1;
            hyphens: none;
            tab-size: 2;
            word-break: normal;
            word-spacing: normal;
            word-wrap: normal;
        }
        /* Inline code */
        :not(pre) > code{
            border-radius: 4px;
            padding-left: 6px;
            padding-right: 6px;
            padding-top: 2px;
            padding-bottom: 2px;
            white-space: normal;
            font-size: 14px;
            border-width: 1px;
            border-style: solid;
            border-color: #e2e8f0;
            background-color: #f8fafc;
            color: #ec4899;
        }
        /* Tailwind CSS utility classes */
        .absolute{
            position: absolute;
        }
        .m-0{
            margin: 0;
        }
        .mb-10{
            margin-bottom: 40px;
        }
        .mb-2{
            margin-bottom: 8px;
        }
        .mb-8{
            margin-bottom: 32px;
        }
        .mt-2{
            margin-top: 8px;
        }
        .mt-5{
            margin-top: 20px;
        }
        .inline-block{
            display: inline-block;
        }
        .inline{
            display: inline;
        }
        .table{
            display: table;
        }
        .grid{
            display: grid;
        }
        .hidden{
            display: none;
        }
        .w-150{
            width: 600px;
        }
        .w-full{
            width: 100%;
        }
        .w-screen{
            width: 100vw;
        }
        .w-fit{
            width: fit-content;
        }
        .w-120{
            width: 480px;
        }
        .w-px{
            width: 1px;
        }
        .w-1{
            width: 4px;
        }
        .w-175{
            width: 700px;
        }
        .w-\[\]{
            width: ;
        }
        .w-\[900\]{
            width: 900;
        }
        .w-\[900px\]{
            width: 900px;
        }
        .max-w-0{
            max-width: 0;
        }
        .max-w-full{
            max-width: 100%;
        }
        .max-w-2xl{
            max-width: 336px;
        }
        .max-w-3xl{
            max-width: 384px;
        }
        .list-decimal{
            list-style-type: decimal;
        }
        .place-content-center{
            place-content: center;
        }
        .rounded{
            border-radius: 4px;
        }
        .rounded-lg{
            border-radius: 8px;
        }
        .rounded-xl{
            border-radius: 12px;
        }
        .bg-\[\#0F172A\]{
            background-color: #0F172A;
        }
        .bg-amber-100{
            background-color: #fef3c7;
        }
        .bg-blue-100{
            background-color: #dbeafe;
        }
        .bg-indigo-600{
            background-color: #4f46e5;
        }
        .bg-rose-100{
            background-color: #ffe4e6;
        }
        .bg-slate-200{
            background-color: #e2e8f0;
        }
        .bg-slate-300{
            background-color: #cbd5e1;
        }
        .bg-white{
            background-color: #fff;
        }
        .bg-cover{
            background-size: cover;
        }
        .bg-top{
            background-position: top;
        }
        .bg-no-repeat{
            background-repeat: no-repeat;
        }
        .p-0{
            padding: 0;
        }
        .px-4{
            padding-left: 16px;
            padding-right: 16px;
        }
        .px-8{
            padding-left: 32px;
            padding-right: 32px;
        }
        .py-3{
            padding-top: 12px;
            padding-bottom: 12px;
        }
        .py-4{
            padding-top: 16px;
            padding-bottom: 16px;
        }
        .py-8{
            padding-top: 32px;
            padding-bottom: 32px;
        }
        .text-left{
            text-align: left;
        }
        .text-center{
            text-align: center;
        }
        .text-right{
            text-align: right;
        }
        .align-top{
            vertical-align: top;
        }
        .font-sans{
            font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif;
        }
        .text-base{
            font-size: 16px;
        }
        .text-lg{
            font-size: 18px;
        }
        .text-sm{
            font-size: 14px;
        }
        .font-bold{
            font-weight: 700;
        }
        .font-semibold{
            font-weight: 600;
        }
        .leading-10{
            line-height: 40px;
        }
        .leading-6{
            line-height: 24px;
        }
        .leading-none{
            line-height: 1;
        }
        .text-amber-600{
            color: #d97706;
        }
        .text-blue-600{
            color: #2563eb;
        }
        .text-gray-600{
            color: #4b5563;
        }
        .text-gray-700{
            color: #374151;
        }
        .text-rose-600{
            color: #e11d48;
        }
        .text-slate-400{
            color: #94a3b8;
        }
        .text-slate-50{
            color: #f8fafc;
        }
        .text-slate-500{
            color: #64748b;
        }
        .text-slate-600{
            color: #475569;
        }
        .mso-font-width-\[-100\%\]{
            mso-font-width: -100%;
        }
        .\[-webkit-font-smoothing\:antialiased\]{
            -webkit-font-smoothing: antialiased;
        }
        .\[text-decoration\:none\]{
            text-decoration: none;
        }
        .\[word-break\:break-word\]{
            word-break: break-word;
        }
        /* Your custom utility classes */
        /*
         * Here is where you can define your custom utility classes.
         *
         * We wrap them in the `utilities` @layer directive, so
         * that Tailwind moves them to the correct location.
         *
         * More info:
         * https://tailwindcss.com/docs/functions-and-directives#layer
        */
        .hover\:bg-indigo-700:hover{
            background-color: #4338ca !important;
        }
        .hover\:text-slate-300:hover{
            color: #cbd5e1 !important;
        }
        @media (max-width: 600px){
            .sm\:block{
                display: block !important;
            }
            .sm\:w-12{
                width: 48px !important;
            }
            .sm\:w-full{
                width: 100% !important;
            }
            .sm\:px-0{
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
            .sm\:px-4{
                padding-left: 16px !important;
                padding-right: 16px !important;
            }
            .sm\:pb-8{
                padding-bottom: 32px !important;
            }
        }</style>

</head>
<body class="m-0 p-0 w-full [word-break:break-word] [-webkit-font-smoothing:antialiased] bg-white ">
<div align="center" role="article" aria-roledescription="email" lang="en" class="sm:px-4 bg-white" aria-label="Welcome Email">



    <div role="separator" style="line-height: 40px">&zwj;</div>


    <!-- <div class="text-center">
      <img src="logo.png" width="500" alt="Maizzle">
    </div> -->




    <div role="separator" style="line-height: 40px">&zwj;</div>


    <table class="font-sans" cellpadding="0" cellspacing="0" role="none">
        <tr>
            <td class="w-[900px] max-w-full py-8 bg-slate-200 rounded-xl">
                <table class="w-full" cellpadding="0" cellspacing="0" role="none">
                    <tr>
                        <td class="text-center">
                            <img src="{{$message->embed(resource_path('images/logo.png'))}}" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td class="px-8 sm:px-4 max-w-0">

                            <h2 class="text-gray-700">Hi <span class="text-blue-600">{{ $username }}</span>,</h2>
                            <p class="text-gray-600">
                            </p><p>We are thrilled to welcome you to <span class="text-blue-600">TheBlogger</span>, where your journey as a blogger begins. Whether you're
                                an experienced writer or just starting out, we're excited to have you join our vibrant community of bloggers.</p>
                            <p class="text-gray-600">
                            </p><p>Here at <span style="color: #1C64F2;">TheBlogger</span>, we believe in the power of words and the unique stories each of us has to share.
                                We've created a space for you to express yourself, connect with like-minded individuals, and reach a wider
                                audience through your wr</p>
                            <p></p>
                            <p class="text-gray-600">
                            </p><p>Here are a few things you can look forward to on our platform:</p>
                            <p></p>
                            <ul class="list-decimal">
                                <li class="mt-5 text-slate-500">
                                    <p><span class="font-bold">User-Friendly Interface:</span> We've designed our platform to be intuitive and easy to navigate, so you can focus on what you do best – writing and sharing your content.</p>
                                </li>
                                <li class="mt-5 text-slate-500">
                                    <p><span style="font-weight: 700;">Diverse Content:</span> You'll find a wide range of topics and niches, so whether you're passionate about travel, food, technology, or anything in between, there's a place for you here.</p>
                                </li>
                                <li class="mt-5 text-slate-500">
                                    <p><span style="font-weight: 700;">Engaged Community:</span> Connect with other bloggers, readers, and enthusiasts. Share your thoughts, provide feedback, and make new friends who share your interests.</p>
                                </li>
                                <li class="mt-5 text-slate-500">
                                    <p><span style="font-weight: 700;">Promote Your Work:</span> Use our platform to showcase your talent. Your articles will reach an audience eager to explore fresh perspectives and ideas.</p>
                                </li>
                                <li class="mt-5 text-slate-500">
                                    <p><span style="font-weight: 700;">Learning Opportunities:</span> We offer resources, tips, and guides to help you enhance your blogging skills and make the most of your blogging journey.</p>
                                </li>
                            </ul>
                            <p class="text-gray-600">
                            </p><p>Thank you for choosing <span style="color: #1C64F2;">TheBlogger </span>  as your platform for sharing your thoughts and creativity. We look forward to seeing your blog posts, learning from your experiences, and connecting with you in this exciting journey of blogging.</p>
                            <p></p>
                            <div>
                                <p class="mt-2 text-gray-600">
                                    Thanks, <br>
                                    TheBlogger Team
                                </p>
                            </div>
                            <p></p>


                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr role="separator">
            <td class="leading-10">&zwj;</td>
        </tr>
        <tr>
            <td class="px-8 sm:px-4">
                <table class="w-full" cellpadding="0" cellspacing="0" role="none">
                    <tr>
                        <td class="sm:block sm:w-full px-8 sm:px-0">
                            <p class="m-0 mb-2 text-sm text-slate-400">

                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>




    <div role="separator" style="line-height: 40px">&zwj;</div>

</div>
</body>
</html>
