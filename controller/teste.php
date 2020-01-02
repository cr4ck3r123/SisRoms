<?php
//include '../dao/PerfilDAO.php';
//include '../dao/categoriaDAO.php';
//include '../model/Perfil.class.php';
//include '../model/Categoria.php';
include '../model/Comentario.class.php';
include '../dao/ComentarioDao.php';


//echo "TESTE";


//$perfil = new Perfil(null, 'Administrador 2');

$cometario = new Comentario(null, 'comentarios aki', '27/12/2019', 1);
//$DAO = new PerfilDAO();
$DAO = new categoriaDAO();

//$DAO->insert($perfil);
//$DAO->update($perfil);
$DAO->insert($categoria);
//$DAO->getPerfil();
$rs = $DAO->getComentario();

try{
    foreach ($rs as $row){
        echo $row["categoria"]. "<br>";
    }
} catch (Exception $ex) {

}