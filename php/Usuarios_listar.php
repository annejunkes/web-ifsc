<?php
    include_once 'Usuario.php';
    session_start();


    if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['senha'])){
        $user = new Usuario($_GET['nome'], $_GET['email'], $_GET['senha']);
    }else{
        $user=null;
    }

    if(!isset($arrayUSER)){
        $arrayUSER=array();
    }

    if(isset($_SESSION['userlist'])){
        $arrayUSER=$_SESSION['userlist'];
    }

    if(isset($user)){
        array_push($arrayUSER, $user);
        $_SESSION['userlist']=$arrayUSER;
    }

    echo "<table>";
    echo "<tr> <td> id </td> ";
    echo "<td> nome </td>";
    echo "<td> email </td>";
    echo "<td> senha </td> </tr>";

    for($i=count($arrayUSER)-1;$i>=0;$i--){
        echo "<tr> <td>", $user->id , " </td>";
        echo "     <td>", $user->nome , " </td>";
        echo "     <td>", $user->email , " </td>";
        echo "     <td>", $user->senha , " </td> </tr>";

    }

    echo "</table>";

    ?>
