# базовый образ
FROM debian:latest

# монтирование томов для данных MySQL и логов
VOLUME /var/lib/mysql
VOLUME /var/log

# установка Apache, PHP, MariaDB и Supervisor
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql mariadb-server supervisor wget tar && \
    apt-get clean

# копирование и распаковка WordPress
RUN wget https://wordpress.org/latest.tar.gz -O /tmp/latest.tar.gz && \
    tar -xzf /tmp/latest.tar.gz -C /var/www/html/ && \
    rm /tmp/latest.tar.gz

# копирование конфигурационных файлов
COPY files/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY files/apache2/apache2.conf /etc/apache2/apache2.conf

COPY files/php/php.ini /etc/php/8.2/apache2/php.ini

COPY files/mariadb/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY files/supervisor/supervisord.conf /etc/supervisor/supervisord.conf

COPY files/wp-config.php /var/www/html/wordpress/wp-config.php

# создание папки для сокета MariaDB
RUN mkdir /var/run/mysqld && chown mysql:mysql /var/run/mysqld

# открытие порта Apache
EXPOSE 80

# запуск Supervisor
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/supervisord.conf"]