<?php 

if (empty($_POST['entidad']) || empty($_POST['oficina']) || empty($_POST['numerocontrol']) || empty($_POST['cuenta']) ) {
	
	include 'formulario.php';

}else if (strlen ($_POST['entidad']) != 4  ||   strlen ($_POST['oficina']) != 4  ||  strlen ($_POST['numerocontrol']) != 2    || strlen ($_POST['cuenta']) != 10   ) {
	
	include 'formulario.php';

}else{

	$entidad = $_POST['entidad'];
	$oficina = $_POST['oficina'];
	$numerocontrol = $_POST['numerocontrol'];
	$cuenta = $_POST['cuenta'];

	include 'comprobacion.html.php';
}

 ?>