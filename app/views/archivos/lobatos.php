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
                <a class="nav-link active" href="">Lobatos</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/exploradores">Exploradores</a>
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
  <h2>Lobatos <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/lobatos.png?raw=true" alt="Imagen insignia de lobatos" width="60" height="60"></h2>
  <div class="container">
    <!--Información de la rama -->
    <section>
      <article>
        <h5>Después somos LOBATOS (9 a 11 años)</h5>
        <p>En este grupo, o como lo llamamos en términos scouts rama, están las niñas y los niños de 9 a 11 años, coincidiendo con los cursos de 4º, 5º y 6º de Educación Primaria.</p>

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
              <td><strong>Lobatos</strong></td>
              <td>
                Los scouts juegan a atravesar la selva como Mowgli. Aprenden a cuidarse a sí mismos, a los demás y a la naturaleza, destacando la importancia de convivir respetando las reglas. Se fomenta la expresión de 
                sentimientos y el respeto mutuo. Además, descubren cómo afrontar problemas con creatividad y cómo ayudar a los demás, sintiendo a Jesús como hermano. Los lobatos se dividen en <strong>seisenas</strong>, 
                que es como se llama al grupo pequeño en esta rama, formada por <strong>6 lobatos</strong>. El conjunto de seisenas se llama <strong>Manada</strong>.
              </td>
              <td>"Haremos lo mejor"</td>
              <td>Amarilla</td>
              <td>San Francisco de Asís</td>
            </tr>
            <tr>
              <td colspan="5" class="text-center">Cada <strong>Seisena</strong> tiene una bandera propia para identificarse.</td>
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

        <p>Los actos privados y los símbolos de la rama de lobatos:</p>

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
              <td><strong>Lobatos</strong></td>
              <td>
                <ul>
                  <li>
                    La <strong>Cara de Lobo (adhesión a la unidad)</strong> simboliza la pertenencia a la Manada y la importancia de vivir en sociedad, siguiendo la Ley y siendo solidarios y comprometidos con los demás.
                  </li>
                  <li>
                    El <strong>Pelaje Marrón</strong>, cinta marrón en un lado de la pañoleta. (Compromiso)
                  </li>
                  <li>
                    El progreso personal se representa con <strong>los siguientes territorios</strong>:
                    <ul>
                      <li><strong>Territorio de Bagheera</strong>, color negro (Desarrollo físico): El lobato se conoce, cuida de sí mismo y de la naturaleza.</li>
                      <li><strong>Territorio Baloo</strong>, color marrón (Desarrollo social): El lobato convive en manada y respeta sus normas.</li>
                      <li><strong>Territorio de Hermano Gris</strong>, color gris (Desarrollo espiritual): El lobato siente a Jesús como un hermano.</li>
                      <li><strong>Territorio de Kaa</strong>, color lila (Desarrollo personalidad): El lobato piensa en los demás y ayuda a todos con alegría.</li>
                      <li><strong>Territorio de Raksha</strong>, color granate (Desarrollo emocional): El lobato expresa lo que siente y siempre dice la verdad.</li>
                      <li><strong>Territorio de Hathi</strong>, color blanco (Desarrollo intelectual): El lobato tiene los ojos y los oídos bien abiertos.</li>
                    </ul>
                    El conjunto simboliza que el lobato ha desarrollado habilidades y compromisos que le permiten vivir en comunidad y avanzar hacia la aventura de la exploración, más allá de la vida en grupo.
                  </li>
                </ul>
              </td>
              <td>
                Los actos más importantes en la rama de lobatos son:
                <ul>
                  <li><strong>Unión a la Manada</strong></li>
                  <li>
                    <strong>Elección de cargos</strong>: los lobatos eligen bajo votación los cargos, que cada cargo tiene su misión pero la más importante que tienen es la de cuidar los unos a los otros
                  </li>
                  <li>
                    <strong>Consejo de roca</strong>: se reúne toda la manada, para debatir cosas, arreglar problemas o simplemente para hablar entre ellos, jugar o lo que sea. En este consejo, solo están 
                    ellos y el monitor a cargo de ellos. Puede ser consejo de roca de todos o por seisenas.
                  </li>
                  <li>
                    <strong>Promesa del lobato</strong>: el acto más importante y más emotivo para un lobato, es el momento en el cuál, un lobezno se compromete a unirse a la manada, a hacer cada día una buena acción y a cuidar de sus compañeros.
                  </li>
                </ul>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="5" class="text-center">
                <strong>Información sacada de la página de Scouts MSC España. 
                  <a href="https://scouts.es/propuesta-educativa/documentos-lobatos">Pincha aquí para más información acerca de la cada rama</a>
                </strong>
              </td>
            </tr>
          </tfoot>
        </table>
      </article>

      <article>
        <h5>Más información acerca de la rama</h5>
        <figure>
          <img class="rounded-4 d-block mx-auto" src="https://github.com/cesaar04/DIW/blob/main/imgTFG/cartel-lobatos-pdj.jpg?raw=true" alt="Foto de más informacion sobre la rama de Lobatos">
          <figcaption class="text-center">Rama de Lobatos (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
        </figure>
      </article>
    </section>

    <!-- Participantes de la rama -->
    <section>
      <article>
        <?php if (!empty($datos['lobatos'])) {?>
          <p>En este grupo, contamos con la cantidad de <strong><?php echo $datos['numLobatos'] ?> lobatos:</strong></p>
          <table class="table table-striped table-bordered custom-table">
            <thead class="text-center">
              <tr>
                <th colspan="2">Lobatos del Grupo Scout 7 Valles de la Vid</th>
              </tr>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($datos['lobatos'] as $lobato) {
                  echo "<tr>";
                  echo "<td class='text-center'>" . $lobato->id_Miembro . "</td>";
                  echo "<td class='text-center'>" . $lobato->nombre . "</td>";
                }
              ?>
            </tbody>
          </table>
        <?php } else {?>
          <h3 class="text-center color-texto fw-bold">Actualmente este grupo no tiene lobatos</h3>
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
    color: #ddcd33; /* Verde oscuro */
    font-weight: bold;
  }

  h5 {
    font-size: 1.3rem;
    color: #ddcd33; /* Verde oscuro */
    font-weight: bold;
  }
  .color-texto {
    color: #ddcd33;
  }
  a {
    color: #ddcd33;
  }
</style>