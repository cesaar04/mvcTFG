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
                <a class="nav-link active" href="">Actividades</a>
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
  <h2>Actividades</h2>
  <form action="<?php echo RUTA_URL; ?>/actividades/mostrarActividades" method="POST">
        <div class="row">
            <!-- Fecha de inicio -->
            <div class="col-md-4 mb-3">
                <label for="fecha_inicio" class="form-label fw-bold text-dark">Fecha Inicio
                <sup class="text-danger">*</sup>
                </label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" value="<?php echo isset($datos['fechaInicio']) ? $datos['fechaInicio'] : '' ?>" required>
            </div>

            <!-- Fecha de fin -->
            <div class="col-md-4 mb-3">
                <label for="fecha_fin" class="form-label fw-bold text-dark">Fecha fin
                <sup class="text-danger">*<sup>
                </label>
                <input type="date" id="fecha_fin" name="fecha_fin" class="form-control" value="<?php echo isset($datos['fechaFin']) ? $datos['fechaFin'] : '' ?>" required>
            </div>

            <!-- Botón de disponibilidad -->
            <div class="col-md-4 mb-3 d-flex align-items-end">
                <button type="submit" class="btn btn-success w-100">Disponibilidad</button>
            </div>
            <span class="text-danger text-center fw-bold">
                <?php if(isset($datos['errorFecha'])){
                echo $datos['errorFecha'];
                } ?>
            </span>
        </div>
  </form>
  <div>
    <?php if (!empty($datos['actividades'])) {?>
      <h3 class="text-center mb-4">Actividades Disponibles</h3>
      <table class="table table-striped table-bordered text-center">
        <thead>
            <tr>
              <th>Id</th>
              <th>Nombre Actividad</th>
              <th>Lugar</th>
              <th>Fecha de Inicio</th>
              <th>Fecha de Fin</th>
              <th>Cantidad de Personas</th>
              <th>Descripción</th>
              <th>Apuntarse</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($datos['actividades'] as $actividad) { ?>
            <tr>
              <td><?php echo $actividad->id_Actividad; ?></td>
              <td><?php echo $actividad->nombre; ?></td>
              <td><?php echo $actividad->lugar; ?></td>
              <td><?php echo $actividad->fecha_Inicio; ?></td>
              <td><?php echo $actividad->fecha_Fin; ?></td>
              <td><?php echo $actividad->cantidad_Personas; ?></td>
              <td><?php echo $actividad->descripcion; ?></td>
              <td>
                <form action="<?= RUTA_URL?>/logins/accederMiembro" method="POST" class="d-flex justify-content-center align-items-center">
                  <input type="hidden" name="id" value="<?php echo $actividad->id_Actividad; ?>">
                  <input type="hidden" name="nombre" value="<?php echo $actividad->nombre; ?>">
                  <input type="hidden" name="lugar" value="<?php echo $actividad->lugar; ?>">
                  <input type="hidden" name="fecha_inicio" value="<?php echo $actividad->fecha_Inicio; ?>">
                  <input type="hidden" name="fecha_fin" value="<?php echo $actividad->fecha_Fin; ?>">
                  <input type="hidden" name="cantidad_personas" value="<?php echo $actividad->cantidad_Personas; ?>">
                  <input type="hidden" name="descripcion" value="<?php echo $actividad->descripcion; ?>">
                  <button type="submit" class="btn btn-primary">Apuntarse</button>
                </form>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php
        // Cargamos el footer al final de la pagina
        require RUTA_APP . '/views/inc/footer.php';
      ?>
    <?php } else { ?>
      <h3 class="text-center">No Hay Actividades Disponibles</h3>
      <?php
        // Cargamos el footer al final de la pagina
        require RUTA_APP . '/views/inc/footer.php';
      ?>
    <?php } ?>
  </div>
</div>
<style>
  /* Título principal */
  h2 {
      font-size: 2rem;
      color: #2D3E32; /* Verde oscuro */
      font-weight: bold;
  }
  /* Títulos de los artículos (h3) */
  h3 {
      font-size: 1.3rem;
      color: #2D3E32; /* Verde oscuro */
      font-weight: bold;
  }
</style>
