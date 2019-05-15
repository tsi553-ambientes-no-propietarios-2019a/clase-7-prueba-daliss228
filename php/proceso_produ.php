<?php
$conn = new mysqli('localhost', 'root', '', 'pruebab1');

if ($_GET) {
	$cod = $_GET['cod'];
}

echo $_GET['cod'];
/*if($_POST){
	if(isset($_POST['nombre'])&&isset($_POST['tipo'])&&isset($_POST['stock'])&&isset($_POST['precio'])&&!empty($_POST['nombre'])&&!empty($_POST['tipo'])&&!empty($_POST['stock'])&&!empty($_POST['precio'])){


		$nombre = $_POST['nombre'];
		$tipo = $_POST['tipo'];
		$stock = $_POST['stock'];
		$precio = $_POST['precio'];
		
		//echo "$total";

		$sqlinsert = "INSERT INTO producto(id, nombre, tipo, stock, precio, user) VALUES ('$id', '$nombre', '$tipo', '$stock', '$precio', '$user')";

		$conn->query($sqlinsert);

		if ($conn->error) {
			header('Location: nuevo_producto.php?message_error=Error en la insercion'.$conn->error);
			exit;
		}else{
			echo 'Datos enviados correctamente!';
		}

	}else{
		header('Location: nuevo_producto.php?message_error=Llene todos los campos');
			exit;
	}
}*/

?>