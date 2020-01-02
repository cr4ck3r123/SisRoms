<?php

class Connection {

    private $conexao;

    function getConect() {
        try {
            $this->conexao = new PDO('mysql:host=localhost;dbname=dbblog', 'root', '');
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exc) {
            echo 'Erro -> ' . $exc;
        }
        return $this->conexao;
    }

    //Função desconectar 
     public function disconnect($conexao) {
         $conexao = NULL;
    }

}

/*
try {
    $pdo = new Connection();
    
    $conexao = $pdo->getConect();
    $stmt = $conexao->prepare('select * from tbl_usuario');
    $stmt->execute();
    
    $rs = $stmt->fetchall(PDO::FETCH_ASSOC);
    
    foreach ($rs as $row) {
        echo $row["nome"];
    }
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
*/