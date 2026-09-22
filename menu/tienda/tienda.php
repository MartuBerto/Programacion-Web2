<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Merchandising Interstellar</title>
    <link rel="icon" href="../../images/favicon-32x32.png">
   <link rel="stylesheet" href="../../style.css">
   <link rel="stylesheet" href="./tienda.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    <?php  include_once '../../componentes/navbar.php'; ?>

    <main>
        <h1>Tienda</h1>
        <h2>Merchandising</h2>


        <form method="POST" action="tienda.php" class="formulario">
            <fieldset>
        <label for="zona">¿De qué zona sos?</label>
        <select name="zona" id="zona">
            <option value="">Seleccione la zona</option>
            <option value="zona1">CABA</option>
            <option value="zona2">Zona Norte</option>
            <option value="zona3">Zona Sur</option>
            <option value="zona4">Zona Este</option>
            <option value="zona5">Zona Oeste</option>
        </select>
        <input type="submit" value="Enviar">
    </fieldset>
        </form>

    <?php

    $zonaElegida = $_POST['zona'] ?? ""; //preguntar al profe si esta bien definido

    $productos = [
        ["nombre" => "Bluray Interstellar", "stock" => 10, "precio" => 40000, "imagen" => "../../images/bluray interstellar.png"],
        ["nombre" => "Cuadro Interstellar", "stock" => 3, "precio" => 70000, "imagen" => "../../images/cuadro interstellar.png"],
        ["nombre" => "Taza Interstellar", "stock" => 8, "precio" => 25000, "imagen" => "../../images/taza interstellar.png"],
        ["nombre" => "Funko Pop de Cooper", "stock" => 5, "precio" => 45000, "imagen" => "../../images/funko cooper.jpg"],
        ["nombre" => "Remera de Poster Interstellar", "stock" => 0, "precio" => 60000, "imagen" => "../../images/remera interstellar.png"],
        ["nombre" => "Figura coleccionable de Tars", "stock" => 2, "precio" => 30000, "imagen" => "../../images/figura tars interstellar.png"],
    ];

    $zona = [
        "zona1" => "caba",
        "zona2" => "zona norte",
        "zona3" => "zona sur",
        "zona4" => "zona este",
        "zona5" => "zona oeste"
    ]; //preguntar si esta bien definido 

     $tieneEnvioGratis = ($zonaElegida == "zona1") || ($zonaElegida == "zona2") || ($zonaElegida == "zona3");

    foreach ($productos as $producto) {
        echo "<div class= caja-texto id= tienda>";
        echo "<h3 class= titulo-tienda>" . $producto['nombre'] . "</h3>";
        echo "<img src='" . $producto['imagen'] . "' width='600'>";
        echo "<p class= texto>Precio: $" . $producto['precio'] . "</p>";
      
        
    
        if ($zonaElegida == "") {
           echo "<p class= texto id= color> Selecciona tu zona para ver detalles del envio. </p>"; 
        } elseif ($producto['precio'] >= 45000 && $tieneEnvioGratis){
            echo "<p class= texto id= color>¡Te enviamos un llavero de regalo y tenés envío gratis!</p>";
        } elseif ($producto['precio'] >= 45000 && !$tieneEnvioGratis) {
            echo "<p class= texto id= color>¡Te enviamos un llavero de regalo!</p><p class= texto id=color-dos> No tenés envío gratis</p>";
        } elseif ($producto['precio'] < 45000 && $tieneEnvioGratis) {
            echo "<p class= texto id= color> ¡Tenés envío gratis!</p>";
        } else{ 
            echo "<p class= texto id= color-dos>No tenés llavero de regalo ni envío gratis.</p>";
        }

          echo "</div>";
    }
    ?>

  
    </main>

        <?php include_once '../../componentes/footer.php'; ?>

</body>
</html>