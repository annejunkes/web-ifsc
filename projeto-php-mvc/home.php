<?php
    session_start();
    
    if(!isset($_SESSION['usuario'])){
        header("Location:rota.php");
    }
    echo $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<nav>
<a href="rota.php?rota=logout"> LOGOUT </a>
<br>
<a href="rota.php?rota=cadastro"> CADASTRAR USUÁRIO </a>
</nav>

    <h2>Lista de Usuários</h2>

    <main>
        <?php require "listarUsuarios.php" ?>

</main>


    
</body>
</html>