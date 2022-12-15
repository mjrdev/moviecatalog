### App Catálogo de Filmes com PHP & MySQL & Bootstrap

![app example](/public/project.jpg)

App foi construido com PHP puro com Composer, MySQL e Bootstrap, usando PDO para conexão com o banco de dados. E se utilizando principalmende da estrutura MVC para melhor entendimento e qualidade do código.

#### Estrutura de pasta

```
- /dbinitial        *guarda dump inicial do banco
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

> ##### Requisitos: Docker & Composer.

```
git clone [repo]
composer install
composer dump
docker composer up --build
```
> ##### Apenas com docker.

```
git clone [repo]
docker composer up --build
docker exec -it php bash
composer install
composer dump
```

<div align="center">
  mjrdev <a href="https://mjrdev.github.io/portfolio/">portfólio</a>
</div>
