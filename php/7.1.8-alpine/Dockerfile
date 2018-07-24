FROM httpd:2.4.27

WORKDIR /usr/local/src

ENV PHP_VERSION 7.1.8
ENV PHP_BZ2_URL http://es1.php.net/get/php-"$PHP_VERSION".tar.bz2/from/this/mirror

RUN set -x && apk add --no-cache re2c
RUN set -x && apk add --no-cache bison
RUN set -x && apk add --no-cache bzip2-dev
RUN set -x && apk add --no-cache curl-dev
RUN set -x && apk add --no-cache libjpeg-turbo-dev
RUN set -x && apk add --no-cache libpng-dev
RUN set -x && apk add --no-cache freetype-dev
RUN set -x && apk add --no-cache gettext-dev
RUN set -x && apk add --no-cache icu-dev
RUN set -x && apk add --no-cache g++
RUN set -x && apk add --no-cache libmcrypt-dev
RUN set -x && apk add --no-cache libxslt-dev
RUN set -x && apk add --no-cache file
RUN set -x && apk add --no-cache openssl
#RUN set -x && apk add --no-cache openssl-dev


RUN set -x && wget -O php.tar.bz2 "$PHP_BZ2_URL"
RUN set -x && tar -xf php.tar.bz2
RUN set -x && rm php.tar.bz2

WORKDIR /usr/local/src/php-$PHP_VERSION


RUN set -x && echo "#LoadModule foo_module /usr/lib/apache2/modules/foo.so" >> /opt/httpd/conf/httpd.conf


RUN set -x \
	&& ./configure \
		--prefix=/opt/php-"$PHP_VERSION" \
    	--with-config-file-path=/opt/php-"$PHP_VERSION"/etc \
    	--with-apxs2=/opt/httpd/bin/apxs \
    	--with-mysqli=mysqlnd \
    	--with-mcrypt \
    	--with-iconv \
    	--enable-mbstring \
    	--with-curl \
    	--with-gd \
    	--with-png-dir \
    	--with-jpeg-dir \
    	--with-freetype-dir \
    	--with-zlib-dir \
    	--enable-inline-optimization \
    	--without-sqlite3 \
    	--without-pdo-sqlite \
    	--with-gettext \
    	--enable-ftp \
    	--enable-zip \
    	--disable-cgi \
    	--with-openssl \
    	--with-pdo-mysql \
    	--enable-soap \
    	--with-bz2 \
    	--with-xsl \
    	--enable-bcmath \
    	--enable-intl \
    	--enable-exif \
    	--enable-sockets

RUN set -x && make -j "$(nproc)"
RUN set -x && make install
RUN set -x && make clean

WORKDIR /usr/local/src

RUN set -x && rm -Rf php-$PHP_VERSION

COPY index.php /home/web
COPY conf/* ${HTTPD_PREFIX}/conf/



#CMD ["httpd-foreground"]