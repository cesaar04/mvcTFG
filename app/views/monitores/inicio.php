<?php 
  // Cargamos el header previamente
  require RUTA_APP . '/views/inc/header.php';
?>

<div class="container">
  <div class="row justify-content-between mb-4">
    <h2 class="text-center text-dark font-weight-bold">Lista de Monitores Grupo</h2>
  </div>
    <!-- Tabla de clientes -->
    <div class="table-responsive">
      <table class="table table-striped table-bordered shadow-sm rounded-3">
        <thead class="table-dark">
          <tr>
            <th>Id</th>
            <th>Rol</th>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Fecha Nacicimiento</th>
            <th>Fotografia</th>
            <th>Rama</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($datos['monitores'] as $monitor) {
                echo "<tr>";
                echo "<td class='align-middle'>" . $monitor->id_Miembro . "</td>";
                echo "<td class='align-middle'>". $monitor->rol . "</td>";
                echo "<td class='align-middle'>" . $monitor->documento_identidad . "</td>";
                echo "<td class='align-middle'>" . $monitor->nombre . "</td>";
                echo "<td class='align-middle'>" . $monitor->apellidos . "</td>";
                echo "<td class='align-middle'>" . $monitor->email . "</td>";
                echo "<td class='align-middle'>" . $monitor->telefono . "</td>";
                echo "<td class='align-middle'>" . $monitor->direccion . "</td>";
                echo "<td class='align-middle'>" . $monitor->fecha_nacimiento . "</td>";
                
                echo "<td class='align-middle'>";

                // Verificar si existe fotografía
                if ($monitor->fotografia != '') {
                    echo "<img src='" . RUTA_URL . $monitor->fotografia . "' alt='Foto' class='img-fluid rounded-circle' width='50' height='50'>";
                } else {
                    echo "No disponible la foto";
                }

                echo "</td>";
                echo "<td class='align-middle'>" . $monitor->rama . "</td>";
                echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  <!-- Botones de navegación y Agregar Participantes -->
  <div class="row justify-content-center mt-4">
    <!-- Botón de Agregar Participante -->
    <div class="col-md-3 mb-3">
        <a href="<?php echo RUTA_URL; ?>/miembros/agregar" class="btn btn-success btn-lg w-100 text-white shadow-sm">
            Nuevo Participante
        </a>
    </div>
    
    <!-- Botón Ir a Jóvenes -->
    <div class="col-md-3">
        <a href="<?php echo RUTA_URL; ?>/miembros/inicio" class="btn btn-primary btn-lg w-100 text-white shadow-sm">
            Ver miembros del grupo
        </a>
    </div>

    <!-- Botón Ir a Monitores -->
    <div class="col-md-3">
        <a href="<?php echo RUTA_URL; ?>/jovenes/inicio" class="btn btn-primary btn-lg w-100 text-white shadow-sm">
            Ver jovenes del grupo
        </a>
    </div>
    
    <!-- Botón Cerrar Sesión -->
    <div class="col-md-3">
        <a href="<?php echo RUTA_URL; ?>/logins/salir" class="btn btn-danger btn-lg w-100 text-white shadow-sm">
            Cerrar Sesión
        </a>
    </div>
</div>
<?php
  // Cargamos el footer al final de la página
  require RUTA_APP . '/views/inc/footer.php';
?>
