<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

<h2> Cadstro de Usuário</h2>
    
    <form action="rota.php?rota=cadastro" method="post">
        <label for="nome" > nome </label>
        <input type="nome" id="nome" name="nome">

        <label for="email" > email </label>
        <input type="email" id="email" name="email">

        <label for="senha" > senha </label>
        <input type="senha" id="senha" name="senha">

        <input type="submit" value="cadastrar">




    </form> 

</body>
</html>