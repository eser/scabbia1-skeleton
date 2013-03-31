if [ -f vendor ]; then
    php composer.phar update
else
    curl -s http://getcomposer.org/installer | php
    php composer.phar install
fi
