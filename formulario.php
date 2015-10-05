<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de cuenta bancaria</title>
</head>
<body>

	<h1>Introduzca el numero de cuenta</h1>
	
	<form action="comprobacion.html.php" method="POST">
		
	<div>
		<label for="entidad">entidad:
			<input type="text" name="entidad"></label>
	</div>
	<div>
		<label for="oficina">oficina:
			<input type="text" name="oficina"></label>
	</div>
	<div>
		<label for="numerocontrol">numero de control:
			<input type="text" name="numerocontrol"></label>
	</div>
	<div>
		<label for="cuenta">cuenta:
			<input type="text" name="cuenta"></label>
	</div>
	
	<div>
			<input type="submit" value="enviar">
		</div>
	
	</form>
	
</body>
</html>