<?php
header('Content-Type: application/json; charset=utf-8');

$pdo = new PDO(
    'mysql:host=localhost;dbname=test;charset=utf8mb4',
    'root',
    'admin',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);


$entrada = file_get_contents('php://input');
$dados = json_decode($entrada, true);

$titulo = trim($dados['titulo'] ?? '');
$descricao = trim($dados['descricao'] ?? '');

if ($titulo === '' || $descricao === '') {
    http_response_code(422);
    echo json_encode([
        'ok' => false,
        'mensagem' => 'Título e descrição são obrigatórios.'
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$sql = "INSERT INTO produto (titulo, descricao) VALUES (?,?)";
$st = $pdo->prepare($sql);
$st->execute([$titulo, $descricao]);

echo json_encode([
    'ok' => true,
    'mensagem' => 'Registro salvo com sucesso.'
], JSON_UNESCAPED_UNICODE);