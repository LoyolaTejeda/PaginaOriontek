<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>

    <?php
    require_once ("dependencias.php");
    ?>

  <meta charset="utf-8">
  <title>PORTAFOLIO</title>

</head>


<body>



<header class="">
  <nav class="navbar navbar-expand-md navbar-light bg-light btn-lg">
    <div class="container-fluid">
      <a class="navbar-brand btn-close-white" href="#"><img title="Ir a Orienteck" src="recursos/img/LogoPortafolio.png" alt="Orienteck"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--- Navegacion Portafolio----->
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-2 " style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#SOBREMI">Sobre mi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#HABILIDADES">Habilidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#PORTAFOLIO">Portafolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#CONTACTAME">Contactame</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="index.php">Oriontek</a>
            </li>
        </ul>

        <!--- Seccion Redes Sociales ----->
        <section class="d-flex bg-light">
          <div class="form-control toast-header justify-content-center">
            <label class="me-lg-3" for="">REDES</label>


            <a target="_blank" class="me-lg-1 m-3" href="https://wa.me/+18094291545"><img title="WhatsApp" src="recursos/Icon/whatsapp.png" alt="WhatsApp"></a>
            <a target="_blank" class="me-lg-1 m-3" href="#"><img title="Linkedin" src="recursos/Icon/linkedin-icon-32x32.png" alt="Linkedin"></a>
            <a target="_blank" class="me-lg-1 m-3" href="mailto:ca.loyola.tejeda@gmail.com"><img title="Email" src="recursos/Icon/email-icon-32x32.png" alt="Email"></a>
            <a  class="me-lg-1 m-3" href="#"><img title="FaceBook" src="recursos/Icon/facebook%2032.png" alt="FaceBook"></a>
          </div>
        </section>

      </div>
    </div>
  </nav>
</header>


<!--- Linea morada para crear un espacio divisor entre el header y el cuerpo ----->
<div  class="header p-1 bg-opacity-10">
</div>


<!--- Cover - Perfil ----->
<section class="cover" style="background-image: url(recursos/img/portada.png)">
  <div class="cover-wrapper">
    <!--- Cover - contenedor Foto ----->
    <div class="cover-foto-container">
      <img src="https://scontent.fhex4-2.fna.fbcdn.net/v/t1.6435-9/49380628_2173722909358561_6954561902114504704_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=apKXm35WBvwAX_W9xTO&_nc_ht=scontent.fhex4-2.fna&oh=2de9d2c7cb59c0ba3924ea1f30c347ba&oe=61752FB3"
           class="cover-foto" alt="Carlos A. Loyola Tejeda" height="150" title="Carlos A. Loyola Tejeda" id="Mifoto" >
    </div>

    <!--- Cover - Contenedor Texto ----->
    <div class="cover-text">
      <h2 class="cover-title">Carlos A. Loyola Tejeda</h2>
      <h1 class="cover-sub-title">Ingeniero En Sistema</h1>
    </div>
  </div>
</section>

<!--- Seccion Sobre Mi ----->
<section id="SOBREMI" class="aboutme">

  <header>
    <h1 class="title-underline">
      <span>Sobre mi</span>
    </h1>
  </header>

  <!--- Sobre Mi - Descripcion ----->
  <div class="cover-description">
    <p>Lorem ipsum dolor sit amet, <span>consectetur adipisicing elit</span>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, <span>consectetur adipisicing elit, sed do eiusmod tempor</span> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <!--- Sobre Mi - Boton Contactame ----->
    <div class="text-center">
      <a href="mailto:ca.loyola.tejeda@hotmail.com" class="btn-blue" >Contactame</a><!--https://www.facebook.com/turealentregaoo.nobulltoo-->
    </div>

  </div>
</section>

<!--- Seccion de Habilidades Sobre mi  ----->
<section id="HABILIDADES" class="skills">
  <header>
    <h1 class="title-underline">
      <span>Habilidades</span>
    </h1>
  </header>

  <!--- Contenedor progresos ----->
  <ul class="skills-wrapper">

    <!--- Progreso HTML ----->
    <li class="skills-item">
      <div class="skills-text">
        <span class="skills-name">HTML</span>
        <span class="skills-score">90%</span>
      </div>
      <div class="skills-bar">
        <div class="skills-bar-fulling" style="width:90%;"></div>
      </div>
    </li>

    <!--- Progreso CSS ----->
    <li class="skills-item">
      <div class="skills-text">
        <span class="skills-name">css</span>
        <span class="skills-score">50%</span>
      </div>
      <div class="skills-bar">
        <div class="skills-bar-fulling" style="width:50%">

        </div>
      </div>
    </li>

    <!--- Progreso JavaScript ----->
    <li class="skills-item">
      <div class="skills-text">
        <span class="skills-name">JavaScript</span>
        <span class="skills-score">75%</span>
      </div>
      <div class="skills-bar">
        <div class="skills-bar-fulling" style="width:75%">

        </div>
      </div>
    </li>

  </ul>
