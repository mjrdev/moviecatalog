### App Catálogo de Filmes com PHP & MySQL & Bootstrap

![app example](/public/example.jpg)

App foi construido com PHP puro com Composer, MySQL e Bootstrap, usando PDO para conexão com o banco de dados. E se utilizando principalmende da estrutura MVC para melhor entendimento e qualidade do código.

#### Estrutura de pasta

```
- /public
- /src
  - /assets         *arquivos estáticos
  - /http           *guarda pastas e classes MVC
  - /db             *carrega classes do banco de dados
  - /router         *classer roteadora
  - app.php         *entrada da aplicação
  - connection.php  *conexão com o banco
  - routes.php      *configura rotas
```

#### Como executar

> ##### Requisitos: PHP 8.1 CLI, Composer latest, MySQL 5.7 ou Docker.
> ##### Para execução em modo de produção será necessário um servidor web.

```
git clone [repo]
composer install
composer dump
php -S localhost:[port]
```

<div align="center">
  mjrdev <a href="https://mjrdev.github.io/portfolio/">portfólio</a>
</div>
