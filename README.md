# yii2-microframework
A dockerized version of Yii2 framework with lightweight environment (core only).

Maybe useful for microservices development. It contains multi-container Docker applications with Nginx, PHP-FPM and Composer.

## Requirements

- Docker
- Docker Compose

## Installation

Just clone repository and run `docker-compose up`. You can open [localhost:8081/index.php](http://localhost:8081/index.php) 
after a build has completed.

### Install PHP extensions
If you want to use advanced parameters formatting in `Yii::t()`, non-latin languages with `Inflector::slug()`, 
IDN-feature of `EmailValidator` or `UrlValidator` or the `yii\i18n\Formatter` class you should install 
[PHP Intl](http://php.net/manual/book.intl.php) extension 1.0.2 or higher. Use `docker-php-ext-install` 
for this purpose.

Open docker/php/Dockerfile and add these lines below:

````
RUN docker-php-ext-install intl
````

If your application requires GD PHP extension with FreeType support:

````
RUN apk add --no-cache libpng-dev libjpeg-turbo-dev libwebp-dev \
    && docker-php-ext-configure gd --with-png-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-webp-dir=/usr/include/\
    && docker-php-ext-install gd \
````

Follow [official repository](https://hub.docker.com/_/php/) to get detailed documentation.