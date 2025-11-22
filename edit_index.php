<?php
include "model/conn.php";

if (!isset($_GET["id"])) {
    die("ID no proporcionado");
}

$id = $_GET["id"];
$sql = $conn->query("SELECT * FROM comentarios WHERE id = $id");

$datos = $sql->fetch_object();

if (!$datos) {
    die("Comentario no encontrado");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar comentario <?= $id ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">

<section class="container p-5">
    <h2 class="text-center mb-4">Editar comentario</h2>

    <form method="POST" action="controller/edit_comment_controller.php">
        
        <input type="hidden" name="id" value="<?= $datos->id ?>">

        <div class="mb-3">
            <label class="form-label">Usuario</label>
            <input type="text" class="form-control bg-dark text-light" name="usuario" value="<?= $datos->usuario ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="email" class="form-control bg-dark text-light" name="email" value="<?= $datos->email ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Comentario</label>
            <textarea class="form-control bg-dark text-light" name="nota" rows="4" required><?= $datos->nota ?></textarea>
        </div>

        <div class="text-center">
            <button class="btn btn-warning" type="submit" name="btnactualizar" value="ok">Actualizar</button>
        </div>

    </form>
</section>

</body>
</html>
