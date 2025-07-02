<?php

include_once __DIR__.'./model/Conexao.php';
include_once __DIR__.'./model/Usuario.php';
include_once __DIR__.'./model/UsuarioDAO.php';
include_once __DIR__.'./model/UsuarioDAO.php';
include_once __DIR__.'./controller/AutenticacaoController.php';
include_once __DIR__.'./controller/CadastroController.php';
session_start();


if(isset($_GET['rota'])){
    $rota = $_GET['rota'];
}else{
    $rota="login";
}

switch($rota){
    case 'login':

        if(isset($_SESSION['usuario'])){
            header("Location:home.php");
        }
        require "login.php";
        break;

    case 'autenticacao':
        $aut = new AutenticacaoController();
        $aut->login();
        break;
    
    case 'cadastro':
        $cadastro = new CadastroController();
        $cadastro ->cadastro();
            header("Location:cadastroUsuario.php");
            break;

    case 'home':
        header("Location:home.php");
        break;

    case 'logout':
            session_destroy();

            header("Location:rota.php");
            break;


    default:
    echo "rota desconhecida";
}

?>