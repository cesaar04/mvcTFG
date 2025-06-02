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
                <a class="nav-link active" href="">Historia</a>
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
  <h2>Historia del GS 7 Valles de la Vid</h2>
  
    <!-- Historia acerca del grupo -->
      <section class="mt-4">
        <!-- Incios del grupo -->
        <article>
          <h5>Inicios del Grupo Scout 7 Valles de la Vid</h5>
          <p>Este grupo fue fundado en el año 2013, cuando un cura riojano reunió a un equipo educativo de 4 adultos de la iglesia de San Pablo para que crearan un grupo de niños en la iglesia de 
          Santa María de la Vid, en el barrio de Cascajos. Desde el 2013 hasta la actualidad, este grupo ha visto pasar a muchos jóvenes del barrio o de otras partes de Logroño y también a muchos adultos,
           tanto para formar parte del grupo como para ser partícipe del equipo de monitores. En los inicios, en el grupo había un total de 8 jóvenes del barrio con los 4 monitores. 
          Como el grupo de jóvenes hacía actos de servicio hacia la parroquia del barrio, se dieron a conocer y, poco a poco, se fueron uniendo más y más niños. Actualmente, el Grupo Scout 7 
          Valles de la Vid, está rondando las 100 personas, contando a jóvenes y equipo educativo.</p>
    
          <p>Durante los 12 años de existencia del grupo scout, han pasado por sus filas muchos monitores, quienes eran y son amigos de aquellos que, hace muchos años ya, iniciaron este bonito y espectacular 
            proyecto para el barrio de Cascajos. También han pasado por el grupo muchos niños, algunos de los cuales, por una razón u otra, han dejado el grupo, pero otros nuevos han querido formar parte de él.
            Dado que el grupo, con los años, se ha ido dando a conocer en Logroño, actualmente cuentan con una lista de espera debido a la alta demanda de solicitudes. Aceptan a nuevos miembros, poco a poco, pero 
          no pueden recibir a todos, ya que la parroquia es tan pequeña que no tiene tienen espacio para tantas solicitudes.</p>

          <p>Como se mencionó antes, han pasado muchos monitores. Actualmente, existe una falta de monitores, por lo que el grupo ha tenido que recurrir a la rama de los más mayores, los rutas, para apoyar al equipo
            educativo. Los rutas se encargan de la rama de los más pequeños del grupo, la de los lobatos. Se ha recurrido a ellos por las razones mencionadas antes, pero también porque muchos de ellos llevan toda la
             vida en el grupo y, al llegar a un punto en el que, con los años, les ha gustado tanto ser acampados, quieren asumir otro rol dentro del grupo, el de ser monitor. Por ello, muchos de ellos han decidido 
             obtener el título de monitor de ocio y tiempo libre. Gracias a que los rutas han dado ese paso, el equipo de monitores tiene un respiro. Todo esto de recurrir a los rutas se debe a que los miembros del 
             equipo educativo tienen trabajo, hijos, y por lo tanto, disponen de poco tiempo. Por esta razón, se ha pedido ayuda a los rutas.</p>
        </article>

        <!-- Actualidad del grupo scout -->
        <article class="mt-5">
          <h5>Actualidad del Grupo Scout 7 Valles de la Vid</h5>
          <p>Actualmente, este grupo sigue siendo un gran referente en el mundo del escultismo en la Ciudad de Logroño y para toda La Rioja, manteniendo activo el espíritu de servicio, aventura y compañerismo que nos 
            caracteriza desde el principio del grupo. Tenemos a un gran equipo de responsables voluntarios muy comprometido y cerca de 100 niños, niñas y jóvenes que participan activamente en las diferentes ramas, 
            desde lobatos hasta rutas, pasando por exploradores y pioneros.
          </p>
          <p>El equipo educativo tiene un proyecto educativo que su pilar es la formación integral de los niños, niñas y jóvenes que están a su cargo. Este equipo hace una gran apuesta por el aprendizaje activo mediante
            los juegos, la vida en la naturaleza, el trabajo en equipo, las reflexiones y las dinámicas. Las actividades que se realizan, algunas las imparten los responsables, pero en otras ocasiones, son los propios chavales 
            los que proponen las actividades. En estas actividades lo que se busca no solo es el desarrollo personal de cada uno de los niños, las niñas y los jóvenes, sino también la implicación en la sociedad como ciudadanos
            ejemplares, responsables, solidarios, empáticos y críticos.</p>
          <p>Además, el grupo se encuentra en su mejor momento por la gran cantidad de niños, niñas y jóvenes que están deseando poder ser partícipes de este grupo scout. Este grupo ha reforzado la comunicación interna, los 
            monitores tienen mucha confianza entre ellos y sobre todo, mucha confianza con los niños que están a su cargo. Por otro lado, la comunicación externa también se ha reforzado con los años a través de las redes sociales,
            mejorando así la conexión con las familias y la comunidad. También se trabaja para mantener una base fuerte de responsables formados, lo que permite ofrecer un escultismo seguro, atractivo y coherente con los valores del 
            Movimiento Scout. </p>
          <p>En esta ronda solar, tras la renovación del grupo scout, con el rejuvenecimiento del equipo educativo, con la incorporación de los rutas, el equipo de monitores se ha hecho más fuerte y más unido que nunca. Hay mucha confianza
            entre cada uno de los miembros del equipo de responsables y el ambiente que hay entre ellos es el mejor que se podía dar. Por ello, en esta ronda solar, se han realizado nuevas cosas que se han ido perdiendo con los años, pero
            con la juventud que ha entrado, que tiene nuevas ideas, se han llevado a cabo las siguientes cosas que se habían perdido o cosas nuevas.
            <ul>
              <li><strong>Comité de Padres:</strong> este es un grupo de padres voluntarios de niñ@s y jóvenes pertenecientes al grupo, que el equipo educativo propone actividades o los padres proponen actividades para realizar a lo largo del año. También se 
                les cuenta, de que van a ir las convivencias, el San Jorge, la Luz de La Paz de Belén y el campamento de verano.
              </li>
              <li><strong>Cafés con las familias:</strong> actividad nueva que se ha empezado a hacer este año y sirve para hablar con los padres y que los padres vayan cogiendo confianza en el equipo de monitores. Se habla algo parecido que en el Comité de Padres, 
                pero está enfocado en que las familias den feedback de las opiniones que tienen ellos del grupo y de las opiniones de los niños, lo cual es muy importante para ir mejorando y cada vez hacer mejores actividades.
              </li>
            </ul>
          </p>
        </article>

        <!-- Actividades del grupo scout -->
        <article class="mt-5">
          <h5>Actividades más importantes del Grupo Scout 7 Valles de la Vid</h5>
          <p>A lo largo de los años, el grupo 7 Valles de La Vid, ha llevado a cabo numerrosas actividades que han marcado la historia del grupo y han fortalecido al grupo. A continuación, destacamos algunas de las actividades más importantes y significativas,
            tanto del pasado como de la actualidad, que reflejan el esfuerzo y el trabajo de muchos años. También reflejan el compromiso con la educación en valores, la aventura, el servicio a la comunidad y la fé en dios.
          </p>
          <p>Entre las numerosas actividades reaalizadas, las más memorables del pasado se encuentran las siguientes: 
            <ul>
              <li>La <strong>primera convivencia</strong>, realizada en Torrecilla en Cameros, en el 2013. Se realizó en la casa del cura que promovió a que se creará este grupo.</li>
              <li>El <strong>primer campamento</strong>, realizado en El Rasillo de Cameros, en el 2014. Se realizó en la casa que tiene la diocesis de La Rioja en ese pueblo.</li>
            </ul>
            Estas dos actividades son las primeras que se hicieron y supusieron un antes y un después en la historia del grupo por su participación masiva y la calidad del programa educativo. En el ámbito del barrio, el grupo organizó durante muchos años un 
            mercadillo solidario para donar la recaudación a una asociación de Logroño, en las que destacan, la donación a Arpa Autismo Rioja, asociación sin ánimo de lucro cuya misión es la defensa de los derechos de las personas con trastorno del espectro autista.
            También destaca la asociación de FARO, Asociación riojana de familiares y amigos de niños con cáncer.
          </p>
          <p>En la actualidad, este grupo sigue apostando por experiencias inolvidables para los chavales. Se han realizado campamentos en lugares como, Pedroso (2015), Islallana(2016,2017), Ventrosa (2018), Guetadar (Navarra en 2019), Travesía (2020,2021), 
            Peregrinación Europea de Jóvenes (2022) , Ventrosa(2023). Por último y la más especial para el grupo, la participación grupal en el campamento nacional, en el JamScout(2024). El grupo también participó en el anterior, pero solo fueron dos personas 
            más su responsable. Convivencias en sitios como Torrecilla de Cameros, Pedroso, El Rasillo, Islallana, Uruñuela, Labraza, Maristas,etc.</p>
        </article>
        <!-- Actividades que realizas por el grupo -->
         <article class="mt-4">
          <h5>Actividades realizadas durante estos 12 años de historia</h5>
          <p>Durante estos 12 años se han realizado muchas actividades. Actos de servicio hacia la parroquia, hacia la gente del barrio, hacia la gente de los pueblos en los que se han hecho convivencias 
          o campamentos, etc. A lo largo de la historia de este grupo se han realizado actividades muy chulas y bonitas, que muchas de ellas han marcado tanto a los jóvenes como al equipo educativo. Algún ejemplo:
            <ul>
                <li>Pisado de la uva en las fiestas de la parroquia</li>
                <li>Mercadillos en la parroquia para recaudar fondos para asociaciones de Logroño</li>
                <li>Talleres en Nazarret (evento de la Diócesis de Calahorra y La Calzada-Logroño, destinado para los niños de comunión)</li>
                <li>Campamentos y convivencias</li>
                <li>Participación en el último Jamscout (campamento de scouts de toda España, recientemente, el verano del 2024)</li>
            </ul>
          </p>
         </article>
    
        <!-- Participación en el JamScout -->
        <article class="mt-4">
          <h5>Participación en el JamScout</h5>
          <p>Este campamento se realizó en Soria, en Covaleda por el Movimiento Scout España. Participarón unas 5000 personas. En este campamento participaban todas las ramas, desde los más pequeños, los castores hasta los más mayores, los rutas. Eran campamentos por separado,
            pero englobados en uno. Estaba la sección de las tiendas de campaña de los castores, de los lobatos, de los exploradores, de los pioneros y de los rutas. Había activiades comunes en el centro del campamento que estaba el escenario principal, donde cabe recordar, que
            las 5000 personas vivieron la final de la Eurocopa de 2024, en la que España se proclamó campeona por cuarta vez en su historia y nuestro grupo lo vivió con gente de toda España, fue una experiencia inolvidable tanto para los chavales como para los resposables que iban
            con ellos.
          </p>
          <p>Durante este campameto, se hicieron muchas cosas, días de actividades acuáticas, actividades físicas, como tirolinas, escalada, etc. También había tallerres de la Guardia Civil, de la Federación Española de Deportes de Montaña y Escalada, también de primeros auxilios y 
            muchos más talleres muy interesantes. En este campamento estaba todo muy bien organizado por si pasaba algo, había mini hospitales por si pasaba algo, también puestos de primero auxilios, puntos de escucha por si pasaba algo más serio y muchas más cosas. Había dos comedores
            gigantes para dar comida por turnos a las 5000 personas y carpas para dar sombra ya que en el espacio del campamento no había mucha. En el campamento se dividiánn por subgrupos a todas las ramas y te tocaba con gente de tu misma edad de otras partes de España.
          </p>
          <p>Por supuesto, había tiempo para hacer raids, dias en mitad de campamento para hacer marchas por el monte, solo para los más mayores. También actos de servicios por las comunidades autónomas cercanas a Soria, había actos de servicio en Burgos, en Logroño y en más sitios. 
            En el caso de los rutas de nuestro grupo, se fueron a Soria, en el que estuvieron con su subgrupo que había gente de Salamanca, Murcia, Jeréz, Granada, Cádiz, Italia y Países Bajos. En este tiempo de servicio, hicieron muchos juegos, visita por Soria y también acto de servicio, limpieza del 
            entorno del río Duero.
            La noticia en el siguiente enlace, <a href="https://www.heraldodiariodesoria.es/soria/240716/174535/100-scouts-colaboran-recogida-basura-duero.html">Pulsa para ir a la noticia</a>
          </p>
        </article>
      </section>
</div>
<?php
  // Cargamos el footer al final de la pagina
  require RUTA_APP . '/views/inc/footer.php';
?>
<style>
  /* Título */
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

  /* Enlaces */
  a {
    color: #13b944;
  }
</style>