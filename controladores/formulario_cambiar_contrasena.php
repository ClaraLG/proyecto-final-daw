<!DOCTYPE html>

<html lang="es">

    <head>
        <title>Cambiar contraseña</title>       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Cambia la contraseña de tu cuenta.">
        <meta name="title" content="Cambiar contraseña">
        <meta name="keywords" content="cambio contraseña, contraseña cuenta, formulario">
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
            <h1 class="tituloForm">Cambiar mi contraseña</h1>
            <form role="form" method="post" class="col-sm-5" name="formulario">

                <div class="col-12 form-floating mb-3">
                    <input type="text" id="usuario" class="form-control" name="usuario" placeholder="Email">
                    <label for="usuario">Email:</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <input type="password" id="contrasena" class="form-control" name="contrasena" placeholder="Contraseña actual">
                    <label for="contrasena">Contraseña actual:</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <input type="password" id="nuevaContrasena" class="form-control" name="nuevaContrasena" placeholder="Nueva contraseña">
                    <label for="nuevaContrasena">Nueva contraseña:</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <input type="password" id="repiteContrasena" class="form-control" name="repiteContrasena" placeholder="Confirma la nueva contraseña">
                    <label for="repiteContrasena">Confirma la nueva contraseña:</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <a href="#">¿Has olvidado la contraseña?</a>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" id="cambiarContrasena" class="btn btn-secondary" 
                    name="cambiarContrasena" value="cambiar contrasena">Cambiar contraseña</button>
                </div>
    
            </form>
        </div>

    </body>

</html>