FROM php:7.3-apache
LABEL MAINTAINER="Vincent"

RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli
WORKDIR /var/www/html/
COPY . /var/www/html/
EXPOSE 80