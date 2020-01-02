<?php

include '../dao/UsuarioDAO.php';

extract($_POST);

switch ($action) {
    case 'verifica':
        $DAO = new UsuarioDAO();

        if ($usuario == null || $senha == null) {
            echo 0;
        } else {

            $rs = $DAO->logar($usuario, $senha);
            try {
                foreach ($rs as $row) {
                    echo $row["usuario"];
                }
            } catch (Exception $ex) {
                
            }
        }
        break;

    default:
        break;
}