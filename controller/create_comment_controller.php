<?php
if (!empty($_POST["btn_enviar"])) {

    if (!empty($_POST["usuario"]) and !empty($_POST["email"]) and !empty($_POST["comentario"])) {

        include "../model/conn.php"; // AJUSTA la ruta si es necesario

        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $nota = $_POST["comentario"];

        // Insert con fecha automática
        $sql = $conn->query("INSERT INTO comentarios (usuario, email, nota, fecha)
                             VALUES ('$usuario', '$email', '$nota', CURDATE())");

        if ($sql == true) {
            header("Location: ../index.php"); // REGRESA AL INDEX
        } else {
            echo "<div class='alert alert-danger mt-3'>Error al guardar el comentario.</div>";
        }

    } else {
        echo "<div class='alert alert-warning mt-3'>Hay casillas vacías.</div>";
    }
}
?>
