var perfilController = '../../controller/perfil.php';

$("#btnSalvar").click(function () {
    var campos = $("#formCategoria").serialize();
    var action = 'action=insert';
    //Função ajax
    $.ajax({
        method: 'POST',
        url: perfilController,
        data: action + '&' + campos
    }).done(function (msg) {
        alert(msg);
    });
});