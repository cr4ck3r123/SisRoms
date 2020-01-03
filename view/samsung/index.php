      
<?php
include '../includes/header.php';
?>
<div class="container-fluid" style="margin-top: 5%">
    <div class="row">
        <div class="col-md-12">
            <h1 align="center"><i class="fas fa-mobile-alt"></i> Roms - Samsung</h1>
        </div>             

    </div>    
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead class="thead-light" align="center">
                    <tr>                        
                        <th>Nome</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <?php include '../../dao/modeloDAO.php';
                    ?> 
                    <tbody align="center">
                        <tr>
                            <td>   </td> 
                            <td><button type="button" class="btn btn-success"><i class="fas fa-edit"></i> DOWNLOAD</button></td>
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
 

