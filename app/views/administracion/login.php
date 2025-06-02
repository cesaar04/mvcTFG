<?php 
  // Cargamos el header previamente
  require RUTA_APP . '/views/inc/header.php';
?>

<div class="container">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
        <div class="card p-4" style="width: 18rem;">
            <h3 class="text-center mb-4">Iniciar Sesión</h3>

            <!-- Mostrar errores de permisos desde la sesión -->
            <?php if (isset($_SESSION['permisoError'])): ?>
                <div class="alert alert-danger text-center">
                    <?php 
                    echo $_SESSION['permisoError'];
                    unset($_SESSION['permisoError']); // Limpiar el error después de mostrarlo
                    ?>
                </div>
            <?php endif; ?>

            <!-- Mostrar error único si existe -->
            <?php if (!empty($datos['uniqueError'])): ?>
                <div class="alert alert-danger text-center">
                    <?php echo $datos['uniqueError']; ?>
                </div>
            <?php endif; ?>

            <!-- Formulario de inicio de sesión -->
            <form action="<?php echo RUTA_URL; ?>/logins/acceder" method="POST">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario<sup class="text-danger fw-bold">*<?php echo $datos['usuarioError'] ?? ''; ?></sup></label>
                    <input type="text" class="form-control" id="usuario" name="usuario"
                        value="<?php echo $datos['usuario'] ??  ''; ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="contrasena" class="form-label">Contraseña<sup class="text-danger fw-bold">*<?php echo $datos['contrasenaError'] ?? ''; ?></sup></label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena" 
                        value="<?php echo $datos['contrasena'] ?? ''; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
            </form>

            <!-- Botón para volver a la vista home -->
            <div class="mt-3 text-center">
                <a href="<?php echo RUTA_URL; ?>/administracion/home" class="btn btn-warning w-100 bg-warning">Volver al Home</a>
            </div>
        </div>
    </div>
</div>
<style>
    /* Estilo general para la página de login */
    body {
    background-image: url('https://raw.githubusercontent.com/cesaar04/DIW/refs/heads/main/imgTFG/parroquia.webp');
    background-position: center center; /* Centra la imagen */
    background-attachment: fixed; /* Mantiene la imagen fija al hacer scroll */
    background-size: cover; /* Cubre todo el cuerpo sin perder la proporción */
    background-repeat: no-repeat; /* No repite la imagen */
    font-family: 'Arial', sans-serif;
    color: #333;
    min-height: 90vh; /* Asegura que el body tenga al menos la altura completa de la ventana */
    margin: 0; /* Elimina márgenes por defecto */
    }

    /* Diseño de la tarjeta del formulario */
    .card {
        border-radius: 10px;
        border: none;
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Título del formulario */
    .card h3 {
        color: #2D3E32; /* Verde oscuro */
        font-weight: bold;
        font-size: 1.8rem;
    }

    /* Bordes de las entradas */
    .form-control {
        border-radius: 8px;
        border: 1px solid #ddd;
        box-shadow: none;
    }

    .form-control:focus {
        border-color: #3498db; /* Azul brillante */
        box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25); /* Sombra azul clara */
    }

    /* Label de los inputs */
    .form-label {
        color: #555;
    }

    /* Mensajes de error */
    .alert {
        border-radius: 8px;
        padding: 10px;
    }

    .alert-danger {
        background-color: #f8d7da; /* Rojo claro */
        border-color: #f5c6cb;
        color: #721c24; /* Rojo oscuro */
    }

    /* Estilo del botón de "Ingresar" */
    .btn-primary {
        background-color: #4CAF50; /* Verde */
        border-color: #4CAF50;
        border-radius: 8px;
        padding: 10px;
        font-weight: bold;
    }

    .btn-primary:hover {
        background-color: #45a049; /* Verde más oscuro */
        border-color: #45a049;
    }

    /* Botón "Volver al Home" */
    .btn-warning {
        background-color: #f39c12; /* Naranja brillante */
        border-color: #f39c12;
        border-radius: 8px;
        padding: 10px;
        font-weight: bold;
    }

    .btn-warning:hover {
        background-color: #e67e22; /* Naranja más oscuro */
        border-color: #e67e22;
    }


    /* Estilos adicionales */
    sup {
        font-size: 0.8rem;
        color: #e74c3c; /* Rojo para mostrar los errores */
    }

    /* Alineación y espaciado */
    .d-flex {
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

</style>