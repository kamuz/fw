<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

$shop = new \ishop\App();
$shop::$app->setProperty('test', 'Test');
debug($shop::$app->getProperties());