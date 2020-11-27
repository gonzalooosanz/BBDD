<?php
session_start();
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>post</title>
</head>
<body>
    <?php
    $bool = false;
    $usuarios = array('paco' => '123', 'juan' => '456');
    $nombre = $_POST["nom"];
   if(array_key_exists($nombre, $usuarios))  {
       echo '<p>Error: ya existe el nombre de usuario</p>';
   }
   else{
       $usuarios[$nombre] = $_POST["pass"];
       echo '<table>';
    foreach ($usuarios as $clave => $valor){
        echo '<tr>';
        echo '<td>'.$clave.'</td> <td>'.$valor.'</td>';
        echo '</tr>';
    }
    echo '</table>';
}
    ?>
</body>
</html>
