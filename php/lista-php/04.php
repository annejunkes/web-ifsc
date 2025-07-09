<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Crie uma função randomize() que imprima no HTML um valor numérico aleatório.</p>

<?php

function randomize(){
  $numero = rand(1, 1000); 
  echo $numero;
}

randomize();

?>

</body>
</html>