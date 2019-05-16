<!DOCTYPE html>
<?php 
include('php/conection.php');
?>
<html>
<head>
	<title>Productos</title>
</head>
<body>
	<h2>Ingrese productos</h2>
	<form action="php/proceso_produ.php" method="POST">
		<input type="text" name="nombre" placeholder="Nombre del producto"><br><br>
		<input type="text" name="tipo" placeholder="Tipo de producto"><br><br>
		<input type="text" name="stock" placeholder="Stock del producto"><br><br>
		<input type="text" name="precio" placeholder="Precio del producto"><br><br>
		<button>Guardar productos</button>
	</form>
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