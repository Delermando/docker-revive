#!/bin/bash
set -e

chown -R www-data:www-data .
/etc/init.d/php5-fpm start
nginx -g 'daemon off;'