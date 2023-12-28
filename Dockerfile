# Imagem base
FROM php:8.2-fpm

# Instalar dependências do sistema para PHP e extensões
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zlib1g-dev
# Instalar extensões do PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www

# Copy the initialization script into the container
COPY init-script.sh /usr/local/bin/init-script
RUN chmod +x /usr/local/bin/init-script


# Expor porta 9000 e iniciar processo do php-fpm server
EXPOSE 9000

CMD ["/usr/local/bin/init-script"]
