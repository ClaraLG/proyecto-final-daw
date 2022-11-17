<!DOCTYPE html>

<html lang="es">

    <head>
        <title>Iniciar sesión</title>       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Inicia sesión con tus datos y accede al contenido.">
        <meta name="title" content="Iniciar sesión">
        <meta name="keywords" content="iniciar sesión, formulario">
        <meta name="robots" content="noindex, nofollow">    
        <!--Bootstrap para el CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- Bootstrap Font Icon CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <!--Llamada al archivo de CSS-->
        <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
    </head>

    <body>

        <div id="formulario" class="row d-flex justify-content-center align-content-center">
            <h1 class="tituloForm">Iniciar sesión</h1>
            <form role="form" method="post" class="col-sm-5" name="formulario">

                <div class="col-12 form-floating mb-3">
                    <input type="text" id="usuario" class="form-control" name="usuario" placeholder="Email">
                    <label for="usuario">Email:</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <input type="password" id="contrasena" class="form-control" name="contrasena" placeholder="Contraseña">
                    <label for="contrasena">Contraseña:</label>
                </div>
                <div class="col-12 mb-3">
                    <a href="#">¿Has olvidado la contraseña?</a>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button id="registrarse" class="btn btn-light">Regístrate</button>
                    <button type="submit" id="iniciarSesion" class="btn btn-secondary" 
                    name="iniciarSesion" value="iniciar sesion">Iniciar sesión</button>
                </div>
    
            </form>
        </div>

    </body>

</html>