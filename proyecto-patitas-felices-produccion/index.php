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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Js -->
    <script src="js/vendor/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
                    echo "<li class='loginu col-md-2 col-md-offset-10'><a href='pages/iniciarsesion.php'><span class='glyphicon glyphicon-log-in'></span> Iniciar sesión</a></li>";
                }else{
                    if($_SESSION['rol']==2){
                        echo "<li class='loginu col-md-2 col-md-offset-10'><a href='pages/indexAdmin.php'><span class='glyphicon glyphicon-log-in'></span>Menu</a></li>";
                    }
                    echo "<li class='loginu col-md-2 col-md-offset-10'><a href='pages/logout.php'><span class='glyphicon glyphicon-log-in'></span>Cerrar Sesión</a></li>";
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
                <a class="navbar-brand" href="index.php">
                  <img src="img/logo.png" alt="Logo">
                </a>
              </div>
               
              <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="above">Inicio</a></li>
                    <li><a href="pages/nosotros.php">Nosotros</a></li>
                    <li><a href="pages/mascotas.php">Mascotas</a></li>
                    <li><a href="pages/agenda.php">Agenda</a></li>
                    <li><a href="pages/contactenos.php">Contáctenos</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header><!-- header close -->
       
        
    <!-- Slider Start -->
    <section id="slider">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-2">
            <div class="block">
              <h1>PATITAS FELICES </h1> <br> <br> <br> 
              <p class="animated fadeInUp">Nuestros angelitos esperan por tí</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Wrapper Start -->
      <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-6" id="fondo">
          <h2>¿POR QUÉ ADOPTAR?</h2>
         <p> Cuando vas por la calle y logras ver a algún perro o gato caminando sin rumbo alguno, ¿no te has puesto a pensar qué será de su vida? <br>
          Las mascotas no son objetos inanimados sin sentimientos ni juguetes para divertirse un rato y luego ser relegados al olvido, son seres vivos con derechos que deben ser respetados y tratados con toda la consideración posible.<br>
          Las mascotas adoptadas suelen ser muy agradecidos y nobles por haber sido rescatados y reintegrados a una nueva familia, así que encontrarás un amigo fiel y muy cariñoso cada vez que entres por la puerta <br> </p>
	  <a href="pages/mascotas.php" class="btn btn-view-works">Ver mascotas</a>
        </div>
      </div>
    </div>
  </section>
        
    <!-- Service Start -->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <h2>AUSPICIANTES</h2>
            <p>Marcas reconocidas a nivel nacional e internacional que permiten una mejor vida para tus mascotas. Alimentos, medicinas, y todo lo que necesite tu perro o gato.</p>
          </div>
        </div>
        <div class="row ">
          <div class="col-sm-6 col-md-3">
           <h4>ProPlan</h4>
            <img src="img/ausp1.png">
			</div>        
                     
           <div class="col-sm-6 col-md-3">
              <h4>Bayer</h4>
               <img src="img/ausp2.png" >
            </div>
            
            <div class="col-sm-6 col-md-3">
              <h4>Purina</h4>
              <img src="img/ausp4.png">
            </div>
          
          <div class="col-sm-6 col-md-3">
              <h4>Royal Canin</h4>
              <img src="img/ausp3.png">
            </div>
          </div>
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
