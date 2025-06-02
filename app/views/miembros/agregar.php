<?php 
  // Cargamos el header previamente
  require RUTA_APP . '/views/inc/header.php';
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh;">
  <div class="w-75 p-4 border rounded shadow-lg bg-light">
    <h2 class="text-center mb-4 text-dark">Agregar Participante</h2>
    <form action="<?php echo RUTA_URL; ?>/miembros/agregar" method="POST" enctype="multipart/form-data" class="w-100">
      
      <!-- Documento de Identidad -->
      <div class="form-group mb-3">
        <label for="documento_identidad" class="fw-bold text-dark">Documento de Identidad 
          <sup class="text-danger">*<?php echo $datos['dniError']; ?></sup>
        </label>
        <input type="text" class="form-control" name="documento_identidad" placeholder="El DNI: 8 números y 1 letra. Ejemplo: 12345678A" 
               value="<?php echo $datos['documento_identidad']; ?>">
      </div>

      <!-- ¿Qué eres? -->
      <div class="form-group mb-3">
        <label for="rol" class="fw-bold text-dark">Selecciona tu rol:
          <sup class="text-danger">*<?php echo $datos['rolError']; ?></sup>
        </label>
        <select name="rol" id="rol" class="form-control">
          <?php
            $fichero = RUTA_APP . "../../public/rol.txt";

            if (!file_exists($fichero)) {
                log_error("El archivo $fichero no existe. Asegúrate de que se haya generado.");
                die("El archivo $fichero no existe. Asegúrate de que se haya generado.\n");
            }

            $fp = fopen($fichero, "r");
            $roles = [];
            while (!feof($fp)) {
                $rol = fgets($fp);
                if ($rol !== false) {
                    array_push($roles, trim($rol));
                }
            }
            fclose($fp);

            for ($i = 0; $i < count($roles); $i++) {
              echo '<option value="'.$roles[$i].'" '.($roles[$i] == $datos['rol'] ? 'selected' : '').'>'.$roles[$i].'</option>';
            }
          ?>
        </select>
      </div>

      <!-- Nombre -->
      <div class="form-group mb-3">
        <label for="nombre" class="fw-bold text-dark">Nombre 
          <sup class="text-danger">*<?php echo $datos['nombreError']; ?></sup>
        </label>
        <input type="text" class="form-control" name="nombre" placeholder="Introduce tu nombre" 
               value="<?php echo $datos['nombre']; ?>">
      </div>

      <!-- Apellidos -->
      <div class="form-group mb-3">
        <label for="apellidos" class="fw-bold text-dark">Apellidos 
          <sup class="text-danger">*<?php echo $datos['apellidosError']; ?></sup>
        </label>
        <input type="text" class="form-control" name="apellidos" placeholder="Introduce tus apellidos" 
               value="<?php echo $datos['apellidos']; ?>">
      </div>

      <!-- Email -->
      <div class="form-group mb-3">
        <label for="email" class="fw-bold text-dark">Email 
          <sup class="text-danger">*<?php echo $datos['emailError']; ?></sup>
        </label>
        <input type="email" class="form-control" name="email" placeholder="Introduce tu email" 
               value="<?php echo $datos['email']; ?>">
      </div>

      <!-- Teléfono -->
      <div class="form-group mb-3">
        <label for="telefono" class="fw-bold text-dark">Teléfono 
          <sup class="text-danger">*<?php echo $datos['telefonoError']; ?></sup>
        </label>
        <input type="text" class="form-control" name="telefono" placeholder="Introduce tu número" 
               value="<?php echo $datos['telefono']; ?>">
      </div>

      <!-- Dirección -->
      <div class="form-group mb-3">
        <label for="direccion" class="fw-bold text-dark">Dirección 
          <sup class="text-danger">*<?php echo $datos['direccionError']; ?></sup>
        </label>
        <input type="text" class="form-control" name="direccion" placeholder="Introduce tu dirección" 
               value="<?php echo $datos['direccion']; ?>">
      </div>

      <!-- Fecha de Nacimiento -->
      <div class="form-group mb-3">
        <label for="fecha_nacimiento" class="fw-bold text-dark">Fecha de Nacimiento 
          <sup class="text-danger">*</sup>
        </label>
        <input type="date" class="form-control" name="fecha_nacimiento" 
               value="<?php echo date('Y-m-d', strtotime($datos['fecha_nacimiento'])); ?>">
      </div>

      <!-- Fotografía -->
      <div class="form-group mb-3">
        <label for="fotografia" class="fw-bold text-dark">Fotografía 
          <sup class="text-danger">*<?php echo $datos['fotografiaError']; ?></sup>
        </label>
        <input type="file" class="form-control" name="fotografia">
      </div>

      <!-- Rama -->
      <div class="form-group mb-3">
        <label for="rama" class="fw-bold text-dark">Rama 
          <sup class="text-danger">*<?php echo $datos['ramaError']; ?></sup>
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

      <!-- Login -->
      <div class="form-group mb-3">
          <label for="usuario" class="fw-bold text-dark">Login: 
             <sup class="text-danger">*<?php echo $datos['usuarioError']; ?></sup>
          </label>
          <input type="text" class="form-control" name="usuario" placeholder="Introduce tu login" value="<?php echo $datos['usuario']; ?>">
      </div>

      <div class="form-group mb-3">
          <label for="contrasena" class="fw-bold text-dark">Contraseña: 
            <sup class="text-danger">*<?php echo $datos['contrasenaError']; ?></sup>
          </label>
          <input type="password" class="form-control" name="contrasena" placeholder="Introduce tu contrasena" value="">
      </div>

      <!-- Botones -->
      <div class="d-flex justify-content-between mt-4">
        <a href="<?php echo RUTA_URL; ?>/miembros" class="btn btn-primary w-48">Volver</a>
        <input type="submit" value="Agregar Participante" class="btn btn-success w-48">
      </div>
    </form>
  </div>
</div>

<?php 
  // Cargamos el footer al final
  require RUTA_APP . '/views/inc/footer.php';
?>
