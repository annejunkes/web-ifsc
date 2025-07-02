<?php

include_once __DIR__.'./Conexao.php';
include_once __DIR__.'./Usuario.php';

class UsuarioDAO{

    public function __construct(){
        $this->pdo = Conexao::getConexao();
    }

    public function inserir(Usuario $usuario){
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES(?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$usuario->nome, $usuario->email, $usuario->senha]);
    }

    public function buscar_usuario_email($email){
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);
        $registro = $stmt->fetch();
        $usuario = new Usuario($registro["nome"], $registro["email"], $registro["senha"]);
        $usuario->id=$registro["id"];

        return $usuario;
    }

    public function lista_todos(){
        $sql="SELECT * FROM usuarios;";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute();
        $registros=$stmt->fetchAll();
        $usuarios=[];

        foreach($registros as $registro){
            $usuario = new Usuario($registro["nome"], $registro["email"], $registro["senha"]);
            $usuario->id=$registro["id"];
            array_push($usuarios, $usuario);
        }
        return $usuarios;
    }

    public function autenticar($email, $senha){
        $usuario=$this->buscar_usuario_email($email);

        if(isset($usuario) && $usuario->senha==$senha){
                return $usuario;
            }
         else{
                return null;
            }
        }
    }
?>