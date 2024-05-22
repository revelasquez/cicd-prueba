FROM nginx:alpine AS nginx

WORKDIR /var/www/html

COPY dockerfiles/nginx.dockerfile ./nginx/Dockerfile
RUN docker build -t nginx ./nginx

FROM nginx-image AS php

WORKDIR /var/www/html

COPY dockerfiles/php.dockerfile ./php/Dockerfile
RUN docker build -t php ./php

COPY dockerfiles/php.root.dockerfile ./php-root/Dockerfile
RUN docker build -t php-root ./php-root

COPY src/app .

RUN composer install

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
