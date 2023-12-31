FROM php:7.3-alpine

RUN apk --update add tzdata && \
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
    apk del tzdata && \
    rm -rf /var/cache/apk/*

RUN docker-php-ext-install mbstring


WORKDIR /dist

CMD ["php", "-S", "0.0.0.0:8000", "-t", "/dist"]
