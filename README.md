# PHP PDO

## Aprendizados:
- Que o PDO é uma abstração para acesso a diversos bancos de dados
- Que, para acessar cada um dos bancos, um driver específico é necessário
- Que os drivers são habilitados através da instalação de extensões no PHP
- Que SQLite é um gerenciador de banco de dados que não precisa de um servidor
- A criar a nossa primeira conexão com um banco de dados

- A executar queries sem precisar conferir os seus resultados, como queries de INSERT, utilizando o método exec
- Que o método exec retorna apenas o número de linhas afetadas, e não o resultado de uma query em si
- A buscar dados no banco, utilizando o método query
- Os diversos métodos para recuperar dados utilizando o PDO:
  - fetch
  - fetchObject
  - fetchColumn
  - fetchAll
- Os diferentes Fetch Modes do PHP, ou seja, as diferentes formas de trazer dados do banco para o PHP

- O que é ***SQL Injection*** e como realizar esse ataque em nossa aplicação
- Que adicionar parâmetros na *string* SQL é perigoso
- A resolver esse problema, utilizando ***Prepared Statements***
- Que *prepared statements* podem inclusive ajudar na performance da aplicação
- As diferenças entre `bindValue` e `bindParam` para vincular parâmetros aos *prepared statements*
- Que podemos informar o tipo de dado que estamos passando através do `PDO`, utilizando o terceiro parâmetro de `bindValue` e `bindParam`
  - PDO::PARAM_BOOL
  - PDO::PARAM_NULL
  - PDO::PARAM_INT
  - PDO::PARAM_STR
  - PDO::PARAM_LOB
  - PDO::PARAM_STMT
  - PDO::PARAM_INPUT_OUTPUT

- As boas práticas e padrões de projeto com orientação a objetos
- O padrão ***Entity*** e vimos que ele já está sendo aplicado em nosso projeto
- O padrão ***Creation Method***, que cria uma conexão, de forma que não precisemos repetir esse código pela aplicação
- O padrão ***Repository***, que permite extrair a lógica de persistência para uma classe específica
- A abstrair a implementação de um *repository*, através de uma interface, para podermos trocar a implementação no futuro, caso seja necessário
- O conceito de injeção de dependências e suas diversas vantagens no desenvolvimento