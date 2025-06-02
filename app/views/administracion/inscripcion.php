<?php 
  // Cargamos el header previamente
  require RUTA_APP . '/views/inc/header.php';

  // Verificar si el usuario está logueado
  if (!isset($_SESSION['usuarioLogueado'])) {
    $_SESSION['permisoError'] = "No tienes permisos para acceder a esta página.";
    header("Location: " . RUTA_URL . "/logins/index");
    exit();
  }

  // Si no hay sesión o el usuario no es admin, redirigir
  if (!isset($_SESSION['usuario2'])) {
      $_SESSION['permisoError'] = "No tienes permisos para acceder a esta página.";
      header("Location: " . RUTA_URL . "/logins/index");
      exit();
  }

  // Mostrar mensaje de error si existe
  if (isset($_SESSION['permisoError'])) {
      echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
              <strong>¡Error!</strong> ' . $_SESSION['permisoError'] . '
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
      unset($_SESSION['permisoError']);
  }

?>

<div class="container">
    <h2 class="text-center mb-5 text-uppercase font-weight-bold">Inscripción a Actividad</h2>
    <form action="<?php echo RUTA_URL; ?>/actividades/hacerInscripcion" method="post" class="invoice-container p-5 border rounded shadow-lg bg-white">
        <div class="row mb-5">
            <div class="col-md-6">
                <h4 class="font-weight-bold mb-3">Datos del Miembro</h4>
                <div class="border-left pl-4 bg-light p-4 rounded mas-Alto">
                    <ul class="list-unstyled">
                        <li><strong>DNI: </strong><?php echo $_SESSION['dni']?></li>
                        <li><strong>Nombre: </strong><?php echo $_SESSION['nombre']?></li>
                        <li><strong>Apellidos: </strong><?php echo $_SESSION['apellidos']?></li>
                        <li><strong>Email: </strong><?php echo $_SESSION['email']?></li>
                        <li><strong>Teléfono: </strong><?php echo $_SESSION['telefono']?></li>
                        <li><strong>Dirección: </strong><?php echo $_SESSION['direccion']?></li>
                        <li><strong>Fecha de Nacimiento: </strong><?php echo $_SESSION['fechaNacimiento']?></li>
                        <li><strong>Foto: </strong><img src="<?php echo RUTA_URL . $_SESSION['foto']?>" alt="Imagen del usuario" height="80" width="80"></li>
                        <li><strong>Rama: </strong><?php echo $_SESSION['rama']?></li>
                        <li><strong>Rol: </strong><?php echo $_SESSION['rol']?></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="font-weight-bold mb-3">Características de la actividad</h4>
                <div class="border-left pl-4 bg-light p-4 rounded mas-Alto">
                    <ul>
                        <li><strong>Nombre de la actividad: </strong><?php echo $_SESSION['nombreActividad']?></li>
                        <li><strong>Lugar: </strong><?php echo $_SESSION['lugar']?></li>
                        <li><strong>Fecha inicio: </strong><?php echo $_SESSION['fecha_inicio']?></li>
                        <li><strong>Fecha final: </strong><?php echo $_SESSION['fecha_fin']?></li>
                        <li><strong>Máximo Participantes: </strong><?php echo $_SESSION['cantidad_personas']?></li>
                        <li><strong>Descripción: </strong><?php echo $_SESSION['descripcion']?></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-2">
                <button type="submit" class="btn btn-success btn-lg px-5 py-3">Apuntarse</button>
                <a href="<?php echo RUTA_URL . '/logins/salir'; ?>" class="btn btn-danger btn-lg px-5 py-3">Salir</a>
            </div>
        </div>
    </form>
</div>

<!-- CSS personalizado para un diseño aún más sofisticado -->
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f3f4f6;
        color: #4a4a4a;
    }

        h2 {
        color: #008527;
        font-size: 3rem;
        font-weight: 600;
        letter-spacing: 1px;
    }

    h4 {
        color: #008527;
        font-size: 1.4rem;
        margin-bottom: 10px;
    }

    .border-left {
        border-left: 4px solid #008527;
    }

    .rounded {
        border-radius: 8px;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-success {
        font-size: 1.2rem;
        font-weight: 600;
        padding: 12px 35px;
        border-radius: 25px;
    }

    .btn-danger {
        font-size: 1.2rem;
        font-weight: 600;
        padding: 12px 35px;
        border-radius: 25px;
    }

    ul li {
        list-style: none;
        font-size: 1.1rem;
        margin-bottom: 8px;
        line-height: 1.6;
    }

    .font-weight-bold {
        font-weight: 600;
    }
    .mas-Alto {
        height: 90%;
    }
</style>

