<?php 
    require('conexion.php');
    require('cargaimagen.php');

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $img_path = $archivo;
    
    $insert = $conexion->prepare("INSERT INTO productos(nombre,descripcion,precio,cantidad,img_path) VALUES(?,?,?,?,?)");

    $insert->bind_param("ssdis",$nombre,$descripcion, $precio, $cantidad,$archivo);
    
    //Ejecutar la instrucción
    $insert->execute();

    echo "<p>Se inserto correctamente</p>";

    //Cerrar las conexiones
    $insert->close();
    $conexion->close();

    header("Location: index.php");
?>