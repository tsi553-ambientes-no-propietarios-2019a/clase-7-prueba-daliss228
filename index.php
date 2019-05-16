<?php include('php/conection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<h2>Login</h2>
	<form action="php/proceso_login.php" method="POST">
		<input type="text" name="username" placeholder="Ingrese el nombre de usuario"><br><br>
		<input type="password" name="password" placeholder="Ingrese el password"><br><br>
		<button>Iniciar sesion</button>
	</form>
	<br><a href="registro_tienda.php">Registrar tienda</a>
	<br><br>
	<?php
		if ($_GET) {
			if (isset($_GET['message'])) {
				echo $_GET['message'];
			}
		}
	?>
</body>
</html>