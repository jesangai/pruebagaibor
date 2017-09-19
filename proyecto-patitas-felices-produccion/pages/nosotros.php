<?php
session_start();


?>
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Patitas felices</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        
    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Js -->
    <script src="../js/vendor/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   </head>
  <body>
    <!--  -->
   
   
  <!-- Header Start -->
  <header>
    <div class="container">
         <div id="user">
       		 <ul class="login">
             <?php
                if (!isset($_SESSION['user'])){
                    echo "<li class='loginu col-md-2 col-md-offset-10'><a href='iniciarsesion.php'><span class='glyphicon glyphicon-log-in'></span> Iniciar sesión</a></li>";
                }else{
                    if($_SESSION['rol']==2){
                        echo "<li class='loginu col-md-2 col-md-offset-10'><a href='indexAdmin.php'><span class='glyphicon glyphicon-log-in'></span>Menu</a></li>";
                    }
                    echo "<li class='loginu col-md-2 col-md-offset-10'><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span>Cerrar Sesión</a></li>";
                }
                 ?>
            
       		 </ul>
       	 </div>
      <div class="row">
        <div class="col-md-12">
         
          <!-- header Nav Start -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">
                  <img src="../img/logo.png" alt="Logo">
                </a>
              </div>
               
              <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="nosotros.php"class="above">Nosotros</a></li>
                    <li><a href="mascotas.php">Mascotas</a></li>
                    <li><a href="agenda.php">Agenda</a></li>
                    <li><a href="contactenos.php">Contáctenos</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header><!-- header close -->
       
        
    <!-- Slider Start -->
    
    
    <!-- Wrapper Start -->
  <section id="nosotros">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-0 col-md-3">
           <img src="../img/nosotros-huella.png"  class="img-responsive">
         </div>  
        <div class="col-md-6 col-md-offset-3" id="fondo">
         
        <h2>¿QUIÉNES SOMOS?</h2>
              <p>Patitas Felices es un proyecto que permite la adopcion de mascotas con el fin de encontrarles un nuevo hogar donde reciban mucho amor y cariño. <br>
		      Nuestro equipo ofrecemos nuestro servicio para el bien de la comunidad. Estamos ubicados en la ciudad Guayaquil - Ecuador.<br> <br>
		      Nosotros nos interesamos en el bienestar de la comunidad y de los animales. Somos efectivos en buscar y solucionar inconvenientes al momento de elegir su mascota.<br>
		      Adaptamos nuestro proyecto a las necesidades mas importantes del cliente y nos sentimos orgullosos de los resultados.</p>
		   </div>
      </div>
		 
      
      <div class="row">
        <div class="col-md-6 col-md-offset-0"id="fondo">
         
        <h2>¿QUÉ HACEMOS?</h2>
              <p>Este servicio web que ofrecemos tiene como finalidad el registro, brindar información y adopción de mascotas en línea. Guardamos la información necesaria del animal para poder ser adoptado. Involucramos nuestra experiencia en animales para hacer que ésta página sea amigable con la comunidad.</p>
		  </div>	   
	     </div>
      
      
       <div class="row">
        <div class="col-md-6 col-md-offset-6"id="fondo">
         
        <h2>¿POR QUÉ ELEGIRNOS?</h2>
              <p>Te ayudamos a elegir tu mascota acorde a tus gustos. Ofrecemos una interfaz predictible con fácil navegación para el cliente. Además, hacemos que la búsqueda de su nueva mascota sea rápida. Informamos a la comunidad de nuevos eventos acerca del bienestar de los animales y actividades extras. <br> <br>
              Te ayudamos a elegir tu mascota acorde a tus gustos. Ofrecemos una interfaz predictible con fácil navegación para el cliente. Además, hacemos que la búsqueda de su nueva mascota sea rápida. Informamos a la comunidad de nuevos eventos acerca del bienestar de los animales y actividades extras</p>
		   </div>
      </div>
      
    </div>
  </section>
        
    
    
    <!-- Call to action Start -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block">
              <h2>¿YA TE ANIMASTE PARA ADOPTAR?</h2>             
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <!-- footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Todos los derechos reservados. By: WebDesign. 2017</p>
          </div>
        </div>
      </div>
    </footer>
            
            
  
            
    
    </body>
</html>
