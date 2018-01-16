FROM centos:7

RUN yum install -y \
    yum-utils \
    https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm \
    http://rpms.remirepo.net/enterprise/remi-release-7.rpm; \
    yum-config-manager --enable remi-php72;

# php-pear for color in composer...
RUN yum install -y \
      php-cli \
      php-pear \
      php-mbstring \
      php-zip \
      php-intl;

ENV COMPOSER_HOME /tmp
COPY --from=composer:1.5 /usr/bin/composer /usr/bin/composer

WORKDIR /app

