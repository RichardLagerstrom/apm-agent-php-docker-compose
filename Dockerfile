FROM php:7.4-apache
COPY ./apm-agent-php_1.1_all.deb /usr/src/apm-agent-php_1.1_all.deb
RUN dpkg -i /usr/src/apm-agent-php_1.1_all.deb
WORKDIR /var/www/html
