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
                <a class="nav-link active" href="">Contacto</a>
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
  <h2>Contacto</h2>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card shadow">
          <div class="card-body">
            <h3 class="card-title mb-4 text-center">Formulario de Contacto</h3>
            <form>
              <div class="mb-3">
                <label for="nombre" class="form-label fw-bold text-dark">Nombre<sup class="text-danger"> *</sup></label>
                <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
              </div>

              <div class="mb-3">
                <label for="apellidos" class="form-label fw-bold text-dark">Apellidos<sup class="text-danger"> *</sup></label>
                <input type="text" class="form-control" id="apellidos" placeholder="Tus apellidos">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label fw-bold text-dark">Correo electrónico<sup class="text-danger"> *</sup></label>
                <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
              </div>

              <div class="form-group mb-3">
                <label for="rama" class="fw-bold text-dark">Rama 
                  <sup class="text-danger"> *</sup>
                </label>
                <select name="rama" id="rama" class="form-control">
                  <?php
                    $fichero = RUTA_APP . "../../public/ramas.txt";

                    if (!file_exists($fichero)) {
                        log_error("El archivo $fichero no existe. Asegúrate de que se haya generado.");
                        die("El archivo $fichero no existe. Asegúrate de que se haya generado.\n");
                    }

                    $fp = fopen($fichero, "r");
                    $ramas = [];
                    while (!feof($fp)) {
                        $rama = fgets($fp);
                        if ($rama !== false) {
                            array_push($ramas, trim($rama));
                        }
                    }
                    fclose($fp);

                    for ($i = 0; $i < count($ramas); $i++) {
                      echo '<option value="'.$ramas[$i].'" '.($ramas[$i] == $datos['rama'] ? 'selected' : '').'>'.$ramas[$i].'</option>';
                    }
                  ?>
                </select>
              </div>

              <div class="mb-3">
                <label for="telefono" class="form-label fw-bold text-dark">Número de teléfono<sup class="text-danger"> *</sup></label>
                <input type="tel" class="form-control" id="telefono" placeholder="+34 123 456 789">
              </div>

              <div class="mb-3">
                <label for="mensaje" class="form-label fw-bold text-dark">Mensaje<sup class="text-danger"> *</sup></label>
                <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..."  style="resize: none;"></textarea>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
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
  h3 {
    font-weight: bold;
  }
</style>