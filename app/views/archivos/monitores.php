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
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/rutas">Rutas</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="">Monitores</a>
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
  <h2>Monitores</h2>
  <div class="container">
    <section>
      <!-- ¿Qué es un monitor? -->
      <article>
        <h5>¿Qué es un monitor en un Grupo Scout?</h5>
        <p>Un monitor es un jóven o un adulto que asume un rol de liderazgo, apoyo y acompañamiento educativo dentro de cada rama. Su función varía según la edad de los niñ@s a su cargo y la 
          estructura del grupo, pero en general, sus responsabilidades incluyen:
          <ul>
            <li>Guiar y acompañar al grupo en sus actividades</li>
            <li>Fomentar el desarrolo personal, el trabajo en equipo y los valores del escultismo</li>
            <li>Organizar y ejecutar dinámicas, juegos, talleres, campamentos y salidas.</li>
            <li>Actuar como modelo de comportamiento y liderazgo positivo.</li>
          </ul>
          A veces, el término "monitor" se usa de forma intercambiable con "scouter" o "educador scout", especialmente en países hispanohablantes.
        </p>
      </article>

      <!-- ¿Qué es el kraal? -->
      <article>
        <p>El Kraal es el equipo de monitores o scouters adultos que planifica, coordina y lleva adelante las actividades de una rama o de todo el grupo scout. El término proviene del 
          idioma zulú y fue introducido por Baden-Powell, el fundador del movimiento scout.</p>
        <p>Funciones del kraal:</p>
        <ul>
          <li>Coordinar las reuniones, salidas y campamentos.</li>
          <li>Establecer los objetivos educativos de la unidad.</li>
          <li>Evaluar el desarrollo de los chicos y del equipo.</li>
          <li>Formarse continuamente en pedagogía scout.</li>
          <li>Garantizar la seguridad física y emocional de los miembros del grupo.</li>
        </ul>
        <p>En el kraal puede haber varios monitores, cada uno con diferentes responsabilidades según su experiencia y el grupo que acompaña.</p>
      </article>

      <!-- Cargos dentro del grupo -->
      <article>
        <p>Dentro de grupo scout están los siguientes cargos:</p>
        <ul>
          <li><strong>Presidente: </strong>Tirso</li>
          <li><strong>Tesorero: </strong>Sergio</li>
          <li><strong>Secretaria: </strong>Samantha</li>
          <li><strong>Coordinador general: </strong>Diego</li>
          <li><strong>Coordinador lobatos: </strong>César</li>
          <li><strong>Coordinador exploradores: </strong>Héctor</li>
          <li><strong>Coordinador pioneros: </strong>Chemón</li>
          <li><strong>Coordinador rutas: </strong>César</li>
        </ul>
      </article>
      <!-- Monitores del grupo -->
      <article>
        <p>En el grupo scout, hay <strong><?php echo $datos['numMonitores'] ?>  monitores</strong> y los monitores son:</p>
        <table class="table table-striped table-bordered custom-table">
          <thead class="text-center">
            <tr>
              <th colspan="2">Monitores del Grupo Scout 7 Valles de la Vid</th>
            </tr>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($datos['monitores'] as $monitor) {
                echo "<tr>";
                echo "<td class='text-center'>" . $monitor->id_Miembro . "</td>";
                echo "<td class='text-center'>" . $monitor->nombre . "</td>";
              }
            ?>
          </tbody>
        </table>
      </article>
    </section>
  </div>
</div>
<?php
  // Cargamos el footer al final de la pagina
  require RUTA_APP . '/views/inc/footer.php';
?>
<style>
  /* Título principal */
  h2 {
      font-size: 2rem;
      color: #2D3E32; /* Verde oscuro */
      font-weight: bold;
  }
  /* Títulos de los artículos (h5) */
  h5 {
      font-size: 1.3rem;
      color: #2D3E32; /* Verde oscuro */
      font-weight: bold;
  }
</style>