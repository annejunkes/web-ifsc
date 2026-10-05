<?php 
require "conexao.php";
require 'ProdutoDAO.php';

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
$nome = trim($_POST["nome"] ?? "");
$preco = filter_input(INPUT_POST, "preco", FILTER_VALIDATE_FLOAT);
$estoque = filter_input(INPUT_POST, "estoque", FILTER_VALIDATE_INT);

$dao = new ProdutoDAO($pdo);
$dao->atualizar($id, $nome, $preco, $estoque);
// $stmt = $conexao->prepare(
//     "UPDATE produtos
//      SET nome = ?, preco = ?, estoque = ?
//      WHERE id = ?"
// );
// $stmt->bind_param("sdii", $nome, $preco, $estoque, $id);
// $stmt->execute();

header("Location: listar.php");
exit;
?>
