# Primeiro contato com Docker em projeto Laravel

## Requisitos para rodar o projeto:

- Ter o Docker e o Docker Composer instalado

## Como rodar:

### 1 - Clone o projeto:

```bash
git clone git@github.com:zeniltonp0/docker-laravel.git
```

### 2- Crie seu arquivo de ambiente na pasta da aplicação:

```bash
cp ./volume_app/.env.example ./volume_app/.env
```

### 3 - Edite ./volume_app/.env para conectar ao MySQL:

```
# ...
DB_CONNECTION=mysql
DB_HOST=laravel_mysql      # Nome do serviço Docker
DB_PORT=3306               # Porta interna do MySQL
DB_DATABASE=laravel_app_db # Nome do bd (tá dentro do docker-compose.yml)
DB_USERNAME=root           # Usuário mysql (tá dentro do docker-compose.yml)
DB_PASSWORD=root           # Senha mysql (tá dentro do docker-compose.yml)
# ...
```

### 4 - 3. Instalar Dependências e Gerar APP_KEY:

```
composer install
php artisan key:generate
```

### 5 - Levantar os containers:

```
docker-compose up -d --build
```

- Depois, só dar o ```php artisan migrate``` dentro do container laravel_php
- Rodar a aplicação na url: ```http://localhost:8080/test-db``` 
