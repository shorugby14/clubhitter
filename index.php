<?php
require 'vendor/autoload.php';
$app = new \Slim\App();
$container = $app->getContainer();

//ルーティングの設定
$app->get('/',clubhitter\Controller\Top::class);
$app->get('/Top',clubhitter\Controller\Top::class);

$container['view'] = function($container){
    return new \Slim\Views\Twig(__DIR__.'/templates/');
};
$app->run();