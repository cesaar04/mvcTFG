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
                <a class="nav-link active" href="">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="<?php echo RUTA_URL; ?>/paginas/historia">Historia</a>
              </li>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Ramas</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                  </ul>
                </li>
              </ul>
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
          <!-- Botón de iniciar sesión -->
          <a href="<?php echo RUTA_URL; ?>/logins/acceder" class="btn btn-primary btn-lg ms-3">
            Iniciar Sesión
          </a>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <!-- Título 'Bienvenido a nuestra página' alineado a la izquierda -->
    <h2 class="text-center">  
      <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/montes.png?raw=true" width="40" height="40" alt="Valles">
      <img src="https://raw.githubusercontent.com/cesaar04/DIW/refs/heads/main/imgTFG/uva.webp" width="40" height="40" alt="Racimo de uva">
      Grupo Scout 7 Valles de la Vid
      <img src="https://raw.githubusercontent.com/cesaar04/DIW/refs/heads/main/imgTFG/uva.webp" width="40" height="40" alt="Racimo de uva">
      <img src="https://github.com/cesaar04/DIW/blob/main/imgTFG/montes.png?raw=true" width="40" height="40" alt="Valles">
    </h2>
    
    <!-- Seccion Informacion General -->
    <section>
        <h4>Información General</h4>
        <div class="container">
          <!-- ¿Qué es un grupo scout? -->
          <article>
            <h5>¿Qué es un grupo Scout?</h5>
            <p>Un <strong>grupo scout</strong> es una asociación sin ánimo de lucro formada por un equipo educativo de monitores que promueven el desarrollo integral de los jóvenes de entre 9 y 21 años mediante
            actividades al aire libre, trabajo en equipo y, lo más importante, valores cristianos. Cada grupo sigue el escultismo, un método educativo que promueve el trabajo en pequeños grupos y 
            en contacto con la naturaleza. Este método fue creado por Baden-Powel, fundador de los scouts.
            </p>
          </article>

          <!-- ¿Quién es Baden Powell? -->
          <article>
            <h5>¿Quién es Baden-Powel?</h5>
            <p>Robert Stephenson Smyth Baden-Powell, más conocido como <strong>Baden-Powell (1857–1941)</strong>, fue un militar y escritor británico, fundador del Movimiento Scout Mundial. Ganó popularidad por su destacada participación
               en campañas militares en África, especialmente por su liderazgo en la defensa de Mafeking. A su regreso al Reino Unido, se convirtió en un reconocido autor en temas de educación y juventud, destacando su obra <i>Escultismo
                para muchachos</i>, la cual inspiró la formación espontánea de patrullas juveniles y marcó el inicio informal del escultismo.</p>
            <p>Tras dejar el ejército, alentado por el rey Eduardo VII, Baden-Powell se dedicó completamente al desarrollo del movimiento scout, promoviendo su expansión global. Escribió numerosos libros adaptados a las diferentes edades
               y niveles de participación scout, facilitando el aprendizaje de jóvenes en todo el mundo. Fue ampliamente reconocido por su labor y, tras su retiro, se estableció en Kenia con su esposa, donde falleció y fue enterrado. 
               Su mensaje a los scouts, <strong>«Intenten dejar este mundo mejor de como lo encontraron»</strong>, resume el objetivo esencial del escultismo.</p>
            <p><strong>Información sacada de Wikipedia. <a href="https://es.wikipedia.org/wiki/Robert_Baden-Powell">Pulsar aquí para saber más información de Baden-Powel</a>.</strong></p>
          </article>

          <!-- ¿Cuándo llegan los scouts a España? --> 
          <article>
            <h5>¿Cuándo llegan los scouts a España?</h5>
            <h6>64 años de historia</h6>
            <p>En España, la primera estructura supradiocesana de coordinación del escultismo católico <strong>nació el 7 de mayo de 1961</strong>, bajo el nombre de Movimiento Scout Católico (MSC). Este movimiento fue erigido canónicamente por la Conferencia 
              Episcopal Española el <strong>6 de julio de 1973</strong> y está estructurado como una federación de asociaciones scouts católicas. Actualmente, está presente en todas las comunidades autónomas y en la mayoría de las diócesis españolas.</p>
            <p>En <strong>1978</strong>, el MSC pasó a formar parte de la <strong>Organización Mundial del Movimiento Scout</strong>. Desde sus inicios, su objetivo ha sido formar adultos libres, mentes críticas y personas comprometidas con su entorno, la sociedad y la fe católica.</p>
            <p>El escultismo, definido como una institución de educación no formal, ha sido reconocido por el fundador de los Exploradores en España, Teodoro de Iradier, quien expresó en sus escritos que “el escultismo es la vida al aire libre, 
              el aprendizaje de cosas útiles, la ejecución de obras buenas.”</p>
            <p><strong>Información sacada de la página web de Scouts MSC España. <a href="https://scouts.es/historia-scouts-msc/">Pulse aquí para más información</a>.</strong></p>
          </article>

          <!-- ¿Cuántos scouts hay en España? -->
          <article>
              <h5>¿Cuántos scouts hay en España?</h5>
              <h6>Más de 25.000 scouts</h6>
              <p>En la actualidad, el escultismo en España está presente en <strong>16 comunidades autónomas</strong>, con más de <strong>6.000 adultos voluntarios</strong> y más de <strong>25.000 scouts</strong> comprometidos con dejar 
                  el mundo en mejores condiciones de como lo encontraron, una prioridad desde la fundación del grupo. Incluso antes de reconocerse como ecologistas, ya actuaban con esa conciencia.</p>
              <p>Desde sus inicios, el movimiento scout se ha reunido para <strong>educar en el tiempo libre mediante actividades lúdicas</strong>, fomentando la capacidad de afrontar dificultades con optimismo y buena actitud.</p>
              <p>Se educan para la vida, con el objetivo de <strong>crecer como mejores personas</strong>, <strong>impulsar el cambio social</strong> y construir un <strong>mundo más justo para todos</strong>.</p>
              <p>El espíritu scout se basa en una <strong>sensibilidad hacia la mejora colectiva</strong> del mundo, con entusiasmo por aprender jugando, ser curiosos, valientes, y mantener vivos los sueños y el deseo de compartir.</p>
              <p>Las palabras de <strong>Baden-Powell</strong>, halladas tras su muerte, reflejan la esencia del escultismo: Dios nos puso en un mundo lleno de belleza para disfrutarlo y ser felices, pero la verdadera felicidad está en <strong>ser 
                  útiles, sanos y ayudar a los demás</strong>. Recomienda <strong>valorar lo que se tiene</strong>, buscar siempre el <strong>lado positivo</strong> y apreciar la naturaleza como reflejo de la grandeza del mundo.</p>
              <p><strong>Información sacada de la página web de Scouts MSC España. <a href="https://scouts.es/historia-scouts-msc/">Pulse aquí para más información</a>.</strong></p>
          </article>
          <!-- Símbolos más imporantes -->
          <article>
            <h5>Símbolos más importantes</h5>
            <p>Los símbolos generales más importantes de los scouts son los siguientes:</p>
              <ul>
                  <li><strong>Saludo:</strong> este saludo esta formado por tres dedos arriba, que significan, lealtad, abengacion y pureza. Luego esta el dedo gordo encima del meñique, que significa, el fuerte protege al débil.
                  Aunque hay una excepción porque los castores y los lobeznos, cuando saludan, solo levantas dos dedos y como doblados hacia abajo. Los lobatos, tienen dos dedos hacia arriba, completamente estirados. lo de los tres
                  dedos hacia arriba es a partir de la rama de exploradores.</li>
                  <li><strong>Flor de lis:</strong> es la insignia representativa del Escultismo.</li>
                  <li><strong>Pañoleta:</strong> es el símbolo más importante para un grupo.</li>
                  <li><strong>Camisa:</strong> símbolo más identificativo para cada rama.</li>
                  <li><strong>Bandera:</strong> símbolo más identificativo para cada rama y para el grupo.</li>
                  <li><strong>Ley Scout:</strong> es el principio fundamental que guía la vida de los scouts. Se considera uno de los pilares más importantes del movimiento, ya que establece los valores y comportamientos que todo 
                  scout debe seguir.</li>
              </ul>
          </article>          

          <!-- Ramas scout -->
          <article>
            <h5>Ramas de los scouts</h5>
            <p>Los grupos scouts, los jóvenes se dividen por rango de edades. En total hay 5 ramas en los scouts. Después de pasar por las 5 ramas, tienes la opción si quieres de convertirte en monitor de ocio y tiempo
              libre de tu grupo. Las <strong>ramas de los scouts</strong> son las siguientes:</p>
              <table class="table table-striped table-bordered custom-table">
                <thead>
                  <tr>
                    <th>Rama</th>
                    <th>Rango de Edad</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>Castores</strong></td>
                    <td>6 a 8 años</td>
                  </tr>
                  <tr>
                    <td><strong>Lobatos</strong></td>
                    <td>9 a 11 años</td>
                  </tr>
                  <tr>
                    <td><strong>Exploradores</strong></td>
                    <td>12 a 14 años</td>
                  </tr>
                  <tr>
                    <td><strong>Pioneros</strong></td>
                    <td>15 a 17 años</td>
                  </tr>
                  <tr>
                    <td><strong>Rutas</strong></td>
                    <td>18 a 23 años</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="2" class="text-center"><strong>Información sacada de la página de Scouts MSC España. <a href="https://scouts.es/unete-scouts-msc/">Pincha Aquí para más información</a></strong></td>
                  </tr>
                </tfoot>
              </table>
          </article>

          <!-- Actividades más imporantes de los grupos -->
          <article>
            <h5>Actividades más importantes de los grupos</h5>
            <table class="table table-striped table-bordered custom-table">
                  <tbody>
                    <tr>
                      <td><strong>Convivencia de invierno: </strong>En esta actividad se reune a todo el grupo por primera vez en todo el año, a los tres meses de haber comenzado la ronda solar, en el mes de noviembre, para que 
                      los nuevos integrantes del grupo conozcan a los demás que lo forman.</td>
                    </tr>
                    <tr>
                      <td><strong>Luz de la Paz de Belén: </strong>Este es uno de los actos más importantes y preciosos del año. Este evento empieza cuando un niño austriaco va a Belén para coger la luz de Jesús y la lleva a 
                      Viena, donde una congregación de scout de una parte de España(cada año de distintas partes de España), va a recogerla a Viena, la trae a España, a la ciudad de donde sea dicha congregación, se reparte y se lleva 
                      a todas las comunidades de España, para repartirlas con las familias scouts y los habitantes de la ciudad. Los scouts se encargan de organizar el acto. Se invita a cargos politicos, a los scouts de ASDE(los scouts
                      no católicos), familias de los scouts y a los habitantes de la ciudad.</td>
                    </tr>
                    <tr>
                      <td><strong>Convivencia de primavera: </strong> La segunda convivencia del año, donde los grupos pequeños se han hecho fuertes y trabajan muy bien en equipo y en esta convivencia se realiza para las personas nuevas que
                      han entrado nuevas al grupo en Marzo. Cada convivencia se suele intentar hacer en un sitio distinto, pero es dificl porque el grupo  ya es muy grande y es muy díficl meter a casi 80 personas en una casa, asi que a veces,
                      se tiene que repetir sitio. Aunque se repita sitio, los jóvenes, están encantados.</td>
                    </tr>
                    <tr>
                      <td><strong>San Jorge: </strong>Es un acto que se reliza a nivel regional y se juntan los dos grupos scouts que hay en La Rioja, el grupo scout La Calzada, de Santo Domingo de La Calzada y el grupo scout 7 Valles de la Vid.
                      En este acto se celebra en familia el dia del patrón de los scouts, San Jorge. Es un dia en familia, donde en ese día se hace participes a las familias de los niños, se hace un paseo por la mañana, se va a misa, se come y por
                      la tarde gynkana, la despedida, y cada uno de vuelta a casa.</td>
                    </tr>
                    <tr>
                      <td><strong>Campamento de verano: </strong> Es la actividad más importante de año. Una semana muy intensa, mucha alegría, diversión, muchas emociones y un broche final perfecto para poner punto y final a la ronda solar. En este 
                      se realizan actividades por el monte, travesías, manualidades, muchos juegos. El campamento se enfoca en una temática cada año diferente y se decora con dicha tematica. Se hacen actividades de agua en piscina, 
                      en el río, en el propia campamento con guerra de agua, etc. Lo más imporante llega cuando se realiza a mitad de campamento el paso de rama, cuando las personas que pasan de rama, se les remueven todos los sentimientos que han
                      vivido durante los años que han estado en la rama de la que se van, en resumen, es un acto precioso. En definitiva, el campamento es el evento más importante del año.</td>
                    </tr>
                  </tbody>
              </table>
          </article>
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

