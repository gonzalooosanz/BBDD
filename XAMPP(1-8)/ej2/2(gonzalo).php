<!DOCTYPE html>
<html lang= 'es'>
<head>
	<title> Ejercicio 2: Dias de la semana </title>
 </head>

<body>
	<p>
	  <?php 

         $dias = array( 'l' =>'Lunes', 'm'=>'Martes', 'x' =>'Miercoles','j'=> 'Jueves','v'=> 'Viernes','s'=> 'Sabado','d'=> 'Domingo');
         $otros =array('m', 'j', 's');
         $devuelto = array();
         
         foreach ($otros as $index){
             $devuelto = $dias[$index];
             echo"$devuelto"."\n";
         }
         
	  ?>
	</p>
</body>
</html>