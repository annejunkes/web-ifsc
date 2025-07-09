<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Crie um site em PHP que permita ao usuário informar um número e verificar se ele é Par ou Ímpar.
Imprima o número informado e o resultado (Par ou Ímpar).</p>

<form action="06.php">

        <label for="numero" > Número </label>
        <input type="number" id="max" name="numero">

        <input type="submit" value="Verificar"> 

        <p>

<?php

$numero=0;

if(isset($_GET["numero"])){
    $numero=$_GET["numero"];
}

function verificaPar($numero){
    if($numero%2==0){
        echo "É par";
    }
    else{
        echo "É ímpar";
    }
  }

  verificaPar($numero);

?>
</body>
</html>