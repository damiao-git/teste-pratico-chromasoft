<script>
    const botao_novo = document.querySelector("#botao_novo");
    const modal_criar = document.querySelector("dialog");
    const botao_fechar = document.querySelector("dialog img");
    const botao_criar = document.querySelector("#criar");

    botao_novo.onclick = function() {
        modal_criar.showModal()
    }

    botao_fechar.onclick = function() {
        modal_criar.close()
    }

    botao_criar.onclick = function() {
        var nome = document.querySelector("#nome_criar").value.trim();
        var email = document.querySelector("#email_criar").value.trim();
        var senha = document.querySelector("#senha_criar").value;
        var csrfToken = document.querySelector('input[name="_token"]').value;
        if (nome == '') {
            modal_criar.close();
            Swal.fire({
                title: "Erro!",
                text: "Preencha o campo nome!",
                icon: "error"
            }).then(() => {
                modal_criar.showModal();
            })
            return false;
        }
        var dados = {
            'nome': nome,
            'email': email,
            'senha': senha,
        }

        fetch('/store', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(dados)
            })
            .then(response => response.json())
            .then(data => {
                modal_criar.close();
                Swal.fire({
                    title: "Sucesso!",
                    text: "Usuário criado com sucesso!",
                    icon: "success"
                }).then(() => {
                    window.location.reload();
                })
            }).catch(error => {
                modal_criar.close();
                Swal.fire({
                    title: "Erro!",
                    text: "Erro ao criar usuário!",
                    icon: "error"
                })
            });
    }
</script>
