# Use official PHP image with Apache
FROM php:8.2-apache

# Enable common PHP extensions if needed
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your code into the container
COPY public/ /var/www/html/

# (optional) copy assets outside public if you want
# COPY assets/ /var/www/html/assets/

# Expose port 80 (Render maps this automatically)
EXPOSE 80
