DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMPP - Enviado</title>
    <link rel="icon" href="img/la mala negativo.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/botones.css">
    <link rel="stylesheet" href="css/estilos-contacto.css">
    <link rel="stylesheet" href="css/estilos-banda.css">
    <link rel="stylesheet" href="css/simplescrollup.css">
    <link rel="stylesheet" href="css/animate.css">
  </head>

  <body>
    <div class="contenedor">

      <div class="cabeza">
        <img src="img/la mala vieja (1).jpg" alt="logo de la productora en color rojo" class="animate">
      </div>

      <div class="banda">
        <ul>
          <li><a href="index.html" class="vinculo"><i class="menu">Inicio</i></a></li>
          <li><a href="servicios.html" class="vinculo"><i class="menu">Servicios</i></a></li>
          <li><a href="trabajos.html" class="vinculo"><i class="menu">Nuestros Trabajos</i></a></li>
          <li><a href="artistas.html" class="vinculo"><i class="menu">Artistas</i></a></li>
          <li><a href="contactos.html" class="vinculo"><i class="menu">Contactos</i></a></li>
        </ul>
      </div>

      <br>

      <?php
      $myemail = 'lamalaproducciones@gmail.com';
      $name = $_POST['nombre'];
      $email = $_POST['email'];
      $message = $_POST['mensaje'];

      $to = $myemail;
      $email_subject = "Nuevo mensaje: $subject";
      $email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
      $headers = "From: $email";

      mail($to, $email_subject, $email_body, $headers);
      echo "El mensaje se ha enviado correctamente";
      ?>

      <div class="cuerpo_gral">
        <div class="columna">
          <br>
          <br>
          <h2><img src="img/redes_png/whatsapp.png">Whatsapp</h2>
          <p>+54 (011) 1533756124</p>
          <br>
          <h2><img src="img/redes_png/email.png">Email</h2>
          <p>lamalaproducciones@gmail.com</p>
        </div>

        <div class="columna">
          <div class="cuerpo_A">
            <h3>Envianos un Mensaje</h3>
            <form class="" action="enviar.php" method="post">
              <input type="text" name="nombre" placeholder="NOMBRE">
              <input type="email" name="email" placeholder="CORREO">
              <br>
              <textarea type="text" name="mensaje" placeholder="MENSAJE"></textarea>
              <br>
              <input type="submit" name="enviar" value="ENVIAR">
            </form>
          </div>
        </div>
      </div>

      <br>
      <br>

      <div class="fin">
        <div class="redes">
          <a href="https://www.facebook.com/lamalapalabraproducciones" target="_blank"><img src="img/redes_png/facebook.png" class="boton-redes"></a>

          <a href="https://www.instagram.com/lamalapalabraproducciones" target="_blank"><img src="img/redes_png/instagram.png" class="boton-redes"></a>

          <a href="https://www.youtube.com/channel/UC22wIMZl0q2a5fhm-2w92Zw" target="_blank"><img src="img/redes_png/youtube.png"class="boton-redes"></a>
        </div>
      </div>

      <p><a href="index.html" class="boton">Inicio</a></p>
    </div>
    <a href="#up" class="simplescrollup__button simplescrollup__button--hide"><img src="img/up-arrow.png" alt="" width="60px" color="white" background-color="red"></a>
    <script src="js/simplescrollup.js"></script>
  </body>
</html>
