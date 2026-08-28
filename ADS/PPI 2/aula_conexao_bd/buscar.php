<?php
require "conexao.php";

$busca = $_GET["busca"] ?? "";
$termo = "%" . $busca . "%";

$stmt = $conexao->prepare(
    "SELECT id, nome, preco
     FROM produtos
     WHERE nome LIKE ?"
);
$stmt->bind_param("s", $termo);
$stmt->execute();

$resultado = $stmt->get_result();
?>

<form method="get">
  <input name="busca" value="<?= htmlspecialchars($busca) ?>">
  <button type="submit">Buscar</button>
</form>

<table>
  <tr><th>ID</th><th>Produto</th><th>Preço</th></tr>

  <?php while ($produto = $resultado->fetch_assoc()): ?>
    <tr>
      <td><?= $produto["id"] ?></td>
      <td><?= htmlspecialchars($produto["nome"]) ?></td>
      <td>R$ <?= number_format($produto["preco"], 2, ",", ".") ?></td>
    </tr>
  <?php endwhile; ?>
</table>