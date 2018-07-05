FROM centos:centos6
RUN yum -y update
RUN yum -y install git \
    subversion \
    wget \
    php php-devel \
    php-mbstring \
    php-pdo \
    php-mysql \
    php-gd \
    php-xml \
    php-intl \
    php-xml \
    php-xmlrpc \
    php-soap \
    php-pecl-apc \
    php-odbc \
    php-pdo \
    php-pgsql

# Apache
RUN yum -y install httpd
#vim
RUN yum -y install vim

RUN service httpd start

WORKDIR /var/www/html
EXPOSE $PORT

CMD ["/usr/sbin/httpd","-DFOREGROUND"]
