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
            <p>DETALLES DE REGISTRO</p>
            <form method="POST" action="">
                <input placeholder="Nombre" class="inputfield">
                <input placeholder="Apellido" class="inputfield">
                <input placeholder="Pais" class="inputfield">
                <input placeholder="N" class="inputfield">
                <input placeholder="correo" class="inputfield">
                <input placeholder="contrase" class="inputfield">
                <input placeholder="repite la contrase" class="inputfield">
                <div class="registerbtnhodl">
                    <a href="" class="registerbtn">Continuar</a>
                </div>
            </form>
        </div>
        <div class="risk">
            <p>Para problemas de inicio de sesi</p>
        </div>
    </div>
</body>
</html>