<?php 
  // Cargamos el header previamente
  require RUTA_APP . '/views/inc/header.php';

// Si no hay sesión o el usuario no es admin, redirigir
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']->rol !== 'admin') {
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

<div class="container text-center mt-5">
    <!-- Título principal con tipografía profesional -->
    <h1 class="display-4 mb-4 text-dark font-weight-bold">Panel de Administración</h1>
    <p class="lead text-muted mb-4">Selecciona una opción para continuar</p>

    <!-- Sección de enlaces principales con tarjetas más elegantes -->
    <div class="row justify-content-center">
        <!-- Tarjeta de Clientes -->
        <div class="col-md-4 mb-4">
            <a href="<?php echo RUTA_URL; ?>/jovenes/inicio" class="card border-light rounded-3 text-decoration-none shadow-lg hover-card hover-shadow  p-4">
                <div class="card-body p-4">
                    <h4 class="card-title text-dark fw-bold">Jóvenes</h4>
                    <p class="card-text text-muted">Gestión de jóvenes y sus datos.</p>
                </div>
            </a>
        </div>
        <!-- Tarjeta de Miembros -->
        <div class="col-md-4 mb-4">
            <a href="<?php echo RUTA_URL; ?>/miembros/Inicio" class="card border-light rounded-3 text-decoration-none shadow-lg hover-card hover-shadow  p-4">
                <div class="card-body p-4">
                    <h4 class="card-title text-dark fw-bold">Miembros</h4>
                    <p class="card-text text-muted">Informacion de todos los miembros</p>
                </div>
            </a>
        </div>
        <!-- Tarjeta de Vehículos -->
        <div class="col-md-4 mb-4">
            <a href="<?php echo RUTA_URL; ?>/monitores/Inicio" class="card border-light rounded-3 text-decoration-none shadow-lg hover-card hover-shadow p-4">
                <div class="card-body p-4">
                    <h4 class="card-title text-dark fw-bold">Monitores</h4>
                    <p class="card-text text-muted">Gestión de monitores y sus datos.</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Botón de cerrar sesión con diseño corporativo -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            <a href="<?php echo RUTA_URL; ?>/logins/salir" class="btn btn-danger btn-lg w-100 text-white shadow-sm hover-bg-danger hover-shadow">
                Cerrar Sesión
            </a>
        </div>
    </div>
</div>
<!-- Agrega el siguiente estilo CSS si es necesario -->
<style>
    
    .hover-shadow:hover {
        transform: scale(1.05);
        transition: all 0.3s ease;
    }
    
</style>

