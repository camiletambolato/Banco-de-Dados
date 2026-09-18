## Atividade Banco de Dados - Cidades

**Criando o banco de dados**

Acessar o arquivo main com o comando:
`cd /etc/postgresql/18/main`
 
 Executar o comando:
 `sudo -u postgres psql`
 
 Como postgres, criar o banco de dados com o comando:
 `CREATE DATABASE Cidades;`


---
**Modelar o banco de dados**
```mermaid
erDiagram
Cidades{
    int id PK "Gerado Automaticamente"
    varchar cidade "Armazena o nome da cidade"
    varchar pais "Armazena o nome do país onde a cidade está localizada"
    int população "Armazena a quantidade de habitantes da cidade"
}
```

---


```sql

```