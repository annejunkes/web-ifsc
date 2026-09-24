<<?php
require_once 'funcoes.php';
iniciarSessaoSegura();

header('Content-Type: application/json; charset=utf-8');

if (!usuarioEstaLogado()) {
    http_response_code(401);
    echo json_encode([
        'erro' => 'Usuário não autenticado'
    ]);
    exit;
}
echo json_encode([
    'usuario' => $_SESSION['usuario'],
    'login_em' => $_SESSION['login_em'],
    'mensagem' => 'Dados acessados com sucesso'
]);
?>

<form action="autenticar.php" method="post">
  <label for="usuario">Usuário:</label>
  <input type="text" id="usuario" name="usuario" required>

  <br><br>

  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha" required>

  <br><br>

  <button type="submit">Entrar</button>
</form>