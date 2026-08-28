<?php 
require "conexao.php";

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
$nome = trim($_POST["nome"] ?? "");
$preco = filter_input(INPUT_POST, "preco", FILTER_VALIDATE_FLOAT);
$estoque = filter_input(INPUT_POST, "estoque", FILTER_VALIDATE_INT);

$stmt = $conexao->prepare(
    "UPDATE produtos
     SET nome = ?, preco = ?, estoque = ?
     WHERE id = ?"
);
$stmt->bind_param("sdii", $nome, $preco, $estoque, $id);
$stmt->execute();

header("Location: index.php");
exit;
?>
<!-- 
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Novo produto</title></head>
<body>
  <h1>Editar produto</h1>

  <form method="post" action="atualizar.php">
    <label>Nome <input name="nome" required></label><br>
    <label>Preço <input name="preco" type="number" step="0.01" required></label><br>
    <label>Estoque <input name="estoque" type="number" required></label><br>
    <button type="submit">Editar</button>
  </form>
</body>
</html> -->