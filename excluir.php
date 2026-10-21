<?php

require_once __DIR__ . "/controllers/personagemControllers.php";

$controller = new PersonagemController();

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit;
}

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

if (!$id || $id < 1) {
    header("Location: index.php");
    exit;
}

if ($controller->excluir($id)) {
    header("Location: index.php");
    exit;
}

echo "Erro ao excluir personagem.";
echo '<p><a href="index.php">Voltar para a lista</a></p>';

?>