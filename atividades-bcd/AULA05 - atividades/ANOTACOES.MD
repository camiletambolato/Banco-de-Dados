## Update e Delete
**UPDATE** ou **DELETE** afetam todasa as linhas da sua tabela. Logo, **jamais** executar sem o comando `WHERE`.

```mermaid
flowchart LR
A[SELECT com o WHERE] -->B{Retornou a linha certa?}
B--SIM-->C[Update ou DELETE]
B--NÃO-->A

