!/usr/bin/env bash

PASSWORD='vagrant'

echo -e "\n--- Aggiorna l'indice dei pacchetti ---\n"
sudo apt-get update

echo -e "\n--- Installa Apache ---\n"
sudo apt-get install -y apache2

echo -e "\n--- Installa PHP 7.1 ---\n"
sudo apt-get install -y software-properties-common
sudo apt-get install -y language-pack-en-base
sudo LC_ALL=en_US.UTF-8 add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt install -y php7.4 libapache2-mod-php7.4 php7.4-common php7.4-mbstring php7.4-xmlrpc php7.4-soap php7.4-gd php7.4-xml php7.4-intl php7.4-mysql php7.4-cli php7.4-mcrypt php7.4-zip php7.4-curl

echo -e "\n--- Installa MySQL ---\n"
sudo debconf-set-selections <<< "mysql-server mysql-server-server/root_password password vagrant"
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password vagrant"
sudo apt-get -y install mysql-server

echo -e "\n--- Installa phpMyAdmin ---\n"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/dbconfig-install boolean true"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/app-password-confirm password $PASSWORD"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/admin-pass password $PASSWORD"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/app-pass password $PASSWORD"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2"
sudo apt-get -y install phpmyadmin

echo -e "\n--- Crea Virtual Host ---\n"
VHOST=$(cat <<EOF
<VirtualHost *:80>
    ServerName local.dev
    ServerAlias www.local.dev
    DocumentRoot /var/www/html
    <Directory /var/www/html>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
EOF
)
echo "${VHOST}" > /etc/apache2/sites-available/000-default.conf

echo -e "\n--- Crea index.php ---\n"
sudo rm /var/www/html/index.html
sudo touch /var/www/html/index.php
echo "<?php phpinfo(); ?>" > /var/www/html/index.php

echo -e "\n--- Attiva mod_rewrite ---\n"
sudo a2enmod rewrite

echo -e "\n--- Restart Apache ---\n"
sudo service apache2 restart

echo -e "\n--- Ferma MySQL ---\n"
sudo /etc/init.d/mysql stop

echo -e "\n--- Installa GIT ---\n"
sudo apt-get -y install git

echo -e "\n--- Installa Composer ---\n"
curl -s https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
