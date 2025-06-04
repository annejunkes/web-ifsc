<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="2.php">
    <input type="number" name="A";>
    <input type="number" name="A";>
    <input type="submit">
    <?php

    $A=0; $B=0;

    if(isset($_GET["A"])){
        $A=$_GET["A"];
    }

    if(isset($_GET["B"])){
        $B=$_GET["B"];
    }
    echo "A soma é ";
    echo $A." + ".$B." = ".$A + $B;

    ?>
</body>
</html>