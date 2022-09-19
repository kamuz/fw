<?php

define('DEBUG', 1);
define('ROOT', dirname(__DIR__) );
define('PATH', "http://{$_SERVER['SERVER_NAME']}");
define('WWW', ROOT . '/public' );
define('APP', ROOT . '/app' );
define('CORE', ROOT . '/vendor/ishop/core' );
define('LIBS', ROOT . '/vendor/ishop/libs' );
define('CACHE', ROOT . '/tmp/cache' );
define('CONF', ROOT . '/config' );
define('ADMIN', PATH . '/admin');
define('LAYOUT', 'default' );

require_once ROOT . '/vendor/autoload.php';