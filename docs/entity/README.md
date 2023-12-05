```mermaid
erDiagram
    USUARIO ||--o{ JOGO_COMPRADO : possui
    JOGO ||--o| JOGO_COMPRADO  : estar
    JOGO |o--||  GENERO : possui
    JOGO }o--o{  CARRINHO : esta
    CARRINHO ||--|| USUARIO: tem
    USUARIO }o--|| COMPRA: realiza
    CARRINHO |o--|| COMPRA: tem
```
