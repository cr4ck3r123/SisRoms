<?php

include '../view/includes/Connection.php'; 

  
class modeloDAO {
    
    private $conexao;
    
    
    function __construct() {
        $pdo = new Connection();
        $this->conexao = $pdo->getConect();
       }
       
      function getModelos() {
        $sql = 'SELECT * FROM `modelo` WHERE sigla = A';
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $rs;
    }
    
    
}
