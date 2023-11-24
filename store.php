<?php 
    require('conexion.php');

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $img_path = $_POST['img_path'];
    
    $insert = $conexion->prepare("INSERT INTO productos(nombre,descripcion,precio,cantidad) VALUES(?,?,?,?)");

    $insert->bind_param("ssdi",$nombre,$descripcion, $precio, $cantidad);
    
    //Ejecutar la instrucción
    $insert->execute();

    echo "<p>Se inserto correctamente</p>";

    //Cerrar las conexiones
    $insert->close();
    $conexion->close();

?>