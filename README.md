#INSTALL:
-PHP 8
-PHP composer <8.0

#ENABLE GD EXTENSION IN PHP.INI

cd "2D_Drawing"

composer install

cd "./public"
 php -S localhost:8000 



