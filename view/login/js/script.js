
var usuarioController = '../../controller/usuario.php';

$("#btnLogin").click(function () {

    var campos = $("#formLogin").serialize();
    var action = 'action=verifica';

    $.ajax({
        method: 'POST',
        url: usuarioController,
        data: action + '&' + campos
    }).done(function (msg) {
             
        if (msg == 0) {
            swal({
                type: 'error',
                title: 'Oops...',
                text: 'Usuário ou senha invalidos!',
            });
        } else {
//           swal({
//                type: 'success',
//                title: 'Ok...',
//                text: 'Usuario logado com sucesso!',
//                showConfirmButton: false,
//                timer: 15000
//            });                     
             location.href = "../principal/index.php";
        }        
               
    });
   
    //    alert("TESTE");  
});