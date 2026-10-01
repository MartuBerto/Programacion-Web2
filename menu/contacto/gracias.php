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

     <?php 
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
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

            $email= trim($_POST["email"]);

            $emailerroneo = false;

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailerroneo = true;
            }

            $mensaje=trim($_POST["mensaje"]);

            $mensajeerroneo = false;

            if(strlen($mensaje) > 150){
                $mensajeerroneo = true;
            }

            $mensaje = htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8");

            $cosasmal = [];

            if(empty($nombre) || $nombreerroneo == true){
                $cosasmal[]="El Nombre ingresado tiene menos de tres caracteres o no fue llenado el campo.";
            }
            
            if(empty($apellido) || $apellidoerroneo == true){
                $cosasmal[]="El Apellido ingresado tiene menos de tres caracteres o no fue llenado el campo.";
            }

            if(empty($email) || $emailerroneo == true){
                $cosasmal[]="El Email no es válido o no fue llenado el campo.";
            }

            if(empty($mensaje) || $mensajeerroneo == true){
                $cosasmal[]="El Mensaje no fue llenado o contiene más de 150 caracteres.";
            }

            if(empty($_POST["motivo_contacto"])){
                $cosasmal[]= "No se ha seleccionado un motivo de contacto.";
            }

            if(!empty($cosasmal)){
                echo"<h1> ¡UPS! Han habido problemas.</h1>";
                echo "<article class='caja-texto' id='caja-gracias'>";
                echo "<p> Se han encontrado errores o campos sin rellenar en el formulario: </p>";
                echo "<ul>";
                foreach($cosasmal as $error){
                    echo "<li>" . $error . "</li>";
                }
                echo "</ul>";
                echo "<p> Para volver a la sección de Contacto y rellenar el formulario correctamente siga el siguiente enlace: <a href='/Programacion-Web2/menu/contacto/contacto.php#form'>REGRESAR</a></p>";
                echo "</article>";
            }else{
               
                    if($_POST["motivo_contacto"] == "consulta"){
                    echo' <section class="caja-texto" id="caja-gracias">';
                            echo'<h1>¡INFORMACIÓN RECIBIDA!</h1>';
                            echo'<p>¡Gracias por contactarnos '. htmlspecialchars($nombre, ENT_QUOTES, "UTF-8") . ' ' . htmlspecialchars($apellido, ENT_QUOTES, "UTF-8") . '! Hemos recibido tus datos correctamente.</p> <p>Estaremos enviando las respuestas a tu consulta al mail: '. htmlspecialchars($email, ENT_QUOTES, "UTF-8") .'.</p>';
                            echo'<p>Redirigete al Inicio desde el menú de navegación.</p>';
                            echo'<div>
                                    <figure>
                                        <img src="../../images/lista-de-verificacion.png" alt="Confirmación" class="imagen-confirmacion">
                                    </figure>
                                </div>';
                        echo'</section>';
                    }elseif($_POST["motivo_contacto"] == "pedido"){
                        echo' <section class="caja-texto" id= "caja-gracias">';
                            echo'<h1>¡INFORMACIÓN RECIBIDA!</h1>';
                            echo'<p>¡Gracias por contactarnos '. htmlspecialchars($nombre, ENT_QUOTES, "UTF-8") . ' ' . htmlspecialchars($apellido, ENT_QUOTES, "UTF-8") . '! Hemos recibido tus datos correctamente.</p> <p>Estaremos procesando los requerimientos de tu pedido para enviartelos al mail: '. htmlspecialchars($email, ENT_QUOTES, "UTF-8") .'.</p>';
                            echo'<p>Redirigete al Inicio desde el menú de navegación.</p>';
                            echo'<div>
                                    <figure>
                                        <img src="../../images/lista-de-verificacion.png" alt="Confirmación" class="imagen-confirmacion">
                                    </figure>
                                </div>';
                        echo'</section>';
                    }elseif($_POST["motivo_contacto"] == "cambios"){
                        echo' <section class="caja-texto" id= "caja-gracias">';
                            echo'<h1>¡INFORMACIÓN RECIBIDA!</h1>';
                            echo'<p>¡Gracias por contactarnos '. htmlspecialchars($nombre, ENT_QUOTES, "UTF-8"). ' ' .htmlspecialchars($apellido, ENT_QUOTES, "UTF-8") . '! Hemos recibido tus datos correctamente.</p> <p>Estaremos procesando el cambio o devolución de tu pedido y te enviaremos la información al mail: '. htmlspecialchars($email, ENT_QUOTES, "UTF-8") .'.</p>';
                            echo'<p>Redirigete al Inicio desde el menú de navegación.</p>';
                            echo'<div>
                                    <figure>
                                        <img src="../../images/lista-de-verificacion.png" alt="Confirmación" class="imagen-confirmacion">
                                    </figure>
                                </div>';
                        echo'</section>';
                    }
                   
                   
                } 
        }else{
                header("Location: /Programacion-Web2/menu/contacto/contacto.php?error=ingresourl");
                exit;
        }

       ?>
    </main>

<?php include_once '../../componentes/footer.php'; ?>

</body>

</html>