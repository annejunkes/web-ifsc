<?php
require "conexao.php";

$sql = "SELECT id, nome, preco, estoque
        FROM produtos
        ORDER BY nome";

$resultado = $conexao->query($sql);
?>

<table>
  <thead>
    <tr><th>ID</th><th>Nome</th><th>Preço</th><th>Estoque</th><th>Situação</th></tr>
  </thead>
  <tbody>
    <?php while ($produto = $resultado->fetch_assoc()): ?>
      <tr>
        <td><?= $produto["id"] ?></td>
        <td><?= htmlspecialchars($produto["nome"]) ?></td>
        <td>R$ <?= number_format($produto["preco"], 2, ",", ".") ?></td>
        <td><?= $produto["estoque"] ?></td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>