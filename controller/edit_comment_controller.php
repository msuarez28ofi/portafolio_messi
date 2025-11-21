<?php 
include("../model/conn.php");
$id = $_GET["id"];
$sql = $conn->query("SELECT * FROM productos WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar producto <?= $id ?></title>
</head>

<body class="bg-dark">

<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Prog IV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Acerca de mí</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Mis trabajos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section id="registro" class="mt-5 p-5 bg-dark">
    <div class="container-fluid row text-light">
        <form class="col-lg-4 m-auto" method="POST">
            <h3 class="text-center">Editar producto</h3>

            <input type="hidden" name="id" value="<?= $id ?>">

            <?php 
            include "controller/edit_product_controller.php";
            $datos = $sql->fetch_object();
            ?>

            <div class="mt-4">
                <label class="form-label">Nombre del producto</label>
                <input type="text" class="form-control bg-dark text-light" name="nombre_producto" value="<?= $datos->nombre_producto ?>">
            </div>

            <div class="mt-4">
                <label class="form-label">Cantidad</label>
                <input type="number" class="form-control bg-dark text-light" name="cantidad_producto" value="<?= $datos->cantidad_producto ?>">
            </div>

            <div class="mt-4">
                <label class="form-label">Marca del producto</label>
                <input type="text" class="form-control bg-dark text-light" name="marca_producto" value="<?= $datos->marca_producto ?>">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-warning mt-4" name="btnactualizar" value="ok">
                    Actualizar producto
                </button>
            </div>

        </form>
    </div>
</section>

</body>
</html>
