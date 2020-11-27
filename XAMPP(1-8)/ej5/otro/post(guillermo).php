<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Procesamiento de pedidos</title>
</head>
<body>
	<?php
		$usuario = array("Guillermo" => "Guille", "Alberto" => "Alb");
		if(isset($usuario[$_POST['nom']])){
			echo "El usuario ya existe";
		}else{
			$usuario[$_POST['nom']]=$_POST['password'];
			echo "<table border=3>";
			foreach($usuario as $user=>$pass){
				echo "<tr><td>".$user."</td><td>".$pass."</td></tr>";
			}
			echo "</table>";
		}
	?>
</body>
</html>