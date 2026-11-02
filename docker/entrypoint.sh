#!/bin/sh
set -e

cd /var/www/html

if [ -z "$APP_KEY" ]; then
    echo "APP_KEY belum diisi. Buat dengan: php artisan key:generate --show" >&2
    exit 1
fi

# Symlink public/storage -> storage/app/public (gambar situs)
php artisan storage:link --force >/dev/null

# Cache config, route, view, event berdasarkan env dari Dokploy
php artisan optimize

chown -R www-data:www-data storage bootstrap/cache

exec "$@"
