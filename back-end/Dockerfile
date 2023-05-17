FROM mfsiat/php7.4-apache:latest

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
	&& php composer-setup.php \
	&& php -r "unlink('composer-setup.php');" \
	&& mv composer.phar /usr/bin/composer \
    && composer require phpunit/phpunit

WORKDIR /app

COPY . .

RUN composer install

EXPOSE 8080

ENTRYPOINT [ "php", "artisan", "serve" ]
