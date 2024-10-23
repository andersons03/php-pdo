# PHP PDO

## Topicos:
- Que o PDO é uma abstração para acesso a diversos bancos de dados
- Que, para acessar cada um dos bancos, um driver específico é necessário
- Que os drivers são habilitados através da instalação de extensões no PHP
- Que SQLite é um gerenciador de banco de dados que não precisa de um servidor
- A criar a nossa primeira conexão com um banco de dados

- A executar queries sem precisar conferir os seus resultados, como queries de INSERT, utilizando o método exec
- Que o método exec retorna apenas o número de linhas afetadas, e não o resultado de uma query em si
- A buscar dados no banco, utilizando o método query
- Os diversos métodos para recuperar dados utilizando o PDO:
  -fetch
  -fetchObject
  -fetchColumn
  -fetchAll
- Os diferentes Fetch Modes do PHP, ou seja, as diferentes formas de trazer dados do banco para o PHP