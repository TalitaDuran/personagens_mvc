<?php

require_once __DIR__ . "/../models/Personagem.php";

class PersonagemController
{
    private $model;

    public function __construct()
    {
        $this->model = new Personagem();
    }

    public function listar()
    {
        return $this->model->listar();
    }

    public function cadastrar()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nome = trim($_POST["nome"] ?? "");
            $universo = trim($_POST["universo"] ?? "");
            $poder = trim($_POST["poder"] ?? "");

            if ($nome == "" || $universo == "" || $poder == "") {
                return "Preencha todos os campos.";
            }

            if ($this->model->cadastrar($nome, $universo, $poder)) {
                header("Location: index.php");
                exit;
            }

            return "Erro ao cadastrar personagem.";
        }

        return "";
    }
    public function excluir($id)
{
    return $this->model->excluir($id);
}
}