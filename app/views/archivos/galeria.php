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
                <a class="nav-link active" href="">Galería</a>
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
  <h2 class="mb-4">Galería</h2>
  <div class="container">
    <div class="container">
      <section>
        <article>
          <h5>Símbolos más importantes</h5>
          <div class="container mt-4">
            <!-- Primera fila -->
            <div class="row text-center">
              <div class="col-4">
                <figure>
                  <img src="https://raw.githubusercontent.com/cesaar04/DIW/refs/heads/main/imgTFG/saludoscout.webp" 
                      class="img-fluid d-block mx-auto" 
                      alt="Saludo scout">
                  <figcaption>Saludo Scout (Imagen sacada de la página historiadescouts.es)</figcaption>
                </figure>
              </div>
              <div class="col-4">
                <figure>
                  <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/lis.jpg?raw=true" 
                      class="img-fluid d-block mx-auto" width="175" height="175" 
                      alt="Flor de Lis Scout">
                  <figcaption>Flor de Lis Scout (Imagen sacada de la página de Scout MSC España)</figcaption>
                </figure>
              </div>
              <div class="col-4">
                <figure>
                  <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/calasanz.jpg?raw=true" 
                      class="img-fluid d-block mx-auto" 
                      alt="Pañoleta Scout">
                  <figcaption>Pañoleta Scout (Imagen sacada de la página de Scout MSC España)</figcaption>
                </figure>
              </div>
            </div>

            <!-- Segunda fila -->
            <div class="row mt-3 text-center mb-4">
              <div class="col-4">
                <figure>
                  <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/progreso-personal-y-simbologia.jpg?raw=true" 
                      class="img-fluid d-block mx-auto uniform-img" 
                      alt="Camisa Scout">
                  <figcaption>Camisa Scout (Imagen sacada de la página oficial de Scouts MSC España)</figcaption>
                </figure>
              </div>
              <div class="col-4">
                <figure>
                  <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/world-scout.jpg?raw=true" 
                      class="img-fluid d-block mx-auto uniform-img" 
                      alt="Bandera Scout OMMS">
                  <figcaption>Bandera Scout (Imagen sacada de la página todobanderas)</figcaption>
                </figure>
              </div>
              <div class="col-4">
                <figure>
                  <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/bandera.jpg?raw=true" 
                      class="img-fluid d-block mx-auto uniform-img" 
                      alt="Bandera Scouts MSC">
                  <figcaption>Bandera Scout (Imagen sacada de la página oficial de Scouts MSC España)</figcaption>
                </figure>
              </div>
            </div>
            <h5>Artículos ley scout</h5>
            <div class="mt-4">
              <!-- Primera fila -->
              <div class="row mt-4">
                <div class="col-6 d-block mx-auto">
                  <figure>
                    <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/ley-scout-1.jpg?raw=true" class="img-fluid"alt="Artículo 1">
                    <figcaption class="text-center">Artículo 1 (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
                  </figure>
                </div>
                <div class="col-6 d-block mx-auto">
                  <figure>
                    <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/ley-scout-2.jpg?raw=true" class="img-fluid" alt="Artículo 2">
                    <figcaption class="text-center">Artículo 2 (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
                  </figure>
                </div>
              </div>

              <!-- Segunda fila -->
              <div class="row mt-4">
                <div class="col-6 d-block mx-auto">
                  <figure>
                    <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/ley-scout-3.jpg?raw=true" class="img-fluid" alt="Artículo 3">
                    <figcaption class="text-center">Artículo 3 (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
                  </figure>
                </div>
                <div class="col-6 d-block mx-auto">
                  <figure>
                    <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/ley-scout-4.jpg?raw=true" class="img-fluid" alt="Artículo 4">
                    <figcaption class="text-center">Artículo 4 (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
                  </figure>
                </div>
              </div>

              <!-- Tercera fila -->
              <div class="row mt-4">
                <div class="col-6 d-block mx-auto">
                  <figure>
                    <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/ley-scout-5.jpg?raw=true" class="img-fluid" alt="Artículo 5">
                    <figcaption class="text-center">Artículo 5 (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
                  </figure>
                </div>
                <div class="col-6 d-block mx-auto">
                  <figure>
                    <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/ley-scout-6.jpg?raw=true" class="img-fluid" alt="Artículo 6">
                    <figcaption class="text-center">Artículo 6 (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
                  </figure>
                </div>
              </div>

              <!-- Cuarta fila -->
              <div class="row mt-4 ">
                <div class="col-6 d-block mx-auto">
                  <figure>
                    <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/ley-scout-7.jpg?raw=true" class="img-fluid" alt="Artículo 7">
                    <figcaption class="text-center">Artículo 7 (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
                  </figure>
                </div>
                <div class="col-6 d-block mx-auto">
                  <figure>
                    <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/ley-scout-8.jpg?raw=true" class="img-fluid" alt="Artículo 8">
                    <figcaption class="text-center">Artículo 8 (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
                  </figure>
                </div>
              </div>

              <!-- Quinta fila -->
              <div class="row mt-4">
                <div class="col-6 d-block mx-auto">
                  <figure>
                    <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/ley-scout-9.jpg?raw=true" class="img-fluid" alt="Artículo 9">
                    <figcaption class="text-center">Artículo 9 (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
                  </figure>
                </div>
                <div class="col-6 d-block mx-auto">
                  <figure>
                    <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/ley-scout-10.jpg?raw=true" class="img-fluid" alt="Artículo 10">
                    <figcaption class="text-center">Artículo 10 (Imágen sacada de la página oficial de Scouts MSC España)</figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article>

        </article>
      </section>
      <p class="mt-4">Si deseas ver las imágenes de las actividades, de los eventos, de los actos de servicio, de plazos para inscribirse al grupo, noticias o cualquier otra cosa que hagamos,
      lo único que tienes que hacer es...</p>
      <h5>Seguirnos en nuestras redes sociales</h5>
      <ul>
        <li><a href="https://www.instagram.com/gruposcout7valles/?hl=esa">Cuenta de Instagram</a></li>
        <li><a href="https://www.facebook.com/scouts7Valles/?locale=es_ES">Cuenta de Facebook</a></li>
        
      </ul>
    </div>
    
  </div>
</div>
<?php
  // Cargamos el footer al final de la pagina
  require RUTA_APP . '/views/inc/footer.php';
?>
<style>
  .uniform-img {
    width: 400px;
    height: 300px;
    border-radius: 15px;
  }
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