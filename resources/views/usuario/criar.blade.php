<dialog>

    <form>
        @csrf
        <div class="cabecalho-modal">
            <h2 class="titulo-criar">Criar Usuário</h2>
            <img src="{{ asset('x.svg') }}" alt="" onclick="fecharModalCriar()">
        </div>
        <hr>
        <div class="caixa-itens-criar">
            <div class="campos-criar">
                <div class="item-criar">
                    <label for="nome_criar">Nome:</label>
                    <input type="text" id="nome_criar" name="nome_criar" autocomplete="off">
                </div>
                <div class="item-criar">
                    <label for="email_criar">E-Mail:</label>
                    <input type="email" id="email_criar" name="email_criar" autocomplete="off">
                </div>
                <div class="item-criar">
                    <label for="senha_criar">Senha:</label>
                    <input type="password" id="senha_criar" name="senha_criar" autocomplete="off">
                </div>
            </div>
            <div class="botoes-criar">
                <a href="#" id="criar" onclick="modalCriar()"class="btn btn-adicionar">Criar</a>
            </div>

        </div>

    </form>
</dialog>
