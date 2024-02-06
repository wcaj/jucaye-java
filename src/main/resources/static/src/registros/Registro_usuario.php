<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro Usuario Nuevo</title>
    <link
      rel="stylesheet"
      href="../assets/css/formularios.css"
      type="text/css"
    />
  </head>

  <body>
    <div class="containeregistro">
      <div class="container">
        <div class="imagen">
          <img src="../assets/img/SRA-logo.png" alt="" />
        </div>
        <h3>Ingresar Datos</h3>
     
        <form action="../../admin/Registro_Usuario.php" method="post">
          <label for="cedula">Cédula de Identidad:</label>
          <input
            class="cedula"
            type="text"
            id="cedula"
            name="cedula"
            required
          />
          <br>
          <br>
          <label for="nombres">Nombre:</label>
          <input
            class="nombre"
            type="text"
            id="nombres"
            name="nombres"
            required
          />
          <br>
          <br>
          <label for="apellidos">Apellido:</label>
          <input
            class="apellido"
            type="text"
            id="apellidos"
            name="apellidos"
            required
          />
          <br>
          <br>
          <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
          <input
            class="fechan"
            type="date"
            id="fecha_nacimiento"
            name="fecha_nacimiento"
            required
          />
          <br>
          <br>
          <label for="direccion">Direccion:</label>
          <input
            class="direccion"
            type="text"
            id="direccion"
            name="direccion"
            required
          />
          <br>
          <br>
          <label for="contrasena">Contraseña:</label>
          <input
            class="clave"
            type="password"
            id="contrasena"
            name="contrasena"
            required
          />
          <br>
          <br>
          <label for="roldusuario">Tipo de Rol:</label>
          <select class="tiporol" id="tiporol" name="tiporol">
            <option value="1">Administrador</option>
            <option value="2">Usuario</option>
          </select>

          <br>
          <br>
          <button class="boton" type="submit">Registrar</button>
          <br />
          <br />
          <a class="inicio" href="../../login.php">Volver</a>
        </form>
      
      </div>
    </div>
  </body>
</html>
