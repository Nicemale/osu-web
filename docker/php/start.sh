#!/bin/sh

set -u
set -e

cd "$(dirname "${0}")/../.."

test -f .env || cp .env.example .env
./docker/php/wait-for.sh "${1}" -t 60
./build.sh

# undo config and route caching by the script above
php artisan config:clear
php artisan route:clear

php-fpm7 -y "$PWD/docker/php/php-fpm.conf"
