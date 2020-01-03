<?php
  include '../view/includes/Connection.php'; 

class categoriaDAO {

 
    private $conexao;
    
     function __construct() {
        $pdo = new Connection();
        $this->conexao = $pdo->getConect();
       }
              
        function insert(Categoria $categoria) {
        try {          
            $sql = 'insert into tbl_categoria (categoria) values (?);';   
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $categoria->getCategoria());
            $stmt->execute();             
        } catch (PDOException $ex) {
            echo 'ERRO ' . $ex;
        }
    }

    function update(Categoria $categoria) {
        try {
         //   $pdo = new Connection();
            $sql = 'update tbl_categoria set categoria = ? where idcategoria = ? ';
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $categoria->getCategoria());
            $stmt->bindValue(2, $categoria->getIdCategoria());
            $stmt->execute();
          //  $pdo->disconnect($this->conexao);            
        } catch (PDOException $ex) {
            echo 'ERRO ' . $ex;
        }
    }

    function delete($idCategoria) {
        try {
            $sql = 'delete from tbl_categoria where idCategoria = ?';
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $idCategoria);           
            $stmt->execute();
        } catch (PDOException $ex) {
            echo 'ERRO ' . $ex;
        }
    }

    function getComentario() {
        $sql = 'select idCategoria, categoria from tbl_categoria';
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $rs;
    }
    
}
