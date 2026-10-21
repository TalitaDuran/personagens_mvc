<?php

require_once __DIR__ . "/controllers/personagemControllers.php";

$controller = new PersonagemController();

$acao = $_GET["acao"] ?? "listar";

$mensagem = "";

if ($acao == "cadastrar") {

    $mensagem = $controller->cadastrar();

    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        require __DIR__ . "/views/cadastrar.php";
    } else {
        require __DIR__ . "/views/cadastrar.php";
    }

} else {

    $personagens = $controller->listar();

    require __DIR__ . "/views/listar.php";

}

?>

