<?php

include_once __DIR__.'./../model/Conexao.php';
include_once __DIR__.'./../model/Usuario.php';
include_once __DIR__.'./../model/UsuarioDAO.php';

public class AutenticacaoController{

    $dao = new UsuarioDAO();

    if(isset($_POST['email']) && isset($_POST['senha'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario = $dao->autenticar($email,$senha)
        if(!isset($usuario)){
            header("Location:rota.php?rota=home")
        }
        else{
            header("Location:rota.php");
        }
        else{
            header("Location:rota.php");
        }
    }
}
?>