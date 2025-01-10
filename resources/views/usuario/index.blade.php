<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste Pratico - Chromasoft</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                                    <label for="nome">E-Mail:</label>
                                    <input type="text" id="nome" name="nome" autocomplete="off">
                                </div>
                            </div>
                            <div class="botoes">
                                <button class="btn">Buscar</button>
                                <button class="btn btn-adicionar">Novo Usuário</button>
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
                        {{-- @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->nome }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    <button>Editar</button>
                                    <button>Excluir</button>
                                </td>
                            </tr>
                        @endforeach --}}
                        <tr>
                            <td>teste1</td>
                            <td>teste1@gmail.com</td>
                            <td><button class="btn-editar">Editar</button>
                                <button class="btn-excluir">Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>teste1</td>
                            <td>teste1@gmail.com</td>
                            <td><button>Editar</button>
                                <button>Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>teste1</td>
                            <td>teste1@gmail.com</td>
                            <td><button>Editar</button>
                                <button>Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>teste1</td>
                            <td>teste1@gmail.com</td>
                            <td><button>Editar</button>
                                <button>Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>teste1</td>
                            <td>teste1@gmail.com</td>
                            <td><button>Editar</button>
                                <button>Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>teste1</td>
                            <td>teste1@gmail.com</td>
                            <td><button>Editar</button>
                                <button>Excluir</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>
