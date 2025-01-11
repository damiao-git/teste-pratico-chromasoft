
# Teste Prático - Chromasoft

## Descrição

Este projeto foi desenvolvido como parte de um teste prático para a vaga de Desenvoledor FullStack Web. Ele consiste em uma aplicação web que gerencia usuários.

## Funcionalidades

- Cadastro de usuários: Permite cadastrar usuários com os campos: Nome, Email, Senha.

- Edição de usuários: Permite editar as informações de um usuário existente.

- Exclusão de usuários: Permite excluir um usuário do sistema.

- Listagem de usuários: Exibe uma lista de todos os usuários cadastrados no sistema, **com a possibilidade de filtragem**

- Validação de dados: Valida os dados inseridos pelos usuários para garantir que estejam corretos (ex.: verificar se o e-mail tem formato válido, se o nome tem pelo menos 3 caracteres, etc.).

## Tecnologias Utilizadas

- PHP versão 8.1.10
- Laravel versão 10.48.25
- Banco de dados MySQL versão 8.0.30
- Outras ferramentas (Vscode, Laragon, Google Chrome)

## Pré Requisitos

Antes de começar, certifique que tem as seguintes ferramentas na sua máquina: 

- PHP 8+
- Composer
- MySQL
- Git

## Como Rodar o projeto
### Clonando o Repositório

```git clone https://github.com/damiao-git/teste-pratico-chromasoft.git```
```cd teste-pratico-chromasoft```

### Configurando o Projeto

1. Instale as dependências

```composer install```

2. Copie o arquivo .env.example e crie um novo .env:

```cp .env.example .env```

3. Configure as variáveis de ambiente no .env, como o banco de dados e a porta.

4. Gere a chave da aplicação:

```php artisan key:generate```

5. Execute as migrações

```php artisan migrate --seed```

6. Inicie o servidor: 

```php artisan serve```

## Autor

**José Damião**

#### Considerações Funcionalidades

- Gosto de usar o SweetAlert para mostrar as mensagens;
- Criei uma classe de mensagens para agiliar as respostas para o front;
- Tenho mais familiaridade com JQuery do que Javascript Puro;
- Seria interessante dar continuidade nesse crud e inserir Autentição e login com esses dados, mas não sei se daria tempo;
