<!DOCTYPE html>
<?php
session_start()
?>

<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="../../plugins/fontawesome-free-5.12.0-web/css/all.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../plugins/bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
        
        
        <title>Blog PHP - Login!</title>
    </head>
    <body class="text-center">
        <div class="container">
            <h1 class="mb-4"><i class="fas fa-glasses"></i> - Faça o Login</h1>
            <form action="" method="post" name="formLogin" id="formLogin">
                <input type="text" name="usuario" id="usuario" class="form-control mb-4" placeholder="Usuário">
                <input type="password" name="senha" id="senha" class="form-control mb-4" placeholder="Senha">
                <button type="submit" id="btnLogin" class="form-control btn btn-primary">Login</button>                
            </form>            
        </div>

        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="../../plugins/jquery-3.4.1.min.js"></script>
        <script src="../../plugins/popper.min.js"></script>
        <script src="../../plugins/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../login/js/script_1.js"></script>
    </body>    
  
</html>
