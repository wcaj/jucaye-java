<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro Nuevo Cultivo</title>
    <link rel="stylesheet" href="../assets/css/modulos.css" type="text/css" />
  </head>

  <body>
    <header class="headerinicio">
      <div>
        <img class="logo" src="../assets/img/SRA-logo.png" />
        <nav>
          <ul>
            <li>
              <a href="../../Menu_Sistema_Riego.php">
                <img class="logoinicio" src="../assets/img/logos/home.png"/>
              </a>
              <a href="../../Menu_Sistema_Riego.php">Inicio</a>
            </li>

            <li>
              <a href="../../Menu_Sistema_Riego.php">
                <img class="logocerrar" src="../assets/img/logos/cerrar.png" />
              </a>
              <a href="../../Menu_Sistema_Riego.php">Cerrar</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="contregicultivo">
      <div class="regiscultivo">
        <div class="imagen">
          <img src="../assets/img/SRA-logo.png" alt="" />
        </div>
        <h3>Ingresar Datos</h3>
        <form action="#" method="post">
          <label for="nombre">Nombre del Cultivo:</label>
          <input
            class="nombrec"
            type="text"
            id="nombre"
            name="nombre"
            required
          />
<br>
<br>
          <label for="tipoRiego">Tipo de Riego:</label>
          <select class="selectc" id="tipoRiego" name="tipoRiego">
            <option value="riego1">Riego 1</option>
            <option value="riego2">Riego 2</option>
            <option value="riego3">Riego 3</option>
          </select>
          <br>
          <br>
          <label for="fechaInicio">Fecha de Inicio:</label>
          <input
            class="fechac"
            type="date"
            id="fechaInicio"
            name="fechaInicio"
            required
          />
          <br>
          <br>
          <label for="fechaFin">Fecha Estimada de Finalizacion:</label>
          <input
            class="fechac"
            type="date"
            id="fechaFin"
            name="fechaFin"
            required
          />
          <br>
          <br>
          <label for="tipo">Tipo:</label>
          <input class="tipoc" type="text" id="tipo" name="tipo" required />

          <input class="enviar" type="submit" value="Enviar" />
        </form>
      </div>
    </div>
  </body>
</html>
