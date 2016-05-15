ItFastSolution
==============

Symfony 2.8
http://symfony.com/

Bower 
http://bower.io/

Composer
https://getcomposer.org/

MySQL
PHP 5.6

**UI Libs:** 
twitter bootstrap
http://getbootstrap.com/

font-awesome
http://fontawesome.io/

bower install bootstrap -save
bower install fontawesome -save

**JavaScript Libs:**

Jquery
https://jquery.com/


**Links:** 
http://www.fabricant-fournisseur.com/
http://www.appeloffres.com
https://www.draw.io/


**Dev:** 

php composer install
bower install


sudo chmod -R 777 app/logs/* app/cache/*
sudo setfacl -R -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs
sudo setfacl -dR -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs



php app/console doctrine:generate:entity --entity=AppBundle:Post --fields="title:string(255) created_at:datetime updated_at:datetime body:text" --no-interaction

purchase : achat
sale : vente


php app/console doctrine:schema:update --dump-sql
php app/console doctrine:schema:update --force

php app/console generate:doctrine:crud --entity=AppBundle:Post  --with-write
php app/console doctrine:fixtures:load

composer require --dev doctrine/doctrine-fixtures-bundle
$bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();

php app/console generate:doctrine:crud --entity=AppBundle:Sale  --with-write
