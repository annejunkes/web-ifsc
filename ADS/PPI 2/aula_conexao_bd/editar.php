<?php
require "conexao.php";

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
if (!$id) exit("ID inválido.");

$stmt = $conexao->prepare(
    "SELECT id, nome, preco, estoque FROM produtos WHERE id = ?"
);
$stmt->bind_param("i", $id);
$stmt->execute();
$produto = $stmt->get_result()->fetch_assoc();

if (!$produto) exit("Produto não encontrado.");
?>


  <h1>Editar produto</h1>

  <form method="post" action="atualizar.php">
    <input type="hidden" name="id" value="<?=$produto['id']?>">
    
    <label>Nome <input name="nome" value="<?=$produto['nome']?>" required></label><br>
    <label>Preço <input name="preco" value="<?=$produto['preco']?>" type="number" step="0.01" required></label><br>
    <label>Estoque <input name="estoque" value="<?=$produto['estoque']?>" type="number" required></label><br>
    <button type="submit">Editar</button>
  </form>

