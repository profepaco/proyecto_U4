<?php 
    require("conexion.php");
    $consulta = "SELECT * FROM productos";
    $resultados = $conexion->query($consulta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <h5 class="card-header">Lista de productos</h5>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                <?php
                while($fila = $resultados->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>'.$fila['id'].'</td>'; 
                    echo '<td>'.$fila['nombre'].'</td>'; 
                    echo '<td>'.$fila['precio'].'</td>';
                    echo '<td>Aquí las acciones</td>';
                    echo '</tr>';
                }
                ?> 
                            </tbody>
                        </table>
                        <a class="btn btn-primary" href="#">Agregar producto</a>
                    </div>
                </div>
            </div>
        </div>
    <?php 
        $conexion->close();
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>