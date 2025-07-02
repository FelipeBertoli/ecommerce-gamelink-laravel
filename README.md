# Ecommerce Gamelink - Laravel

Este projeto consiste em um sistema de e-commerce desenvolvido com Laravel, voltado à comercialização de jogos digitais. A aplicação permite o cadastro, exibição e gerenciamento de produtos, simulação de compra e gerenciamento básico de usuários.

## 🚀 Tecnologias utilizadas

- Laravel
- PHP
- MySQL
- Blade (templating engine)
- Bootstrap (CSS framework)

## ✨ Funcionalidades

- Cadastro, listagem, edição e exclusão de jogos
- Exibição dos jogos em destaque e por categoria
- Carrinho de compras e simulação de pedido
- Tela de login e controle básico de usuários
- Interface responsiva utilizando Blade + Bootstrap
- Banco de dados relacional com migrações e seeders

## 📦 Como executar localmente

1. Clone o repositório:
```bash
git clone https://github.com/FelipeBertoli/ecommerce-gamelink-laravel.git
```

2. Instale as dependências:
```bash
composer install
```

3. Copie o arquivo `.env.example` e configure o ambiente:
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure seu banco de dados no arquivo `.env`

5. Rode as migrações:
```bash
php artisan migrate --seed
```

6. Inicie o servidor local:
```bash
php artisan serve
```

Acesse em `http://localhost:8000`

## 📁 Estrutura do projeto

```
ecommerce-gamelink-laravel/
├── app/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── views/
│   └── css/js
├── routes/
│   └── web.php
└── .env
```

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais informações.
