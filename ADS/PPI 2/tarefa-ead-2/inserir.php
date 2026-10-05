<!-- require "conexao.php";

$nome = trim($_POST["nome"] ?? "");
$preco = filter_input(INPUT_POST, "preco", FILTER_VALIDATE_FLOAT);
$estoque = filter_input(INPUT_POST, "estoque", FILTER_VALIDATE_INT);

$erros = [];
if ($nome === "") $erros[] = "Informe o nome.";
if ($preco === false || $preco < 0) $erros[] = "Preço inválido.";
if ($estoque === false || $estoque < 0) $erros[] = "Estoque inválido.";

if ($erros) {
    exit(implode("<br>", array_map("htmlspecialchars", $erros)));
}

$stmt = $conexao->prepare(
    "INSERT INTO produtos (nome, preco, estoque) VALUES (?, ?, ?)"
);
$stmt->bind_param("sdi", $nome, $preco, $estoque);
$stmt->execute();

header("Location: index.php");
exit; -->


<?php

require 'conexao.php';
require 'ProdutoDAO.php';
require_once 'Produto.php';


$nome = trim($_POST["nome"] ?? "");
$preco = filter_input(INPUT_POST, "preco", FILTER_VALIDATE_FLOAT);
$estoque = filter_input(INPUT_POST, "estoque", FILTER_VALIDATE_INT);


$dao = new ProdutoDAO($pdo); 
$produto = new Produto($nome, $preco, $estoque);
$id = $dao->inserir($produto);
// $sql = "INSERT INTO produto (nome, preco, estoque) VALUES (?, ?, ?)";
// $stmt = $pdo->prepare($sql);
// $stmt->execute($nome, $preco, $estoque);

echo "Inserido com id " . $pdo->lastInsertId();
// header("Location: listar.php");
// exit;
// ?>