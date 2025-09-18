FROM php:8.2-apache

# Enable PDO + MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy PHP files
COPY public/ /var/www/html/

# Copy assets too
COPY assets/ /var/www/html/assets/

# (optional) give Apache write permission if needed
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
