<?php

require_once __DIR__ . "/../config/conexao.php";

class Personagem
{
    public function listar()
    {
        global $conn;

        $sql = "SELECT * FROM personagens ORDER BY nome";

        $resultado = mysqli_query($conn, $sql);

        $personagens = [];

        while ($linha = mysqli_fetch_assoc($resultado)) {
            $personagens[] = $linha;
        }

        return $personagens;
    }

    public function cadastrar($nome, $universo, $poder)
    {
        global $conn;

        $sql = "INSERT INTO personagens
                (nome, universo, poder)
                VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param(
            $stmt,
            "sss",
            $nome,
            $universo,
            $poder
        );

        return mysqli_stmt_execute($stmt);
    }

    public function excluir($id)
{
    global $conn;

    $sql = "DELETE FROM personagens WHERE id = ?";

    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        return false;
    }

    mysqli_stmt_bind_param($stmt, "i", $id);

    $resultado = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $resultado;
}
}