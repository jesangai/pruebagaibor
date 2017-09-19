<?php
session_start();
if (isset($_SESSION['user'])){
    if($_SESSION['rol']==2){
        

            $id_mascota=$_GET["id_mascota"];
            $nombre=$_GET["nombre"];
            $raza=$_GET["raza"];
            $color=$_GET["color"];
            $sexo=$_GET["sexo"];
            $fecha_nacimiento=$_GET["fecha_nacimiento"];
            $imagen=$_GET["imagen"];
            $id_estado=$_GET["id_estado"];

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
                  <div class="container">
                    <div class="row">
                      <div class="col-md-10 col-md-offset-2">
                        <div class="block">
                          <form action="saveUpdateMascota.php" method="get">
                                    <h1 class="form-group">M O D I F I C A R &nbsp;&nbsp;&nbsp;  M A S C O T A</h1>
                        <?php
                            echo "<label>IdMascota</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' name='id_mascota' class='form-control' value='". $id_mascota . "' readonly>";
                            echo "</div>";
                            echo "<label>Nombre</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $nombre . "' name='nombre'>";
                            echo "</div>";	
                            echo "<label>Raza</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $raza . "' name='raza'>";
                            echo "</div>";
                            echo "<label>Color</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $color . "' name='color'>";
                            echo "</div>";
                            echo "<label>Sexo</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $sexo . "' name='sexo'>";
                            echo "</div>";
                            echo "<label>Fecha de nacimiento</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='date' class='form-control' value='". $fecha_nacimiento . "' name='fecha_nacimiento'>";
                            echo "</div>";
                            echo "<label>Imagen</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $imagen . "' name='imagen'>";
                            echo "</div>";
                            echo "<label>Id Estado</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $id_estado . "' name='id_estado'>";
                            echo "</div>";
                            echo "<a href='saveUpdateMascota.php?id_mascota=". $id_mascota ."'><button class='btn btn-default' type='submit'> Siguiente </button>";

                        ?>                        
                               </form>
                    <a href="../../indexAdmin.php"><button class="btn btn-default btn-call-to-action">Regresar</button></a> 	           
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
<?php
        
    }else{
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
    }
}else{
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
}
    
?>