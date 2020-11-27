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
	<h1> Datos Personales</h1>
	<?php 
	echo'<fieldset>';
	echo '<p>'.$_POST["nom"].'</p>';
	echo '<p>'.$_POST["tel"].'</p>';
	echo '<p>'.$_POST["mail"].'</p>';
	echo '<p>'.$_POST["dir"].'</p>';
	echo'</fieldset>';

	echo '<h1>Datos del pedido </h1>';
	echo'<fieldset>';
	echo'<p> Primer plato </p>';
	echo '<p>'.$_POST["primero"].'</p>';
	echo'<p> Segundo plato </p>';
	echo '<p>'.$_POST["segundo"].'</p>';
	echo'</fieldset>';
	if(isset($_POST["cafeote"]) && isset($_POST["C"])){
		echo'<p>El usuario ha elegido cafe</p>';
	}
	else echo '<p>El usuario ha elegido te</p>';

	if(strlen($_POST["obs"]) > 0)  echo '<p>'.$_POST["obs"].'</p>';
	else echo '<p>Sin observaciones</p>';


	if(isset($_POST["condi"]) && isset($_POST["ok"])){
		echo'<p> Acepta las condiciones </p>';
	}
	else  echo'<p> No has aceptado las condiciones </p>';


	?>

</body>
</html>
