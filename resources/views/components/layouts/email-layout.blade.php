<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
    <meta charset="utf-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no, url=no">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
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
    <style>
        @media (max-width: 600px) {
            .sm-h-8 {
                height: 32px !important
            }
        }
    </style>
</head>
<body style="width: 100%; padding: 0; -webkit-font-smoothing: antialiased; word-break: break-word;">
<div role="article" aria-roledescription="email" aria-label lang="en">
    <section style="margin-left: auto; margin-right: auto; max-width: 640px; border-radius: 8px; background-color: #ffffff; padding: 32px 24px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1)">
        <header style="margin-bottom:20px; margin-top:20px;  ">
            <a style="display:grid; justify-content:center;" href="#">
                <img class="sm-h-8" src="{{ $message->embed(resource_path('images/logo.png')) }}" alt style="max-width: 100%; vertical-align: middle; line-height: 1; border: 0; height: auto; width: 256px">
            </a>
        </header>
        {{ $slot }}
    </section>
</div>
</body>
</html>
