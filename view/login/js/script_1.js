$(document).ready(function () {

    var usuarioController = '../../controller/usuario.php';

    $('form[name="formLogin"]').submit(function () {
//        console.log("clicou");
//        alert("clicou");
        //$(this).fadeOut('slow');
        var botao = $(this).find(':button');
        var campos = $("#formLogin").serialize();
        var action = 'action=verifica';

        $.ajax({
            method: 'POST',
            url: usuarioController,
            data: action + '&' + campos,
            beforeSend: function () {
                botao.attr('disabled', true);
                botao.html('Aguarde Carregando...');
                // $('.load').fadeIn('slow');                
            },
            success: function (msg) {

                console.log(msg);
                if (msg == 0) {
                    botao.html('Login');
                    botao.attr('disabled', false);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Usuário ou senha invalidos!',
                    });
                } else {
                        console.log(msg);
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
            }
        });

        return false;
    });


});