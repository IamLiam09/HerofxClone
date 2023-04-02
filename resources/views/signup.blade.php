<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    @vite(["resources/css/app.css",
    "resources/scss/style.scss",
    "resources/js/app.js"])
</head>
<body>
    <div class="Rpage">
        <div class="imagehold">   
            <img src="{{ URL('images/herofxregister.png')}}" alt="registration">
        </div>
        <div class="Rhodl">
            <p>registration details</p>
            <form method="POST" action="">
                <input placeholder="first name" class="inputfield">
                <input placeholder="last name" class="inputfield">
                <input placeholder="country" class="inputfield">
                <input placeholder="mobile phone number for 2fa" class="inputfield">
                <input placeholder="email" class="inputfield">
                <input placeholder="password" class="inputfield">
                <input placeholder="repeat password" class="inputfield">
                <div class="registerbtnhodl">
                    <a href="" class="registerbtn">Continue</a>
                </div>
            </form>
        </div>
        <div class="risk">
            <p>For login or registration issue, please email us at support@herofx.co<br>
            Disclaimer: This website is not directed at any jusridiction and is not intended for any use that would be contrary to local law or regulation<br>
            Risk Warning: Trading leveraged products such as Forex may not be sutiable for investors as they carry a degree of risk to your capital. Please ensure that you fully<br>
            understand the risks involved. taking into accoutn your investments objectives and levl of experience, before trading, and if necessary seek independent advice</p>
        </div>
    </div>
</body>
</html>