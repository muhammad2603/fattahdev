FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY . /var/www/html

WORKDIR /var/www/html

COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer
RUN composer install --optimize-autoloader --no-dev

RUN a2enmon rewrite
RUN sed -i '/<Directory \/var\/www\/>/,.</Directory>/ s/AllowOverrideNone/AllowOverride All/' /etc/apache2/apache2.conf

EXPOSE 8080

CMD ["apache2-foreground"]