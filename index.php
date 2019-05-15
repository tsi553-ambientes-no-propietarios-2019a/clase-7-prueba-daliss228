<?php 
include('php/conection.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<h2>Login</h2>
	<form action="php/proceso_login.php" method="POST">
		<input type="text" name="username" placeholder="Ingrese el nombre de usuario"><br><br>
		<input type="password" name="password" placeholder="Ingrese el password"><br><br>
		<button>Ingresar</button>
	</form>
	<a href="registro_tienda.php">Registrar mi tienda</a>
</body>
</html>