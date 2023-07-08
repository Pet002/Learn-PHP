FROM php:8.0-apache
# FOR MYSQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

# FOR SQL SERVER
RUN apt-get -y install unixodbc-dev
RUN pecl install sqlsrv pdo_sqlsrv
COPY config/php.ini /usr/local/etc/php/

# FOR POSTGRESQL
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

