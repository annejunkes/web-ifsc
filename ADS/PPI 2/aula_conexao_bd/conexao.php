<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$servidor = "localhost";
$usuario = "root";
$senha = "admin";       // padrão do XAMPP local
$banco = "loja";

try {
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);
    $conexao->set_charset("utf8mb4");
} catch (mysqli_sql_exception $erro) {
    error_log($erro->getMessage());
    exit("Não foi possível conectar ao banco de dados.");
}