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
                <a class="nav-link active" href="">Donde Estamos</a>
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
    <h2>Donde Estamos</h2>
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
    <!-- Columna 1: Dirección -->
    <div class="col-md-6 mb-4">
        <h5>Iglesia Santa María de la Vid – Logroño</h5>
        <p class="mb-1">C. Estambrera, 3</p>
        <p class="mb-1">26006 Logroño, La Rioja</p>
        <p class="mb-1">(+34) 941 24 52 05</p>      
    </div>

    <!-- Columna 2: Iframe -->
    <div class="col-md-6">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5887.325758270323!2d-2.4391093!3d42.456188499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5aab65e2d407b5%3A0x6ee5342b1d702ad9!2sIglesia%20de%20Santa%20Mar%C3%ADa%20de%20la%20Vid!5e0!3m2!1ses!2ses!4v1747323087464!5m2!1ses!2ses" 
        width="100%" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
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
  /* Títulos de los artículos (h5) */
  h5 {
      font-size: 1.3rem;
      color: #2D3E32; /* Verde oscuro */
      font-weight: bold;
  }
</style>