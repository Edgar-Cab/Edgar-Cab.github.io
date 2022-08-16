<?php
//Servidor
define("HOST", "localhost");
//Usuario
define("USER", "id18220256_root");
//Contrasena
define("PASS", "g4a@VD]amG?}u|}q");
//BaseDatos"
define("DB", "id18220256_negociodigital");

$conexion = mysqli_connect(HOST,USER,PASS,DB) or die("ERR0R EN LA CONEXION");

/*if(mysqli_connect_errno()){
	echo "Error al conectarse a Mysql".mysqli_connect_error();
}
else{
	echo "conxion habilitada";
}*/

?>