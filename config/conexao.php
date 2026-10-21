<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "bd_personagens_mvc"
);

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}

mysqli_set_charset($conn, "utf8mb4");

?>