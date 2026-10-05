<?php
require 'conexao.php';
require 'ProdutoDAO.php';

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
if (!$id) {
    die("ID inválido");
}

$dao = new ProdutoDAO($pdo);
$dao->excluir($id);
header("Location: listar.php");
exit;
?>