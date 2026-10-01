<?php
header('Content-Type: application/json; charset=utf-8');

$alunos = [
    ['id' => 1, 'nome' => 'Anne', 'turma' => 'ADS1'],
    ['id' => 2, 'nome' => 'Jaque', 'preco' => 'PG3'],
    ['id' => 3, 'nome' => 'er', 'preco' => 'MOD6'],
];

echo json_encode([
    'ok' => true,
    'alunos' => $alunos
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);