How to git pull of Laravel

git pull origin master
RUN composer install
RUN cp .env.example .env
RUN php artisan key:generate
