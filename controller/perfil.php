<?php
include '../model/Perfil.class.php';
include '../dao/PerfilDAO.php';

extract($_POST);

switch ($action) {
    case 'insert':
       if($nomeCategoria != null){
        $perfil = new Perfil(null, $nomeCategoria);
        $DAO = new PerfilDAO();
        $DAO->insert($perfil);
        echo 1;
        }else{
            echo 'Insera um perfil';
        }
        break;
    case 'update':
            echo "inserir informação do update";
        break;
    case 'delete':
        echo "inserir informação do delete";
        break;
    
    default:
        break;
}