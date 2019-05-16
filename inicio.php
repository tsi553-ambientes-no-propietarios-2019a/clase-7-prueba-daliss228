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
	<p>Bienvenido <?php echo $_SESSION['user']['username']; ?></p>
	<p>Tienda: <?php echo $_SESSION['user']['nomtienda']; ?></p>	

	<h3>Productos</h3>

	<table border="1">
        <tr>
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Tipo</td>
            <td>Stock</td>
            <td>Precio</td>
        </tr>

        <?php
            $cod = $_SESSION['user']['id'];
            $sqlquery = "SELECT * FROM producto WHERE iduser = '$cod'";
            
            $res = $conn->query($sqlquery);
            while ($mostrar = $res->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $mostrar['id'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['stock'] ?></td>
            <td><?php echo $mostrar['tipo'] ?></td> 
            <td><?php echo $mostrar['precio'] ?></td>
        </tr>
        <?php 
            }
        ?>
    </table>

	<br><a href="nuevo_producto.php?">Nuevo producto</a>	
	
</body>
</html>