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
                    <li><a href="mascotas.php"class="above">Mascotas</a></li>
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
    <section id="global-header">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block" id="alineacion">
                  <h1>PASOS PARA ADOPTAR</h1>
          
            <div class="col-sm-6 col-md-4">
            <img src="../img/search.png" width="260" height="180" alt="Img">
            <h4>Encuentra a tu mascota favorita</h4>
	    </div>        
                     
           <div class="col-sm-6 col-md-4">
              <img src="../img/cursor.png" width="260" height="180" alt="Img">
              <h4>Selecciona tu próxima mascota e infómate</h4>
            </div>
            
            <div class="col-sm-6 col-md-4">
              <img src="../img/check.png" width="260" height="180" alt="Img">
              <h4>Listo. Tu nueva mascota quiere conocerte.</h4>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       
    <br><br><br>
    <!-- Clients Logo Section Start -->
    <section id="clients-logo-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block" id="alineacion">
             <div class="col-sm-6 col-md-3">
             <img src="../img/pet1.jpg">
           	<h5>Capu</h5>
		</div>        
                     
           <div class="col-sm-6 col-md-3">
             <img src="../img/pet2.jpg">
           <h5>Fito</h5>
			</div> 
            
           <div class="col-sm-6 col-md-3">
             <img src="../img/pet3.jpg">
           <h5>George</h5>
			</div> 
		  
		  <div class="col-sm-6 col-md-3">
             <img src="../img/pet4.jpg">
           <h5>Lolo</h5>
			</div>        
			  </div>
			</div>
		  </div>
          
           <div class="row">
          <div class="col-md-12">
            <div class="block"id="alineacion">
                     
            <div class="col-sm-6 col-md-3">
             <img src="../img/pet5.jpg">
           <h5>Pablo</h5>
			</div> 
           
            <div class="col-sm-6 col-md-3">
             <img src="../img/pet6.jpg">
           <h5>Sasha</h5>
			</div>        
                     
            <div class="col-sm-6 col-md-3">
             <img src="../img/pet7.jpg">
           <h5>Oso</h5>
			</div> 
            
             <div class="col-sm-6 col-md-3">
             <img src="../img/pet8.jpg">
           <h5>Zeus</h5>
			</div> 
			  </div>
			</div>
		  </div>
       
       <div class="row">
          <div class="col-md-12">
            <div class="block"id="alineacion">
            
            
             <div class="col-sm-6 col-md-3">
             <img src="../img/pet9.jpg">
           <h5>Mickey</h5>
			</div> 
			    <div class="col-sm-6 col-md-3">
             <img src="../img/pet10.jpg">
           <h5>Didi</h5>
			</div>        
                     
            <div class="col-sm-6 col-md-3">
             <img src="../img/pet11.jpg">
           <h5>Camilo</h5>
			</div> 
            
             <div class="col-sm-6 col-md-3">
             <img src="../img/pet12.jpg">
           <h5>Luna</h5>
			</div> 
        
      </div>
    </section>
    <br><br>
  
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
