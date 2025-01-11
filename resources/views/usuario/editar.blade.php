<dialog id="dialog_editar">

    <form>
        @csrf
        <div class="cabecalho-modal">
            <h2 class="titulo-criar">Editar Usuário</h2>
            <img src="{{ asset('x.svg') }}" alt="">
        </div>
        <hr>
        <div class="caixa-itens-criar">
            <div class="campos-criar">
                <div class="item-criar">
                    <input type="hidden" id="id_edit">
                    <label for="nome_criar">Nome:</label>
                    <input type="text" id="nome_editar" name="nome_editar" autocomplete="off">
                </div>
                <div class="item-criar">
                    <label for="email_criar">E-Mail:</label>
                    <input type="email" id="email_editar" name="email_editar" autocomplete="off">
                </div>
                <div class="item-criar">
                    <label for="senha_criar">Senha:</label>
                    <input type="password" id="senha_editar" name="senha_editar" autocomplete="off">
                </div>
            </div>
            <div class="botoes-editar">
                <a href="#" id="editar" class="btn btn-adicionar" onclick="executarModalEditar()" >Editar</a>
            </div>

        </div>

    </form>
</dialog>
