<!DOCTYPE html>
<html lang="es">
  <html>
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="../assets/css/login.css" />
      <title>Recuperar Contraseña</title>
    </head>

    <body>
      <div class="containerecuperar">
        <div class="container">
          <div class="imagen">
            <img src="../assets/img/SRA-logo.png" alt="" />
          </div>
          <h4>Recuperar Contraseña</h4>
          <form>
            <label for="username">Nombre:</label>
            <input
              class="name"
              type="text"
              id="username"
              name="username"
              required
            />
            <br>
            <br>
            <label for="birthdate" >Fecha de Nacimiento:</label>
            <input
              class="date"
              type="date"
              id="birthdate"
              name="birthdate"
              required
            />
            <br>
            <br>
            <label for="role">Rol:</label>
            <select class="rol" id="role" name="role" required>
              <option value="1">Administrador</option>
              <option value="2">Usuario</option></select
            ><br />
            <br />

            <button class="btn" type="submit">Recuperar</button>
          </form>
          <br />
          <a class="volver" href="../../login.php">Volver</a>
        </div>
      </div>
    </body>
  </html>
</html>
