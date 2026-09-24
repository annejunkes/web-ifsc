<?php
require_once 'funcoes.php';
iniciarSessaoSegura();

$usuarioDigitado = $_POST['usuario'] ?? '';
$senhaDigitada = $_POST['senha'] ?? '';

$usuarioCorreto = 'aluno';

$hashSenhaCorreta = password_hash(
    '123456',
    PASSWORD_DEFAULT
);

if (
    $usuarioDigitado === $usuarioCorreto
    && password_verify($senhaDigitada, $hashSenhaCorreta)
) {
    session_regenerate_id(true);

    $_SESSION['usuario'] = $usuarioDigitado;
    $_SESSION['login_em'] = date('Y-m-d H:i:s');

    header('Location: area-restrita.php');
    exit;
}
echo 'Usuário ou senha inválidos.';
echo '<br><a href="login.php">Tentar novamente</a>';

// vesao didatica simples
// if (
//     $usuarioDigitado === 'aluno'
//     && $senhaDigitada === '123456'
// ) {
//     session_regenerate_id(true);

//     $_SESSION['usuario'] = $usuarioDigitado;
//     $_SESSION['login_em'] = date('Y-m-d H:i:s');

//     header('Location: area-restrita.php');
//     exit;
// }
// echo 'Usuário ou senha inválidos.';
// echo '<br><a href="login.php">Tentar novamente</a>';


