FROM php:8.2-fpm

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl \
    && docker-php-ext-install zip pdo_mysql \
    && docker-php-ext-enable zip pdo_mysql

# Instalar Node.js e npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Instalar Composer globalmente
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalar dependências do Laravel (opcional)
WORKDIR /var/www/html
COPY . .
RUN composer install
