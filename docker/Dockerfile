FROM nginx:1.9.9

RUN apt-get update && apt-get install -y \
  apt-transport-https \
  lsb-release \
  ca-certificates \
  wget
RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list
RUN apt-get update && apt-get install -y \
  apt-utils \
  php7.2-cli \
  php7.2-common \
  php7.2-fpm \
  php7.2-curl \
  php7.2-gd \
  php7.2-json \
  php7.2-mysql \
  php7.2-xml \
  php7.2-mbstring \
  php-pear \
  curl

RUN pear install XML_RPC2

RUN touch /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

RUN rm -rf /var/lib/apt/lists/*

RUN mkdir -p /var/www/html
RUN curl -L https://download.revive-adserver.com/revive-adserver-4.1.1.tar.gz | tar -zx -C /var/www/html/ --strip-components=1

RUN find /var/www/html/var -type d -exec chmod 700 {} +
RUN find /var/www/html/var -type f -exec chmod 600 {} +
RUN chmod 700 /var/www/html/var
RUN chown -R www-data:www-data /var/www/html/plugins
RUN chmod 700 /var/www/html/plugins
RUN chown -R www-data:www-data /var/www/html/www/admin/plugins
RUN chmod 700 /var/www/html/www/admin/plugins
RUN chown -R www-data:www-data /var/www/html/
VOLUME /var/www/html

RUN usermod -u 1000 www-data

WORKDIR /var/www/html

EXPOSE 80 443

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
