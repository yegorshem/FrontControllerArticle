<?php

/**
 * User: Yegor Shemereko
 * Date: 11/30/2016
 * Time: 6:32 PM
 */
class HomeController
{
    private $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function viewHome()
    {
        $this->router->set('title', 'Front Controller Pattern');
        print(Template::instance()->render('views/home.php'));
    }

}