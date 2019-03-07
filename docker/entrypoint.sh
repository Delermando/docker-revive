#!/bin/bash
set -e

mkdir -p /var/www/html/www/admin/plugins
chown -R www-data:www-data .
chmod -R a+w /var/www/html/plugins
chmod -R a+w /var/www/html/www/admin/plugins

/etc/init.d/php7.2-fpm start
nginx -g 'daemon off;'
