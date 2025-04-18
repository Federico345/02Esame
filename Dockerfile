FROM php:8.2-apache

# Abilita mod_rewrite (se ti serve)
RUN a2enmod rewrite

# Copia i file nella root del server
COPY . /var/www/html/

# Imposta i permessi corretti
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Assicurati che l'indice esista
RUN test -f /var/www/html/index.php || echo "<?php phpinfo(); ?>" > /var/www/html/index.php

EXPOSE 80

# docker build -t php-app .
# docker run -d -p 8080:80 --name php-app php-app


# COMANDO PER LAVORARE IN LIVE
# docker run -d -p 8080:80 -v "$PWD":/var/www/html --name php-app php-app


# http://localhost:8080

# docker stop php-app
# docker rm php-app
# docker ps