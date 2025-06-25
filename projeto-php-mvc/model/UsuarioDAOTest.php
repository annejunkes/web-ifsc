<?php

include_once __DIR__.'./Conexao.php';
include_once __DIR__.'./Usuario.php';
include_once __DIR__.'./UsuarioDAO.php';

$daoUsuario = new UsuarioDAO();

$daoUsuario->insere(new Usuario("João", "joao@gmail.com", "john"));
echo var_dump($daoUsuario->buscar_usuario_email("joao@gmail.com"));

echo "<pre>";
print_r(var_dump($daoUsuario->lista_todos()));
echo "<pre>";

echo "<p> autenticacao: </p>";
echo var_dump($daoUsuario->autenticar("joao@gmail.com", "john"));
echo var_dump($daoUsuario->autenticar("joao@gmail.com", "vhghng"));

?>