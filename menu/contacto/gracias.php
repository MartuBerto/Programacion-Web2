<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="gracias.css">
    <link rel="icon" href="../../images/favicon-32x32.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
   
        <?php include_once '../../componentes/navbar.php'; ?>
    
    <main>

    <?php if($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre = trim($_POST["nombre_usuario"]);
        $apellido = trim($_POST["apellido_usuario"]);

        $nombreerroneo= false;

        if(strlen($nombre) < 3){
            $nombreerroneo = true;
        }

        $apellidoerroneo = false;

        if(strlen($apellido) < 3){
            $apellidoerroneo = true;
        }

        $mail= trim($_POST["email"]);

        $emailerroneo = false;

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
























    } else {

    }





























        <section class="caja">
            <h1>¡INFORMACIÓN RECIBIDA!</h1>
            <p>¡Gracias por contactarnos! Hemos recibido tus datos correctamente. Nos comunicaremos contigo a la brevedad.</p>
            <p>Redirigete al Inicio desde el menú de navegación.</p>
            <div>
                <figure>
                    <img src="../../images/lista-de-verificacion.png" alt="Confirmación" class="imagen-confirmacion">
                </figure>
            </div>
        </section>
    </main>

    <footer>
        <?php include_once '../../componentes/footer.php'; ?>
    </footer>

</body>

</html>