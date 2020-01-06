<?php

include '../view/includes/Connection.php';

class UsuarioDAO {

    private $conexao;

    function __construct() {
        $pdo = new Connection();
        $this->conexao = $pdo->getConect();
    }

    function insert(Usuario $usuario) {
        try {
            $pdo = new Connection();
            $sql = 'insert into user (nome, usuario, senha, email, idPerfil) values (?, ?, ?, ?, ?);';
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $usuario->getNome());
            $stmt->bindValue(2, $usuario->getUsuario());
            $stmt->bindValue(3, $usuario->getSenha());
            $stmt->bindValue(4, $usuario->getEmail());
            $stmt->bindValue(5, $usuario->getPerfil());
            $stmt->execute();
            $pdo->disconnect($this->conexao);
        } catch (PDOException $ex) {
            echo 'ERRO ' . $ex;
        }
    }

    function update(Usuario $usuario) {
        try {
            $pdo = new Connection();
            $sql = 'update tbl_usuario set nome = ?, usuario = ?, senha = ?, email = ?, idPerfil = ?  where idusuario = ?';
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $usuario->getNome());
            $stmt->bindValue(2, $usuario->getUsuario());
            $stmt->bindValue(3, $usuario->getSenha());
            $stmt->bindValue(4, $usuario->getEmail());
            $stmt->bindValue(5, $usuario->getPerfil());
            $stmt->bindValue(6, $usuario->getIdUsuario());
            $stmt->execute();
            $pdo->disconnect($this->conexao);
        } catch (PDOException $ex) {
            echo 'ERRO ' . $ex;
        }
    }

    function delete($idUsuario) {
        try {
            $sql = 'delete from tbl_usuario where idUsuario = ?';
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $idUsuario);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo 'ERRO ' . $ex;
        }
    }

    function getUsuario() {
        $sql = 'select idUsuario, nome, usuario, senha, email, idPerfil  from tbl_usuario';
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $rs;
    }

    function logar($usuario, $senha) {

        $sql = 'select usuario, senha from user where usuario = ? and senha = ? ';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $usuario);
        $stmt->bindValue(2, $senha);
        $stmt->execute();
        $rs = $stmt->fetchall(PDO::FETCH_ASSOC);
    
        return $rs;
    }

    function pegaLogin($login) {
        try {
            $sql = 'SELECT * FROM user WHERE usuario = ?';
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $login);
            $stmt->execute();            
     
                $rs = $stmt->fetchall(PDO::FETCH_ASSOC);
                return $stmt->fetchall(PDO::FETCH_ASSOC);
                       
                        
        } catch (Exception $ex) {
            
        }
    }

}
