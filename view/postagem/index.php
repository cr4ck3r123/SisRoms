      
<?php
include '../includes/header.php';
?>
<script type="text/javascript" src="../perfil/js/mFunction.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-11">
            <h1 align="center"><i class="far fa-align-justify"></i>Postagem</h1>
        </div>              
        <div class="col-md-1">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".ModalCadastro"><i class="far fa-file"></i> Novo</button>
        </div>
    </div>    
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>Fernando</td>
                        <td>fernando@gmail.com</td>
                        <td><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i> Editar</button></td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>jacob@gmail.com</td>   
                    <td><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i> Editar</button></td>
   
                </tr>
                <tr>
                    <td>Larry the Bird</td>
                    <td>larry@gmail.com</td>
                    <td><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i> Editar</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php
include './includes/cadastro.php';
include '../includes/footer.php';
?>
 