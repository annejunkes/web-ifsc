<?php
$tema = $_GET['tema'] ?? '';

if ($tema === 'claro' || $tema === 'escuro') {
    $httpsAtivo =
        !empty($_SERVER['HTTPS'])
        && $_SERVER['HTTPS'] !== 'off';
            setcookie('tema', $tema, [
        'expires' => time() + 60 * 60 * 24 * 30,
        'path' => '/',
        'secure' => $httpsAtivo,
        'httponly' => false,
        'samesite' => 'Lax'
    ]);

    header('Location: pagina.php');
    exit;
}
echo 'Tema inválido.';