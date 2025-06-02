<?php 
  // Cargamos el header previamente
  require RUTA_APP . '/views/inc/header.php';
?>

<!-- Nav + Inicio de sesión -->
<div class="container">
  <div class="row">
    <div class="col d-flex justify-content-between align-items-center">
      <!-- Nav-->
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/home">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/historia">Historia</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/castores">Castores</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/lobatos">Lobatos</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="">Exploradores</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/pioneros">Pioneros</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/rutas">Rutas</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/monitores">Monitores</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/galeria">Galería</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/dondeEstamos">Donde Estamos</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/quienesSomos">Quiénes Somos</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/actividades">Actividades</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/contacto">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Enlace 'Iniciar sesión' -->
      <div class="d-flex align-items-center">
        <!-- Botón de iniciar sesión, con margen a la izquierda para separarlo del formulario -->
        <a href="<?php echo RUTA_URL; ?>/logins/acceder" class="btn btn-primary btn-lg ms-3">
          Iniciar Sesión
        </a>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h2>Exploradores <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/exploradores.png?raw=true" alt="Imagen insignia de exploradores  " width="60" height="60"></h2>
  <div class="container">
    <!--Información de la rama -->
    <section>
      <article>
          <h5>Crecemos y nos convertimos en EXPLORADORES (12 a 14 años)</h5>
          <p>Son las y los scouts de 12 a 14 años, los que están estudiando 1º, 2º y 3º de Educación Secundaria.</p>

          <table class="table table-striped table-bordered custom-table">
            <thead>
              <tr>
                <th>Rama</th>
                <th>Descripción</th>
                <th>Lema</th>
                <th>Color camisa</th>
                <th>Patrón</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Exploradores</strong></td>
                <td>
                  Atraviesan el paso de la niñez a la juventud. Están en una etapa de grandes exploraciones y experiencias, siendo los protagonistas de su crecimiento personal. A través de hábitos saludables, aprenden a 
                  identificar sus emociones, desarrollar empatía y buscan respuestas sobre Dios. Necesitan acompañamiento en este proceso de maduración, aunque no siempre sean conscientes de ello. Los exploradores se dividen 
                  en <strong>patrullas</strong>, que es como se llama al grupo pequeño en esta rama, formada por <strong>6 exploradores</strong>. El conjunto de patrullas se llama <strong>Tropa</strong>.
                </td>
                <td>¡Siempre alerta!</td>
                <td>Azul</td>
                <td>Santiago Apóstol</td>
              </tr>
              <tr>
                <td colspan="5" class="text-center">Cada <strong>Patrulla</strong> tiene una bandera propia para identificarse.</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="5" class="text-center"><strong>Información sacada de la página de Scouts MSC España.<a href="https://scouts.es/unete-scouts-msc/">Pincha Aquí para más información</a></strong></td>
              </tr>
            </tfoot>
          </table>

          <p>Los actos privados y los símbolos de la rama de exploradores:</p>

          <table class="table table-striped table-bordered custom-table">
            <thead>
              <tr>
                <th>Rama</th>
                <th>Símbolos Camisa</th>
                <th>Actos por Rama</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Exploradores</strong></td>
                <td>
                  <ul>
                    <li>
                      Cuando al final de la primera etapa se firme la <strong>Carta de Exploración</strong> se coloca la Flor de Lis en el centro de la <strong>Rosa de los Vientos</strong>. (Compromiso)
                    </li>
                    <li>
                      El progreso personal se representa con <strong>los siguientes rumbos</strong>:
                      <ul>
                        <li><strong>Rumbo Sur (Mediodía)</strong>: descubriendo exploradores</li>
                        <li><strong>Rumbo Noreste (Gregal)</strong>: tengo a Jesús presente</li>
                        <li><strong>Rumbo Este (Levante)</strong>: respeto a los demás</li>
                        <li><strong>Rumbo Sureste (Siroco)</strong>: descubro quién soy</li>
                        <li><strong>Rumbo Suroeste (Garbino)</strong>: mejoro el mundo con la ayuda de Dios</li>
                        <li><strong>Rumbo Oeste (Poniente)</strong>: conozco mi entorno</li>
                        <li><strong>Rumbo Noroeste (Mistral)</strong>: demuestro lo que valgo</li>
                        <li><strong>Rumbo Norte (Tramontana)</strong>: elijo mi camino</li>
                      </ul>
                      El tránsito por los rumbos laterales no lleva ningún orden, el explorador elige qué rumbo quiere realizar según sus intereses y motivaciones en cada momento de su etapa. Cuando se gana un
                      rumbo se pone en la rosa de los vientos.
                    </li>
                  </ul>
                </td>
                <td>
                  Los actos más importantes en la rama de exploradores son:
                  <ul>
                    <li><strong>Unión a la Tropa</strong></li>
                    <li>
                      La <strong>Asamblea de Exploradores</strong> la forman todos los integrantes de la Tropa cuando se reúnen para:
                      <ul>
                        <li>La realización de Misiones.</li>
                        <li>Preparar otras actividades de Tropa y de grupo.</li>
                        <li>Evaluar trimestralmente el estado y progreso de la Tropa.</li>
                      </ul>
                    </li>
                    <li>
                      El <strong>Consejo de Exploración</strong> está formado por los guías, subguías y el kraal de Exploradores. Se trata de un vínculo entre las Patrullas y el kraal. En él se preparan las Asambleas de Exploradores y se 
                      coordina el funcionamiento y las propuestas de las Patrullas.
                      <ul>
                        <li>Preparación de las Asambleas de Exploradores.</li>
                        <li>Coordinación de la Unidad de Exploradores.</li>
                        <li>Análisis de los problemas que afectan a las Patrullas o a la Tropa y resolución.</li>
                      </ul>
                    </li>
                    <li>
                      La <strong>Carta de Exploración</strong>: Es un documento que firmas junto a tu Patrulla con el objetivo
                      de comprometerte a transformar tu entorno en un lugar mejor cumpliendo los Principios y Virtudes del explorador.
                    </li>
                  </ul>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="5" class="text-center">
                  <strong>Información sacada de la página de Scouts MSC España. <a href="https://scouts.es/propuesta-educativa/documentos-exploradores">Pincha aquí para más información acerca de la cada rama</a></strong>
                </td>
              </tr>
            </tfoot>
          </table>
      </article>
      <article>
        <h5>Más información acerca de la rama</h5>
        <figure>
          <img class="rounded-4 d-block mx-auto" src="https://github.com/cesaar04/DIW/blob/main/imgTFG/cartel-exploradores-pdj.jpg?raw=true" alt="Foto de más informacion sobre la rama de Exploradores">
          <figcaption class="text-center">Rama de Exploradores (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
        </figure>
      </article>
    </section>

    <!-- Participantes de la rama -->
    <section>
      <article>
        <?php if (!empty($datos['exploradores'])) {?>
          <p>En este grupo, contamos con la cantidad de <strong><?php echo $datos['numExploradores'] ?> exploradores:</strong></p>
          <table class="table table-striped table-bordered custom-table">
            <thead class="text-center">
              <tr>
                <th colspan="2">Exploradores del Grupo Scout 7 Valles de la Vid</th>
              </tr>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($datos['exploradores'] as $explorador) {
                  echo "<tr>";
                  echo "<td class='text-center'>" . $explorador->id_Miembro . "</td>";
                  echo "<td class='text-center'>" . $explorador->nombre . "</td>";
                }
              ?>
            </tbody>
          </table>
        <?php } else {?>
          <h3 class="text-center color-texto fw-bold">Actualmente este grupo no tiene exploradores</h3>
        <?php } ?>
      </article>
    </section>
  </div>
</div>
<?php
  // Cargamos el footer al final de la pagina
  require RUTA_APP . '/views/inc/footer.php';
?>
<style>
  h2 {
    font-size: 2rem;
    color: #0066cc; /* Verde oscuro */
    font-weight: bold;
  }

  h5 {
    font-size: 1.3rem;
    color: #0066cc; /* Verde oscuro */
    font-weight: bold;
  }
  .color-texto {
    color: #0066cc;
  }
  a {
    color: #0066cc;
  }
</style>