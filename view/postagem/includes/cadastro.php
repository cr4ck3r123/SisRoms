<!-- MODAL -->
<div class="modal fade ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Cadastro de Postagem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="user">Usuario</label>
                        <input type="text" class="form-control" id="user" placeholder="" name="user">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="" name="senha">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="" name="email">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Perfil</label>
                        <select class="form-control" id="numIdPerfil" name="numIdPerfil">
                            <option value="">Selecione</option>
                            <option value="">Administrador</option>
                            <option value="">Leitor</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
            </div>
        </div>
    </div>
</div>


</div>
</div>
</div>