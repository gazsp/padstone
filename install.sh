#!/bin/sh

composer install
php -r 'include "padstone/Install.php"; \Imarc\Padstone\Install::run();'
