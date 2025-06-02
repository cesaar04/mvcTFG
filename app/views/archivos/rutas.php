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
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/exploradores">Exploradores</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/pioneros">Pioneros</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="">Rutas</a>
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
  <h2>Rutas <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/rutas.png?raw=true" alt="Imagen insignia de rutas" width="60" height="60"></h2>
  <div class="container">
    <!--Información de la rama -->
    <section>
      <article>
        <h5>Y, al final, nos convertimos en RUTAS (18 a los 23 años)</h5>
        <p>Es el momento de trazar un proyecto de vida mientras que cada persona descubre su vocación vital.</p>

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
              <td><strong>Rutas</strong></td>
              <td>
                En esta etapa, los jóvenes scouts comienzan a trazar su proyecto de vida y a descubrir su vocación. Experimentan cambios significativos, por lo que es crucial acompañarlos en su transición hacia la adultez de 
                manera más individualizada. Dejan de ser los protagonistas de las actividades para convertirse en gestores de las mismas, y es esencial guiarlos para prepararlos para su futura vida adulta. Los rutas se dividen
                en <strong>clanes</strong>, formados por <strong>12 personas</strong>. El conjunto de clanes se llama <strong>Agrupación</strong>.
              </td>
              <td>¡Servir!</td>
              <td>Verde</td>
              <td>San Pablo</td>
            </tr>
            <tr>
              <td colspan="5" class="text-center">
                Cada <strong>Clan</strong> tiene una bandera propia para identificarse.
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="5" class="text-center">
                <strong>Información sacada de la página de Scouts MSC España.
                  <a href="https://scouts.es/unete-scouts-msc/">Pincha Aquí para más información</a>
                </strong>
              </td>
            </tr>
          </tfoot>
        </table>

        <p>Los actos privados y los símbolos de la rama de los rutas:</p>

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
              <td><strong>Rutas</strong></td>
              <td>
                Los rutas tienen como símbolo el <strong>cruce de caminos</strong>, que significa que cada miembro del clan va haciendo su camino. 
                Además, el clan tiene la opción de seguir unido al grupo al que pertenecen, es decir, hermanándote a tu grupo. 
                También existe la opción de irse a otro grupo y hermanarse con ese grupo.
              </td>
              <td>
                Los actos más importantes en la rama de rutas son:
                <ul>
                  <li><strong>Unión al Clan</strong></li>
                  <li><strong>Firma del Contrato</strong>: acto en el que empiezas a formar parte del clan al que te quieres unir</li>
                </ul>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="5" class="text-center">
                <strong>Información sacada de la página de Scouts MSC España.
                  <a href="https://scouts.es/propuesta-educativa/documentos-rutas">Pincha aquí para más información acerca de la cada rama</a>
                </strong>
              </td>
            </tr>
          </tfoot>
        </table>
      </article>

      <article>
        <h5>Más información acerca de la rama</h5>
        <figure>
          <img class="rounded-4 d-block mx-auto" src="https://github.com/cesaar04/DIW/blob/main/imgTFG/cartel-rutas-pdj.jpg?raw=true" alt="Foto de más informacion sobre la rama de Rutas">
          <figcaption class="text-center">Rama de Rutas (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
        </figure>
      </article>
    </section>
    
    <!-- Participantes de la rama -->
    <section>
      <article>
        <?php if (!empty($datos['rutas'])) {?>
          <p>En este grupo, contamos con la cantidad de <strong><?php echo $datos['numRutas'] ?> rutas:</strong></p>
          <table class="table table-striped table-bordered custom-table">
            <thead class="text-center">
              <tr>
                <th colspan="2">Rutas del Grupo Scout 7 Valles de la Vid</th>
              </tr>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($datos['rutas'] as $ruta) {
                  echo "<tr>";
                  echo "<td class='text-center'>" . $ruta->id_Miembro . "</td>";
                  echo "<td class='text-center'>" . $ruta->nombre . "</td>";
                }
              ?>
            </tbody>
          </table>
        <?php } else {?>
          <h3 class="text-center color-texto fw-bold">Actualmente este grupo no tiene rutas</h3>
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
    color: #039e00; /* Verde oscuro */
    font-weight: bold;
  }

  h5 {
    font-size: 1.3rem;
    color: #039e00; /* Verde oscuro */
    font-weight: bold;
  }
  .color-texto {
    color: #039e00;
  }
  a {
    color: #039e00;
  }
</style>
