<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/modulos.css" />
    <title>Cultivo de Cilantro</title>
  </head>
  <body>
    <header class="headerinicio">
      <div>
        <img class="logo" src="../assets/img/SRA-logo.png" alt="logo" />
        <nav>
          <ul>
            <li>
              <a href="../../Menu_Principal_Suelo.php"
                ><img class="iniciologo" src="../assets/img/logos/home.png"
              /></a>
              <a href="../../Menu_Principal_Suelo.php">Inicio</a>
            </li>
            <li>
              <a href="../../Menu_Sistema_Riego.php"
                ><img class="riego" src="../assets/img/logos/riego.png"
              /></a>
              <a href="../../Menu_Sistema_Riego.php">Riego</a>
            </li>
            <li>
              <a href="../../Menu_Sistema_Riego.php"
                ><img class="cerrarlogo" src="../assets/img/logos/cerrar.png"
              /></a>
              <a href="../../Menu_Sistema_Riego.php">Cerrar</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <div>
    <h1>Cultivo de Cilantro</h1>
    <div class="container1">
      <div class="camara" >
      <h2>Camara Supervision</h2>
      </div>

      <div class="tablascultivos" >
      <h3>Estado del Suelo</h3>
        <table>
          <tr>
            <th>Fecha</th>
            <th>Caudal de agua (L/min)</th>
            <th>Temperatura del agua (°C)</th>
            <th>Humedad del suelo (%)</th>
            <th>Nivel de agua en el depósito (cm)</th>
          </tr>
          <tr>
            <td>01/01/2023</td>
            <td>10</td>
            <td>20</td>
            <td>30</td>
            <td>50</td>
          </tr>
          <tr>
            <td>02/01/2023</td>
            <td>12</td>
            <td>18</td>
            <td>25</td>
            <td>40</td>
          </tr>
          <tr>
            <td>03/01/2023</td>
            <td>8</td>
            <td>22</td>
            <td>35</td>
            <td>45</td>
          </tr>
          
        </table>
        <div>
          <h4>Ultimos Riego:</h4>
          <p>27/09/2023</p>
        </div>
        <input class="riegoactivar" type="button" name="Activar" value="Activar">
        <input class="riegodesactivar" type="button" name="Desactivar" value="Desactivar">
      </div>
      
    </div>
  </div>
  </body>
</html>
