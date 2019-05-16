FROM centos:6

MAINTAINER "KarimFadl" <kareemfadl10@gmail.com>
 
RUN yum -y update; yum clean all

RUN yum -y install httpd; yum clean all

RUN yum -y install php php-mbstring php-gd php-imap php-intl php-ldap php-mssql php-mysql php-odbc php-pdo php-pear php-xml php-xmlrpc; yum clean all

COPY v-host.conf /etc/httpd/conf.d/

COPY src/ /var/www/html/

EXPOSE 80

CMD exec /usr/sbin/apachectl -D FOREGROUND
