      
<?php
include '../includes/header.php';

include '../../dao/modeloDAO.php';
$DAO = new modeloDAO();
$modelo = $DAO->getModelos();

?>
<div class="container-fluid" style="margin-top: 5%">
    <div class="row">
        <div class="col-md-12">
            <h1 align="center"><i class="fas fa-mobile-alt"></i> Samsung</h1>
        </div>             

    </div>    
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead class="thead-light" align="width">
                    <tr>                        
                        <th style="margin: 20%">Modelo</th>
                        <th>Rom</th>
                        <th>Ferramenta</th>
                        <th>Esquema Eletrico</th>
                    </tr>
                </thead>

                <tbody align="width">
                    <?php                    foreach ($modelo as $row): ?>
                    <tr>       
                        <td style="width: 65%"> <?php  echo $row["modelo"].$row["versao"]. "<br>"; ?></td> 
                        <td style=""><a href=<?php echo $row["url"]?> target="_blank"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i> DOWNLOAD</button></a></td>
                        <td style="margin-left: 50%"><a href=<?php echo $row["urlF"] ?> target="_blank"><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> DOWNLOAD</button></a></td>
                        <td style="margin-left: 50%"><button type="button" class="btn btn-danger"><i class="fas fa-edit"></i> DOWNLOAD</button></td>
                        
                    </tr>
                     <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php
include '../includes/footer.php';
?>
 

