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
                <a class="nav-link active" href="">Pioneros</a>
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
  <h2>Pioneros <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/pioneros.png?raw=true" alt="Imagen insignia de pioneros" width="60" height="60"></h2>
  <div class="container">
    <!--Información de la rama -->
    <section>
      <article>
        <h5>Maduramos hasta ser PIONEROS (15 a 17 años)</h5>
        <p>Nuestra Juventud, de 15 a 17 años, está haciendo 4º de Educación Secundaria o estudian Formación Profesional.</p>

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
              <td><strong>Pioneros</strong></td>
              <td>
                Comienzan a planificar expediciones y gestionar proyectos propios en pequeños grupos. Acompañados por un educador scout, aprenden a asumir responsabilidades y aplicar los valores del escultismo y del Evangelio.
                Han integrado estos valores en su día a día, poniéndolos al servicio del bien común y experimentando a Dios en la naturaleza. Los pioneros se dividen en <strong>equipos</strong>, que es como se llama al grupo pequeño en esta rama,
                formada por <strong>6 pioneros</strong>. El conjunto de equipos se llama <strong>Avanzada</strong>.
              </td>
              <td>¡Siempre Listos Para Servir!</td>
              <td>Roja</td>
              <td>San Pedro</td>
            </tr>
            <tr>
              <td colspan="5" class="text-center">
                Cada <strong>Equipo</strong> tiene una bandera propia para identificarse.
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

        <p>Los actos privados y los símbolos de la rama de pioneros:</p>

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
              <td><strong>Pioneros</strong></td>
              <td>
                <ul>
                  <li>
                    El progreso personal se representa con <strong>los siguientes nudos</strong>:
                    <ul>
                      <li>
                        <strong>Desafío del ámbito vocacional profesional (Nudo plano)</strong>: realizar alguna labor de servicio en aquello que te motive, te guste o crees que puedes llegar a trabajar de eso
                        a nivel profesional
                      </li>
                      <br>
                      <li>
                        <strong>Desafío del ámbito de la comunidad (nudo ocho)</strong>: realizar algún tipo de servicio en un ambiente cercano.
                      </li>
                      <li>
                        <strong>Desafío del ámbito de la ciudadanía (vuelta de escota)</strong>: Es un momento en el que te comienzas a interesar por los problemas fuera de tu entorno cercano y por las situaciones 
                        injustas que ocurren en el mundo. A pequeña escala, es la oportunidad de dar el paso adelante para colaborar con organizaciones o asociaciones de carácter social.
                      </li>
                      <li>
                        <strong>Desafío del ámbito de la espiritualidad (nudo pescador)</strong>: Es un momento en el que puedes estar lleno de dudas sobre tus creencias, preguntándote si son fruto de tu propia convicción
                        o de lo que te han inculcado. Este es un buen momento para reflexionar sobre ello, y esa reflexión te permitirá también ayudar a tus compañeros. Además, es importante conocer la comunidad cristiana del 
                        grupo y aprovechar la oportunidad de colaborar con ella, entendiendo de primera mano la labor que realiza.
                      </li>
                    </ul>
                  </li>
                </ul>
              </td>
              <td>
                El acto más importante en la rama de pioneros es:
                <ul>
                  <li><strong>Unión a la Avanzada</strong></li>
                  <li>
                    La <strong>Promesa Scout</strong>: es el acto solemne durante el que adquieres
                    ese compromiso y te unes a la fraternidad mundial scout.
                  </li>
                </ul>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="5" class="text-center">
                <strong>Información sacada de la página de Scouts MSC España. 
                  <a href="https://scouts.es/propuesta-educativa/documentos-pioneros">Pincha aquí para más información acerca de la cada rama</a>
                </strong>
              </td>
            </tr>
          </tfoot>
        </table>
      </article>

      <article>
        <h5>Más información acerca de la rama</h5>
        <figure>
          <img class="rounded-4 d-block mx-auto" src="https://github.com/cesaar04/DIW/blob/main/imgTFG/cartel-pioneros-pdj.jpg?raw=true" alt="Foto de más informacion sobre la rama de Pioneros">
          <figcaption class="text-center">Rama de Pioneros (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
        </figure>
      </article>
    </section>
    
    <!-- Participantes de la rama -->
    <section>
      <article>
        <?php if (!empty($datos['pioneros'])) {?>
          <p>En este grupo, contamos con la cantidad de <strong><?php echo $datos['numPioneros'] ?> pioneros:</strong></p>
          <table class="table table-striped table-bordered custom-table">
            <thead class="text-center">
              <tr>
                <th colspan="2">Pioneros del Grupo Scout 7 Valles de la Vid</th>
              </tr>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($datos['pioneros'] as $pionero) {
                  echo "<tr>";
                  echo "<td class='text-center'>" . $pionero->id_Miembro . "</td>";
                  echo "<td class='text-center'>" . $pionero->nombre . "</td>";
                }
              ?>
            </tbody>
          </table>
        <?php } else {?>
          <h3 class="text-center color-texto fw-bold">Actualmente este grupo no tiene pioneros</h3>
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
    color: #cc0002; /* Verde oscuro */
    font-weight: bold;
  }

  h5 {
    font-size: 1.3rem;
    color: #cc0002; /* Verde oscuro */
    font-weight: bold;
  }
  .color-texto {
    color: #cc0002;
  }
  a {
    color: #cc0002;
  }
</style>
