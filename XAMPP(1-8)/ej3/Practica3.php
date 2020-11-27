<!DOCTYPE html>
<html lang = "es">
	<head>
		<title> Practica 3 </title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$tam = 10 ; 
			echo "<table>" ; 
			for ( $i = 1 ; $i <= $tam ; $i++){
				echo "<tr>" ; 
				for ( $j = 1 ; $j <= $tam ; $j++){
					if ( $i == 0 )
						echo "<td>". ($j + 1 ) ."</td>" ; 
					else
						echo "<td>".$i * $j ."</td>"; 
				}
				echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>
