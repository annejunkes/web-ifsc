<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Crie um script PHP que leia três números representando os possíveis lados de um triângulo e classifique o triângulo de acordo com os tamanhos dos lados.<br></p>
<p>Verifique se os valores fornecidos podem formar um triângulo.<br>
Classifique o triângulo como:<br>
Equilátero: Todos os lados são iguais.<br>
Isósceles: Dois lados são iguais.<br>
Escaleno: Todos os lados são diferentes.</p>

<form action="11.php">

        <label for="lado1" > Lado 1 </label>
        <input type="number" id="max" name="lado1">

        <label for="lado2" > Lado 2 </label>
        <input type="number" id="max" name="lado2">

        <label for="lado3" > Lado 3 </label>
        <input type="number" id="max" name="lado3">

        <input type="submit" value="Classificar"> 


<?php

$lado1=0;
$lado2=0;
$lado3=0;

if(isset($_GET["lado1"])){
    $lado1=$_GET["lado1"];
}
if(isset($_GET["lado2"])){
    $lado2=$_GET["lado2"];
}
if(isset($_GET["lado3"])){
    $lado3=$_GET["lado3"];
}

function classificar($lado1, $lado2, $lado3){

    if($lado1==$lado2 && $lado3==$lado2){
        echo "Equilátero";
    }
    else if($lado1==$lado2 || $lado3==$lado2 || $lado3==$lado1){
        echo "Isóceles";
    }
    else{
        echo "Escaleno";
    }
  }

  classificar($lado1, $lado2, $lado3);

?>
</body>
</html>