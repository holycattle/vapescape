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
RUN mkdir vapescape; 
WORKDIR /vapescape

ADD . .

RUN chown -R www-data /vapescape && chgrp -R www-data /vapescape

VOLUME ["/vapescape"]

CMD service php5-fpm start; nginx
