<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(["resources/css/app.css",
    "resources/scss/style.scss",
    "resources/js/app.js"])
</head>
<body>
    <div class="login">
        <div class="imagehold">
            <img src="{{ URL('images/herofxregister.png')}}" alt="Hero fx">
        </div>
        <section class="main">
            <div class="text">
                <p>Not registered yet? <br> Sign up and enjoy
                    raw spreads or no commission trading</p>
                <div class="registration">
                    <a href="/register">register now</a>
                </div>
            </div>
            <div class="box"> 
                <div class="Lhodl">
                    <p>login</p>
                    <form method="POST" action="">
                        <input placeholder="email" type="email
                        ">
                        <input placeholder="password" type="pass
                        ">
                        <div class="assistance">
                            <div class="assitance features">
                                <input type="checkbox" name="rememberme" id="rememberme">
                                <label for="rememberme">remember me</label>
                            </div>
                            <a href="#">forgot password</a>
                        </div>
                        <div class="loginbtnhodl">
                            <a href="" class="loginbtn">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <div class="risk">
            <br>
            <p>For login or registration issues, please email us at support@herofx.co<br>
            Disclaimer: This website is not directed at any jurisdication and is not intended for any use that would be contrar to local or regulation.<br>
            Risk Warning: Trading leveraged products such as Forex may not be suitable for all investors as they carray a degree of risk to your capital, Please ensure that you fully<br>
            understand the risks involved, taking into account your invesments objectives and level of experience, before trading, and if necessary seek independent advice</p> 
        </div>
    </div>
</body>
</html>