#Preparação para rodar o projeto
FROM php:bullseye
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN apt-get update && export DEBIAN_FRONTEND=noninteractive \
&& curl -fsSL https://deb.nodesource.com/setup_18.x | bash - &&\
apt-get install -y nodejs
#pasta trabalhada
WORKDIR /app 
COPY . /app
#instalações
RUN docker-php-ext-install pdo pdo_mysql
RUN composer install 
RUN npm install
RUN npm run mix
#rodar o projeto
CMD php artisian serve