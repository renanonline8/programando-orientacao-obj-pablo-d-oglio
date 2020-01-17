apt-get update -y
apt -y install software-properties-common
add-apt-repository ppa:ondrej/php
apt-get update -y
apt-get install -y  php7.4
apt-get install -y php7.4-{bcmath,bz2,intl,gd,mbstring,mysql,zip}