FROM ubuntu:14.04

RUN apt-get update && apt-get install -y nginx \
  php5 \
  php5-fpm \
  php5-cli \
  php5-mcrypt \
  php5-curl \
  php5-gd \
  php5-mysql


RUN php5enmod mcrypt

WORKDIR /root/vapescape

ENTRYPOINT php -S 0.0.0.0:80
CMD php -S 0.0.0.0:80
