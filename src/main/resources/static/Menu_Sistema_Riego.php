<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/assets/css/style.css" />
    <title>Menu Cultivos</title>
  </head>
  <body>
    <header class="headerinicio">
      <div>
        <img class="logo" src="src/assets/img/SRA-logo.png" alt="logo" />
        <nav>
          <ul>
            <li>
              <a href="Menu_Principal_Suelo.php"
                ><img class="inicio" src="src/assets/img/logos/home.png"
              /></a>
              <a href="Menu_Principal_Suelo.php">Inicio</a>
            </li>
           
            <li>
              <a href="src/registros/Registro_Cultivo.php"
                ><img class="riegohoja" src="src/assets/img/logos/hojas.png"
              /></a>
              <a href="src/registros/Registro_Cultivo.php">Registrar</a>
            </li>
            
            <li>
              <a href="Index.php"
                ><img class="logocerrar" src="src/assets/img/logos/cerrar.png"
              /></a>
              <a href="index.php">Cerrar</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <h1>Sistema de Control de los cultivos</h1>
      <br>
      <section>
        <div class="contenedor">
          <div class="contcultivos">
            <h2>Cultivo de Cilantro</h2>
            <div>
              <img class="cilantro" src="src/assets/img/cultivos/cilantro.jpg">
            </div>
            <div class="parrafo">
              <p>
                Informe de la ultima vez que se rego el cultivo hora 20:00pm
                fecha 21/04/2023.
              </p>
            </div>
           
          <br>
              <a class="vermas" href="src/cultivos/Cultivo_Cilantro.php">Ver Mas</a>
          </div>

          <div class="contcultivos">
            <h2>Cultivo de Cebolla</h2>
            <div>
              <img class="cebolla" src="src/assets/img/cultivos/cebolla.jpg">
            </div>
            <div class="parrafo">
              <p>
                Informe de la ultima vez que se rego el cultivo hora 20:00pm
                fecha 21/04/2023.
              </p>
            </div>
          <br>
              <a class="vermas" href="src/cultivos/Cultivo_Cebolla.php">Ver Mas</a>
          </div>

          <div class="contcultivos">
            <h2>Cultivo de Papa</h2>
            <div>
              <img class="papa" src="src/assets/img/cultivos/papa.png">
            </div>
            <div class="parrafo">
              <p>
                Informe de la ultima vez que se rego el cultivo hora 20:00pm
                fecha 21/04/2023.
              </p>
            </div>
          <br>
              <a class="vermas" href="src/cultivos/Cultivo_Papa.php">Ver Mas</a>
          </div>

          <div class="contcultivos">
            <h2>Cultivo de Yuca</h2>
            <div>
              <img class="yuca" src="src/assets/img/cultivos/yuca.jpg">
            </div>
            <div class="parrafo">
              <p>
                Informe de la ultima vez que se rego el cultivo hora 20:00pm
                fecha 21/04/2023.
              </p>
            </div>
          <br>
              <a class="vermas" href="src/cultivos/Cultivo_Yuca.php">Ver Mas</a>
          </div>
        </div>
      </section>
      
    </main>
  </body>
</html>
