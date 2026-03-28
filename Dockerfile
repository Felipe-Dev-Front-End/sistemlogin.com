FROM php:8.2-apache

# Copia os arquivos do projeto
COPY . /var/www/html/

# Habilita extensões do PHP (MySQL)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Permissões
RUN chown -R www-data:www-data /var/www/html