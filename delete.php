<?php 
    require('conexion.php');
    $id = $_POST['id'];
    
    $delete = $conexion->prepare("DELETE FROM productos WHERE id=?");

    $delete->bind_param("i",$id);
    
    $delete->execute();

    echo "<p>Se elimino correctamente</p>";

    //Cerrar las conexiones
    $delete->close();
    $conexion->close();

    header("Location: index.php");
?>