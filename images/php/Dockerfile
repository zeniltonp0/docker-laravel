# imagem base
FROM php:8.3.14-fpm

# Instalação de dependências e extensões
# Atualiza os pacotes e instala as bibliotecas necessárias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    git \
    unzip \
    libicu-dev \
    libxml2-dev \
    libssl-dev \
    bash \
    build-essential \
    && rm -rf /var/lib/apt/lists/*

# Instalar extensões PHP
RUN docker-php-ext-install gd pdo pdo_mysql intl zip opcache

# Instalar o NodeJS e NPM
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

# Adicionar o Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Limpar o cache do APT para reduzir o tamanho da imagem
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*