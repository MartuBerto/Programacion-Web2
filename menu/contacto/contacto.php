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
  <?php include_once '../../componentes/navbar.php'; ?>

  <main>
    <h1>Contáctanos</h1>
    <section>
      <form action="./gracias.php" method="post">
        <fieldset>
          <legend class="centrado">Datos Personales </legend>
          <label> Nombre:
            <input type="text" name="nombre_usuario" placeholder="Nombre" minlength="3" required>
          </label>
          </div>
          </div>
          <label> Apellido:
            <input type="text" name="apellido_usuario" placeholder="Apellido" minlength="3" required>
          </label>
          </div>
          <div>
            <label> Correo Electrónico:
              <input type="email" name="email" placeholder="email@example.com" required>
            </label>
          </div>
          <div>
            <label>Mensaje:
              <textarea name="Mensaje" cols="40" rows="5" placeholder="Escribe un mensaje..." maxlength="150"></textarea>
            </label>
            <input type="submit" value="Enviar Mensaje" class="boton-enviar">
          </div>
        </fieldset>
      </form>
    </section>
  </main>

  <footer>
    <?php include_once '../../componentes/footer.php'; ?>
  </footer>

</body>

</html>