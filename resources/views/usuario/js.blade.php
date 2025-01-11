<script>
    const botao_novo = document.querySelector("#botao_novo");
    const modal_criar = document.querySelector("dialog");
    const botao_fechar = document.querySelector("dialog img");
    const botao_fechar_editar = document.querySelector("#dialog_editar img");
    const botao_criar = document.querySelector("#criar");
    const modal_editar = document.querySelector("#dialog_editar");

    botao_novo.onclick = function() {
        modal_criar.showModal()
    }

    botao_fechar.onclick = function() {
        modal_criar.close()
    }

    botao_fechar_editar.onclick = function() {
        modal_editar.close()
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
        if (email == '') {
            modal_criar.close();
            Swal.fire({
                title: "Erro!",
                text: "Preencha o campo email!",
                icon: "error"
            }).then(() => {
                modal_criar.showModal();
            })
            return false;
        }
        if (senha == '') {
            modal_criar.close();
            Swal.fire({
                title: "Erro!",
                text: "Preencha o campo senha!",
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

    function abrirModalEditar(id) {
        modal_editar.showModal();
        var nome = document.querySelector("#nome_" + id).textContent.trim();
        var email = document.querySelector("#email_" + id).textContent.trim();

        document.querySelector("#id_edit").value = id;
        document.querySelector("#nome_editar").value = nome;
        document.querySelector("#email_editar").value = email;

    }

    function executarModalEditar() {
        var id = document.querySelector("#id_edit").value.trim();
        var nome = document.querySelector("#nome_editar").value.trim();
        var email = document.querySelector("#email_editar").value.trim();
        var senha = document.querySelector("#senha_editar").value;
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
        if (email == '') {
            modal_criar.close();
            Swal.fire({
                title: "Erro!",
                text: "Preencha o campo email!",
                icon: "error"
            }).then(() => {
                modal_criar.showModal();
            })
            return false;
        }
        if (senha == '') {
            modal_editar.close();
            Swal.fire({
                title: "Deseja manter a senha antiga?",
                showDenyButton: true,
                confirmButtonText: "Sim",
                denyButtonText: "Não, Alterar."
            }).then((result) => {
                if (result.isDenied) {
                    modal_editar.showModal();
                    return;
                }

                var dados = {
                    'nome': nome,
                    'email': email,
                    'senha': senha,
                }

                fetch(`/update/${id}`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify(dados)
                    })
                    .then(response => response.json())
                    .then(data => {
                        modal_editar.close();
                        Swal.fire({
                            title: "Sucesso!",
                            text: "Usuário editado com sucesso!",
                            icon: "success"
                        }).then(() => {
                            window.location.reload();
                        })
                    }).catch(error => {
                        modal_editar.close();
                        Swal.fire({
                            title: "Erro!",
                            text: "Erro ao editar usuário!",
                            icon: "error"
                        })
                    });
            });
            return;
        }

        var dados = {
            'nome': nome,
            'email': email,
            'senha': senha,
        }

        fetch(`/update/${id}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(dados)
            })
            .then(response => response.json())
            .then(data => {
                modal_editar.close();
                Swal.fire({
                    title: "Sucesso!",
                    text: "Usuário editado com sucesso!",
                    icon: "success"
                }).then(() => {
                    window.location.reload();
                })
            }).catch(error => {
                modal_editar.close();
                Swal.fire({
                    title: "Erro!",
                    text: "Erro ao editar usuário!",
                    icon: "error"
                })
            });
    }
</script>
