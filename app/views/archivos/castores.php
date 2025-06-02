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
                <a class="nav-link active" href="">Castores</a>
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
  <h2>Castores <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/castor.png?raw=true" alt="Imagen insignia de castores" width="60" height="60"></h2>
  <div class="container">
    <!--Información de la rama -->
    <section>
      <article>
        <h5>Primero somos CASTORES (6 a 8 años)</h5>
        <p>Es el grupo scout de los más pequeños, están entre los 6 y los 8 años y estudian 1º, 2º y 3º de Educación Primaria.</p>
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
              <td><strong>Castores</strong></td>
              <td>A través del juego, aprenden a crecer de forma sana, a ser autónomos y a convivir con normas básicas. En esta etapa, es fundamental reconocer y valorar las emociones propias y ajenas. También se enseña 
              la importancia de ser agradecido y dar gracias por lo bueno que nos rodea. Los castores se dividen en <strong>madrigueras</strong>, que es como se llama al grupo pequeño en esta rama, que está formada por 
              <strong>6 castores</strong>. El conjunto de madrigueras se llaman <strong>Colonia</strong>.</td>
              <td>"Compartir"</td>
              <td>Naranja</td>
              <td>Noé</td>
            </tr>
            <tr>
              <td colspan="5" class="text-center">Cada <strong>Madriguera</strong> tiene una bandera propia para identificarse.</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="5" class="text-center"><strong>Información sacada de la página de Scouts MSC España. <a href="https://scouts.es/unete-scouts-msc/">Pincha Aquí para más información</a></strong></td>
            </tr>
          </tfoot>
        </table>
        <p>Los actos privados y los símbolos de la rama de castores:</p>
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
              <td><strong>Castores</strong></td>
              <td>
                <ul>
                  <li><strong>Insignia de Arat (el castor, adhesión a la unidad):</strong> Insignia de Arat (el castor): El niño expresa su deseo de pertenecer al grupo y, como parte de esta integración, se le otorgan la insignia de Arat, la camisa
                    y la pañoleta del grupo.</li>
                  <li><strong>Insignia de Glaux (el búho, compromiso):</strong> El niño expresa su deseo de comprometerse con la Colonia y cumplir los Consejos de Glaux. Durante la ceremonia, se le otorgan la insignia y la Chapa Naranja de Glaux, en 
                    la que colocará las paletas (cintas de colores).</li>
                  <li><strong>Cintas de progreso personal</strong>: Las paletas son cintas de colores que se otorgan al niño al transitar un Consejo de Glaux, y cada color simboliza un aspecto del desarrollo:
                    <ul>
                      <li><strong>Verde (Desarrollo físico)</strong>: Para crecer sano, ser limpio y ordenado.</li>
                      <li><strong>Amarillo (Desarrollo intelectual)</strong>: Tienes mucho que aportar, descubre y crea con los demás.</li>
                      <li><strong>Rojo (Desarrollo emocional)</strong>: Expresa lo que sientes, nos ayudamos entre todos.</li>
                      <li><strong>Azul (Desarrollo social)</strong>: Contribuye para vivir en armonía con los demás.</li>
                      <li><strong>Blanco (Desarrollo espiritual)</strong>: Escucha lo que te dice Jesús.</li>
                    </ul>
                  </li>
                  <li><strong>Chapa de Glaux Morada:</strong> En el desarrollo de la personalidad, “Sé valiente ayudando a la gente”, se cambia la Chapa Naranja y las Paletas por la Chapa Morada, que se otorgará en una ceremonia de Colonia.</li>
                </ul>
              </td>
              <td>Los actos más importantes de los castores son:
                <ul>
                  <li>La <strong>Unión a la Madriguera</strong></li>
                  <li><strong>Consejo de Glaux:</strong> es un conjunto de desafios que tiene que ir ucmpliendo el castor durante toda su estancia en esta rama. Son un total de 6 desafíos</li>
                  <li><strong>Eleccion de Cargos:</strong> los castores se ponen los cargos que quieren, los cuales su misión será ayudar al resto de la madriguera.</li>
                  <li><strong>Consejos de Maderas y submaderas:</strong> los castores se reunen con otros castores y castoras con tu mismo cargo para revisar cómo funciona la colonia</li>
                </ul>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="5" class="text-center"><strong>Información sacada de la página de Scouts MSC España. <a href="https://scouts.es/propuesta-educativa/documentos-castores/">Pincha aquí para más información acerca de la cada rama</a></strong></td>
            </tr>
          </tfoot>
        </table>
      </article>
      <article>
        <h5>Más información acerca de la rama</h5>
        <figure>
          <img class="rounded-4 d-block mx-auto" src="https://github.com/cesaar04/DIW/blob/main/imgTFG/cartel-castores-pdj.jpg?raw=true" alt="Foto de más informacion sobre la rama de Castores">
          <figcaption class="text-center">Rama de Castores (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
        </figure>
      </article>
    </section>

    <!-- Participantes de la rama -->
    <section>
      <article>
        <?php if (!empty($datos['castores'])) {?>
          <p>En este grupo, contamos con la cantidad de <strong><?php echo $datos['numCastores'] ?> castores:</strong></p>
          <table class="table table-striped table-bordered custom-table">
            <thead class="text-center">
              <tr>
                <th colspan="2">Castores del Grupo Scout 7 Valles de la Vid</th>
              </tr>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($datos['castores'] as $castor) {
                  echo "<tr>";
                  echo "<td class='text-center'>" . $castor->id_Miembro . "</td>";
                  echo "<td class='text-center'>" . $castor->nombre . "</td>";
                }
              ?>
            </tbody>
          </table>
        <?php } else {?>
          <h3 class="text-center color-texto fw-bold">Actualmente este grupo no tiene castores</h3>
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
    color: orange; /* Verde oscuro */
    font-weight: bold;
  }

  h5 {
    font-size: 1.3rem;
    color: orange; /* Verde oscuro */
    font-weight: bold;
  }
  .color-texto {
    color: orange;
  }
  a {
    color: orange;
  }
</style>