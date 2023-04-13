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
            <div>
                <ul>
                    <li>
                        <a href="#">EN</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="google_element_element"></div> 
        <section class="main">
            <div class="text">
                <p>Se tarda menos de un <br> minuto </p>
                <div class="registration">
                    <a href="/register">reg</a>
                </div>
            </div>
            <div class="box"> 
                <div class="Lhodl">
                    <p>Ingresar
                    </p>
                    <form method="POST" action="">
                        <input placeholder="correo" type="email" class="inputfield">
                        <input placeholder="contrase" type="password" class="inputfield">
                        <div class="assistance">
                            <div class="assitance features">
                                <input type="checkbox" name="rememberme" id="rememberme">
                                <label for="rememberme">Acu</label>
                            </div>
                            <a href="#">contrase</a>
                        </div>
                        <div class="loginbtnhodl">
                            <a href="" class="loginbtn">ingresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <div class="risk">
            <br>
            <p>
                Para problemas de inicio de sesi
                </p> 
        </div>
    </div>
</body>
</html>