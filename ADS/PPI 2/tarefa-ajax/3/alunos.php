<?php
header('Content-Type: application/json; charset=utf-8');
$pdo = new PDO(
        'mysql:host=localhost;dbname=test;charset=utf8mb4',
        'root',
        'admin',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

$q = trim($_GET['q'] ?? '');

// $alunos = [
//     ['id' => 1, 'nome' => 'Anne', 'turma' => 'ADS1'],
//     ['id' => 2, 'nome' => 'Jaque', 'preco' => 'PG3'],
//     ['id' => 3, 'nome' => 'Fer', 'preco' => 'MOD6'],
// ];

$sql = 'SELECT id, nome, turma FROM alunos WHERE nome LIKE :q LIMIT 20';
$stmt = $pdo->prepare($sql);
$stmt->execute(['q' => "%$q%"]);
$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo json_encode([
    'ok' => true,
    'alunos' => $alunos
], JSON_UNESCAPED_UNICODE);

