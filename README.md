# larabooks

## Apresentação 
Larabook é um projeto experimental, demostrativo, projetado para exibir competências  em desenvolvimento web utilizando PHP. Esta aplicação é concebida como um catálogo de livros, que  armazena dados sobre autores, assuntos e livros, e também mapeia de forma as interconexões entre essas entidades, oferecendo uma experiência de usuário integrada.

## Tecnologias 
- PHP
- MySQL
- Laravel
- HTML, CSS, JS
- jQuery, Bootstrap
- Docker

## Alterações Modelo

- TIMESTAMPS - Utilizando o padrão do Laravel de incluir as colunas created_at e updated_at
-  Livros.Codl -> CodLi e Assunto.codAs -> CodAs - Alterado para seguir um mesmo padrão em todo projeto
- Livros.AnoPublicacao (VARCHAR --> CHAR)

## Excutanto o Projeto

- Necessário ambiente com Docker e Docker-compose funcionais
- git clone 
- cd larabooks
- docker compose up --build 

## Implementado

- CRUD de Livros
- CRUD de Autores
- CRUS de Assuntos
- Layout Bootstrap
- Visualização dos relacionamentos
- Validações de dados no frontend e backend
- Máscara para input de numeros
- Mensagens ao ususario com spatie/laravel-flash https://github.com/spatie/laravel-flash
- Select2 com pesquisa com ajax nos relaiomentos n:n (Livro - Autor e Livro - Assunto)
- Relatorio utilizando views


## Próximas Melhorias 

- Dashboard com Gráficos
- Geração de PDF
- Aprimorar tratamento de erros
- Tradução de mensagens de Validação do Laravel
- Maior Componentização do frontend

