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
                <a class="nav-link active" href="">Quiénes Somos</a>
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
    <h2>Quiénes Somos</h2>
    <section>
        <article>
            <p>El <strong>grupo scout 7 Valles de la Vid</strong>, somos un grupo perteneciente al <strong>Movimiento Scout Riojano</strong> con más de <strong>12 años de historia</strong>. En la actualidad contamos con cerca de <strong>100 miembros</strong>, entre los cuales 20 personas realizan su labor pedagógica como responsables
            de manera voluntaria. Somos una <strong>asociación sin ánimo de lucro</strong>.
            </p>
            <p>Todos los grupos scouts estamos bajo el lema:</p>
            <div class="col-6 d-block mx-auto">
                <figure>
                  <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/logo-scout-mundial.png?raw=true" width="700" height="700" class="img-fluid" alt="Movimiento Scout Mundial">
                  <figcaption class="text-center"></figcaption>
                </figure>
            </div>
            <p>Se nos dintigue por los colores de nuestra pañoleta, <strong>el verde</strong> y el <strong>morado</strong>. El verde por los <strong>7 valles</strong> que hay en La Rioja y el morado por la <strong>uva</strong>, muy importante en nuestra comunidad.
             Con los colores de esta pañoleta, damos honor al nombre del grupo.</p>
            <p>Los grupos scouts nos caracterizamos por ser un conjunto de jóvenes que aprovechan su tiempo libre para disfrutar del <strong>contacto con la naturaleza</strong> y, además, llevar a cabo una <strong>formación en valores</strong>. Para lograr estas dos metas la principal herramienta es la motivación, el tener en cuenta los intereses y ritmos de los niños
            y las niñas.</p>
            <p>El objetivo principal es que disfruten de una manera de <strong>ocio diferente</strong>, siendo partícipes de su <strong>propia formación, trabajando en equipo, jugando</strong> y siempre <strong>avanzando</strong> en su progresión personal.</p>
            <p>Es difícil explicar con palabras todo lo que hacemos, pero mediante esta web vamos a intentar hacerlo lo mejor posible. Lo principal es que cada miembro del grupo es el protagonista de su aprendizaje y lo disfruta rodeado de <strong>amigas y amigos que llegan a convertirse en familia</strong>.</p>
            <div class="col-6 d-block mx-auto">
                <figure>
                  <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/lariojaMSRjpg.jpg?raw=true" width="700" height="700" class="img-fluid" alt="Movimiento Scout Riojano">
                  <figcaption class="text-center"></figcaption>
                </figure>
            </div>
        </article>
    </section>
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
</style>