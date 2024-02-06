<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="src/assets/css/login.css" />
  <title>Sistema de Riego Automatizado</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="containerlogin">

    <div class="contenedorlogin">
      <div class="imagen">
        <img src="src/assets/img/SRA-logo.png" alt="" />
      </div>
      <h2>Bienvenido</h2>
      <?php
      session_start();
      if (isset($_SESSION["Error"])) {
        echo "<h3> {$_SESSION["Error"]}</h3>";
        unset($_SESSION["Error"]);
      }
      ?>
      <form name="form" action="admin/Loguear.php" method="post">

        <input class="usuario" type="text" name="usuario" placeholder="Usuario" />
        <br />

        <input class="pass" type="Password" name="contraseña" placeholder="Contraseña" />
        <br />

        <button class="acceder">Acceder</button>
        <br />
        <br />

        <a class="registrar" href="src/registros/Registro_usuario.php">Registrar</a>
      </form>
      <br />
      <a class="olvido" href="src/registros/Recuperar_Contraseña.php">¿Olvidaste tu contraseña?</a>

      <a class="olvido" href="Index.php">Volver</a>
    </div>
  </div>
</body>

</html>