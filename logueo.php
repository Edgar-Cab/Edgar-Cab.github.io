<?php 
require 'dbConect.php';
session_start();

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasenia'];

$query = "SELECT COUNT(*) as contar, nombres FROM user where correo = '$usuario' and contrasenia = '$contrasena' ";
//die($query);
$consulta = mysqli_query($conexion,$query);
//die(json_encode($consulta));
$array = mysqli_fetch_array($consulta);
//die(json_encode($array));

	if($array['contar']>0){
	    //die('gfjf');
		$_SESSION['username'] = $array['nombres'];
		header('Location: ../paginaPrincipal.php');
		//echo "<script type='text/javascript'> window.location='paginaPrincipal.php'</script>";
		
		exit();
	}else{
		echo "DATOS INCORRECTOS";
	}
 ?>