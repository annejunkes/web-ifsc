<style>
    table, table *{
        border-collapse:collapse;
        border: 1px solid black;
        padding: 3px;
    }
</style>

<?php
require 'conexao.php';
require 'ProdutoDAO.php';
?>
<a href="form_produto.php">Cadastrar novo produto</a>
<table>
<thead>
    <tr><th>ID</th><th>Nome</th><th>Preço</th><th>Estoque</th><th>Situação</th></tr>
</thead>
<tbody>
    <?php 
    $dao = new ProdutoDAO($pdo);
    foreach ($dao->listarTodos() as $p) {
        if ($p->EstoqueBaixo()):?>
            <tr style="background:#cfc">     
        <?php else:?>
            <tr>
        <?php endif; ?>
        <td><?= $p->id ?></td>
        <td><?= htmlspecialchars($p->nome) ?></td>
        <td>R$ <?= number_format($p->preco, 2, ",", ".") ?></td>
        <td><?= $p->estoque ?></td>
        <td><?= $p->valorEmEstoque()?></td>
        <td></td>
        <td><a href="editar.php?id=<?= $p->id ?>">Editar</a></td>
        <td><a href="excluir.php?id=<?= $p->id ?>">Excluir</a></td>
    </tr>
    <?php } ?>
</tbody>
</table>
    


