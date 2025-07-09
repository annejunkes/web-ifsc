<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Crie um site que imprima a tabuada de um número informado pelo usuário em um formulário.</p>

<form action="07.php">

        <label for="numero" > Número </label>
        <input type="number" id="max" name="numero">

        <input type="submit" value="Sortear"> 


<?php

$numero=0;

if(isset($_GET["numero"])){
    $numero=$_GET["numero"];
}

function tabuada($numero){

    for($i=0; $i<10; $i++){
        echo $numero*$i;
        echo ", ";
    }
  }

  tabuada($numero);

?>
</body>
</html>