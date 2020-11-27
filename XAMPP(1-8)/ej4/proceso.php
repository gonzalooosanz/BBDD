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
    <h1>Datos personales</h1>
    <?php
    echo '<p>'.$_POST["nom"].'</p>';
    echo '<p>'.$_POST["tel"].'</p>';
    echo '<p>'.$_POST["mail"].'</p>';
    echo '<p>'.$_POST["dir"].'</p>';

    echo '<h1>Datos del pedido</h1>';
    
    echo '<p>Primer plato:</p>';
    echo '<p>'.$_POST["primero"].'</p>';

   echo '<p>Segundo plato:</p>';
   echo '<p>'.$_POST["segundo"].'</p>';

   if(isset($_POST["cafeote"]))  echo '<p>El usuario ha elegido cafe</p>';
   else echo '<p>El usuario ha elegido te</p>';

   if(strlen($_POST["obs"]) > 0)  echo '<p>'.$_POST["obs"].'</p>';
   else echo '<p>Sin observaciones</p>';

   if(isset($_POST["condi"]))  echo '<p>Acepta las condiciones</p>';
   else echo '<p>No acepta las condiciones';

    ?>
</body>
</html>
