<?php

//include '../view/includes/Connection.php'; 

  
class modeloDAO {
    
    private $conexao;
    
    
    function __construct() {
        $pdo = new Connection();
        $this->conexao = $pdo->getConect();
       }
       
      function getModelos() {
        $sql = 'SELECT * FROM modelo WHERE sigla = ?';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, 'A');
        $stmt->execute();
      
        $modelo = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $modelo;
    }
    
    
}
