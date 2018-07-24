FROM alpine:3.6

# ensure www-data user exists
RUN set -x && addgroup -g 82 -S www-data
RUN set -x && adduser -u 82 -D -H -S -G www-data www-data

ENV HTTPD_PREFIX /opt/httpd
ENV PATH $HTTPD_PREFIX/bin:$PATH

RUN set -x && mkdir -p "$HTTPD_PREFIX"
RUN set -x && chown www-data:www-data "$HTTPD_PREFIX"

ENV HTTPD_VERSION 2.4.27
ENV HTTPD_BZ2_URL http://archive.apache.org/dist/httpd/httpd-"$HTTPD_VERSION".tar.bz2

RUN set -x && apk add --no-cache apr-dev
RUN set -x && apk add --no-cache apr-util-dev
RUN set -x && apk add --no-cache apr-util-ldap
RUN set -x && apk add --no-cache perl
RUN set -x && apk add --no-cache ca-certificates
RUN set -x && apk add --no-cache coreutils
RUN set -x && apk add --no-cache dpkg-dev
RUN set -x && apk add --no-cache dpkg
RUN set -x && apk add --no-cache gcc
RUN set -x && apk add --no-cache gnupg
RUN set -x && apk add --no-cache libc-dev
RUN set -x && apk add --no-cache libressl
RUN set -x && apk add --no-cache libressl-dev
RUN set -x && apk add --no-cache libxml2-dev
RUN set -x && apk add --no-cache lua-dev
RUN set -x && apk add --no-cache make
RUN set -x && apk add --no-cache nghttp2-dev
RUN set -x && apk add --no-cache pcre-dev
RUN set -x && apk add --no-cache tar
RUN set -x && apk add --no-cache zlib-dev

WORKDIR /usr/local/src

RUN set -x && wget -O httpd.tar.bz2 "$HTTPD_BZ2_URL"
RUN set -x && tar -xf httpd.tar.bz2
RUN set -x && rm httpd.tar.bz2
RUN set -x && cd httpd-$HTTPD_VERSION

WORKDIR /usr/local/src/httpd-$HTTPD_VERSION

RUN set -x && wget -O libressl.patch 'https://git.alpinelinux.org/cgit/aports/plain/main/apache2/libressl.patch?id=d7292029f25a131a0f15ebc3bc2300e75f4c131a'
RUN set -x && patch -p1 < libressl.patch
RUN set -x && rm libressl.patch

RUN set -x \
	&& gnuArch="$(dpkg-architecture --query DEB_BUILD_GNU_TYPE)" \
	&& ./configure \
		--build="$gnuArch" \
		--prefix="$HTTPD_PREFIX" \
		--enable-mods-shared=reallyall

RUN set -x && make -j "$(nproc)"
RUN set -x && make install

WORKDIR /usr/local/src

RUN set -x && rm -Rf httpd-$HTTPD_VERSION

#RUN set -x && apk del apr-util-dev
#RUN set -x && apk del postgresql-dev
#RUN set -x && apk del openldap-dev
#RUN set -x && apk del libressl-dev

#RUN set -x && apk del apr-util-dev \
#	postgresql-dev \
#	openldap-dev \
#	libressl-dev

#	&& apk del .build-deps

COPY httpd-foreground /usr/local/bin/
COPY conf/* ${HTTPD_PREFIX}/conf/
COPY virtualhost ${HTTPD_PREFIX}/conf/virtualhost
COPY error /opt/servidor/error

RUN set -x \
	&& mkdir /home/web \
	&& chown www-data:www-data "/home/web"

RUN set -x \
	&& chmod 755 /usr/local/bin/httpd-foreground

EXPOSE 80
CMD ["httpd-foreground"]