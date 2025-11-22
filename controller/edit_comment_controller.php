<?php
include "../model/conn.php";

if (!empty($_POST["btnactualizar"])) {

    $id = $_POST["id"];
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $nota = $_POST["nota"];

    if (!empty($usuario) && !empty($email) && !empty($nota)) {

        $sql = $conn->query("
            UPDATE comentarios 
            SET usuario='$usuario', email='$email', nota='$nota' 
            WHERE id=$id
        ");

        if ($sql) {
            header("Location: ../index.php#comentarios");
            exit();
        } else {
            echo "Error al actualizar!";
        }

    } else {
        echo "Todos los campos son obligatorios";
    }
}
?>
