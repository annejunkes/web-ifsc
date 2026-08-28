<?php
require "conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
 http_response_code(405);
exit("Metodo nao permitido.");
}

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
if (!$id) exit("ID invalido.");

$stmt = $conexao->prepare("DELETE FROM produtos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");
exit;