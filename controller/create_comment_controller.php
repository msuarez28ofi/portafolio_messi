<?php

include "model/conn.php";  

if (!empty($_POST["btn_enviar"])) {

    if (!empty($_POST["usuario"]) && !empty($_POST["email"]) && !empty($_POST["comentario"])) {

        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $comentario = $_POST["comentario"];

        $sql = $conn->query("INSERT INTO comentarios(usuario, email, nota, fecha) 
                             VALUES('$usuario', '$email', '$comentario', CURDATE())");

        if ($sql == true) {
            header("Location: index.php#comentarios");
            exit();
        } else {
            echo "<div class='alert alert-danger mt-3'>Error al registrar comentario.</div>";
        }

    } else {
        echo "<div class='alert alert-warning mt-3'>Todos los campos son obligatorios.</div>";
    }
}

?>

