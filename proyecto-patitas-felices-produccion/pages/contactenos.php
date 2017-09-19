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
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="mascotas.php">Mascotas</a></li>
                    <li><a href="agenda.php">Agenda</a></li>
                    <li><a href="contactenos.php"class="above">Contáctenos</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header><!-- header close -->
       
        <!-- Slider Start -->
        <section id="global-header" id="alineacion">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block" id="alineacion">
                  <h2>Contáctenos</h2>
                  <p>Damos tu opinión, sugerencia. Califica nuestra página.</p>
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Correo electrónico">
                    </div>
                     <div class="form-group">
                      <input type="text" class="form-control" placeholder="País">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Ciudad">
                    </div>
                  </form>
                    <div class="col-md-6 col-sm-12">
                      <div class="block">
                        <form>
                          <div class="form-group-2">
                            <textarea class="form-control" rows="3" placeholder="Comentario"></textarea>
                          </div>
                          <button class="btn btn-default" type="submit">Enviar</button>
                        </form>
                     </div>
                   </div>
                   <div id="contact-box" class="row">
                     <div class="col-md-6 col-sm-12">
                       <div class="block">
                         <h2>Localización</h2>
                         <ul class="address-block">
                           <li>
                             <i class="fa fa-map-marker"></i>Guayaquil, Ecuador
                           </li>
                           <li>
                             <i class="fa fa-envelope-o"></i>Correro: pfelices@gmail.com
                           </li>
                           <li>
                             <i class="fa fa-phone"></i>Phone:+593 912 34567
                           </li>
                         </ul>
                      </div>
                   </div>
                   <div class="col-md-6 col-sm-12">
                     <div class="block">
                        <h2>Conoce nuestro equipo</h2>
                        <div class="col-sm-6 col-md-3">
                           <h4>Gloria</h4>
                           <h4>Alcívar</h4>
                           <img src="../img/gloria.png">
			</div>        
                        <div class="col-sm-6 col-md-3">
                           <h4>Nancy</h4>
                           <h4>Chalén</h4>
                           <img src="../img/nancy.png">
                        </div>
                        <div class="col-sm-6 col-md-3">
                           <h4>Jéssica</h4>
                           <h4>Gaibor</h4>
                           <img src="../img/jessica.png">
                        </div>
                        <div class="col-sm-6 col-md-3">
                           <h4>Andrea</h4>
                           <h4>Jurado</h4>
                           <img src="../img/andrea.png">
                        </div>
                    </div>
	          </div>
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
