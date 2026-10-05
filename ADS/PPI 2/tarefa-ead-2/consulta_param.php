<?php

$stmt = $pdo->prepare("SELECT * FROM produto WHERE preco < :limite ORDER BY preco DESC");
$stmt->execute([':limite' => 200]);
$baratos = $stmt->fetchAll(PDO: :FETCH_ASSOC);