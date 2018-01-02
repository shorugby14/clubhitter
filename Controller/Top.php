<?php
namespace clubhitter;

class Top{
    protected $container;
    function __construct($container){
        $this->container = $container;
    }
    function __invoke($request,$response){
        return $this->container->view->render($response,'Top.twig');
    }
}