/* Enlaces */
a {
  color: #568162;
}

/* Sección de artículos */
article {
    margin-bottom: 2%;
}

/* Títulos de los artículos (h4) */
h4 {
    font-size: 1.5rem;
    color: #2D3E32; /* Verde oscuro */
    font-weight: bold;
}

/* Títulos de los artículos (h5) */
h5 {
    font-size: 1.3rem;
    color: #2D3E32; /* Verde oscuro */
    font-weight: bold;
}

/* Subtítulos de los artículos (h6) */
h6 {
    font-size: 1.2rem;
    color: #666; /* Gris oscuro */
}

/* Párrafos */
p {
    font-size: 1rem;
    color: #333; /* Gris oscuro */
}

/* Tabla */
table {
    width: 100%;
    margin-top: 2%;
    margin-bottom: 2%;
}

th, td {
    text-align: left;
    padding: 10px;
}

th {
    background-color: #F4F4F4; /* Gris suave */
    color: #2D3E32;
}

td {
    background-color: #fff;
    color: #333;
}

table.table-striped tbody tr:nth-child(odd) {
    background-color: #f2f2f2;
}

table.table-bordered {
    border: 1px solid #ddd;
}

tfoot td {
    background-color: #F4F4F4;
    text-align: center;
}


/* Margen entre las secciones */
section {
    margin-top: 2%;
    margin-bottom: 2%;
}


</style>