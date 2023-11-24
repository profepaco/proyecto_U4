<?php
$servidor = "localhost";
$usuario = "root";
$password = "root";
$db = "unidad4";

//Crear conexión
$conexion = new mysqli($servidor, $usuario, $password, $db);

if($conexion->connect_error){
    die("La conexión fallo: ".$conexion->connect_error);
}
//echo "La conexión se realizó correctamente";

//$conexion->close();
?>
