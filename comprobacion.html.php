<?php 

$entidad = $_POST['entidad'];
$oficina = $_POST['oficina'];
$numerocontrol = $_POST['numerocontrol'];
$cuenta = $_POST['cuenta'];


	function numerodecontrol($entidad, $oficina, $cuenta){
    $dc = "";
    $pesos = array(6, 3, 7, 9, 10, 5, 8, 4, 2, 1);

    foreach(array($entidad . $oficina, $cuenta) as $cadena){
        $suma = 0;
        for($i=0, $len=strlen($cadena); $i<$len; $i++){
            $suma += $pesos[$i] * substr($cadena, $len-$i-1, 1);
        }
        $digito = 11-$suma%11;
        if($digito==11){
            $digito = 0;
        }elseif($digito==10){
            $digito = 1;
        }
        $dc .= $digito;
    }

    return $dc;
	}
	
 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>comprobacion de numero de cuenta</title>
 </head>
 <body>
 		<?php echo "numero introducido: " .$entidad ." ". $oficina ." ". $numerocontrol ." ". $cuenta ?>
		
		<br>
		
		<?php

		$numero_verificacion = numerodecontrol($entidad,$oficina,$cuenta);

		if ($numerocontrol == $numero_verificacion) {
			echo "el numero de cuenta introducido es correcto";
		
		}else{
			echo "el numero de cuenta introducido es incorrecto";
		}

		?>

 </body>
 </html>