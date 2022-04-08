<?php


namespace App\Controllers;

class Controller 
{

    public $view ;
    private $container;

    public function __construct ()
    {
        $app = new \Slim\App();
        $this->container = $app->getContainer();

        $this->view = $this->twig();
    }

    public function twig()
    {
        
        $view = new \Slim\Views\Twig( __DIR__ . '/../view');
    
        // Instantiate and add Slim specific extension
        $router = $this->container->get('router');
        $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
        $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));
    
        return $view;
    }



}