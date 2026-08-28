<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loje</title>
</head>
<body>
    <h1>Loja da Anne</h1>
    <ol>
        <li> <a href="./novo.php"> Cadastrar produto</a></li>
        <li> <a href="./buscar.php"> Buscar produto</a></li>
        <li> <a href="./listar.php"> Listar todos os produtos</a></li>
        <li> <a href="./listar_estoque.php"> Listar produtos com estoque disponível</a></li>
        <li> <a href="./teste_conexao.php"> Testar conexão com banco</a></li>
        <li> <a href="../aula_conexao_bd/"> pasta</a></li>
        <li> <a href="./editar.php"> editar</a></li>
    
    </ol> 

</body>
<h3>Lista de produtos</h3>
<?php
require "conexao.php";
$resultado = $conexao->query(
  "SELECT id, nome, preco, estoque FROM produtos ORDER BY id DESC"
);
?>

<table>
  <thead>
    <tr><th>ID</th><th>Nome</th><th>Preço</th><th>Estoque</th><th>Situação</th></tr>
  </thead>
  <tbody>
    <?php while ($produto = $resultado->fetch_assoc()): ?>
      <tr>
        <td><a href="editar.php?id=<?= $produto['id'] ?>">Editar</a></td>
        <td>
          <form method="post" action="excluir.php" style="display:inline">
            <input type="hidden" name="id" value="<?= $produto['id'] ?>">
            <button type="submit">Excluir</button>
          </form>
        </td>
        <td><?= $produto["id"] ?></td>
        <td><?= htmlspecialchars($produto["nome"]) ?></td>
        <td>R$ <?= number_format($produto["preco"], 2, ",", ".") ?></td>
        <td><?= $produto["estoque"] ?></td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>

</html>