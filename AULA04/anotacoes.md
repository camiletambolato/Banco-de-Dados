## Aula 04
Alteração de parâmetros dos arquivos de configuração:

![alt text](image.png)

---

Para excluir um banco de dado, utilizamos o comando:
```sql
DROP DATABASE cidades;
```
>Cuidado na operação! Não é possível recuperar os dados apagados.
---
Primeiro iniciamos o processo criando um novo banco de dados:
```sql
CREATE DATABASE loja;
```

---
**Modelando o primeiro banco de dados**
```mermaid
erDiagram
Produtos{
    int id PK "Gerado Automaticamente"
    varchar nome "Armazena o nome do produto"
    numeric preço "Preço do produto R$"
    int estoque "Armazena a quantidade de produtos no estoque"
}
```
Para criação do banco de dados, utilizamos os seguintes comandos:

```sql
CREATE TABLE produtos(
    id INT GENERATED ALWAYS AS IDENTITY NOT NULL,
    nome VARCHAR(50) NOT NULL,
    preço NUMERIC(10,2) NOT NULL,
    estoque INT NOT NULL DEFAULT 0
);
```

Para consultar todos os dados da tabela:
```sql
SELECT * FROM produtos;
```

