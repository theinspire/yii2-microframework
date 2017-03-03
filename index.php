<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

// you may put this into a separate file
$config = [
    'id' => 'yii2-microframework',
    'basePath' => __DIR__,
    'controllerNamespace' => 'app',
    'components' => [],
    'params' => [],
];

(new yii\web\Application($config))->run();