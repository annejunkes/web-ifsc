<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Crie um site em PHP que faça o sorteio de um número aleatório no intervalo informado pelo usuário por meio de um formulário HTML.</p>

<form action="05.php">
        <label for="min" > Valor mínimo </label>
        <input type="number" id="min" name="min">

        <label for="max" > Valor máximo </label>
        <input type="number" id="max" name="max">

        <input type="submit" value="Sortear">

        <?php  ?> 

        <p>

<?php

function randomize($min, $max){
    $numero = rand($min, $max); 
    echo $numero;
  }

  randomize($min, $max);

?>
</body>
</html>