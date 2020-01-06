<?php
ob_start();
session_start();
include '../includes/header.php';
//include '../../controller/usuario.php';
//logado($_SESSION['administrador']);
//print_r($_SESSION['xxxx']);
?>

<div class="container" style="margin-top: 5%">
        <div class="jumbotron">
            <h1 class="display-4">Bem vindo ao Sistema de Roms e Esquema Eletrico!</h1>
            <p class="lead">Esta é a pagina principal do sistema de roms para celulares</p>
            <hr class="my-4">
            <p>No menu acima você pode baixar a sua rom facilmente.</p>
        </div>
       </div>    

<?php
include '../includes/footer.php';
?>
 