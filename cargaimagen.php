<?php 

$directorio = "uploads/";
$archivo = basename($_FILES["img_path"]["name"]);

$cargaOk = 1;

if($cargaOk==1){
    /* if(move_uploaded_file($_FILES["img_path"]["tmp_name"],$archivo)){
        echo "El archivo se cargo correctamente";
    } */
    move_uploaded_file($_FILES["img_path"]["tmp_name"],$directorio.$archivo);
}

?>