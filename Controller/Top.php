<?php
namespace chubhitter;
use mpyw\Co\Co;
use mpyw\Co\CURLException;
use mpyw\Cowitter\Client;
use mpyw\Cowitter\HttpException;
define('CONSUMER_KEY', 'ClVDbqJLPqr2qaRdynfkDue58');
define('CONSUMER_SECRET', 'gaE0iXQgbvVBfsWisUlDnlRrvAmKZIjENcG2drFUB0DbmV2sjG');
define('ACCESS_TOKEN', '196082646-xLYZ0jvMuhhrCDk25ikwbswISaRlVwXsEATm2Aep');
define('ACCESS_TOKEN_SECRET', 'o149kgAulyc87qDCpQDgpgIT5LfOBhgFfOrfO6XrsmoU5');


class Top{
    protected $container;
    function __construct($container){
        $this->container = $container;
    }
    function __invoke($request,$responce){
    }
}
