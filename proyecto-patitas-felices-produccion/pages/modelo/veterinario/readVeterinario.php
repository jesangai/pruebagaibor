<?php
session_start();
if (isset($_SESSION['user'])){
    if($_SESSION['rol']==2){

            include_once("veterinarioCollector.php");
            //$usuario = $_SESSION['MiSesion'];

            $veterinarioCollectorObj = new veterinarioCollector();

            ?>

            <!DOCTYPE html>
            <html class="no-js">
            <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Veterinario - Patitas Felices</title>
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
            <!-- -->
            <?php
            //if (isset($_SESSION['MiSesion'])){
            // $usuario = $_SESSION['MiSesion'];
            ?>

            <!-- Header Start -->
            <header>
            <div class="container">
            <div id="user">
            <ul class="login">
            <li class='loginu col-md-2 col-md-offset-10'><a href='../../logout.php'><span class='glyphicon glyphicon-log-in'></span>Cerrar Sesión</a></li>
            <li class="loginu">Bienvenido Usuario</li>
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
            <li><a href="../../../index.php" class="above">Inicio</a></li>
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
            <h1>Tabla Veterinario</h1>
            <a href="createVeterinario.php"><button class="btn btn-default btn-call-to-action">Crear Veterinario</button></a> <br>
            <table id="tabla">
            <tr>
            <th>&nbsp;&nbsp;Id-Veterinario&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Id-Persona&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Título&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Ocupación&nbsp;&nbsp;</th>

            </tr>
            <?php
            foreach ($veterinarioCollectorObj->showVeterinarios() as $c){
            echo "<tr>";
            echo "<td>" . $c->getId_veterinario() . "</td>";
            echo "<td>" . $c->getId_persona() . "</td>";
            echo "<td>" . $c->getTitulo() . "</td>";
            echo "<td>" . $c->getOcupacion() . "</td>";

            echo "<td><a href='updateVeterinario.php?id_veterinario=" . $c->getId_veterinario() . "&id_persona=" . $c->getId_persona() . "&titulo=" . $c->getTitulo() ."&ocupacion=" . $c->getOcupacion() ."'> <button class='btn btn-default btn-call-to-action'>Editar</button></a></td>";
            echo "<td><a href='deleteVeterinario.php?id_veterinario=". $c->getId_veterinario() ."'><button class='btn btn-default btn-call-to-action'>Eliminar</button></a></td>";
            echo "</tr>";

            }

            ?>

            </table>
            <a href="../../indexAdmin.php"><button class="btn btn-default btn-call-to-action">Regresar</button></a>
            </div>
            </div>
            </div>
            </div>
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