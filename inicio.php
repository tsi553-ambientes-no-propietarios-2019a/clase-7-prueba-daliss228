<?php
include('php/conection.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Inicio</h2>
	<p>Bienvenido <?php echo $_SESSION['user']['id']; ?></p><br>
	<p>Bienvenido <?php echo $_SESSION['user']['username']; ?></p><br>
	<p>Tienda: <?php echo $_SESSION['user']['nomtienda']; ?></p><br>
	<a href="nuevo_producto.php?cod=<?php echo $_SESSION['user']['id'] ?>">Nuevo producto</a>
	

	<h2>Productos</h2>

	
</body>
</html>