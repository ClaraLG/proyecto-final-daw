<!DOCTYPE html>

<html lang="es">

    <head>
        <title>Registrarse</title>       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Regístrate con tus datos para crear una cuenta.">
        <meta name="title" content="Registrarse">
        <meta name="keywords" content="registro, formulario">
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
            <h1 class="tituloForm">Crear una cuenta</h1>
            <form role="form" method="post" class="col-sm-5" name="formulario">

                <div class="col-12 form-floating mb-3">
                    <input type="text" id="usuario" class="form-control" name="usuario" placeholder="Email">
                    <label for="usuario">Email:</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <input type="password" id="contrasena" class="form-control" name="contrasena" placeholder="Contraseña">
                    <label for="contrasena">Contraseña:</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <input type="password" id="repiteContrasena" class="form-control" name="repiteContrasena" placeholder="Confirma la contraseña">
                    <label for="repiteContrasena">Confirma la contraseña:</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre">
                    <label for="nombre">Nombre:</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <input type="text" id="apellidos" class="form-control" name="apellidos" placeholder="Apellidos">
                    <label for="apellidos">Apellidos:</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <a href="#">¿Ya tienes una cuenta? Inicia sesión</a>
                </div>
                <div class="col-12 mb-3">
                    <input type="checkbox" id="condiciones" class="form-check-input" 
                    name="condiciones" value="condiciones">
                    <label for="condiciones">
                        He leído y acepto los <a href="#">Términos y condiciones</a>.
                    </label>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" id="registrarse" class="btn btn-secondary" 
                    name="registrarse" value="registrarse">Registrarme</button>
                </div>
    
            </form>
        </div>

    </body>

</html>