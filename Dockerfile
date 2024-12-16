FROM php:8.1-fpm-alpine

ARG SHOPIFY_API_KEY
# ENV SHOPIFY_API_KEY=6091ed4af6c0197610e9eeacbc7cf67b

ENV SHOPIFY_API_KEY=f5369d8756c9355f2b24d2d4fbc384c1


RUN apk update && apk add --update nodejs npm \
    composer php-pdo_sqlite php-pdo_mysql php-pdo_pgsql php-simplexml php-fileinfo php-dom php-tokenizer php-xml php-xmlwriter php-session \
    openrc bash nginx

# Install the GD extension dependencies
RUN apk update && \
    apk add --no-cache libpng-dev freetype-dev libjpeg-turbo-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg

# Install the GD extension
RUN docker-php-ext-install -j$(nproc) gd

# Install the Zip extension
RUN apk update && \
    apk add --no-cache libzip-dev && \
    docker-php-ext-install -j$(nproc) zip

RUN docker-php-ext-install pdo_mysql

COPY --chown=www-data:www-data web /app
WORKDIR /app

# Overwrite default nginx config
COPY web/nginx.conf /etc/nginx/nginx.conf

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN composer install --ignore-platform-reqs
RUN touch /app/storage/db.sqlite
RUN chown www-data:www-data /app/storage/db.sqlite

RUN cd frontend && npm install && npm run build
RUN composer build

COPY ./web/entrypoint.sh /entrypoint
RUN sed -i 's/\r//' /entrypoint
RUN chmod +x /entrypoint

ENTRYPOINT ["/entrypoint"]
