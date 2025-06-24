#!/bin/bash

echo "Fixing Magento 2 permissions..."

sudo find var generated pub/static pub/media -type d -exec chmod 2775 {} \;
sudo find var generated pub/static pub/media -type f -exec chmod 664 {} \;
sudo find var pub/static pub/media generated -type f -exec chmod 664 {} \;
sudo find var pub/static pub/media generated -type d -exec chmod 775 {} \;
sudo chmod u+x bin/magento
# sudo chown -R $USER:www-data var generated pub/static pub/media
sudo chmod -R 777 var/ pub/ generated/

echo "✅ Permissions fixed."