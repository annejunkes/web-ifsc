<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="4.php">
    

    <label for="razao"> Razão </label>
    <input id="razao" type="number" name="razao"  placeholder="Insira a razão da PA" value="
    <?php echo isset($_GET["razao"]) ? $_GET["razao"] : ""; ?> ">

    <label for="a1"> a1 </label>
    <input id="a1" type="number" name="a1"  placeholder="Insira o 1º termo da PA" value="
    <?php echo isset($_GET["a1"]) ? $_GET["a1"] : ""; ?> ">

    <label for="an"> an </label>
    <input id="an" type="number" name="an"  placeholder="Insira o nº termo da PA" value="
    <?php echo isset($_GET["an"]) ? $_GET["an"] : ""; ?> ">

    <input type="submit">

    while($an>$a1){
        $a1=$a1+$razao;
        <?php  echo $a1; ?>
    }

    <?php
    
    
    echo "PA (1)";
    echo $a1." + ".$razao." = ".$a1 + $razao;

    ?>


</body>
</html>
</html>