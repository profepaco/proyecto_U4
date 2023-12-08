<?php 
    require('conexion.php');
    //require('cargaimagen.php');

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    //$img_path = $archivo;
    
    $update = $conexion->prepare("UPDATE productos SET nombre=?, descripcion=?, precio=?, cantidad = ? WHERE id = ?");

    $update->bind_param("ssdii",$nombre,$descripcion, $precio, $cantidad,$id);
    
    //Ejecutar la instrucción
    $update->execute();

    echo "<p>Se actualizo correctamente</p>";

    //Cerrar las conexiones
    $update->close();
    $conexion->close();

    header("Location: index.php");
?>