FROM php:7.4-apache
WORKDIR /var/www/html
COPY ./online-examination/ /var/www/html/
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN a2enmod rewrite
EXPOSE 80