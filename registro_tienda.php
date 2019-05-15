<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<h2>Registro Tienda</h2>
	<form method="POST">
		<input type="text" name="nomtienda" placeholder="Nombre de la tienda"><br><br>
		<input type="text" name="username" placeholder="Nombre de usuario"><br><br>
		<input type="password" name="pass" placeholder="Password"><br><br>
		<input type="password" name="pass1" placeholder="Repetir password"><br><br>
		<button>Registrar</button>
	</form>
</body>
</html>

<?php

include('php/conection.php');

if ($_POST) {
	if (isset($_POST['nomtienda'])&&isset($_POST['username'])&&isset($_POST['pass'])&&isset($_POST['pass1'])&&!empty($_POST['nomtienda'])&&!empty($_POST['username'])&&!empty($_POST['pass'])&&!empty($_POST['pass1'])) {

		$nomtienda = $_POST['nomtienda'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$pass1 = $_POST['pass1'];

		if ($pass==$pass1) {
			$sqlinsert = "INSERT INTO tienda(nombretienda, usuario, clave, repetirclave) VALUES ('$nomtienda', '$username', '$pass', '$pass1')";
			$conn->query($sqlinsert);

			if ($conn->error) {
				header('Location: ../registro_tienda.php?Error en la insercion'.$conn->error);
				exit;
			}else{
				header('Location: index.php?message=Tienda registrada correctamente, puede iniciar sesión.');
				exit;
			}
		}else{
			echo 'Los passwords no coinciden';
		}
		
	}else{
		echo 'Llene todos los campos';
	}
}
?>
