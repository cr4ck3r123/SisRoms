      
<?php
include '../includes/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-11">
            <h1 align="center"><i class="far fa-share-square"></i> Categoria</h1>
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
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>Fernando</td>                    
                        <td><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i> Editar</button></td>
                    </tr>

                    <tr>
                        <td>Larry the Bird</td>                  
                        <td><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i> Editar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->


<?php
include './includes/cadastro.php';
include '../includes/footer.php';
?>
