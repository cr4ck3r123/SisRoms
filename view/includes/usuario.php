<?php

//include '../../dao/UsuarioDAO.php';

extract($_POST);

switch ($action) {
    case 'verifica':

        $DAO = new UsuarioDAO();

        if ($usuario == null || $senha == null) {
            echo 0;
        } else {
            $rs = $DAO->logar($usuario, $senha);
            $_SESSION['usuario'] = $DAO->pegaLogin($usuario);
            
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

// ADMINISTRADOR LOGADO
function logado($sessao) {

    if ($sessao == null || !isset($sessao)):
        header("Location: ../login/index.php");
        echo 'chegou aki 1';
    else:
        //  echo 'chegou aki 2';

        return TRUE;
    endif;
}
