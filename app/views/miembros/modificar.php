<?php 
  // Cargamos el header previamente
  require RUTA_APP . '/views/inc/header.php';
?>

<div class="container d-flex justify-content-center align-items-center">
  <div class="w-50 p-4 border rounded shadow-lg bg-light">
  
    <!-- Título arriba del formulario -->
    <h2 class="text-center text-dark">Editar Miembro</h2>
    
    <form action="<?php echo RUTA_URL; ?>/miembros/editarPorId/<?php echo $datos['id']?>" method="POST" class="w-100">

        <!-- ID (disabled) -->
        <div class="form-group mb-2">
            <label for="id" class="fw-bold text-dark">ID</label>
            <input type="text" class="form-control" name="id" value="<?php echo $datos['id']; ?>" disabled>
        </div>

        <!-- Documento de Identidad -->
        <div class="form-group mb-2">
            <label for="documento_identidad" class="fw-bold text-dark">Documento de Identidad 
              <sup class="text-danger">*<?php echo $datos['dniError']; ?></sup>
            </label>
            <input type="text" class="form-control" name="documento_identidad" value="<?php echo $datos['documento_identidad']; ?>">
        </div>

        <!-- ¿Qué eres?-->
        <div class="form-group mb-2">
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

                // Asegúrate de que el último elemento no se repita en el bucle
                for ($i = 0; $i < count($roles); $i++) {
                    echo '<option value="'.$roles[$i].'" '.($roles[$i] == $datos['rol'] ? 'selected' : '').'>'.$roles[$i].'</option>';
                }
                ?>
            </select>
        </div>

        <!-- Nombre -->
        <div class="form-group mb-2">
            <label for="nombre" class="fw-bold text-dark">Nombre 
              <sup class="text-danger">*<?php echo $datos['nombreError']; ?></sup>
            </label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $datos['nombre']; ?>">
        </div>

        <!-- Apellidos -->
        <div class="form-group mb-2">
            <label for="apellidos" class="fw-bold text-dark">Apellidos 
              <sup class="text-danger">*<?php echo $datos['apellidosError']; ?></sup>
            </label>
            <input type="text" class="form-control" name="apellidos" value="<?php echo $datos['apellidos']; ?>">
        </div>

        <!-- Email -->
        <div class="form-group mb-2">
            <label for="email" class="fw-bold text-dark">Email 
              <sup class="text-danger">*<?php echo $datos['emailError']; ?></sup>
            </label>
            <input type="text" class="form-control" name="email" value="<?php echo $datos['email']; ?>">
        </div>

        <!-- Teléfono -->
        <div class="form-group mb-2">
            <label for="telefono" class="fw-bold text-dark">Teléfono 
              <sup class="text-danger">*<?php echo $datos['telefonoError']; ?></sup>
            </label>
            <input type="text" class="form-control" name="telefono" value="<?php echo $datos['telefono']; ?>">
        </div>

        <!-- Dirección -->
        <div class="form-group mb-2">
            <label for="direccion" class="fw-bold text-dark">Dirección
            <sup class="text-danger">*<?php echo $datos['direccionError']; ?></sup>
            </label>
            <input type="text" class="form-control" name="direccion" value="<?php echo $datos['direccion']; ?>">
        </div>

        <!-- Fecha de Nacimiento -->
        <div class="form-group mb-2">
            <label for="fecha_nacimiento" class="fw-bold text-dark">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fecha_nacimiento" value="<?php echo date('Y-m-d', strtotime($datos['fecha_nacimiento'])); ?>">
        </div>

        <!-- Rama -->
        <div class="form-group mb-2">
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

                // Asegúrate de que el último elemento no se repita en el bucle
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

        <!-- Confirmación de Edición -->
        <h2 class="text-center fw-bolder text-warning mb-4">¿Estás seguro que deseas editar el cliente con ID <?php echo $datos['id']?>?</h2>
        
        <!-- Botones -->
        <div class="d-flex gap-2 justify-content-center">
            <input type="submit" class="btn btn-warning w-48" value="Editar Miembro">
            <a href="<?php echo RUTA_URL; ?>/miembros" class="btn btn-primary w-48">Cancelar</a>
        </div>

    </form>
  </div>
</div>

<?php
  // Cargamos el footer al final de la página
  require RUTA_APP . '/views/inc/footer.php';
?>
