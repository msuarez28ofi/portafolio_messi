<?php

    $conn = new mysqli("localhost", "root", "", "comentarios");
    $conn->set_charset("utf8");

    if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>