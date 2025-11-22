<?php
include "../model/conn.php";

if (!isset($_GET['id'])) {
    die("ID no proporcionado");
}

$id = intval($_GET['id']);

$sql = $conn->query("DELETE FROM comentarios WHERE id = $id");

if ($sql) {
    header("Location: ../index.php?mensaje=eliminado");
    exit();
} else {
    echo "Error al eliminar el comentario";
}
?>
