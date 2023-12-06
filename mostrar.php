<?php
    include('conexion.php');

    //$id = 1;
    $id = $_GET['id'];

    $query = "SELECT * FROM productos WHERE id=".$id;

    $resultado = $conexion->query($query);

    if($resultado->num_rows > 0){
        $fila = $resultado->fetch_assoc();
    }

    $conexion->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<header class="mb-4">
        <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Proyecto U4</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Productos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>    
    </header>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="<?php echo 'uploads/'.$fila['img_path']?>" alt="Imagen producto" class="img-fluid">
            </div>
            <div class="col">
                <h2 class="text-center mb-5"><?php echo $fila['nombre']?></h2>
                <p class="mb-0 fw-bold">Descripcion</p>
                <p><?php echo$fila['descripcion'];?></p>
                <p class="mb-0 fw-bold">Precio</p>
                <p><?php echo $fila['precio'];?></p>
                <p class="mb-0 fw-bold">Cantidad</p>
                <p><?php echo $fila['cantidad']; ?></p>
                <a class="btn btn-primary" href="index.php">Regresar</a>
            </div>
        </div>
    </div>
</body>
</html>