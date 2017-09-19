<?php
include_once("PersonaCollector.php");
session_start();
$usuario = $_POST['user'];
$pass = $_POST['pass'];

$PersonaCollectorObj = new PersonaCollector();

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    <body>
       
        <?php

        foreach ($PersonaCollectorObj->showPersonas() as $c){
            if($c->getUsuario() == $usuario && $c->getPass() == $pass){
               
                $_SESSION['user']= $usuario;
                $_SESSION['rol']= $c->getIdRol() ;
                 
		        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../indexAdmin.php'>";
                
            }
        }
        if (!isset($_SESSION['user'])){
        ?>
            
            <h4>Usuario o contraseña incorrecta</h4>
            <a href="../../iniciarsesion.php"><button class="boton">Regresar</button></a>
                
        
        <?php
             
        }
		
	   ?>
            
    </body>
</html>
