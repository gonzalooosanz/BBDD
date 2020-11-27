<!DOCTYPE html>
<html lang = "es">
	<head>
		<title> Practica 2 </title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$dias = array(
				"L" => "Lunes" ,
				"M" => "Martes" , 
				"X" => "Miercoles" ,
				"J" => "Jueves" ,
				"V" => "Viernes" ,
				"S" => "Sabado" , 
				"D" => "Domingo"
			);
			echo "<form method=POST action=practica2.php>";
				echo "<select name= dias[] multiple size = 8 >";
					foreach($dias as $clave => $valor){
						echo "<option value=". $clave .">".$valor."</option>";
					}
				echo "</select>";
				echo "<input type=submit name=Aceptar value=Aceptar>";
			echo "</form>";


		if ( isset($_POST['dias'])){
			foreach ( $_POST['dias'] as $valor){
				echo  $valor . '<br/>';
			}
		}
		else {
			echo " Hay que seleccionar algun valor <br/>";
		}

		?>
	</body>
</html>


