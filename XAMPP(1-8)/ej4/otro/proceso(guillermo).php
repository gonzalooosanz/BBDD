<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Procesamiento de pedidos</title>
</head>
<body>
	<?php
		echo "Nombre: " .$_POST['nom']. "<br/>";
		echo "Telefono: " .$_POST['tel']. "<br/>";
		echo "E-mail: " .$_POST['mail']. "<br/>";
		echo "Direccion: " .$_POST['dir']. "<br/>";
		echo "Primer Plato: " .$_POST['primero']. "<br/>";
		echo "Segundo Plato: " .$_POST['segundo']. "<br/>";
		
		if (isset($_POST['cafeote'])){
			if($_POST['cafeote'] == 'C'){
				echo "Seleccionó: Café <br/>";
			}else{
				echo "Seleccionó: Té <br/>";
			}
		}

		if($_POST['obs'] == ''){
			echo "Sin Observaciones <br/>";
		}else{
			echo "Observaciones: " .$_POST['obs']. "<br/>";
		}
		
		if(isset($_POST['condi'])){
				echo "Acepta las condiciones <br/>";
		}
		
	
	?>
</body>
</html>