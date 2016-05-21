ItFastSolution
==============

**Screenshots:** 

![alt text](https://raw.githubusercontent.com/saidijalel/itfastsol/master/web/uploads/screenshots/Screenshot1.png "Screenshot 1")

![alt text](https://raw.githubusercontent.com/saidijalel/itfastsol/master/web/uploads/screenshots/Screenshot2.png "Screenshot 2")

**Run:** 
```bash
cd itfastsol

composer install

bower install

php app/console doctrine:database:drop --force

php app/console doctrine:database:create

php app/console doctrine:schema:update --force

php app/console doctrine:fixtures:load
```

Dev: http://localhost/itfastsol/web/app_dev.php/

Prod: http://localhost/itfastsol/web/

**Installation & Requirements:**

MySQL 5

PHP 5.6+

NodeJS

https://nodejs.org

Git

https://git-scm.com/

Bower

http://bower.io/
```bash
sudo npm install -g bower
```

Composer

https://getcomposer.org/

Symfony 2.8

http://symfony.com/


**UI Libs:** 
twitter bootstrap

http://getbootstrap.com/

font-awesome

http://fontawesome.io/

bootstrap-material-design

http://fezvrasta.github.io/bootstrap-material-design/

http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html

flag-icon-css

http://flag-icon-css.lip.is/

https://github.com/lipis/flag-icon-css

```bash
bower install bootstrap -save

bower install fontawesome -save
```

**JavaScript Libs:**

Jquery

https://jquery.com/


**Links:** 
http://www.fabricant-fournisseur.com/

http://www.appeloffres.com

https://www.draw.io/

**Dev:** 

```bash

php composer install

bower install

sudo chmod -R 777 app/logs/* app/cache/*

sudo setfacl -R -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs

sudo setfacl -dR -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs

php app/console doctrine:generate:entity --entity=AppBundle:Post --fields="title:string(255) created_at:datetime updated_at:datetime body:text" --no-interaction

php app/console doctrine:generate:entity --entity=AppBundle:Product --fields="title:string(255) description:string(255) category:string(255) photo:string(255)" --no-interaction

php app/console doctrine:generate:entity --entity=AppBundle:Purchase --fields="title:string(255) description:string(255) start_date:date end_date:date" --no-interaction

php app/console doctrine:generate:entity --entity=AppBundle:Sale --fields="title:string(255) description:string(255) start_date:date end_date:date" --no-interaction

php app/console generate:doctrine:crud --entity=AppBundle:Sale  --with-write

php app/console generate:doctrine:crud --entity=AppBundle:Purchase  --with-write

```

| Post          |   
| ------------- |
| title         | 
| create_date   | 
| update_date   |
| body          |


| Product       |   
| ------------- |
| title         | 
| description   | 
| category      |
| photo         |


| Sale          |   
| ------------- |
| title         | 
| description   | 
| start_date    |
| end_date      |


| Purchase      |   
| ------------- |
| title         | 
| description   | 
| start_date    |
| end_date      |


purchase : achat

sale : vente

```bash

php app/console doctrine:schema:update --dump-sql

php app/console doctrine:schema:update --force

php app/console generate:doctrine:crud --entity=AppBundle:Post  --with-write

php app/console doctrine:fixtures:load

composer require --dev doctrine/doctrine-fixtures-bundle

$bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();

php app/console generate:doctrine:crud --entity=AppBundle:Sale  --with-write

```