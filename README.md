patrimoine2
===========

A Symfony project created on November 14, 2016, 10:06 am.

Language used: - PHP / Symfony - CSS - JS - SQL / Doctrine - HTML

First, in the patrimoine2 directory :

git clone origin dev

All files are already presents.

composer install

UPDATE manually parameters.yml (app/config/parameters.yml): - DB Name - User / pass

php app/console doctrine:database:create

php app/console doctrine:schema:update --dump-sql (to check DB before sending) php app/console doctrine:schema:update --force (to update the changes)

php app/console asset:install --symlink (to update the CSS)

Filling the pages:

Patrimoine2: URL: /accueil/new

- 2 titles
- 2 articles







