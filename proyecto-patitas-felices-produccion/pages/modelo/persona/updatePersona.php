<?php
session_start();
if (isset($_SESSION['user'])){
    if($_SESSION['rol']==2){

            //$usuario = $_SESSION['MiSesion'];

            $id_persona=$_GET["id_persona"];
            $nombre=$_GET["nombre"];
            $direccion=$_GET["direccion"];
            $apellido=$_GET["apellido"];
            $usuario=$_GET["usuario"];
            $pass=$_GET["pass"];
            $correo=$_GET["correo"];
            $fecha_nacimiento=$_GET["fecha_nacimiento"];
            $id_rol=$_GET["id_rol"];

            include_once("PersonaCollector.php");
            $PersonaCollectorObj = new PersonaCollector();

            ?>

            <!DOCTYPE html>
            <html class="no-js">
                <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>Persona</title>
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">


                 <!-- CSS -->

                <link rel="stylesheet" href="../../../css/bootstrap.min.css">
                <link rel="stylesheet" href="../../../css/animate.css">
                <link rel="stylesheet" href="../../../css/style.css">
                <link rel="stylesheet" href="../../../css/responsive.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

            <!-- Js -->
                <script src="../../../js/vendor/jquery-1.10.2.min.js"></script>
                <script src="../../../js/bootstrap.min.js"></script>
                </head>
            <body>
                <?php
                      //if (isset($_SESSION['MiSesion'])){
            //	              $usuario = $_SESSION['MiSesion'];
                ?>

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
                                        <img class="navbar-brand" src="../../../img/logo.png" alt="Logo" >
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                      <ul class="nav navbar-nav navbar-right">
                                        <li><a href="../../../index.php">Inicio</a></li>
                                        <li><a href="../../nosotros.php">Nosotros</a></li>
                                        <li><a href="../../mascotas.php" >Mascotas</a></li>
                                        <li><a href="../../agenda.php">Agenda</a></li>
                                        <li><a href="../../contacto.php" >Contacto</a></li>
                                      </ul>
                                    </div><!-- /.navbar-collapse -->
                                  </div><!-- /.container-fluid -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </header><!-- header close -->
            <!-- contact form start -->
                <section id="slider">
                    <section id="contact-form">
                      <div class="container">
                          <div class="col-md-12">
                                <div class="block">
                                <form action="saveUpdatePersona.php" method="get">
                                    <h1 class="form-group">M O D I F I C A R &nbsp;&nbsp;&nbsp;  P E R S O N A</h1>
                        <?php
                            echo "<label>IdPersona</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $id_persona . "' name='id_persona' readonly>";				
                            echo "</div>";
                            echo "<label>Nombre</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $nombre . "' name='nombre'>";
                            echo "</div>";
                            echo "<label>Direccion</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $direccion . "' name='direccion'>";
                            echo "</div>";			
                            echo "<label>Apellido</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $apellido . "' name='apellido'>";
                            echo "</div>";
                            echo "<label>User</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $usuario . "' name='usuario'>";
                            echo "</div>";
                            echo "<label>Password</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $pass . "' name='pass'>";
                            echo "</div>";
                            echo "<label>Correo</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $correo . "' name='correo'>";
                            echo "</div>";
                            echo "<label>Fecha Nacimiento</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $fecha_nacimiento . "' name='fecha_nacimiento'>";
                            echo "</div>";
                            echo "<label>IdRol</label>";
                            echo "<div class='form-group'>";
                            echo "<input type='text' class='form-control' value='". $id_rol . "' name='id_rol'>";
                            echo "</div>";
                            echo "<a href='saveUpdatePersona.php?id_persona=". $id_persona ."'><button class='btn btn-default' type='submit'> Siguiente </button>";

                        ?>                        
                               </form>
                          </div>
                        </div>
                    </div>
                    </section> 
                </section>


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