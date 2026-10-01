<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="icon" href="../../images/favicon-32x32.png">
  <link rel="stylesheet" href="../../style.css">
  <link rel="stylesheet" href="contacto.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
  <?php  
  
    if(@$_GET['error'] == 'ingresourl'){
        echo"<h1>Le pedimos disculpas por las molestias...</h1>";
        echo"<article class= caja-texto>";
        echo "<p>Es obligatorio completar el formulario de contacto con los datos solicitados.</p>";
        echo "<p> Diríjase a la sección de Contacto para rellenar el formulario correctamente con el siguiente enlace: <a href='/Programacion-Web2/menu/contacto/contacto.php#form'>FORMULARIO</a></p>";
        echo "</article>";

    } else{
      include_once '../../componentes/navbar.php';

      echo '<main>';
     echo '<h1>Contáctanos</h1>';
     echo '<section>';
       echo '<form action="./gracias.php" method="post" id="form">';
         echo '<fieldset>';
          echo ' <legend class="centrado"><span>Datos Personales</span></legend>';
          echo ' <label> Nombre:
            <input type="text" name="nombre_usuario" placeholder="Nombre" minlength="3" required>
          </label>';
           echo '<label> Apellido:
            <input type="text" name="apellido_usuario" placeholder="Apellido" minlength="3" required>
          </label>';
             echo '<label> Correo Electrónico:
              <input type="email" name="email" placeholder="email@example.com" required>
            </label>';
           echo '<label>Seleccione motivo de contacto:
            <select name="motivo_contacto" id="" required>
              <option value="" disabled selected>Motivo</option>
              <option value="consulta">Consulta sobre un producto</option>
              <option value="pedido">Estado de mi pedido</option>
              <option value="cambios">Cambios y devoluciones</option>
            </select></label>';
             echo '<label>Mensaje:
              <textarea name="mensaje" cols="40" rows="5" placeholder="Escribe un mensaje..." maxlength="150"></textarea>
            </label>';
            echo '<div> <input type="submit" value="Enviar Mensaje" class="boton-enviar"> </div>';
         echo '</fieldset>';
       echo '</form>';
     echo '</section>';
  echo '</main>';

  include_once '../../componentes/footer.php';
    }
  
  
  ?>

</body>

</html>