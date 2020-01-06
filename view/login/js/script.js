
var usuarioController = '../../controller/usuario.php';

$("#btnLogin").click(function () {
    //   console.log("chegou aki");
    var campos = $("#formLogin").serialize();
    var action = 'action=verifica';
 //   var botao = $(this).find(':button');

    $.ajax({
        method: 'POST',
        url: usuarioController,
        data: action + '&' + campos,
        beforeSend: function () {
             $("#btnLogin").text("Carregando...");
            },
    }).done(function (msg) {
        console.log(msg);
        if (msg == 0) {
            swal({
                type: 'error',
                title: 'Oops...',
                text: 'Usuário ou senha invalidos!',
            });
        } else {
       
            swal({
                position: 'top-center',
                type: 'success',
                title: 'Ok...',
                text: 'Usuário logado com sucesso!',
                timer: 1000
            });
            setTimeout(function () {
                $(location).attr('href', '../principal/index.php');
            }, 2000);
        }

    });

    //    alert("TESTE");  
});