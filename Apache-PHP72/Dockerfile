FROM centos:7

MAINTAINER "KarimFadl" <kareemfadl10@gmail.com>

RUN rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm \
 && rpm -Uvh https://rpms.remirepo.net/enterprise/remi-release-7.rpm

#Normal updates
RUN yum -y update

# tools
RUN yum -y install epel-release iproute at curl crontabs git vim net-tools mysql unzip sudo 

#Install Httpd
RUN yum -y install httpd mod_ssl

#Install PHP72
RUN yum --enablerepo=remi-php72 install -y php php-cli php-common php-gd php-json php-mbstring php-mysqlnd php-opcache php-pdo php-pear php-pecl-apcu php-pecl-igbinary php-pecl-mcrypt php-pecl-memcached php-pecl-msgpack php-pecl-mysql php-pecl-redis php-pecl-zip php-process php-snmp php-soap php-xml php-bcmath runtime

# we want some config changes
COPY v-host.conf /etc/httpd/conf.d/

COPY src/ /var/www/html/

EXPOSE 80

CMD ["/usr/sbin/httpd","-D","FOREGROUND"]
