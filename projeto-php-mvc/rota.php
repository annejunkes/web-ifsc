<?php

include_once __DIR__.'./modelo/Conexao.php';
include_once __DIR__.'./modelo/Usuario.php';
include_once __DIR__.'./modelo/UsuarioDAO.php';
include_once __DIR__.'./modelo/UsuarioDAO.php';
include_once __DIR__.'./controller/AutenticacaoController.php';


if(isset($_GET['rota'])){
    $rota = $_GET['rota'];
}else{
    $rota="login";
}

switch($rota){
    case 'login':
        require "login.php";
        break;

    case 'autenticacao':
        $aut = new AutenticacaoController();
        $aut->login();
        break;

    case 'home':
        require "home.php";
        break;


    default:
    echo "rota desconhecida";
}

?>