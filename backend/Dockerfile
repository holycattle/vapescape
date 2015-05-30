FROM ubuntu:14.04

RUN apt-get update && apt-get install -y nginx \
  php5 \
  php5-fpm \
  php5-cli \
  php5-mcrypt \
  php5-curl \
  php5-gd \
  php5-mysql \
  php5-fpm


RUN php5enmod mcrypt
WORKDIR /vapescape
ADD opencart .
RUN mkdir vapescape; chown -R www-data /vapescape && chgrp -R www-data /vapescape

ADD config/php.ini /etc/php5/fpm/
ADD config/default /etc/nginx/sites-available/
ADD config/nginx.conf /etc/nginx

VOLUME ["backend/opencart/image"]

CMD service php5-fpm start; nginx
