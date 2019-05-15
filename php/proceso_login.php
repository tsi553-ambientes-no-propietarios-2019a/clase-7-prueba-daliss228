<?php
include('conection.php');


if($_POST){
	if(isset($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['username'])&&!empty($_POST['password'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM tienda WHERE usuario='$username' AND clave='$password'";

		if($conn->error){
			echo 'Ocurrió un error en el registro'.$conn->error;
		}

		/*$filas = mysqli_num_rows($res);
		echo "numero de filas: $filas";*/

		$res = $conn->query($sql);

		if($res->num_rows > 0){		
			while($row = $res->fetch_assoc()){
				$_SESSION['user'] = ['username' => $row['usuario'], 'id' => $row['id'], 'nomtienda' => $row['nombretienda'] ];
				//print_r($_SESSION['user']);
				header('Location: ../inicio.php');
				exit;
			}
		}else{
			header('Location: ../index.php?error_message=Usuario o clave incorrectos!');
			exit;
		}
		
	}else{
		header('Location: ../index.php?error_message=Ingrese todos los datos!');
		exit;
		//echo 'Ingrese todos los datos';
	}
}else{
	header('Location: ../index.php');
	exit;
}
?>