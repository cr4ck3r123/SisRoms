<?php

include '../model/modelo.php';
include '../dao/modeloDAO.php';

extract($_POST);

$action = 'a';
switch ($action) {
    case 'a':
        $DAO = new modeloDAO();
        $DAO->getModelos();        
           return $DAO;
        break;
       
    default:
        break;
}

