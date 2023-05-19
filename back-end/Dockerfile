FROM mfsiat/php7.4-apache:latest

# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
# 	&& php composer-setup.php \
# 	&& php -r "unlink('composer-setup.php');" \
# 	&& mv composer.phar /usr/bin/composer \
#     && composer require phpunit/phpunit

WORKDIR /app

COPY . .

RUN composer install
RUN php artisan optimize:clear
RUN php artisan cache:clear
RUN php artisan config:clear
RUN php artisan key:generate

EXPOSE 8000

ENTRYPOINT [ "php", "artisan", "serve", "--host", "0.0.0.0" ]
