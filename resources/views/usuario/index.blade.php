<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste Pratico - Chromasoft</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dialog.css') }}">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="superior">

                <div class="filtro">
                    <form action="#">
                        <h2 class="titulo">Filtro</h2>

                        <div class="caixa-itens">
                            <div class="campos">
                                <div class="item">
                                    <label for="nome">Nome:</label>
                                    <input type="text" id="nome" name="nome" autocomplete="off">
                                </div>
                                <div class="item">
                                    <label for="email">E-Mail:</label>
                                    <input type="text" id="email" name="email" autocomplete="off">
                                </div>
                            </div>
                            <div class="botoes">
                                <button class="btn">Buscar</button>
                                <a href="#" id="botao_novo" class="btn btn-adicionar">Novo Usuário</a>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
            <hr>
            <div class="tabela">
                <table>
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Email</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->nome }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    <button class="btn-editar">Editar</button>
                                    <button class="btn-excluir">Excluir</button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    @include('usuario.criar')
    @include('usuario.js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
