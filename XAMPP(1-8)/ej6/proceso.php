<?php
session_start();
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulario</title>
</head>
<body>
<h1> Usuarios dados de alta</h1>
<?php 
    // Conexion a la BBDD

   $db=mysqli_connect("localhost","root", "","ABD_ej6");

    if(!$db){
         exit('Fallo de la connexion');
    }
    else{ // Formulario de Creacion del Usuario
        
        echo'<form action="proceso2.php" method="post">';
        echo'<fieldset>';
        echo'<legend> Creacion de Usuario</legend>';
        echo'Nombre:<br> <input type="text" name="nom"><br>'; 
        echo'Contraseña: <br> <input type="text" name="pass"><br>';
        echo' Repite la contraseña: <br> <input type="text" name="pass2"><br>';
        echo'<input type="submit" name="aceptar">';
        echo'</form>'; 
    }
    
    
   
    
?>

</body>
</html>