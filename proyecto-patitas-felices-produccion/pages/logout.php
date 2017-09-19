<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Logout</title>
        
    </head>
    <body>
	
	<?php

        if (isset($_SESSION['user'])){
                session_destroy();
               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.php'>";
        }else{
                
              
        }

	?>

    </body>
</html>