</section>

<!--- Seccion Mi portadolio o mis trabajos realizados... ----->
<section id="PORTAFOLIO" class="works">
  <header>
    <h1 class="title-underline">
      <span>Portafolio</span>
    </h1>
  </header>
  <div class="works-wrapper">

    <!--- Articulo HTML5 Portafolio ----->
    <article class="works-item">
      <div class="works-item-img-container">
        <img src="recursos/img-portafolio/html5-css3-PNG.png" alt="Trabajo desarrollo de pagina web" class="works-item-img">
      </div>
      <div class="works-item-description">
        <header>
          <h2 class="works-item-title">Html5 & CSS</h2>
        </header>
        <p class="works-item-client">Para <a href="#" target="_blank">Nuestro Cliente</a> </p>
        <div class="text-center">
          <a href="#" class="btn-blue" target="_blank">Visitar web</a>
        </div>
      </div>
    </article>


    <!--- Articulo SQL Server Portafolio ----->
    <article class="works-item">
      <div class="works-item-img-container">
        <img src="recursos/img-portafolio/SQL-PNG.png" alt="Trabajo desarrollo de pagina web" class="works-item-img">
      </div>
      <div class="works-item-description">
        <header>
          <h2 class="works-item-title">DB Sql server</h2>
        </header>
        <p class="works-item-client">Para <a href="#" target="_blank">Nuestro Cliente</a> </p>
        <div class="text-center">
          <a href="#" class="btn-blue" target="_blank">Visitar web</a>
        </div>
      </div>
    </article>

    <!--- Articulo VB Portafolio ----->
    <article class="works-item">
      <div class="works-item-img-container" id="Experiencia">
        <img src="recursos/img-portafolio/logo_visualbasic.png" alt="Trabajo desarrollo de pagina web" class="works-item-img">
      </div>
      <div class="works-item-description">
        <header>
          <h2 class="works-item-title">Visual Basic</h2>
        </header>
        <p class="works-item-client">Para <a href="#" target="_blank">Nuestro Cliente</a> </p>
        <div class="text-center">
          <a href="#" class="btn-blue" target="_blank">Visitar web</a>
        </div>
      </div>
    </article>
  </div>
</section>


<!--- Seccion de Contacto ----->
<section id="CONTACTAME" class="Contact">

  <header>
    <h1 class="title-underline">
      <span>Contactame</span>
    </h1>
  </header>

  <!--- Formulario Contactame. ----->
  <form class="contact-form" action="datos.php" method="post">
    <!-- <form class="contact-form" action="index.html" method="post"> -->
    <div class="contact-row">
      <div class="contact-column left">
        <div class="">
          <label for="useremail">Correo</label>
        </div>

        <div class="">
          <input type="email" class="contact-input" id="useremail" name="nombre" value="" required>
          <!-- <input type="email" class="contact-input" id="useremail" name="useremail" value="" required> -->
        </div>
      </div>

      <div class="contact-column right">
        <div class="">
          <label for="username">nombre</label>
        </div>
        <div class="">
          <input type="text" class="contact-input" id="username" name="correo" value="" required>
          <!-- <input type="text" class="contact-input" id="username" name="username" value="" required> -->
        </div>
      </div>

    </div>

    <!--- Contenedor del mensaje ----->
    <div class="contact-row">
      <div class="contact-column --width100">
        <div class="">
          <label for="usermessage">Mensaje</label>
        </div>
        <textarea id="usermessage" name="mensaje" rows="3" cols="40" required></textarea>
        <!-- <textarea id="usermessage" name="usermessage" rows="3" cols="40" required></textarea> -->
      </div>
    </div>

    <!--- Contenedor boton enviar ----->
    <div class="text-center">
      <input class="btn-blue" type="submit" value="Enviar">
    </div>
  </form>
</section>

<!--- seccion del foother... ----->
<footer class="footer">
  <div class="footer-wrapper">
    <div id="fb-root"></div>

    <!--- Script boton crear boton compartir ----->
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- bonton de compartir -->
    <div class="fb-share-button"
         data-href="https://www.facebook.com/carlosAlbertoLoyolaTejeda/"
         data-layout="button_count">
    </div>

    <p class="footer-text">
      Hecho por <a href="https://play.google.com/store" target="_blank" class="link">Carlos A. Loyola Tejeda</a>
    </p>
    <p>
    <address class="footer-text-envoltura">
      ca.loyola.tejeda@gmail.com
    </address>
    </p>
    <p>
      <small class="Derechos-reservados">Copyright (c) 2018 Copyright Holder All Rights Reserved.</small>
    </p>
  </div>
</footer>

    <!-- </body> -->

</body>

</html>