<?php
session_start();
if (isset($_SESSION['user'])){
    if($_SESSION['rol']==2){

                include_once("consultaCollector.php");
                $usuario = $_SESSION['MiSesion'];

                $consultaCollectorObj = new consultaCollector();
                $id_consulta =$_GET["id_consulta"];
                $id_reserva =$_GET["id_reserva"];
                $hora_consulta =$_GET["hora_consulta"];
                $descripcion =$_GET["descripcion"];
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
                                  <img src="../img/logo.png" alt="Logo">
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
                          <div class="col-md-10 col-md-offset-2">
                            <div class="block">


                <form action="saveUpdateConsulta.php" method="get">
                                        <h1 class="form-group">M O D I F I C A R &nbsp;&nbsp;&nbsp; C O N S U L T A</h1>
                            <?php

                                echo "<label>id_consulta</label>";		
                                echo "<div class='form-group'>";
                                echo "<input type='text' name='id_consulta' class='form-control' value='". $id_consulta . "' readonly>";
                                echo "</div>";





                                echo "<label>id_reserva</label>";		
                                echo "<div class='form-group'>";
                                echo "<input type='text' name='id_reserva' class='form-control' value='". $id_reserva . "' readonly>";
                                echo "</div>";


                                echo "<label>hora_consulta</label>";		
                                echo "<div class='form-group'>";
                                echo "<input type='text' name='hora_consulta' class='form-control' value='". $hora_consulta . "'>";
                                echo "</div>";

                                echo "<label>descripcion</label>";
                                echo "<div class='form-group'>";
                                echo "<input type='text' name='descripcion' class='form-control' value='". $descripcion . "'>";
                                echo "</div>";




                    echo "<button class='btn btn-default' type='submit'> GUARDAR-MODIFICACION </button>";

                            ?>                        
                                   </form>

                        <a href="readconsulta.php"><button class="btn btn-default btn-call-to-action">Regresar</button></a> 	           
                            </div>
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