<?php
session_start();
if (isset($_SESSION['user'])){
    if($_SESSION['rol']==2){

            include_once("AdministradorCollector.php");

            $id_persona = $_POST['id_persona'];




            $AdministradorCollectorObj = new AdministradorCollector();
            ?>

            <!DOCTYPE html>
            <html>
                <head>
                    <meta charset="utf-8">
                    <title>Login</title>


                </head>
                <body>

                    <?php
                      //if (isset($_SESSION['MiSesion'])){

                    echo "<p>Se creo un  nuevo usuario </p>";
                    $AdministradorCollectorObj->createAdmin($id_persona);
                    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readAdmin.php'>";
                                        //}else{   
                                          // echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../index.php'>";
                                         //} 
                                    ?>

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