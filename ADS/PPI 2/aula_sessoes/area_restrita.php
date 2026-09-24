<?php
require_once 'funcoes.php';
iniciarSessaoSegura();
exigirLogin();

$usuario = htmlspecialchars(
    $_SESSION['usuario'],
    ENT_QUOTES,
    'UTF-8'
);