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
    function __invoke($request,$response){
        $client = new Client([CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET]);
        
        $prams = array(
            'q' => 'keyword', // 検索したいキーワード
            'count' => '10', // 取得数
            'result_type' => 'recent' // 取得するツイートの種類
        );

        // Search tweets
        $statuses = $client->get('search/tweets', $prams)->statuses;

        foreach ($statuses as $status) {
            $text = htmlspecialchars($status->text, ENT_QUOTES, 'UTF-8');
            $userName = htmlspecialchars($status->user->name, ENT_QUOTES, 'UTF-8');
            $userIcon = htmlspecialchars($status->user->profile_image_url, ENT_QUOTES, 'UTF-8');
            echo '<img src="'.$userIcon.'"/><br>';
            echo $userName.'<br>';
            echo $text.'<br>';
        }
        return $this->container->view->render($response,'Top.twig',[]);
    }
}
