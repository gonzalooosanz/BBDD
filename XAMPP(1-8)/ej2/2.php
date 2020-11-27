<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
<p>
	<?php  
	$dias = array('l' => 'lunes', 'm' => 'martes', 'x' => 'miercoles', 'j' => 'jueves', 'v' => 'viernes', 's' => 'sabado', 'd' => 'domingo' );
	$selecionados = array('l', 'x','d');
	$lista = array;
	foreach($selecionados as $val){
		array[] = $dias[$val];
	}
	?>
	</p>
</body>
</html>

