FROM trafex/alpine-nginx-php7:latest

USER root

RUN apk add php-pdo_mysql

USER nobody
