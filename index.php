<!DOCTYPE html>
<html lang="VE-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/icons/jugador.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>portafolio</title>
</head>
<body>
    <header>
        <h2><a class="logo" href="#">Messi</a></h2>
        <nav>
            <a href="#inicio">¿Quien es Messi?</a>
            <a href="#Biografia">Biografia</a>
            <a href="#Estadisticas">Estadisticas</a>
            <a href="#logros">Logros y Títulos</a>
            <a href="#comentarios">Comentarios</a>
        </nav>


    </header>

    <section id="banner" class="banner">
        <img src="assets/images/descarga.jfif" alt="messi" class="img-banner">

    </section>

    <section id="inicio" class="quien">
        <h4>¿Quien es Messi?</h4>
        <p>Lionel Andrés Messi Cuccittini, nacido el 24 de junio de 1987 en Rosario, Argentina, es considerado uno de los mejores futbolistas de todos los tiempos.
            Desde niño mostró un talento excepcional, y a los 13 años viajó a España para unirse al FC Barcelona, donde comenzó una carrera llena de récords, títulos y momentos inolvidables.
            Su humildad, disciplina y amor por el fútbol lo convirtieron en un ícono mundial.</p>
        

    </section>

     <section id="Biografia" class="bibliography">
        <h4>Biografia</h4>
        <p>Lionel Andrés Messi Cuccittini nació el 24 de junio de 1987 en Rosario, Argentina. Desde muy pequeño demostró un talento excepcional para el fútbol. A los cinco años empezó a jugar en el club Grandoli, dirigido por su padre, y más tarde en Newell’s Old Boys, donde ya destacaba por su habilidad y visión de juego.</p>
        <p>A los 13 años viajó a España para unirse a las divisiones juveniles del FC Barcelona, club que apoyó su tratamiento médico por un problema hormonal. Allí comenzó una carrera legendaria: debutó con el primer equipo en 2004 y se convirtió en su máximo goleador histórico, conquistando numerosos títulos nacionales e internacionales.</p>
        <p>Messi ha ganado 8 Balones de Oro y es considerado uno de los mejores futbolistas de todos los tiempos. Su estilo de juego se caracteriza por la rapidez, el control del balón y su capacidad para definir en los momentos más importantes.</p>
        <img src="assets/images/Messi is the Ballon d'Or champion for the eighth time in his history.jfif" alt="balon_oro" class="messi">
        <p>En 2021 dejó el Barcelona y se unió al Paris Saint-Germain, y en 2023 comenzó una nueva etapa en el Inter Miami CF de la MLS. Con la Selección Argentina logró su sueño máximo: ganar la Copa América 2021 y el Mundial de Qatar 2022, consolidando su legado como una leyenda del fútbol mundial.</p>
        <p>Más allá de los logros deportivos, Messi es admirado por su humildad, su espíritu de superación y su compromiso solidario a través de la Fundación Leo Messi, dedicada a ayudar a niños y jóvenes en situación de vulnerabilidad.</p>
    </section>


    <section id="Estadisticas" class="statistics">
        <h4>📊 Estadísticas de Lionel Messi</h4>
        <table class="tabla-messi">
    <thead>
      <tr>
        <th>Competición</th>
        <th>Partidos</th>
        <th>Goles</th>
        <th>Asistencias</th>
        <th>Títulos</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>FC Barcelona</td>
        <td>778</td>
        <td>672</td>
        <td>303</td>
        <td>35</td>
      </tr>
      <tr>
        <td>Paris Saint-Germain</td>
        <td>75</td>
        <td>32</td>
        <td>35</td>
        <td>3</td>
      </tr>
      <tr>
        <td>Inter Miami CF</td>
        <td>50</td>
        <td>33</td>
        <td>20</td>
        <td>1</td>
      </tr>
      <tr>
        <td>Selección Argentina</td>
        <td>182</td>
        <td>106</td>
        <td>56</td>
        <td>5</td>
      </tr>
    </tbody>
  </table>

    </section>

    <section id="logros" class="achievements">
      <h4>🏆 Logros y Trofeos</h4>
      <ul class="lista-logros">
        <li>8 Balones de Oro (máximo ganador en la historia)</li>
        <li>6 Botas de Oro como máximo goleador europeo</li>
        <li>4 Champions League con el FC Barcelona</li>
        <li>10 Ligas de España</li>
        <li>7 Copas del Rey</li>
        <li>3 Supercopas de Europa</li>
        <li>3 Mundiales de Clubes</li>
        <li>Copa América 2021 con Argentina</li>
        <li>Mundial de Fútbol Qatar 2022 con Argentina</li>
        <li>Finalissima 2022 (Argentina vs Italia)</li>
      </ul>
    </section>

    <section>
      <!-- <video src="assets/video/messi_video_chiquito.MP4" autoplay loop></video> -->
      <!--profe no me dio chance para el video y ponerlo mas bonito pero ahi quedo, casi perfecto☹-->
    </section>


  <section id="comentarios" class="mt-5 bg-secondary text-white p-5 ">
    <div class="container-fluid">

      <?php
      include "controller/create_comment_controller.php"; 
      ?>

      <form class="col-lg-4" method="POST">
        <h3 class="text-center">Comentarios</h3>
        <div class="mt-4" >
          <label for="form_usuario" class="from-label">Usuario</label>
          <input type="text" class="form-control bg-secondary text-white" name="usuario">

        </div>
        <div class="mt-4">
          <label for="form_email" class="from-label">Email</label>
          <input type="text" class="form-control bg-secondary text-white"   name="email">

        </div>
        <div class="mt-4">
          <label for="form_comentario" class="from-label">Comentario</label>
          <textarea class="form-control bg-secondary text-white"  name="comentario"></textarea>
        </div>

        <button type="submit" class="btn btn-light mt-4" name="btn_enviar" value="ok" >Enviar</button>

      </form>
      <?php
        include "model/conn.php";
        $query = $conn->query("select * from comentarios");

      ?>

       <div class="mt-5">

        <h3 class="text-center mb-4">Comentarios Recientes</h3>

        <?php

        if ($query->num_rows == 0) {
            echo "<p class='text-center text-light'>No hay comentarios aún. ¡Sé el primero en comentar! 😊</p>";
        }

        while ($row = $query->fetch_assoc()) :
        ?>

        <div class="card bg-dark text-white mb-3 shadow">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo htmlspecialchars($row['usuario']); ?>
                </h5>

                <h6 class="card-subtitle text-secondary">
                    <?php echo htmlspecialchars($row['email']); ?>
                </h6>

                <p class="card-text mt-3">
                    <?php echo nl2br(htmlspecialchars($row['nota'])); ?>
                </p>

                <p class="text-end text-muted" style="font-size: 0.9rem;">
                     <?php echo $row['fecha']; ?>
                </p>

                <div class="d-flex justify-content-end">
                    <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning me-2">Editar</a>
                    <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                </div>
            </div>
        </div>

        <?php endwhile; ?>

      </div>
    </div>

  </section>

  <footer class="footer">
    <div class="footer-content">
      <p>© 2025 Lionel Messi | Todos los derechos reservados</p>
      <div class="redes">
        <a href="https://www.instagram.com/leomessi" target="_blank">Instagram</a>
        <a href="" target="_blank">X</a>
        <a href="https://www.facebook.com/leomessi" target="_blank">Facebook</a>
      </div>
    </div>
  </footer>


</body>
</html>