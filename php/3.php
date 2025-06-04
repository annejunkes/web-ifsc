<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="3.php">
    <label for="PESO"> PESO </label>
        <?php if(isset($_GET["PESO"])){ ?>
            <input id="PESO" 
            type="number" 
            name="PESO" 
            placeholder="INSIRA PESO" 
            value="
            <?php echo $_GET["PESO"] ?> ">
    
        <?php }else{ ?>
            <input id="PESO" 
            type="number" 
            name="PESO" 
            placeholder="INSIRA PESO">
            <?php } ?>

    <label for="ALTURA"> ALTURA </label>
    <input id="ALTURA" type="number" name="ALTURA"  placeholder="INSIRA ALTURA" value="
    <?php echo isset($_GET["ALTURA"]) ? $_GET["ALTURA"] : ""; ?> ">

    <input type="submit">
    


</body>
</html>
</html>