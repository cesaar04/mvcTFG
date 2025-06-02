<?php 
  // Cargamos el header previamente
  require RUTA_APP . '/views/inc/header.php';
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h1 class="text-center mb-4">Datos del cliente a borrar</h1>
      
      <div class="card p-4 shadow-sm rounded">
        <p><strong>Id:</strong> <?php echo $datos->id_Miembro; ?></p>
        <p><strong>DNI:</strong> <?php echo $datos->documento_identidad; ?></p>
        <p><strong>Participación:</strong> <?php echo $datos->rol ?></p>
        <p><strong>Nombre:</strong> <?php echo $datos->nombre; ?></p>
        <p><strong>Apellidos:</strong> <?php echo $datos->apellidos; ?></p>
        <p><strong>Email:</strong> <?php echo $datos->email; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $datos->telefono; ?></p>
        <p><strong>Dirección:</strong> <?php echo $datos->direccion; ?></p>
        <p><strong>Fecha de Nacimiento:</strong> <?php echo $datos->fecha_nacimiento; ?></p>
        <p><strong>Foto:</strong><br>
        <img src="<?php echo RUTA_URL . $datos->fotografia ?>" alt="Imagen del cliente" class="img-fluid" style="max-width: 100px; height: auto;">
        </p>
        <p><strong>Rama: </strong> <?php echo $datos->rama; ?></p>

        <br>
        <!-- Confirmación de eliminación -->
        <h2 class="text-center text-danger fw-bold">¿Estás seguro que deseas borrar el cliente con ID <?php echo $datos->id_Miembro?>?</h2>
        <br>

        <!-- Botones de acción -->
        <div class="d-flex gap-2 justify-content-center">
          <?php
            // Enlace para confirmar la eliminación
            echo "<a href=\"".RUTA_URL."/miembros/eliminarPorId/$datos->id_Miembro\" class=\"btn btn-danger btn-lg w-100\">Eliminar</a>";
            // Enlace para cancelar
            echo '<a href="'.RUTA_URL.'/miembros/inicio" class="btn btn-primary btn-lg w-100">Cancelar</a>';
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  // Cargamos el footer al final de la pagina
  require RUTA_APP . '/views/inc/footer.php';
?>
