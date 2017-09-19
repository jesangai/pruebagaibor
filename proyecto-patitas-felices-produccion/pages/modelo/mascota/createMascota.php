<?php
session_start();
if (isset($_SESSION['user'])){
    if($_SESSION['rol']==2){

            include_once("mascotaCollector.php");
            $mascotaCollectorObj = new mascotaCollector();
            ?>

            <!DOCTYPE html>
            <html class="no-js">
              <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>Administrador - Mascota- Patitas felices</title>
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">


                <!-- CSS -->
                <link rel="stylesheet" href="../../../css/bootstrap.min.css">
                <link rel="stylesheet" href="../../../css/style.css">
                <link rel="stylesheet" href="../../../css/responsive.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

                <!-- Js -->
                <script src="../../../js/vendor/jquery-1.10.2.min.js"></script>
                <script src="../../../js/bootstrap.min.js"></script>
               </head>
              <body>
                <!--  -->


              <!-- Header Start -->
              <header>
                <div class="container">
                     <div id="user">
                         <ul class="login">
                          <li class='loginu col-md-2 col-md-offset-10'><a href='../../logout.php'><span class='glyphicon glyphicon-log-in'></span>Cerrar Sesión</a></li>
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
                            <a class="navbar-brand" href="../../../index.php">
                              <img src="../../../img/logo.png" alt="Logo">
                            </a>
                          </div>

                          <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right">
                                <li><a href="../../../index.php">Inicio</a></li>
                                <li><a href="../../nosotros.php">Nosotros</a></li>
                                <li><a href="../../mascotas.php">Mascotas</a></li>
                                <li><a href="../../agenda.php">Agenda</a></li>
                                <li><a href="../../contactenos.php">Contáctenos</a></li>
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
                 <section id="contact-form">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-10 col-md-offset-1">
                        <div class="block"><center>
                          <form action="saveMascota.php" method="get">
                              <h1 class="form-group">C R E A R &nbsp;&nbsp;&nbsp;  M A S C O T A</h1>
                                    <div class="form-group">
                                      <input type="text" name="nombre" class="form-control" placeholder="Nombre de la mascota">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="raza" class="form-control" placeholder="Raza de la mascota">
                                    </div>
                        <div class="form-group">
                                      <input type="text" name="color" class="form-control" placeholder="Color de la mascota">
                                    </div>
                        <div class="form-group">
                                      <input type="text" name="sexo" class="form-control" placeholder="Sexo de la mascota">
                                    </div>
                                    <div class="form-group">
                                      <input type="date" name="fecha_nacimiento" class="form-control" placeholder="Fecha de nacimiento de la mascota aa/mm/dd">
                                    </div>
                        <div class="form-group">
                                    <input type="submit" name="imagen" class="form-control" value="Cargar imagen...">
                                    </div>
                        <div class="form-group">
                                      <input type="text" name="id_estado" class="form-control" placeholder="Estado de la mascota">
                                    </div>
                                    <button class="btn btn-default" type="submit"> Siguiente </button>
                                     </form>
                    </center>        
                        </div> <br>
                    <center> <a href="../../indexAdmin.php"><button class="btn btn-default btn-call-to-action">Regresar</button></a>   </center>
                      </div>
                    </div>
                  </div>
                 </section>
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
<?php
        
    }else{
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
    }
}else{
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
}
    
?>