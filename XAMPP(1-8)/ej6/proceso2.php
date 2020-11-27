<?php
session_start();
require_once("Usuario.php");
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

    $name = $_POST["nom"];
    $pass = $_POST["pass"];
    $pass2 = $_POST["pass2"];

    if($pass != $pass2){
        echo '<p> Error, las contraseñas no coinciden </p>';
    }
    else{
        $db= mysqli_connect("localhost","root", "","abd_ej6");
        //mysqli_select_db("abd_ej6", $db);
        $sql="INSERT INTO usuario (nom, password) VALUES ('$name', '$pass')";
        if (mysqli_query($db, $sql)) {
            echo "Nuevo usuario añadido a la BBDD";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        };
        mysqli_close($db);
        echo'<p> Se ha insertado correctamente </p>';
    }
    
?>

</body>
</html>