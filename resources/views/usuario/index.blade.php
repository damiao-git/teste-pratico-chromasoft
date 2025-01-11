<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste Pratico - Chromasoft</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dialog.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="superior">

                <div class="filtro">
                    <form action="/" method="GET">
                        <h2 class="titulo">Filtro</h2>

                        <div class="caixa-itens">
                            <div class="campos">
                                <div class="item">
                                    <label for="nome">Nome:</label>
                                    <input type="text" id="nome" name="nome" value="@if(isset($dados['nome'])) {{$dados['nome']}} @endif" autocomplete="off">
                                </div>
                                <div class="item">
                                    <label for="email">E-Mail:</label>
                                    <input type="text" id="email" name="email" value="@if(isset($dados['email'])) {{$dados['email']}} @endif" autocomplete="off">
                                </div>
                            </div>
                            <div class="botoes">
                                <a href="/" class="btn">Limpar</a>
                                <button type="submit" class="btn">Buscar</button>
                                <a href="#" id="botao_novo" class="btn btn-adicionar">Novo Usuário</a>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
            <hr>
            <div class="tabela">
                <table>
                    @if(sizeof($usuarios) == 0)
                    <tr>
                        <p>Nenhum usuário encontrado</p>
                    </tr>
                    @else
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
                                <input type="hidden" id="usuario_id" value="{{$usuario->id}}">
                                <td id="nome_{{$usuario->id}}">{{ $usuario->nome }}</td>
                                <td id="email_{{$usuario->id}}">{{ $usuario->email }}</td>
                                <td class="acoes">
                                    <a href="#" class="btn-editar" onclick="abrirModalEditar({{$usuario->id}})">Editar</a>
                                    <button class="btn-excluir" onclick="excluir({{$usuario->id}})">Excluir</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    @endif
                </table>
            </div>
        </div>

    </div>
    @include('usuario.criar')
    @include('usuario.editar')
    @include('usuario.js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
