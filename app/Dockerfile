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

COPY . .

CMD chown -vR www-data:www-data /vapescape;ls -laF; service php5-fpm start; nginx
