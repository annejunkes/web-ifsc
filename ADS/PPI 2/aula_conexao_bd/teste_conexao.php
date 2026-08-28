<?php
require "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="utf-8"><title>Teste</title></head>
<body>
    <h1>Conexão realizada!</h1>
    <p>Servidor: <?= htmlspecialchars($conexao->server_info) ?></p>
</body>
</html>